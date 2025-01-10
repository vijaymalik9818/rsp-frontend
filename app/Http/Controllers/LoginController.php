<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view(' auth.login');
    }

    public function register()
    {
        return view(' auth.register');
    }

    public function registerNow(Request $request)
    {
        $rules = [
            'name' => 'required',
            'phone' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required'
        ];
        $request->validate($rules);
        $user = new User;
        $user->fill($request->except('password'));
        $user->password = Hash::make($request->password);
        $user->save();
        $user->syncRoles(['Client']);
        return redirect()->route('login')->with('success', 'User registered successfully!');
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
            'login_type' => 'sign-up'
        ];
        $request->validate($rules);
        $user = User::where(['email' => $request->email])->first();
        if ($user == null) {
            return back()->withErrors(['email' => 'Unable to login with given details!']);
        }
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Unable to login with given details!']);
        }
        if (!$user->hasRole('Client')) {
            return back()->withErrors(['email' => 'Unable to login with given details!']);
        }
        Auth::guard('client')->loginUsingId($user->id);
        return redirect()->route('account');
    }

    public function logout()
    {
        Auth::guard('client')->logout();
        return redirect()->route('login');
    }

public function backtologin(){
    $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
    return Redirect::to($baseUrl);
}
public function userprofile(Request $request)
{
    $userId = session('user_id'); 
if($userId){
        $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
       
        $client = new Client();
        $response = $client->post($baseUrl . '/api/agents/leads-info', [
            'json' => [
                'user_id' => $userId
                ]
        ]);
        $data = json_decode($response->getBody(), true);

        return view(' auth.user-profile', ['userData' => $data['lead']]);
    }
    else{
        return view(' error');
    }
    }

    public function forgotpasswordview()
    {
        return view(' auth.forgotpassword');
    }

    public function leadsLogin(Request $request)
    {
        $baseUrl = env('BACKEND_URL', 'http://myproagents.com');

        $client = new Client();

        try {
            $response = $client->post($baseUrl . '/api/lead/login', [
                'json' => [
                    'email' => $request->email,
                    'password' => $request->password,
                    'login_type' => 'signup'
                ]
            ]);

            $responseData = json_decode($response->getBody(), true);

            session(['username' => $responseData['name']]);
            session(['user_id' => $responseData['id']]);
            session(['user_image' => $responseData['profile_picture']]);
            session(['token' => $responseData['token']]);

            return response()->json($responseData, 200);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $errorMessage = $e->getResponse()->getBody()->getContents();
            } else {
                $errorMessage = 'Error communicating with backend.';
            }
            return response()->json(['error' => $errorMessage], 500);
        }
    }



   
    public function leadssignup(Request $request)
    {
        $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
        $client = new Client();
    
        try {
            $response = $client->post($baseUrl . '/api/lead/sign-up', [
                'json' => [
                    'fullname' => $request->input('fullname'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'password' => $request->input('password'),
                    'role' => $request->input('role'), 
                    'picture' => '',
                    'login_type' => 'signup'
                ]
            ]);
            $responseBody = $response->getBody()->getContents();
            return response()->json($responseBody);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    

    public function leadslogout(Request $request)
    {
        Auth::logout();
        session()->flush();

        return redirect('/');
    }

    public function addToFavorites(Request $request)
    {
        $baseUrl = env('BACKEND_URL', 'http://myproagents.com');

        $userId = $request->user_id;
        $favorite = $request->favorite;
        $propertyId =  $request->property_id;

        $client = new Client();
        $response = $client->post($baseUrl . '/api/agents/add-to-fav', [
            'json' => [
                'user_id' => $userId,
                'property_id' => (string)$propertyId,
                'favorite'  => $favorite
                ]
        ]);

        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        if ($statusCode == 200) {
            return response()->json(['message' => 'Property added to favorites']);
        } else {
            return response()->json(['error' => 'Failed to add property to favorites'], $statusCode);
        }
    }
    public function getfavproperty(Request $request)
    {
        $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
    
        $userId = $request->user_id;
    
        $client = new Client();
        $response = $client->get($baseUrl . '/api/agents/get-fav', [
            'json' => [
                'user_id' => $userId
            ]
        ]);
    
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
    
        if ($statusCode == 200) {
           
            return response()->json(json_decode($body, true));
        } else {
            
            return response()->json(['error' => 'no properties are added to favorites'], $statusCode);
        }
    }


   
    public function callgoogleAPI()
    {

       return Socialite::driver('google')->stateless()->redirect();
        
        }
    
public function handlegoogleCallback(Request $request)
{
    $googleUser = Socialite::driver('google')->stateless()->user();

    $fullname = $googleUser->name;
    $email = $googleUser->email;
    $picture = $googleUser->picture;
    $password = '123432767'; 
    $phone = '12345';
    $type = 'google';

    return $this->leadsgooglesignup($fullname, $email,$password,$type,$picture,$phone);
}

public function leadsgooglesignup($fullname, $email,$password,$type,$picture,$phone)
{
    $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
    $client = new Client();

    try {
        $response = $client->post($baseUrl . '/api/lead/socialsign-up', [
            'json' => [
                'fullname' => $fullname,
                'email' => $email,
                'login_type' => $type,
                'password' => $password,
                'phone' => $phone,
                'picture'=> $picture
            ]
        ]);
        $responseData = json_decode($response->getBody(), true);

        session(['username' => $responseData['name']]);
        session(['user_id' => $responseData['id']]);
        session(['user_image' => $responseData['profile_picture']]);
        
        //echo '<script>window.opener.location.href = "/"; window.close();</script>';
        echo '<script>window.close();window.opener.location.reload();</script>';
        
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function callfacebookAPI()
{

   return Socialite::driver('facebook')->stateless()->redirect();
    
    }

    public function handlefacebookCallback(Request $request)
    {
        try {
            $facebookUser = Socialite::driver('facebook')->stateless()->user();
    
            $fullname = $facebookUser->name;
            $email = $facebookUser->email;
            $picture = $facebookUser->avatar;
            $password = '123432767'; 
            $phone = '12345';
            $type = 'facebook';
    
            return $this->leadsgooglesignup($fullname, $email, $password, $type, $picture, $phone);
        } catch (\Exception $e) {
            return redirect()->route('callfacebookAPI');
            //return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }
    

public function deleteSearch($id)
    {
       
        $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
        $client = new Client();
        
        try {
            $response = $client->post($baseUrl . '/api/agents/searchdelete', [
                'json' => [
                   'search_id'=> $id
                ]
            ]);
            $statusCode = $response->getStatusCode();

            if ($statusCode == 200) {

                return response()->json(['message' => 'Search deleted successfully'], 200);
            } else {

                return response()->json(['error' => 'Failed to delete search'], $statusCode);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete search: ' . $e->getMessage()], 500);
        }
    }
public function getpropertylistings(Request $request){
    $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
    
    $userId = $request->user_id;

    $client = new Client();
    $response = $client->get($baseUrl . '/api/agents/getlistings', [
        'json' => [
            'user_id' => $userId
        ]
    ]);

    $statusCode = $response->getStatusCode();
    $body = $response->getBody()->getContents();

    if ($statusCode == 200) {
       
        return response()->json(json_decode($body, true));
    } else {
        
        return response()->json(['error' => 'no properties are added to favorites'], $statusCode);
    }
}

}

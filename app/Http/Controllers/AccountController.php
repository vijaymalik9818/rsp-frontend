<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\FavouriteProperty;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view(' account.dashboard');
    }

    public function profile(){
        $user = Auth::guard('client')->user();
        $userProfile = $user->profile;
        return view(' account.profile',compact('userProfile','user'));
    }

    public function saveProfile(Request $request){
        $userDetails = [];
        $userDetails['name'] = $request->first_name . ' ' .$request->last_name;
        $userDetails['email'] = $request->email;
        $userDetails['phone'] = $request->phone;
        $user = Auth::user();
        $user->update($userDetails);
        $userProfile = UserProfile::firstOrNew(['user_id'=>$user->id]);
        $userProfile->user_id = $user->id;
        $userProfile->fill($request->all());
        $userProfile->save();
        Session::flash('success','Success|Profile updated successfully');
        return back();
    }

    public function favorite(){
        $user = Auth::guard('client')->user();;
        $favorites = FavouriteProperty::where('user_id',$user->id)->paginate(8);
        return view(' account.favorites',compact('favorites'));
    }

    public function deleteFavorite($id){
        $authId = auth()->guard('client')->user()->id;
        $favouriteModel = FavouriteProperty::where(['user_id'=>$authId,'id'=>$id])->first();
        $favouriteModel->delete();
        return redirect()->back();
    }

}

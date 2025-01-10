<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Config;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\AdministrativeTeam;
use App\Models\DiamondProperty;
use App\Models\FeaturedProperty;
use App\Models\OurProfessional;
use App\Models\PageContent;
use App\Models\Property;
use App\Models\PropertyRoomDetail;
use App\Models\RealtorPropertyMapping;
use App\Models\FavouriteProperty;
use App\Models\RealtorPropertyRequest;
use App\Models\SellSubscriber;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
    // Cache keys
    $listingsCacheKey = 'listings';
    $featuredListingsCacheKey = 'featuredListings';
    $cacheDuration = 60; // Cache duration in minutes

    // Fetch listings from cache or database
    $listings = Cache::remember($listingsCacheKey, $cacheDuration, function () {
        $randomIds = Property::where('list_price', '>', 1000000)
            ->inRandomOrder()
            ->limit(12)
            ->pluck('id');

        return Property::whereIn('id', $randomIds)->get();
    });

    // Fetch featured listings from cache or database
    $featuredListings = Cache::remember($featuredListingsCacheKey, $cacheDuration, function () {
        $randomIds = FeaturedProperty::whereHas('property', function ($query) {
                $query->where('image_status', 1);
            })
            ->inRandomOrder()
            ->limit(8)
            ->pluck('id');

        return FeaturedProperty::with(['property' => function ($query) {
            $query->where('image_status', 1);
        }])->whereIn('id', $randomIds)->get();
    });

    // Fetch featured property data
    $featuredPropertyData = $this->getFeaturedPropertyData();

    return view('index', compact('listings', 'featuredListings', 'featuredPropertyData'));
}

    public function listings()
    {
        $listings = Property::where('list_price', '>', 100)->paginate(10);
        return view(' listings.index', compact('listings'));
    }

    public function listingView($id)
    {
        $listing = Property::with(['assigned_property.user'])->find($id);
        $roomDetails = PropertyRoomDetail::where('property_numeric_key', $listing->listing_numeric_key)->first();
        return view(' listings.view', compact('listing', 'roomDetails'));
    }

    public function about_b(){
        $pageContent = PageContent::where('page_name','about_us')->get();
        $administrativeTeams = AdministrativeTeam::get();
        return view(' about',compact('pageContent','administrativeTeams'));
    }
    
    public function allviews(){
        // dd('here');
        $client = new Client();
        $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
        $apiEndpoint = $baseUrl . '/api/agents/get-top-count';
        $response = $client->request('GET', $apiEndpoint);
        if ($response) {
        $topProperties = json_decode($response->getBody(), true);
        } else {
    
            $topProperties = [];
        }
        return response()->json($topProperties);
    }

    public function about()
{
    try {
        $client = new Client();
        $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
        $apiEndpoint = $baseUrl . '/api/agents/get-staff';
        $response = $client->request('GET', $apiEndpoint);
        $staffData = json_decode($response->getBody(), true);
        $administrativeTeams = $staffData['data'] ?? [];
        $pageContent = PageContent::where('page_name', 'about_us')->get();
        // dd($administrativeTeams);
        return view(' about', compact('pageContent', 'administrativeTeams'));

    } catch (\Exception $e) {
        // Handle the exception gracefully, for example, by logging the error
        \Log::error('Failed to retrieve staff data: ' . $e->getMessage());
        
        // Still return the view even if an error occurred, passing an empty array for staff data
        $pageContent = PageContent::where('page_name', 'about_us')->get();
        dd($pageContent);

        $administrativeTeams = [];
        return view(' about', compact('pageContent', 'administrativeTeams'));
    }
}

public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    $client = new Client();
    $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
    $apiEndpoint = $baseUrl . '/api/lead/login';

    try {
        $response = $client->post($apiEndpoint, [
            'form_params' => [
                'email' => $email,
                'password' => $password
            ]
        ]);

        $responseData = $response->getBody()->getContents();

        return response()->json($responseData);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function register(Request $request)
{
    $client = new Client();
    $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
    $apiEndpoint = $baseUrl . '/api/lead/register';

    try {
        $response = $client->post($apiEndpoint, [
            'form_params' => $request->all()
        ]);

        $responseData = $response->getBody()->getContents();

        return response()->json($responseData, $response->getStatusCode());
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}




    public function saveFavorite(Request $request)
    {
        $authId = auth()->guard('client')->user()->id;
        $favouriteModel = FavouriteProperty::firstOrNew(['user_id' => $authId, 'property_id' => $request->property_id]);
        $favouriteModel->save();
        return redirect()->back();
    }

    public function ourProfessional(Request $request)
    {
        if ($request->has('agent_name')) {
            $professionals = OurProfessional::where('name', 'like', '%' . $request->agent_name . '%')->orWhere('license', $request->license);
            if ($request->has('language')) {
                $professionals->whereIn('language', $request->language);
            }
            $professionals = $professionals->paginate(48);
        } else {
            $professionals = OurProfessional::paginate(48);
        }
        return view(' our-professionals', compact('professionals'));
    }

     public function contact()
    {
        $recaptchaSiteKey = env('RECAPTCHA_SITE_KEY');
        return view('contact', compact('recaptchaSiteKey'));
        // return view(' contact');
    }

    public function homeEvaluation()
    {
        $client = new Client();
        $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
        $apiEndpoint = $baseUrl . '/api/agents/get-properties-index';
        $response = $client->request('GET', $apiEndpoint);
        $staffData = json_decode($response->getBody(), true);
        $featuredListings = $staffData['featured_properties'] ?? [];
        // dd($featuredListings);

             
        return view(' home-evaluation', compact('featuredListings'));
    }

    public function whyRep()
    {
        return view(' why-rep');
    }

    public function joinRep()
    {
        return view(' join-rep');
    }

    public function listingResults(Request $request)
    {
        $properties = Property::query();
        if ($request->has('zone')) {
            $properties->where('district', $request->zone);
        }
        if ($request->has('query')) {
            $searchParams = explode('-', $request->get('query'));
            if (count($searchParams) < 4) {
                $properties->where('unparsed_address', 'like', '%' . trim($searchParams[0]) . '%')
                    ->orWhere('city', 'like', '%' . trim($searchParams[0]) . '%')
                    ->orWhere('listing_id', 'like', '%' . trim($searchParams[0]) . '%')
                    ->orWhere('postal_code', 'like', '%' . trim($searchParams[0]) . '%');
            } else {
                $properties->where('unparsed_address', 'like', '%' . trim($searchParams[0]) . '%')
                    ->where('city', 'like', '%' . trim($searchParams[2]) . '%')
                    ->where('postal_code', 'like', '%' . trim($searchParams[1]) . '%');
            }
        }
        $properties = $properties->paginate(12);
        return view(' listings.results', compact('properties'));
    }

    public function saveSellSubscriber(Request $request)
    {
        $sellSubscriber = SellSubscriber::firstOrNew(['email' => $request->email]);
        $sellSubscriber->email = $request->email;
        $sellSubscriber->address = $request->address;
        $sellSubscriber->save();
        session()->flash('flash', 'Success|Your request has been saved successfully.');
        return back();
    }

    public function saveRequest(Request $request)
    {
        $rules = [
            'datetime' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ];
     //   dd($request);
        $request->validate($rules);
        $model = new RealtorPropertyRequest;
        $propertyMapping = RealtorPropertyMapping::where('property_id', $request->property_id)->first();
        if ($propertyMapping != null) {
            $model->realtor_id =  $propertyMapping->realtor_id;
        }

        $model->property_id = $request->property_id;
        $model->request_datetime = $request->datetime;
        $model->name = $request->name;
        $model->phone = $request->phone;
        $model->email = $request->email;
        $model->message = $request->message;
        $model->save();
        session()->flash('flash', 'Success|Your request has been saved successfully.');
        return back();
    }

    public function searchResults(Request $request)
    {
        $properties = Property::select(['listing_id', 'unparsed_address', 'city', 'postal_code', 'district', 'list_price']);
        if ($request->has('query')) {
            $properties->where('unparsed_address', 'like', '%' . $request->get('query') . '%')
                ->orWhere('city', 'like', '%' . $request->get('query') . '%')
                ->orWhere('listing_id', 'like', '%' . $request->get('query') . '%')
                ->orWhere(DB::raw('REPLACE(postal_code, " ", "")'), 'like', '%' . $request->get('query') . '%');
        }
        $results = $properties->take(10)->get();
        return response()->json($results);
    }

    public function typeProperties($type)
    {
        if ($type == 'featured') {
            $properties = FeaturedProperty::with(['property'])->paginate(12);
        } else {
            $diamondProperties = DiamondProperty::pluck('property_id');
            $properties = Property::where('list_price', '>', 1000000)->orWhereIn('id', $diamondProperties)
                ->orderBy(DB::raw('RAND()'))
                ->paginate(12);
        }
        return view(' listings.types', compact('type', 'properties'));
    }



    public function advanceFilters(Request $request, $cityName = null)
{
    $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
    $apiEndpoint = $baseUrl . '/api/agents/get-advance-data';

    // If cityName is provided, add it to the query parameters
    if ($cityName !== null) {
        $apiEndpoint .= '?search=' . urlencode($cityName);
    }

        $client = new Client();

        try {
            $response = $client->get($apiEndpoint);
            $data = json_decode($response->getBody(), true);
            return $data;
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to fetch advance data from the API: ' . $e->getMessage()], 500);
        }
    }



    public function advanceFilter(Request $request)
{
        $baseUrl = env('BACKEND_URL', 'http://myproagents.com');
        $apiEndpoint = $baseUrl . '/api/agents/get-cities-subdivision';
        $client = new Client();
    
        $url = $request->url();
        $urlParts = explode('/search/', $url);
        $city = '';
        $selectedOption = '';
    
        if (count($urlParts) > 1) {
            $citySegment = $urlParts[1];
            $segments = explode('/', $citySegment);
    
            if (count($segments) > 1) {
                $selectedOption = ucwords(str_replace('-', ' ', $segments[1]));
            }
    
            $city = $segments[0];
            $city = ucwords(str_replace('-', ' ', $city));
        }
    
        try {
            $cacheKey = 'api_response_' . $city;
            if (Cache::has($cacheKey)) {
                $data = Cache::get($cacheKey);
            } else {
                if (!empty($city)) {
                    $apiEndpoint .= '?city=' . urlencode($city);
                }
    
                $startTime = microtime(true);
                $response = $client->get($apiEndpoint);
                $apiTime = microtime(true) - $startTime;
    
                $data = json_decode($response->getBody(), true);
                Cache::put($cacheKey, $data, 3600); // Cache for 1 hour
    
                // Log the API response time for debugging
                \Log::info('API response time: ' . $apiTime . ' seconds');
            }
    
            return view('advance-filter', ['data' => $data, 'selectedOption' => $selectedOption]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to fetch advance data from the API: ' . $e->getMessage()], 500);
        }
    }

    

    public function privacy()
    {
        return view(' privacy');
    }

    public function terms()
    {
        return view(' terms');
    }

    public function professionalDetails($id)
    {
        // $professional = OurProfessional::with(['properties'])->find($id);
        return view(' our-professionals-details');
    }

    public function saveHomeEvalutaion(Request $request)
    {
        $featuredListings = FeaturedProperty::with(['property' => function ($query) {
            $query->where('image_status', 1);
        }])->orderBy(DB::raw('RAND()'))->whereHas('property')->take(8)->get();

        $address = $request->input('address');
        $email = $request->input('email');

        return view(' home-evaluation', compact('address', 'email', 'featuredListings'));
    }

     public function propetyDetails($slugurl)
    {
        //property controller
        $baseUrl = env('BACKEND_URL');
        $propertyDetailsUrl = $baseUrl . '/api/get-property-details/' . $slugurl;
        $propertyDetailUrl = $baseUrl . '/api/agents/property-details/' . $slugurl;
        $token = session('token');
      
        $client = new Client();
       
        try {
        if($token){
            $headers = ['Authorization' => 'Bearer ' . $token];

                $response = $client->request('GET', $propertyDetailsUrl, [
                    'headers' => $headers,
                ]);
        }
        else{
            $response = $client->request('GET', $propertyDetailUrl);
        }
                
        
            $body = $response->getBody();
            $data = json_decode($body, true);
       
            $propertyDetails = $data['data'];
            // dd($propertyDetails);
            // dd($propertyDetails['property_rooms']);
            $listingType = '';
            if ($propertyDetails['diamond'] == 1) {
                $listingType = 'diamond';
            } elseif ($propertyDetails['featured'] == 1) {
                $listingType = 'featured';
            }
                $businesses = [];
                $total = 0; 
   
            $agentslug = $data['agent_slug'] ?? '';

          
        $similarListingsData = $data['similarListings'] ?? '';
	    $otherColumnsData = json_decode($propertyDetails['OtherColumns'], true);
	    if($otherColumnsData == ''){
	    //$otherColumnsData = new \stdClass();
		$otherColumnsData['PostalCode']='';	
        $otherColumnsData['Fencing']='';
		$otherColumnsData['FrontageLength']='';    
		$otherColumnsData['Flooring']='';
		$otherColumnsData['AccesstoProperty']='';
		$otherColumnsData['ParkingCommonSpaces']='';
		$otherColumnsData['BathroomsTotalInteger']='';
		$otherColumnsData['GarageYN']='';
		$otherColumnsData['VirtualTourURLBranded']='';
		$otherColumnsData['VirtualTourURLUnbranded']='';
		$otherColumnsData['StoriesTotal']='';
	    }
            return view(' property-details', [
                'propertyDetails' => $propertyDetails,
                'similarListings' => $similarListingsData,
                'otherColumnsData' => $otherColumnsData,
                'agent_slug' => $agentslug,
                'propertyRooms' => $propertyDetails['property_rooms'],
                'business'=> $businesses,
                'total' => $total
            ]);
        } catch (\Exception $e) {
            return view('404');
            // return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function getlocation(Request $request){
        $client = new Client();
        $baseUrl = env('BACKEND_URL');
        $apiEndpoint =  $baseUrl .'/api/agents/get-locations';
          
        $datas = [
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ];

        try {
          
            $response = $client->get($apiEndpoint, [
                'json' => $datas,
           
            ]);

   
            $responseData = json_decode($response->getBody(), true);
            // dd($responseData);
            return response()->json($responseData);

        } catch (\Exception $e) {
           
            return $e->getMessage();
        }

    }



      public function submitForm(Request $request)
{
    $baseUrl = env('BACKEND_URL');
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'time' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'message' => 'nullable|string',
        'selectedDate' => 'required|string',
        'agent_name' => 'required|string',
        'agent_email' => 'required|string',
        'property_address' => 'required|string',
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'role' => 'required|string',
    ]);
    try {
        $dataToSend = [
            'agent_email' => $validatedData['agent_email'],
            'agent_name' => $validatedData['agent_name'],
            'property_address' => $validatedData['property_address'],
            'time' => $validatedData['time'],
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'role' => $validatedData['role'],
            'message' => $validatedData['message'],
            'selectedDate' => $validatedData['selectedDate'],
            ];
        // dd($dataToSend);

        $client = new Client();

        $response = $client->post($baseUrl . '/api/agents/save-data', [
            'json' => $dataToSend,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
// dd($response);
        return response()->json(['message' => 'Form submitted successfully'], 200);
    } catch (RequestException $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}
    public function contactForm(Request $request)
     {
        $baseUrl = env('BACKEND_URL');
        $validatedData = $request->validate([
            'first_names' => 'required|string|max:255',
            'last_names'  => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'role' => 'required|string',
            'message' => 'required|string|max:200',
        ]);

        try {
            $dataToSend = [
                'first_name' => $validatedData['first_names'],
                'last_name' => $validatedData['last_names'],
                'phone' => $validatedData['phone'],
                'email' => $validatedData['email'],
                'role' => $validatedData['role'],
                'comment' => $validatedData['message'],
                'prorealtoremail'=> $request->input('prorealtoremail'),
                'prorealtorname'=> $request->input('prorealtorname'),
                'property_type'=> $request->input('property_type'),
            ];
            $client = new Client();

            $response = $client->post($baseUrl . '/api/agents/contact-us-form', [
                'form_params' => $dataToSend,
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
            ]);

            return response()->json(['message' => 'Form submitted successfully'], 200);
        } catch (RequestException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function reviewForm(Request $request)
    {
        $baseUrl = env('BACKEND_URL');
        $listingid = $request->input('listing_id');

        $validatedData = $request->validate([
            'review_from' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
            'review' => 'required|string|max:200',
        ]);

        try {
            $dataToSend = [
                'name' => $validatedData['title'],
                'email' => $validatedData['review_from'],
                'message' => $validatedData['review'],
                'rating' => $validatedData['rating'],
                'listing_id' => $listingid,
            ];

            $client = new Client();

            $response = $client->post($baseUrl . '/api/agents/property-review', [
                'form_params' => $dataToSend,
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
            ]);

            return response()->json(['message' => 'Form submitted successfully'], 200);
        } catch (RequestException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

   

    private function getFeaturedPropertyData()
    {
        try {
            $client = new Client();
         
          $baseUrl = 'https://admin.repinc.ca/';
            $apiEndpoint = $baseUrl . 'getfeaturedproperty';            
            $response = $client->request('GET', $apiEndpoint);
            // dd($response);
            if ($response->getStatusCode() === 200) {
                $featuredPropertyData = json_decode($response->getBody(), true);
                // dd($featuredPropertyData);
             if (isset($featuredPropertyData['properties']) && !empty($featuredPropertyData['properties'])) {
                    $propertyData = $featuredPropertyData['properties'];
                    usort($propertyData, function ($a, $b) {
                        return $b['propertycount'] - $a['propertycount'];
                    });
    
                    return $propertyData;
                } else {
                    \Log::error('Featured property data is empty or missing in the API response.');
                }
            } else {
                \Log::error('Failed to get featured property data: HTTP status code ' . $response->getStatusCode());
            }
        } catch (\Exception $e) {
            \Log::error('Failed to get featured property data: ' . $e->getMessage());
        }
        
        return [];
    }

}
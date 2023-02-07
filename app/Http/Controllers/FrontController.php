<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SubCategory;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use GuzzleHttp\Client;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function service($slug)
    {
        $services = Service::with('categories.subcategories')->where('status', 1)->get();
        $service = Service::where('slug',$slug)->first();
        $categories = $service->categories;
        $packages1 = $categories->flatMap->packages->where('type_id',0)->flatten();
        $packages2 = $categories->flatMap->packages->where('type_id',1)->flatten();
        $packages3 = $categories->flatMap->packages->where('type_id',2)->flatten();
        return view('front.service',compact('services','packages1','packages2','packages3'));
    }
    public function subcategory_packages($subcategoryslug){
        $services = Service::with('categories.subcategories')->where('status', 1)->get();
        $subcategory = SubCategory::where('slug' , $subcategoryslug)->first();
        $packages1 = Package::where('sub_category_id' , $subcategory->id)->where('type_id',0)->get();
        $packages2 = Package::where('sub_category_id' , $subcategory->id)->where('type_id',1)->get();
        $packages3 = Package::where('sub_category_id' , $subcategory->id)->where('type_id',2)->get();
        return view('front.service',compact('services','packages1','packages2','packages3'));
    }

    public function reviews()
    {
        return view('front.reviews');
    }
    public function cmd($cmd){
        Artisan::call("$cmd");
        echo "<pre>";
        return Artisan::output();
    }

    public function login(){
        return view('front.login');
    }
    public function signup(){
        return view('front.signup');
    }
    
    public function faq(){
        return view('front.faq');
    }
    public function order(){
        return view('front.order');
    }
    public function membership(){
        return view('front.membership');
    }
    public function pay(){
        return view('front.pay');
    }
    public function payment(){
        return view('front.payment');
    }
    public function post(){
        $access_token = '3ce954dea42e5463561fb436b924333b';
        $instagram_user_id = 'directory';
        
        // Create a Guzzle HTTP client
        $client = new Client();
        
        // Make a GET request to the Instagram Basic Display API endpoint
        $response = $client->get('https://graph.instagram.com/' . $instagram_user_id . '/media', [
            'query' => [
                'fields' => 'id,caption,media_type,media_url,thumbnail_url,permalink,timestamp',
                'access_token' => $access_token
            ]
        ]);
        
        // Decode the JSON response into an associative array
        $posts = json_decode($response->getBody(), true);
        return view('front.post');
    }
}

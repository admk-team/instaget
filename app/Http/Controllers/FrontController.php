<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SubCategory;
use App\Models\Package;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

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
        return view('front.post');
    }
    public function instagram(){
        $accessToken = 'IGQVJXT3l3cU1uQ053WHZAveGtWN0pZAU3VGQ0piOC1fUHA4RlBsRGRWTENIZAnpQdVhlMnJ1bTY2YXZAqejJqQmlDV3g2T2ExRUVDWVNya25KYzN4LTV3UnRPY0c0NUQ2aVpwTVVEUmZArNEZAyNThXbENIOAZDZD';
        $url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=$accessToken";

        // Send the request to the Instagram API
        $client = new Client();
        $response = $client->get($url);
        $responseJson = json_decode($response->getBody()->getContents());
    }
    public function callback(Request $request){
        return $request;
        return "callback";
    }
}

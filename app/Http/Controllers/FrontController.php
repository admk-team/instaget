<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SubCategory;
use App\Models\Package;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function service($slug)
    {
        $services = Service::with('categories.subcategories')->where('status', 1)->get();
        $buttonpackage = Service::with('categories.subcategories')->where('status', 1)->where('slug' , $slug)->first();
        $service = Service::where('slug',$slug)->first();
        $categories = $service->categories;

        return view('front.service',compact('services', 'buttonpackage' , 'service' , 'categories'));
    }
           

    public function subcategory_packages($subcategoryslug){
        
        $services = Service::with('categories.subcategories')->where('status', 1)->get();
        $buttonpackage = SubCategory::with('packages')->where('status', 1)->where('slug' , $subcategoryslug)->first();
        $subcategories = SubCategory::where('category_id' , $buttonpackage->category_id)->get();
        return view('front.subcategory_packages',compact('services' , 'subcategoryslug','subcategories'));

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
    public function instagram(Request $request){
        $package = Package::find($request->pakage_id);
        return view('front.instagram-form',compact('package'));
    }
    public function fetch_post(Request $request){
        $client = new Client();

        $response = $client->request('GET', 'https://api.instagram.com/oauth/authorize', [
            'query' => [
                'client_id' => '711758627169981',
                'redirect_uri' => 'https://instaget.askfullstack.com/instagram/callback',
                'scope' => 'user_profile,user_media',
                'response_type' => 'code',
            ]
        ]);

        return $response->getBody()->getContents();
    }
    public function callback(Request $request){
        return $request;
    }
    public function test_insta($test_insta){
        $instagram = new \InstagramScraper\Instagram(new \GuzzleHttp\Client());
        $nonPrivateAccountMedias = $instagram->getMedias($test_insta);
        dump($nonPrivateAccountMedias[0]->getSquareImages());
        exit;
        $variables = json_encode([
            'id' => (string)$test_insta
        ]);
        return "https://www.instagram.com/graphql/query/?query_hash=e769aa130647d2354c40ea6a439bfc08&variables=" . urlencode($variables);
        return $url = 'https://www.instagram.com/' . $test_insta . '/?__a=1&__d=dis';
        // dump($nonPrivateAccountMedias);
        exit;
    }
}

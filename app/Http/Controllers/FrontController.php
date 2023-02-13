<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SubCategory;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Instagram\User\BusinessDiscovery;

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
        session()->put('PACKAGE_ID',$request->pakage_id);
        return view('front.instagram-form',compact('package'));
    }
    public function fetch_post(Request $request){
        return  Redirect::to('https://api.instagram.com/oauth/authorize?client_id=711758627169981&redirect_uri=https://instaget.askfullstack.com/instagram/callback&scope=user_profile,user_media&response_type=code');
    }
    public function callback(Request $request){
        $url = 'https://api.instagram.com/oauth/access_token/';
        $response = Http::asForm()->post($url, [
                'client_id' => '711758627169981',
                'client_secret'=>'e710a48b2e1f652be7355188bf4676e9',
                'grant_type'=> 'authorization_code',
                'redirect_uri' => 'https://instaget.askfullstack.com/instagram/callback',
                'code' => $request->code,
        ]);
        $res=$response->json();
        // $media=Redirect::to('https://graph.instagram.com/me/media?fields=id,media_type,media_url,username&access_token='.$res['access_token']);
        $insta=Http::get('https://graph.instagram.com/me/media?fields=id,media_type,media_url,username&access_token='.$res['access_token']);
        $media=$insta->json();
        return view('front.post',compact('media'));
    }
    public function place_order(Request $request){
        $package_id=session()->get('PACKAGE_ID');
        $package = Package::with('sub_category.category.service')->where('id',$package_id)->first();
        return view('front.payment',compact('package'));
    }
}

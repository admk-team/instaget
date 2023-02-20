<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SubCategory;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Instagram\User\BusinessDiscovery;
use Phpfastcache\Helper\Psr16Adapter;



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

    public function getstarted(){
        return view('front.getstarted');
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
        session()->put('INSTAGRAM_USERNAME',$request->instagram_username);
        $user=User::where('email',$request->email)->first();
        if($user){
            if(auth()->user()){
                try {
                    $username = $request->instagram_username;
                    $old_data=session()->get($username);
                    if (!$old_data) {
                        $instagram = new \InstagramScraper\Instagram(new \GuzzleHttp\Client());
                        $username1 = $request->username ?? 'instaget2gust';
                        $password1 = $request->password ?? 'instaget2@gustr.coM';
                        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), $username1, $password1, new Psr16Adapter('Files'));
                        $instagram->login(); // will use cached session if you want to force login $instagram->login(true)
                        $instagram->saveSession();  //DO NOT forget this in order to save the session, otherwise have no sense
        
                        $medias = $instagram->getMedias($username);
                        session()->put($username, $medias);
                    }else{
                        $medias=$old_data;
                    }
                    return view('front.post',compact('medias'));
                } catch (\Exception $th) {
                    return redirect()->back();
                }
            }
            return view('front.login-form',compact('request'));
        }else{
            return view('front.signup',compact('request'));
        }
    }
    public function guest_post(){
        try {
            $username = session()->get('INSTAGRAM_USERNAME');
            $instagram = new \InstagramScraper\Instagram(new \GuzzleHttp\Client());
            $username1 = 'instaget2gust';
            $password1 = 'instaget2@gustr.coM';
            $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), $username1, $password1, new Psr16Adapter('Files'));
            $instagram->login(); // will use cached session if you want to force login $instagram->login(true)
            $instagram->saveSession();  //DO NOT forget this in order to save the session, otherwise have no sense
            $medias = $instagram->getMedias($username);
            return view('front.post',compact('medias'));
        } catch (\Exception $th) {
            dd($th);
            return redirect()->back()->with('error','Failed');
        }
    }
    public function callback(Request $request){
        $url = 'https://api.instagram.com/oauth/access_token/';
        $response = Http::asForm()->post($url, [
                'client_id' => '711758627169981',
                'client_secret'=>'e710a48b2e1f652be7355188bf4676e9',
                'grant_type'=> 'authorization_code',
                'redirect_uri' => 'https://instamong.com/instagram/callback',
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

    public function test_insta(Request $request){
         $username = $request->u;

        $instagram = new \InstagramScraper\Instagram(new \GuzzleHttp\Client());
                
        // // new flow
        // // $newCookie = [
        // //     "ig_did"        =>	"20036E06-E22D-4E33-9E6C-A59BC4570FA8",
        // //     "mid"           =>	"Y-zA0QALAAEuoZFMwSGKnwS6Grwx",
        // //     "shbid"         =>	"6262",
        // //     "shbts"         =>	"1594047690jkhbuyh7h78683",
        // //     "sessionid"     =>	"3640101987hugyg6gu3A25",
        // //     "csrftoken"     =>	"VeI80ihguygy7g670l6ggxd",
        // //     "ds_user_id"    =>	"3687877872",
        // // ];
        // $instagram->setUserAgent('User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0');
        // $instagram->setCustomCookies($newCookie);
        
        //return $medias = $instagram->getAccountInfo($username);
        $username = $request->username ?? 'instaget2gust';
        $password = $request->password ?? 'instaget2@gustr.coM';
        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), $username, $password, new Psr16Adapter('Files'));
        $instagram->login(true); // will use cached session if you want to force login $instagram->login(true)
        $instagram->saveSession();  //DO NOT forget this in order to save the session, otherwise have no sense
        $medias = $instagram->getMedias($username);
        return view('front.post',compact('medias'));

    }
    public function termsOfService(){
        return view('front.term-of-services');
    }
    public function privacyStatement(){
        return view('front.privacy-statement');
    }
    public function user_signup(){
        return view('front.signup');
    }
    public function user_login(){
        return view('front.login-form');
    }
    public function usersignup(){
        return view('front.usersignup');
    }
}

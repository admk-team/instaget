<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SubCategory;
use App\Models\Package;
use App\Models\User;
use App\Models\Review;
use App\Models\Feedback;
use App\Models\GeneralSetting;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Instagram\User\BusinessDiscovery;
use Phpfastcache\Helper\Psr16Adapter;



class FrontController extends Controller
{
    //Attibutes from configuration
    protected $ig_username;
    protected $ig_password;
    
    public function __construct()
    {
        try {
            $gs = GeneralSetting::all();
            $this->ig_username = $gs->where('key', 'ig_username')->first()->value ?? 'applay24.contact@gmail.com';
            $this->ig_password = $gs->where('key', 'ig_password')->first()->value ?? 'dkwkdkwk220!';
        }catch(\Exception $e){
            //
        }

    }


    public function index(){
        $blog = Blog::all();
        return view('front.index' , compact('blog'));
    }

    public function service($slug)
    {
        $services = Service::with('categories.subcategories')->where('status', 1)->get();
        $buttonpackage = Service::with('categories.subcategories')->where('status', 1)->where('slug' , $slug)->first();
        $services_title =  $buttonpackage->categories->first()->subcategories->first();
        $service = Service::where('slug',$slug)->first();
        $categories = $service->categories;
        $sub_category = SubCategory::all();
        return view('front.service',compact('services', 'buttonpackage' , 'service' , 'categories' , 'services_title' , 'sub_category'));
    }
    public function get_category_packages($id){
        return Package::where('sub_category_id', $id)->where('status',1)->get();
    }
    

    public function subcategory_packages($subcategoryslug){
         $services = Service::with('categories.subcategories')->where('status', 1)->get();
        $buttonpackage = SubCategory::with('packages')->where('status', 1)->where('slug' , $subcategoryslug)->first();
        $subcategories = SubCategory::where('category_id' , $buttonpackage->category_id)->get();
        $subcategory_title = Subcategory::where('slug' , $subcategoryslug)->first();
        return view('front.subcategory_packages',compact('services' , 'subcategoryslug','subcategories' , 'subcategory_title'));
    }

    public function reviews()
    {
        $review  = Review::first();
        $feedback = Feedback::orderBy('id' ,'desc')->where('status' , 1)->get();
        $sub_category = SubCategory::all();
        return view('front.reviews' , compact('review' , 'feedback' , 'sub_category'));
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
                    // $newCookie = [
                    //     "ig_did"        =>	"2177FD05-7AF7-47BC-B00D-B963E0C90774",
                    //     "mid"           =>	"ZBHCMQALAAFNxaNp5Yxzy2oc0MFt",
                    //     "sessionid"     =>	"58291820147%3Aj6wxJ0tCXJytbH%3A6%3AAYdtCrBRQyh6tmRiGIb8T4ci7g6BlxgP-F6bJ2Xomw",
                    //     "csrftoken"     =>	"2QaqvQ7FThamrtTuc2HzBsYfem9DcQkR",
                    //     "ds_user_id"    =>	"58291820147",
                    // ];
                    $username = $request->instagram_username;
                    
                    return $this->test_insta($username);
                    
                    $old_data=session()->get($username);
                    if (!$old_data) {
                        // $instagram = new \InstagramScraper\Instagram(new \GuzzleHttp\Client());
                        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client([
                            'proxy' => 'adhelp2022:cTD8KQnQmw@94.124.161.171:50100'
                        ]), $this->ig_username, $this->ig_password, new Psr16Adapter('Files'));
                        $instagram->setCustomCookies($newCookie);
                        $instagram->setUserAgent('User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36');
                        $instagram->login(false, true); // will use cached session if you want to force login $instagram->login(true)
                        $instagram->saveSession();  //DO NOT forget this in order to save the session, otherwise have no sense
        
                        $medias = $instagram->getMedias($username);
                        session()->put($username, $medias);
                    }else{
                        $medias=$old_data;
                    }
                    return view('front.post',compact('medias'));
                } catch (\Exception $th) {
                    return redirect()->back()->with('error',$th->getMessage());
                }
            }
            return redirect()->route('front.user.login');
            return view('front.login-form', ['email' => $request->email ?? '']);
        }else{
            return view('front.signup', ['email' => $request->email ?? '']);
        }
    }
    public function guest_post(){
        try {
            

            
            // $newCookie = [
            //     "ig_did"        =>	"2177FD05-7AF7-47BC-B00D-B963E0C90774",
            //     "mid"           =>	"ZBHCMQALAAFNxaNp5Yxzy2oc0MFt",
            //     "sessionid"     =>	"58291820147%3Aj6wxJ0tCXJytbH%3A6%3AAYdtCrBRQyh6tmRiGIb8T4ci7g6BlxgP-F6bJ2Xomw",
            //     "csrftoken"     =>	"2QaqvQ7FThamrtTuc2HzBsYfem9DcQkR",
            //     "ds_user_id"    =>	"58291820147",
            // ];
    
            $username = session()->get('INSTAGRAM_USERNAME');
             return $this->test_insta( $username);
            // $instagram = new \InstagramScraper\Instagram(new \GuzzleHttp\Client());
            $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client([
                'proxy' => 'adhelp2022:cTD8KQnQmw@94.124.161.171:50100'
            ]), $this->ig_username, $this->ig_password, new Psr16Adapter('Files'));
            $instagram->setCustomCookies($newCookie);
            $instagram->setUserAgent('User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36');
            $instagram->login(false, true); // will use cached session if you want to force login $instagram->login(true)
            $instagram->saveSession();  //DO NOT forget this in order to save the session, otherwise have no sense
            $medias = $instagram->getMedias($username);
          
            return view('front.post', compact('medias'));
        } catch (\Exception $th) {
            
            return redirect()->back()->with('error',$th->getMessage());
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
    public function order1(){
        $package_id=session()->get('PACKAGE_ID');
        $package = Package::with('sub_category.category.service')->where('id',$package_id)->first();
        return view('front.payment',compact('package'));
    }  

    public function test_insta($u = 'taste'){

        $cookie = 'mid=ZBHCMQALAAFNxaNp5Yxzy2oc0MFt; ig_did=2177FD05-7AF7-47BC-B00D-B963E0C90774; datr=MMIRZGaIOVoEY8VokhuKgkgn; ds_user_id=58291820147; csrftoken=nFRFxlutWsDNivP4bLREyePurfZ6BdHK; sessionid=58291820147%3ARRpRIXORt9EQOs%3A1%3AAYdGX-7Tq5A8TXOK-zFp34InX6bkjPchCK9Eilvvyw; rur="NCG\05458291820147\0541710580968:01f7b4de995eff857f4b65b2761e111426104b3aafd0729908b2697ead1601e7dbb2d2b0"';              // <!-- required!! please get your cookie from your browser console (6)
        $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36';     // <!-- required!! please get your user-agent from your browser console (7)
        $xIgAppId = '936619743392459'; 
                              // <!-- required!! please get your x-ig-app-id from your browser console (8)
         $fetch = FetchController::fetch([

            "header" =>                                   
                'cookie: ' . $cookie . "\r\n" .
                'user-agent: ' . $userAgent . "\r\n" .
                'x-ig-app-id: ' . $xIgAppId . "\r\n" .
                '',
        
            // "maxImages" => 10,							// <!-- optional, 12 is the max number
            "file" => public_path('/storage/ig/'.$u.'-cache.json'),			// <!-- optional, instagram-cache.json is by default
            "time" => 3600,								// <!-- optional, reload contents after 3600 seconds by default
            "pretty" => true,							// <!-- optional, prettyfy json true/false
        
            "id" => $u,					// <!-- id is required
        
        ]);

            //return redirect('/storage/ig/'.$u.'-cache.json');
            
            return view('front.post1', ['username' => $u]);
            

        // $instagram = new \InstagramScraper\Instagram(new \GuzzleHttp\Client());
                
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
        $username = $request->username ?? 'applay24.contact@gmail.com';
        $password = $request->password ?? 'dkwkdkwk220!';
        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client([
            'proxy' => 'adhelp2022:cTD8KQnQmw@94.124.161.171:50100'
        ]), $username, $password, new Psr16Adapter('Files'));
        //$instagram->login(); // will use cached session if you want to force login $instagram->login(true)
        //$instagram->saveSession(54564556);  //DO NOT forget this in order to save the session, otherwise have no sense
        $medias = $instagram->getMedias($u);
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

    public function get_subcategory_title($id){
        $append_subcategory = SubCategory::where('id',$id)->first();
        return $append_subcategory;
    }


}

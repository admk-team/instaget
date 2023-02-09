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
    public function order(Request $request){
        $package = Package::find($request->pakage_id);
        $packages = Package::all();
        return view('front.order', compact('package', 'packages'));
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
        $access_token = 'IGQVJYSE92d3c4cmF6ODlWckkzYlJQQ3VqOVFaOXlHZAFJoY1gzUXdwNzBQaW5DS1FlYXkxQ2FyU0pwVWZAmbWxVMjZAtZA0gtWXVXV3JLQlAzc0NucWgwWHR6Yy1MNl9iZAXhhSDcwNEZAXV0Y5dS1FSzctOQZDZD';
        $client = new Client();
        $response = $client->get('https://api.instagram.com/v1/users/self/?access_token=' . $access_token);
        $data = json_decode($response->getBody()->getContents());
        return $data;
        return view('front.post');
    }


}

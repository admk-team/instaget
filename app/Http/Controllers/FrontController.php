<?php

namespace App\Http\Controllers;

use App\Models\Service;
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
        $packages = $categories->flatMap->packages->flatten();
        return view('front.service',compact('services','packages'));
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
}

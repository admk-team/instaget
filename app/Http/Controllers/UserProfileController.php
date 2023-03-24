<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserProfileController extends Controller
{
    
    public function userinfo(){
        return view('front.userprofile.userinfo');
    }
    public function Logout(Request $request){
        
        Auth::logout();
        Session::flush();
        return redirect()->route('front.login');
    }

    public function purchasehistory(){
        return view('front.userprofile.order-history');
    }
    public function memberinfo(){
        return view('front.userprofile.member_info_management');
    }
}

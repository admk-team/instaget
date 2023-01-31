<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AdminDashboard extends Controller
{
    public function login(){
        // return auth()->user();

        if(session()->has('email')){
            
            return redirect()->route('admin.dashboard');
        }else{

        return view('admin.login');
        }
    }
    
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Admin;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Package;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function index(){

         $service = Service::count();
         $category = Category::count();
         $sub_category = SubCategory::count();
         $package = Package::count();
         $user = User::count();
        return view('admin.index' , compact('service' , 'category' , 'sub_category' , 'package' , 'user'));
        
    }

    public function adminLogin (Request $request){
        $request->validate([
            'email'   => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->put('email' , $request->email);
            return redirect()->intended('/admin/dashboard');
        }
        
        return back()->with('error','Invalid Login details');
    }

    public function Logout(Request $request){
        
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Admin;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index(){

         $service = Service::count();
         $category = Category::count();
         $sub_category = SubCategory::count();
         $package = Package::count();
        return view('admin.index' , compact('service' , 'category' , 'sub_category' , 'package'));
        
    }

    public function adminLogin (Request $request){
        $request->validate([
            'email'   => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/admin/dashboard');
        }
        
        return back()->with('error','Invalid Login details');
    }

    
}

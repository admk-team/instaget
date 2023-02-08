<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
        ]);

        $admin = Admin::find(auth()->guard('admin')->user()->id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        if($admin->save()){
            return back()->with('alert', 'Profile Updated!');
        }
    }
}

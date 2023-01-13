<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function service($service, $category)
    {
        return view('front.service', compact('service', 'category'));
    }
}

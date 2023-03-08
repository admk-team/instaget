<?php

namespace App\Http\Controllers\Admin;

use App\Models\GeneralSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $general_setting = GeneralSetting::orderBy('id' , 'desc')->get();
        return view('admin.general_setting.index', compact('general_setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authorize_ig()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has(['ig_client_id' , 'ig_client_secret'])){
            $request->validate([
                'ig_client_id' => 'required',
                'ig_client_secret' => 'required'
               ]);

                $model =  GeneralSetting::where( 'key' , 'ig_client_id')->first();
               $model = $model ?? new GeneralSetting();
               $model->key ='ig_client_id' ;
               $model->value = $request->ig_client_id;
               $model->save();

               $model1 =  GeneralSetting::where( 'key' , 'ig_client_secret')->first();
               $model1 = $model1 ?? new GeneralSetting();
               $model1->key ='ig_client_secret' ;
               $model1->value = $request->ig_client_secret;
               $model1->save();
        
        }

        if($request->has('ig_access_token')){
            $request->validate([
                'ig_access_token' =>'required'
            ]);

            $model =  GeneralSetting::where('key', 'ig_access_token')->first();
            $model = $model ?? new GeneralSetting();
            $model->key ='ig_access_token' ;
            $model->value = $request->ig_access_token;
            $model->save();
        }

        //for username and password
        if($request->has(['ig_username' , 'ig_password'])){
            $request->validate([
                'ig_username' => 'required',
                'ig_password' => 'required'
               ]);

                $generalSetting =  GeneralSetting::where('key','ig_username')->first();
                $generalSetting = $generalSetting ?? new GeneralSetting();
                $generalSetting->key ='ig_username' ;
                $generalSetting->value = $request->ig_username;
                $generalSetting->save();

               $generalSetting2 =  GeneralSetting::where('key','ig_password')->first();
               $generalSetting2 = $generalSetting2 ?? new GeneralSetting();
               $generalSetting2->key ='ig_password' ;
               $generalSetting2->value = $request->ig_password;
               $generalSetting2->save();
        
        }
       
        return redirect()->route('admin.general.index')->with('success', 'Settings has been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function release($key)
    {
        $generalSetting = GeneralSetting::where('key' ,$key)->delete($key);
        return redirect()->back()->with('success', $key.' has been Released');
    }
}

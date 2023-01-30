<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $service = Service::orderBy('id' , 'desc')->get();
        return view('admin.services.index' , compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:services,title',
            'image' => 'required',
        ]);
        $model = new Service();
        $model->title = $request->title;
        $model->slug = str_replace('_', ' ', $request->title);
        if($request->hasFile('image')){
            $path  = $request->file('image')->store('/images/services' , 'public');
            $model->image = $path;
        }

        if($model->save()){
            return redirect()->route('admin.services.index')->with('success' , 'Service Added Successfully');
        }else{
            return redirect()->route('admin.services.index')->with('error'  , 'Failed to Added Services');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $service = Service::findorFail($id);
        return view('admin.services.edit' , compact('service'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image'
        ]);
        $model = Service::findorFail($id);
        $model->title = $request->title;
        $model->slug = str_replace('_', ' ', $request->title);

        if($request->has('image')){
            if(isset($model->image)){
                $image_path  = public_path('storage/'.$model->image);
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }
            $path = $request->file('image')->store('/images/services' , 'public');
            $model->image = $path;
        }

        if($model->update()){
            return redirect()->route('admin.services.index')->with('success' , 'Services Updated Successfully ');
        }else{
            return redirect()->route('admin.services.index')->with('error' , 'Failed to Updated Services');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findorFail($id);
        if($service->image){
            $image_path = public_path('storage/'.$service->image);
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        if($service->destroy($id)){
            return redirect()->route('admin.services.index')->with('success' , 'Services Deleted Successfully');
        }else{
            return redirect()->with('admin.services.index')->with('error' , 'Failed to Deleted Services');
        }
    }

    public function status($id , $status){
         
        $service = Service::findorFail($id);
        $service->status = $status;
        if($service->update()){
            return redirect()->route('admin.services.index')->with('success' , 'Status Updated Successfully');
        }else{
            return reidriect()->route('admin.services.index')->with('error' , 'Failed to Updated Status !');
        }

    }
}

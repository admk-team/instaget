<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $package = Package::orderBy('id' , 'desc')->with('category')->with('sub_category')->get();
        return view('admin.packages.index'  , compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $sub_category = SubCategory::all();
        return view('admin.packages.create' , compact('category' , 'sub_category'));
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
            'title' => 'required',
            'category_id' => 'required_without:subcategory_id',
            'subcategory_id' => 'required_without:category_id',
            'original_price' => 'required',
            'quantity' => 'required',
        ]);

        $title = strtolower($request->title);
        $model = new Package();
        $model->title  = $request->title;
        $model->category_id  = $request->category_id;
        $model->sub_category_id = $request->subcategory_id;
        $model->original_price = $request->original_price;
        $model->sale_price = $request->sale_price;
        $model->qty = $request->quantity;
        $model->slug = Str::slug($title , '-');


        if($model->save()){
            return redirect()->route('admin.package.index')->with('success' , 'Package Added Successfully');
        }else{
            return redirect()->route('admin.package.index')->with('error' , 'Failed to Added Package');
        }
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::findorFail($id);
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin.packages.edit' , compact('package' , 'category' , 'subcategory'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'quantity' => 'required',
            'category_id' => 'required_without:subcategory_id',
            'subcategory_id' => 'required_without:category_id',
            'original_price' => 'required',
        ]);
 
        $title = strtolower($request->title);
        $model = Package::findorFail($id);
        $model->title = $request->title;
        $model->category_id = $request->category_id;
        $model->sub_category_id  = $request->subcategory_id;
        $model->original_price = $request->original_price;
        $model->sale_price = $request->sale_price;
        $model->qty = $request->quantity;
        $model->slug = Str::slug($title , '-');

        if($model->update()){
            return redirect()->route('admin.package.index')->with('success' , 'Packages Updated Successfully');
        }else{
            return redirect()->route('admin.package.index')->with('error' ,'Failed to Updated Packages !');
        }
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::findorFail($id);
        if($package->destroy($id)){
            return redirect()->route('admin.package.index')->with('success' , 'Package Deleted Successfully');
        }else{
            return redirect()->route('admin.package.index')->with('error' , 'Failed to Delete Package !');
        }
    }
    public function status($id , $status){

        $package = Package::findorFail($id);
        $package->status = $status;
        if($package->update()){
            return redirect()->route('admin.package.index')->with('success'  , 'Status Changed ');
        }else{
            return redirect()->route('admin.package.index')->with('error' , 'Failed to Change Status');
        }
    }

    public function get_subcategory($id){
        $category = Category::findorFail($id);
      return  $sub_category = SubCategory::where('category_id' , $category->id)->get();
    }
}

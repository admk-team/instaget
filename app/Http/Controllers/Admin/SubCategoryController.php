<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Package;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;



class SubCategoryController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $sub_category = SubCategory::orderBy('id' , 'desc')->with('category')->get();
        return view('admin.subcategory.index' , compact('sub_category'));  
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $category =  Category::all();
        return view('admin.subcategory.create' , compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for($i=0; $i<sizeof($request->original_price); $i++){
            if($request->original_price[$i] < $request->sale_price[$i]){
                return redirect()->back()->with('error1' , 'Sale Price must be less than  price');
            }
        }
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'image' => 'image',
            'color' => 'required',
            'description' => 'required',
        ]);
        $title = strtolower($request->title);
        $model = new SubCategory();
        $model->category_id = $request->category_id;
        $model->title = $request->title;
        $model->color = $request->color;
        $model->description = $request->description;


        if($request->hasFile('image')){
            $image_path = $request->file('image')->store('/images/subcategory' , 'public');
            $model->image  = $image_path;
        }

        if($model->save()){
            $category_id = $request->category_id;
            $subcategory_id = $model->id;
            if($request->has('qty')){
                foreach($request->qty as $key => $q){
                    $request->validate([
                        'original_price' => 'nullable|gte:sale_price',
                        'sale_price' => 'required_with:original_price',
                    ], [
                        'original_price.gte' => 'Sale price must be greater than or equal to the original price',
                        'sale_price.required_with' => 'The original price field is required when the sale price field is present',
                    ]);
                  
                    $package = new Package();
                    $package->title  = $request->ptitle[$key];
                    $package->category_id  = $category_id;
                    $package->sub_category_id = $subcategory_id;
                    $package->original_price = $request->original_price[$key];
                    $package->sale_price = $request->sale_price[$key];
                    $package->qty = $q;
                    $package->slug = $request->ptitle[$key];
                    $package->save();
                }
            }
            $model->slug = $request->title . '-' . $model->id;
            $model->update();
            return redirect()->route('admin.subcategory.index')->with('success' , 'Sub Category Added Successfully');
        }else{
            return redirect()->route('admin.subcategory.index')->with('error', 'Failed to Add Sub categroy !');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
       $sub_category = SubCategory::findorFail($id);
       $packages  = Package::where('sub_category_id' , $id)->get();
       $category = Category::all();
       return view('admin.subcategory.edit' , compact('sub_category' , 'category' , 'packages' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        for($i=0; $i<sizeof($request->original_price); $i++){
            if($request->original_price[$i] < $request->sale_price[$i]){
                return redirect()->back()->with('error1' , 'Sale Price must be less than  price');
            }
        }
        
        
        $request->validate([
        'sub_category' => 'required',
        'title' => 'required',
        'image' => 'image',
        'color' => 'required',
        'description' => 'required',
       ]);
       $title = strtolower($request->title);
       $model = SubCategory::findorFail($id);
       $model->category_id = $request->sub_category;
       $model->title = $request->title;
       $model->color = $request->color;
       $model->description = $request->description;
       
       if($request->has('image')){
        if(isset($model->image)){
            $image_path = public_path('storage/'.$model->image);
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        $path = $request->file('image')->store('/images/subcategory' , 'public');
        $model->image = $path;

       }
       $model->slug = $request->title . '-' . $model->id;
       if($model->update()){
        
        $category_id = $request->category_id;
        $subcategory_id = $model->id;
        if($request->has('qty')){
            foreach($request->qty as $key => $q){
                
                $request->validate([
                    'sale_price' => 'required_with:original_price',
                    'original_price' => 'nullable|gte:sale_price',
                ], [
                    'original_price.gte' => 'Sale price must be greater than or equal to the original price',
                    'sale_price.required_with' => 'The original price field is required when the sale price field is present',
                ]);

                $package = Package::find($request->pid[$key] ?? 0);
                $package = $package ?? new Package();
                $package->title  = $request->ptitle[$key];
                $package->category_id  =$category_id;
                $package->sub_category_id = $subcategory_id;
                $package->original_price = $request->original_price[$key];
                $package->sale_price = $request->sale_price[$key];
                $package->qty = $q;
                $package->slug = $request->ptitle[$key];
                $package->save();
            }
        }

        return redirect()->route('admin.subcategory.index')->with('success' , 'Sub Category Updated Successfully');
       }else{
        return redirect()->route('admin.subcategory.index')->with('error' ,'Failed to Update Sub Category !');
       }
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_category = SubCategory::findorFail($id);
        if($sub_category->image){
            $image_path = public_path('storage/'.$sub_category->image);
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }

        if($sub_category->destroy($id)){
            return redirect()->route('admin.subcategory.index')->with('success' , 'SubCategory Deleted Successfully');
        }else{
            return redirect()->route('admin.category.index')->with('error' , 'Failed to Deleted Sub Category !');
        }
    }

    public function status($id , $status){
        
        $sub_category = SubCategory::findorFail($id);
        $sub_category->status = $status;
        if($sub_category->update()){
            return redirect()->route('admin.subcategory.index')->with('success' , 'Status Updated Successfully');
        }else{
            return redirect()->route('admin.category.index')->with('error' , 'Failed to Change Status !');
        }
    }

    public function package_delete($id){
        $package = Package::findorFail($id);
        return $package->destroy($id);
    }

}

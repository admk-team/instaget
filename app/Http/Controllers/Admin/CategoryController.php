<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Category::orderBy('id' , 'desc')->get();
        return view('admin.categories.index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
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
            'image' => 'required'
        ]);

        $model = new Category();
        $model->title = $request->title;

        if($request->hasFile('image')){
            $image_path = $request->file('image')->store('/images/category' , 'public');
            $model->image = $image_path;
        }

        if($model->save()){
            return redirect()->route('admin.category.index')->with('success' , 'Category Added Successfully');
        }else{
            return redirect()->route('admin.category.index')->with('error' , 'Failed to Add Category');
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
        $data = Category::findorFail($id);
        return view('admin.categories.edit' , compact('data'));
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
        
        $request->validate([
            'title' => 'required',
            'image' => 'required'
        ]);

        $model = Category::findorFail($id);
        $model->title = $request->title;

        if($request->has('image')){
            if(isset($model->image)){
                $image_path = public_path('storage/'.$model->image);
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }
            $path = $request->file('image')->store('/images/category' , 'public');
            $model->image = $path;
        }

        if($model->update()){
            return redirect()->route('admin.category.index')->with('success' , 'Category Updated Successfully');
        }else{
            return redirect()->route('admin.category.index')->with('error' ,'Failed to Updated Category');
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
        $category = Category::findorFail($id);
        if($category->image){
            $image_path = public_path('storage/'.$category->image);
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        if($category->destroy($id)){
            return redirect()->route('admin.category.index')->with( 'success' , 'Category Deleted Successfully!');
        }else{
            return redirect()->route('admin.category.index')->with('error' , 'Failed to Deleted Category');
        }
    }

    public function status($id , $status){
        
        $data = Category::findorFail($id);
        $data->status = $status;
        if($data->update()){
            return redirect()->route('admin.category.index')->with('success' , 'Status Updated Successfully');
        }else{
            return redirect()->route('admin.category.index')->with('error' , 'Failed to Updated Status !');
        }
    }
}

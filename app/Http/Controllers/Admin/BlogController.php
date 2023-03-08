<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog  = Blog::orderBy('id' , 'desc')->get();
        return view('admin.Blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Blog.create');
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
            'image'=>'required',
            'title'=>'required',
            'description' => 'required'
        ]);

        $model = new Blog();
        $model->title = $request->title;
        $model->description = $request->description;
        if($request->hasFile('image')){
            $path  = $request->file('image')->store('/images/blog' , 'public');
            $model->image = $path;
        }
        if($model->save()){
            return redirect()->route('admin.blog.index')->with('success' , 'Blog Added Successfully');
        }else{
            return redirect()->route('admin.blog.index')->with('error'  , 'Failed to Added Blog');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $blog = Blog::findorFail($id);
        return view('admin.Blog.edit' , compact('blog'));   
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image',
            'description'=>'required'
        ]);
        $model = Blog::findorFail($id);
        $model->title = $request->title;
        $model->description = $request->description;

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
            return redirect()->route('admin.blog.index')->with('success' , 'Blog Updated Successfully ');
        }else{
            return redirect()->route('admin.blog.index')->with('error' , 'Failed to Updated Blog');
        }

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findorFail($id);
        if($blog->image){
            $image_path = public_path('storage/'.$blog->image);
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        if($blog->destroy($id)){
            return redirect()->route('admin.blog.index')->with('success' , 'Blog Deleted Successfully');
        }else{
            return redirect()->with('admin.blog.index')->with('error' , 'Failed to Deleted Blog');
        }
    }
    public function status($id , $status){
         
        $blog = Blog::findorFail($id);
        $blog->status = $status;
        if($blog->update()){
            return redirect()->route('admin.blog.index')->with('success' , 'Status Updated Successfully');
        }else{
            return reidriect()->route('admin.blog.index')->with('error' , 'Failed to Updated Status !');
        }

    }

}

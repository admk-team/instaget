@extends('admin.layouts.layout')
@section('container')
<div class="main-body w-100">
    <div class="page-wrapper">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-file-code bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Edit Subcategory</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a class="btn-shadow btn btn-primary text-white"
                                    href="{{ route('admin.subcategory.index') }}">
                                    Back
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-block">
                        <h4 class="title">Edit Subategory</h4>
                        <form  method="POST" action="{{ route('admin.subcategory.update' , $sub_category->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <div class="col-lg-12 m-2">
                                <label for="menu" class="">Select Category</label>
                                <select name="sub_category" id="parent_id" class="form-control" value="{{ old('sub_category') }}">
                                  <option value="">Select Category</option>
                                  @foreach ($category as $list)
                                    <option value="{{ $list->id }}" {{ $sub_category->category_id == $list->id ? 'selected' : '' }} >{{ $list->title ?? '' }}</option>
                                  @endforeach
                                </select>
                                  @error('sub_category')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 m-2">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" value="{{ old('title') ?? $sub_category->title }}" class="form-control" placeholder="Title">
                                    @error('title') 
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 m-2">
                                    <label for="Image">Image</label>                                    
                                    <input name="image" type="file" class="form-control" value="{{ old('image') }}">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <img src="{{ asset('storage/'.$sub_category->image) }}" alt="" style="width: 100px; height:100px">

                                </div>
                                <div class="col-12 m-2">
                                    <label for="color">Color</label>
                                    <input type="color" name="color" value="{{ $sub_category->color ?? '' }}" class="form-control" style="height: 50px">
                                    @error('color')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                            <button class="mt-1 btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

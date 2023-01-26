@extends('admin.layouts.layout')
@section('container')
<div class="main-body w-100">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Categories</h1>
                    </div>
                    <div class="card-block">
                        <h4 class="sub-title">Edit Category</h4>
                        <form  method="POST" action="{{ route('admin.category.update' , $category->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <div class="col-lg-12 m-2">
                                <label for="menu" class="">Services</label>
                                <select name="service_id" id="parent_id" class="form-control" value="{{ old('service_id') }}">
                                  <option value="">Select Sub Cattegory</option>
                                  @foreach ($services as $list)
                                    <option value="{{ $list->id }}" {{ $category->service_id == $list->id ? 'selected' : '' }} >{{ $list->title ?? '' }}</option>
                                  @endforeach
                                </select>
                                  @error('parent_id')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 m-2">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" value="{{ old('title') ?? $category->title }}" class="form-control" placeholder="Title">
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
                                    <img src="{{ asset('storage/'.$category->image) }}" alt="" style="width: 100px; height:100px">

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
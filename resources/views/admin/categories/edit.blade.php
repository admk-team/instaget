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
                    <h4>Edit Category</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                      <a class="btn-shadow btn btn-primary text-white" href="{{ route('admin.category.index') }}">
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
                        <h4 class="title">Edit Category</h4>
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
                                <div class="col-12 m-2">
                                  <label for="Image">Background Image</label>
                                  <input name="bg_image" type="file" class="form-control" value="{{ old('image') }}" >
                                  @error('bg_image')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                  <img src="{{ asset('storage/'.$category->bg_image) }}" alt="" style="width:100px; height:100px">
                              </div>
                              <div class="col-12 m-2">
                                  <label for="color">Hover Color</label>
                                  <input type="color" name="color" value="{{ old('color') ?? $category->color }}" class="form-control">
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

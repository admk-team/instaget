@extends('admin.layouts.layout')
@section('container')
<div class="main-body w-100">
    <div class="page-title-actions">
        <div class="d-inline-block dropdown d-flex justify-content-end mt-3">
          <a class="btn-shadow btn btn-info" href="{{ route('admin.package.index') }}">
            Back
          </a>
        </div>
      </div>
    <div class="page-wrapper">
        <div class="page-body">
            
            <div class="row justify-content-center">
                <div class="col-lg-6">
                  
                <div class="card">
                    <div class="card-header">
                        <h1>Packages</h1>
                    </div>
                    <div class="card-block">
                        <h4 class="sub-title">Add Package</h4>
                        <form  method="POST" action="{{ route('admin.package.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <div class="col-12 m-2">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Title">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 m-2">
                                <label for="menu" class="">Category</label>
                                <select name="category_id" id="parent_id" class="form-control" value="{{ old('category_id') }}">
                                  <option value="">Select Category</option>
                                  @foreach ($category as $list)
                                  <option value="{{ $list->id }}" >{{ $list->title ?? '' }}</option>
                                  @endforeach
                                </select>
                                  @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12 m-2">
                                <label for="menu" class=""> Sub Category</label>
                                <select name="subcategory_id" id="parent_id" class="form-control" value="{{ old('subcategory_id') }}">
                                  <option value="">Select  Sub Category</option>
                                  @foreach ($sub_category as $list)
                                  <option value="{{ $list->id }}" >{{ $list->title ?? '' }}</option>
                                  @endforeach
                                </select>
                                  @error('subcategory_id')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                            </div>

                            
                            <div class="form-group row">
                                <div class="col-12 m-2">
                                    <label for="title">Original Price</label>
                                    <input type="number" name="original_price" value="{{ old('original_price') }}" class="form-control" placeholder="original_price">
                                    @error('original_price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 m-2">
                                    <label for="title">Sale Price</label>
                                    <input type="number" name="sale_price" value="{{ old('sale_price') }}" class="form-control" placeholder="sale_price">
                                    @error('sale_price')
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

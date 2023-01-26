@extends('admin.layouts.layout')
@section('container')
<div class="main-body w-100">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Packages</h1>
                    </div>
                    <div class="card-block">
                        <h4 class="sub-title">Edit Package</h4>
                        <form  method="POST" action="{{ route('admin.package.update' , $package->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <div class="col-12 m-2">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" value="{{ old('title') ?? $package->title }}" class="form-control" placeholder="Title">
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
                                    <option value="{{ $list->id }}" {{ $package->category_id == $list->id ? 'selected' : '' }} >{{ $list->title ?? '' }}</option>
                                  @endforeach
                                </select>
                                  @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12 m-2">
                                <label for="menu" class="">Sub Category</label>
                                <select name="subcategory_id" id="parent_id" class="form-control" value="{{ old('subcategory_id') }}">
                                  <option value="">Select  Sub Category</option>
                                  @foreach ($subcategory as $list)
                                    <option value="{{ $list->id }}" {{ $package->sub_category_id == $list->id ? 'selected' : '' }} >{{ $list->title ?? '' }}</option>
                                  @endforeach
                                </select>
                                  @error('parent_id')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 m-2">
                                    <label for="title">Original Price</label>
                                    <input type="text" onkeypress=" return isNumberKey(event);" name="original_price" value="{{ old('title') ?? $package->original_price }}" class="form-control" placeholder="Original Price">
                                    @error('original_price') 
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 m-2">
                                    <label for="title">Sale Price</label>
                                    <input type="text" onkeypress=" return isNumberKey(event);" name="sale_price" value="{{ old('sale_price') ?? $package->sale_price }}" class="form-control" placeholder="Sale Price ">
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
<script type="text/javascript">
   function isNumberKey(evt)
         {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
               return false;
            return true;
         }
  </script>
@endsection
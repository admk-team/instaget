@extends('admin.layouts.layout')
@section('container')
<div class="main-body w-100">
    <div class="page-title-actions">
        <div class="d-inline-block dropdown d-flex justify-content-end mt-3">
          <a class="btn-shadow btn btn-info" href="{{ route('admin.services.index') }}">
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
                        <h1>Categories</h1>
                    </div>
                    <div class="card-block">
                        <h4 class="sub-title">Add Service</h4>
                        <form  method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12 m-2">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Title">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 m-2">
                                    <label for="Image">Image</label>
                                    <input name="image" type="file" class="form-control" value="" >
                                    @error('image')
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

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
                                <h4>Sub Categories</h4>
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
                                <h4 class="title">Add Category</h4>
                                <form method="POST" action="{{ route('admin.subcategory.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-lg-12 m-2">
                                            <label for="menu" class="">Select Category</label>
                                            <select name="category_id" id="parent_id" class="form-control"
                                                value="{{ old('category_id') }}">
                                                <option value="">Select Category</option>
                                                @foreach ($category as $list)
                                                    <option value="{{ $list->id }}">{{ $list->title ?? '' }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 m-2">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" value="{{ old('title') }}"
                                                class="form-control" placeholder="Title">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12 m-2">
                                            <label for="Image">Image</label>
                                            <input name="image" type="file" class="form-control" value="">
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

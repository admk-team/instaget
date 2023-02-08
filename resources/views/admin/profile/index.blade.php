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
                                <h4>Profile</h4>
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
                                <h4 class="title">Edit Profile</h4>
                                @if(session()->has('alert'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    {{ session()->get('alert') }}
                                </div>
                                @endif
                                <form method="POST" action="{{ route('admin.profile.update') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-12 m-2">
                                            <label for="title">Name</label>
                                            <input type="text" name="name" value="{{ auth()->guard('admin')->user()->name }}"
                                                class="form-control" placeholder="name">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12 m-2">
                                            <label for="title">Email</label>
                                            <input type="email" name="email" value="{{ auth()->guard('admin')->user()->email }}"
                                                class="form-control" placeholder="email">
                                            @error('email')
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

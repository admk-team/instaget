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
                            <h4> General Settings</h4>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a class="btn-shadow btn btn-primary text-white" href="{{ route('admin.general.index') }}">
                                    Back
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="page-body">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            @include('admin.partial.alert')
                            <h4 class="title"> Instagram Configration </h4>
                            <form method="POST" action="{{ route('admin.general.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12 col-lg-6 mb-2">
                                        <label for="ig_client_id">Client ID</label>
                                        <input type="text" name="ig_client_id" id="ig_client_id" value="{{ $general_setting->where('key' , 'ig_client_id')->first()->value ?? ''}}" class="form-control" placeholder="Instagram Client ID">
                                        @error('ig_client_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12 col-lg-6 mb-2">
                                        <label for="ig_client_secret">Client Secret</label>
                                        <input type="password" name="ig_client_secret" id="ig_client_secret" value="{{ $general_setting->where('key' , 'ig_client_secret')->first()->value ?? ''}}" class="form-control" placeholder="Instagram Client Secret">
                                        @error('ig_client_secret')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12 col-lg-6 mb-2">
                                        <label for="ig_redirect_uri">Redirct URL</label>
                                        <input type="text" readonly name="ig_redirect_uri" id="ig_redirect_uri" value="{{ route('front.instagram.callback') }}" class="form-control">
                                        @error('value')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    <div class="col-6">
                                        @if(empty($general_setting->where('key' , 'ig_access_token')->first()->value))
                                        <a href="#" class="btn btn-success">Authorize Now</a>
                                        @else
                                        <a href="{{ route('admin.general.release' , 'ig_access_token') }}" class="btn btn-secondary">Unauthorize </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                            <br>
                            <hr>
                            <br>
                           
                            <!-- 2nd form -->
                            <form method="POST" action="{{ route('admin.general.store') }}">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-12">
                                        <label for="ig_access_token">Access Token</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="ig_access_token">
                                            <button type="submit" class="btn btn-warning mx-4">Save</button>
                                        </div>
                                        @error('ig_access_token')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                    
                            </form>
                            <!-- // 2nd form -->

                            <br>
                            <hr>
                            <br>

                            <!-- 3rd form -->
                            <form method="POST" action="{{ route('admin.general.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12 col-lg-6 mb-2">
                                        <label for="ig_username">Instagram Username</label>
                                        <input type="text" name="ig_username" id="ig_username" value="{{ $general_setting->where('key' , 'ig_username')->first()->value ?? ''}}" class="form-control" placeholder="Instagram Username" autocomplete="off">
                                        @error('ig_username')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12 col-lg-6 mb-2">
                                        <label for="ig_password">Instagram Password</label>
                                        <input type="password" name="ig_password" id="ig_password" value="{{ $general_setting->where('key' , 'ig_password')->first()->value ?? ''}}" class="form-control" placeholder="Instagram Password" autocomplete="off">
                                        @error('ig_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                 
                                </div>
                            </form>
                            <!-- // 3rd form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

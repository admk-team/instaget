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
              <h4>Add General Setting</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
              <li class="breadcrumb-item">
                <a class="btn-shadow btn btn-primary text-white" href="{{ route('admin.general.index') }}">
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
              <h4 class="title">Add General Setting</h4>
              <form method="POST" action="{{ route('admin.general.store') }}">
                @csrf
                <div class="form-group row">
                  <div class="col-12 m-2">
                    <label for="key">Key</label>
                    <input type="text" name="key" value="{{ old('key') }}" class="form-control" placeholder="key">
                    @error('key')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-12 m-2">
                    <label for="key">Value</label>
                    <input type="text" name="value" value="{{ old('value') }}" class="form-control" placeholder="value">
                    @error('value')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
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

@endsection
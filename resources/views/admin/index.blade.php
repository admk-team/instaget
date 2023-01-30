@extends('admin.layouts.layout')
@section('container')

<div class="main-body">
    <div class="page-wrapper">

        <div class="page-body">
            <div class="row">
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                            <h5 class="text-c-blue f-w-600">Services</h5>
                            <h4>{{ $service }}</h4>
                            
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                            <h5 class="text-c-pink f-w-600">Category</h5>
                            <h4>{{ $category }}</h4>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                            <h5 class="text-c-green f-w-600">Sub Category</h5>
                            <h4>{{ $sub_category }}</h4>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i>
                            <h5 class="text-c-yellow f-w-600">Packages</h5>
                            <h4>{{ $package }}</h4>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                    
                </div>
            </div>
        </div>

        <div id="styleSelector">

        </div>
    </div>
@endsection
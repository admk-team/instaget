@extends('layouts.layout')
@section('container')
    <div class="container-fluid">
        <div class="row justify-content-center ms-auto mt-5 mb-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="sharepost ">
                            <button type="submit" class="btn btn-block text-white">게시물 선택</button>
                        </div>
                       
                            <div class="row mt-1">
                                <div class="col-12 col-md-6 d-flex p-1">
                                    <img src="{{asset('front_asset/images/5.png')}}" class="rounded-circle profilepic" alt="...">
                                    <h3>yanbly220</h3>
                                </div>
                                <div class="col-12 col-md-3">
                                    <p>게시물 선택게시물 선택</p>
                                </div>
                                <div class="col-12 col-md-3">
                                    <p>게시물 선택게시물 선택100</p>
                                    <p><span style="color:rgb(255, 0, 255)">92</span>/100</p>
                                </div>
                            </div>
                       
                        
                        <div class="row mx-auto">
                            <div class="col-auto my-3 p-1">
                                <img class="myimage img-responsive thumbnail" src="{{asset('front_asset/images/cup1.PNG')}}" alt="">
                            </div>
                            <div class="col-auto my-3 p-1">
                                <img class="myimage img-responsive thumbnail" src="{{asset('front_asset/images/im2.PNG')}}" alt="">
                            </div>
                            <div class="col-auto my-3 p-1">
                                <img class="myimage img-responsive thumbnail" src="{{asset('front_asset/images/im3.PNG')}}" alt="">
                            </div>
                            <div class="col-auto my-3 p-1">
                                <img class="myimage img-responsive thumbnail" src="{{asset('front_asset/images/im4.PNG')}}" alt="">
                            </div>
                            <div class="col-auto my-3 p-1">
                                <img class="myimage img-responsive thumbnail" src="{{asset('front_asset/images/im5.PNG')}}" alt="">
                            </div>
                            <div class="col-auto my-3 p-1">
                                <img class="myimage img-responsive thumbnail" src="{{asset('front_asset/images/im6.PNG')}}" alt="">
                            </div>
                            <div class="col-auto my-3 p-1">
                                <img class="myimage img-responsive thumbnail" src="{{asset('front_asset/images/im7.PNG')}}" alt="">
                            </div>
                            <div class="col-auto my-3 p-1">
                                <img class="myimage img-responsive thumbnail" src="{{asset('front_asset/images/im8.PNG')}}" alt="">
                            </div>

                        </div>
                        
                        <div class="d-flex gap-5 topcontainer">
                            <div>
                                <p class="ratinghead">게시물 선택게</p>
                                <p class="ratingtxt"><span style="color:rgb(253, 0, 253)">5</span>/30</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-2">
                                    <span class="border"><img src="{{asset('front_asset/images/im2.PNG')}}" class="ratingpic"
                                            alt="..."></span>
                                    <p class="ratingnum">5</p>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <span class="border"><img src="{{asset('front_asset/images/cup1.PNG')}}" class="ratingpic"
                                            alt="..."></span>
                                    <p class="ratingnum">33</p>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <span class="border"><img src="{{asset('front_asset/images/im3.PNG')}}" class="ratingpic"
                                            alt="..."></span>
                                    <p class="ratingnum">22</p>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <span class="border"><img src="{{asset('front_asset/images/im4.PNG')}}" class="ratingpic"
                                            alt="..."></span>
                                    <p class="ratingnum">23</p>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <span class="border"><img src="{{asset('front_asset/images/im5.PNG')}}" class="ratingpic"
                                            alt="..."></span>
                                    <p class="ratingnum">11</p>
                                </div>
                                <div class="checkbtn">
                                    <button type="submit" class="btn btn-block text-white justify-content-center">확인</button>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
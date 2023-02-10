@extends('layouts.layout')
@section('container')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-7">
            <div class="card m-1 p-1">
                <div class="card-body">
                    <div class="sharepost ">
                        <button class="btn  text-white">게시물 선택</button>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-md-3 col-lg-4 d-flex mb-2 text-center">
                            <img src="{{asset('front_asset/images/5.png')}}" class="rounded-circle profilepic" alt="...">
                            <h6>yanbly220</h6>
                        </div>
                        <div class="col-12 col-md-3 col-lg-4 mb-2 text-center">
                            <p class="">게시물 선택게시물 선택</p>
                        </div>
                        <div class="col-12 col-md-3 col-lg-4 mb-2 text-center">
                            <p class="">게시물 선택게시물 선택100</p>
                            <p><span class="num">92</span>/100</p>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center text-center">
                        @foreach ($media->data as $data)
                            <div class="col-6 col-md-3 col-lg-3">
                                @if($data['media_type']=='IMAGE')
                                    <img class="card-img" src="{{ $data['media_url'] }}" alt="">
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-3 justify-content-center text-center">
                        <div class="col-12 col-md-3 col-lg-3">
                            <p>게시물 선택게</p>
                            <span>1 / 2</span>
                        </div>
                        <div class="col-12 col-md-6 col-lg-9">
                            <div class="row">
                                <div class="col-4 col-md-3 col-lg-2">
                                    <img src="{{asset('front_asset/images/im2.PNG')}}" class="card-img"
                                    alt="..."><p class="counttxt">3</p> 
                                </div>
                                <div class="col-4 col-md-3 col-lg-2">
                                    <img src="{{asset('front_asset/images/im2.PNG')}}" class="card-img"
                                    alt="..."><p class="counttxt">3</p> 
                                </div>
                                <div class="col-4 col-md-3 col-lg-2">
                                    <img src="{{asset('front_asset/images/im2.PNG')}}" class="card-img"
                                    alt="..."><p class="counttxt">3</p> 
                                </div>
                                <div class="col-4 col-md-3 col-lg-2">
                                    <img src="{{asset('front_asset/images/im2.PNG')}}" class="card-img"
                                    alt="..."><p class="counttxt">3</p> 
                                </div>
                                <div class="col-4 col-md-3 col-lg-2">
                                    <img src="{{asset('front_asset/images/im2.PNG')}}" class="card-img"
                                    alt="..."><p class="counttxt">3</p> 
                                </div>
                            </div>
                            <div class="checkbtn">
                                <button type="submit" class="btn btn-block text-white justify-content-center">확인</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
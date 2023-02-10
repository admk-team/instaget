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
                        @foreach ($media['data'] as $data)
                            @if($data['media_type']=='IMAGE')
                                <div class="col-6 col-md-3 col-lg-3">
                                    <img class="card-img" src="{{ $data['media_url'] }}" alt="" onclick="select_img(this)">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="row mt-3 justify-content-center text-center">
                        <div class="col-12 col-md-3 col-lg-3">
                            <p>게시물 선택게</p>
                            <span>0 / {{ count($media['data']) }}</span>
                        </div>
                        <div class="col-12 col-md-6 col-lg-9">
                            <div class="row" id="append_img">
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
<script>
    var count=0;
    function select_img(e){
        count++;
        let img=$('<img src="" class="card-img"/>');
        img.attr('src',e.src);
        let img_container=$('<div class="col-4 col-md-3 col-lg-2"><div class="child_img"></div><p class="counttxt">'+count+'</p></div>');
        img_container.find('div.child_img').append(img);
        $('#append_img').append(img_container);
    }
</script>
@endsection
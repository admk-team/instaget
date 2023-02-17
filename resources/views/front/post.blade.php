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
                            <p class="">게시물 선택</p>
                        </div>
                        <div class="col-12 col-md-3 col-lg-4 mb-2 text-center">
                            <p class="">게시물 선택 100</p>
                            <p><span class="num">92</span>/100</p>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center text-center">
                        @foreach ($medias as $media)
                            {{-- @if($data['media_type']=='IMAGE') --}}
                                <div class="col-6 col-md-3 col-lg-3 p-2">
                                    
                                    <img crossorigin="instagram.fisb9-1.fna.fbcdn.net" class="card-img border-1" src="data:image/jpg;base64,{{ base64_encode(file_get_contents($media->getImageThumbnailUrl())) }}" height="120" alt="" onclick="select_img(this)" data-id="{{ $media->getId() }}">
                                </div>
                            {{-- @endif --}}
                        @endforeach
                    </div>
                    <div class="row mt-3 justify-content-center text-center">
                        <div class="col-12 col-md-3 col-lg-3">
                            <p>게시물 선택게</p>
                            <span class="total-select">0 </span><span>/ {{ count($medias) }}</span>
                        </div>
                        <div class="col-12 col-md-6 col-lg-9">
                            <div class="row" id="append_img">
                            </div>
                        </div>
                        
                        <div class="checkbtn mt-4">
                            <form action="{{ route('front.place.order') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id[]" class="set_user_ids">
                                <button type="submit" class="btn btn-block text-white justify-content-center">확인</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var count=0;
    var id=[];
    function select_img(e){
        if(e.classList.contains('selected')){
            return 0;
        }

        let user_id=e.dataset.id
        e.classList.add('selected');
        count++;
        let img=$('<img src="" class="card-img"/>');
        img.attr('src',e.src);
        let img_container=$('<div class="col-4 col-md-3 col-lg-2"><div class="child_img"></div><p class="counttxt">'+count+'</p></div>');
        img_container.find('div.child_img').append(img);
        $('#append_img').append(img_container);
        $('.total-select').html('')
        $('.total-select').append(count)
        id.push(user_id);
        $(".set_user_ids").val('');
        $(".set_user_ids").val($("input.set_user_ids").val() + id);
    }
</script>
@endsection
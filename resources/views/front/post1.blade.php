@extends('layouts.layout')
@section('container')
@php
    $package_data = DB::table('packages')->where('id' , session()->get('PACKAGE_ID'))->first();
    $qty = $package_data->qty ?? 0;
    // $package_data = \App\Models\Package::find(session()->get('PACKAGE_ID'));
@endphp
<style>
.img-info{
    display: none;
    position: absolute;
    bottom: 11px;
    left: 10px;
    right: 10px;
    color: #fff;
    overflow: hidden;
    background: rgba(0,0,0,.4);
    line-height: 20px;
    font-size: 14px;
    text-align: center;
    padding: 4px 0;
    }
    img.selected+.img-info{
        display: block
    }
</style>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-7">
            <div class="card m-1 p-1">
                <div class="card-body">
                    <div class="sharepost ">
                        <button class="btn  text-white">게시물 선택</button>
                    </div>
                    <div class="row mt-3">
                        <div class="col-7 col-md-6 col-lg-6 d-flex mb-2 text-center ">
                            <img src="{{('/storage/iguser/'. $username .'_user.jpg') ??  asset('front_asset/images/5.png')}}" class="rounded-circle profilepic" alt="...">
                            <div class="m-2 d-flex flex-column align-items-baseline">
                                <h6><span>@</span>{{ $username }}</h6>
                                {{-- <a href="#" style="color:#656565; text-decoration:underline; letter-spacing:0.9px;">Change username</a> --}}
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 mb-2 text-center col-5 d-none d-md-block">
                            <p class="">구매상품 :좋아요</p>
                            <p class=""><span class="total-select">0</span>/<span class="per-post">{{ $qty }}</span></p>

                        </div>
                        {{-- for mobile device --}}
                        <div class="col-md-6 col-lg-6 mb-2 text-center col-5 d-block d-md-none">
                            <p class="" style="font-size:12px;">구매상품 :좋아요</p>
                            <p class="" style="font-size:12px;"><span class="total-select">0</span>/<span class="per-post">{{ $qty }}</span></p>

                        </div>
                        {{-- end here --}}
                        <p style="font-size:13px; text-align:right;">※ 지녀 예비품은 나중에 사용할 수 없습니다.</p>
                    </div>
                    <div class="row mt-3 justify-content-center text-center" id="img-select">
                        <!-- loop start -->
                        <div class="col-6 col-md-3 col-lg-3 p-2 ig-image d-none position-relative">
                            <img crossorigin="instagram.fisb9-1.fna.fbcdn.net" class="card-img border-1" src="data:image/jpg;base64," height="122" alt="" onclick="select_img(this)" data-id="">
                          <div class="img-info"><span class="info-cnt"></span> likes</div>

                        </div>
                        <!-- loop end -->
                    </div>
                    <div class="row mt-3 justify-content-center text-center">
                        <div class="col-12 col-md-3 col-lg-3">
                            <p>선택한 게시물</p>
                            <span class="total-select">0 </span>/ <span id="pcount"></span>
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
    var count = 0;
    var total = {{ $qty }};
    var id = [];

    function select_img(e) {

        if (e.classList.contains('selected')) {
            let e_id = e.dataset.id;
            e.classList.remove('selected');
            $('#im' + e_id).remove();
            count--;
            id = id.filter(function(item, i) {
                return i !== e_id;
            })
            $(".set_user_ids").val('');
            $(".set_user_ids").val($("input.set_user_ids").val() + id);

            $('.total-select').html('')
            $('.total-select').append(count)

            //quntity for each post
            $('.per-post').html(calculate_per_post(count, total));

        } else {
            let user_id = e.dataset.id
            e.classList.add('selected');
            count++;
            if(count > 10) {
                alert('You cannot select more than 10 posts')
                e.classList.remove('selected');
                count--;
            }else if(total/count < 25){
                alert('You may not select less than 25 likes per post.')
                e.classList.remove('selected');
                count--;

            } else {
                let img = $('<img src="" class="card-img"/>');
                img.attr('src', e.src);
                let img_container = $('<div class="col-4 col-md-3 col-lg-2" id="im' + user_id + '" ><div class="child_img"></div><p class="counttxt">' + count + '</p></div>');
                img_container.find('div.child_img').append(img);
                $('#append_img').append(img_container);
                $('.total-select').html('')
                $('.total-select').append(count)
                id.push(user_id);
                $(".set_user_ids").val('');
                $(".set_user_ids").val($("input.set_user_ids").val() + id);
                $('.img-info').html('<span class="info-cnt">'+calculate_per_post(count, total)+' likes</span>')


                //quntity for each post
                $('.per-post').html(calculate_per_post(count, total));
            
            }

        }
    }


    function calculate_per_post(qty=1,total=1){
        return parseInt(total/qty);
    }

</script>

<script>
    let username = "{{ $username ?? ' -- ' }}";
    $.get('/storage/ig/' + username + '-cache.json').then((response) => {

        return response;
    }).then((data) => {
        $('#pcount').html(data.length);
        data.map((item, i) => {
            let image = item.image;
            let id = item.id;
            let elementClone = $('.ig-image').first().clone();
            aPost(id, image, elementClone);

        })
    })

    function aPost(id, image, elc) {

        elc.toggleClass('d-none');
        elc.toggleClass('ig-image');
        elc.find('img').attr('src', 'data:image/jpg;base64, ' + image);
        elc.find('img').data('id', 'data:image/jpg;base64, ' + image);
        $('#img-select').append(elc);
    }

</script>

@endsection

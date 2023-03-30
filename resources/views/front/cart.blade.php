@extends('layouts.layout')
@section('container')
<style>
    .order-search {
        background-color: #d98100;
        padding: 27px;
        margin-bottom: 54px;
    }

    .main {
        max-width: 1080px;
    }

    .main {
        color: #2B2C34;
        margin: 0 auto;
    }

    a {
        padding: 10px;
    }
    
.process {
    text-align: center;
    margin-bottom: 31.5px;
}

.process-cart {
    color: #e75e3e;
    font-size: 22.5px;
}

.process-order {
    color: #ABABAD;
    font-size: 21.6px;
}

.process-complete {
    color: #ABABAD;
    font-size: 21.6px;
}

.add_to_cart_border_bottom {
    border-top: 2px solid;
    border-bottom: 1px solid lightgray;

}

.add_to_cart_border_bottom__1 {
    border-bottom: 1px solid lightgray;
}

@media(min-width: 768px) {
    .add_to__cart__mobile_device{
        display:none;
    }
    .add_to_cart_btn__row__1{
        display: none;
    }
}

@media(max-width: 767px) {

    .add_to_cart_border_bottom__1,
    .add_to_cart_border_bottom {
        display: none
    }

    .add_to__cart__mobile_device {
        display: flex;
    }

    .add_to_cart_btn__row__1 , 
    .add_to_cart_btn__row{
        display: none;
    }
    .add_to_cart_btn__row__1{
        display: flex;
    }

}

</style>
<main class="main container" style="margin-top:160px">
    {{-- <h1 class="text-center add_to_cart__heading" style="margin-bottom:55px;">쇼핑 바구니</h1> --}}
    <h1 class="text-center add_to_cart__heading">쇼핑 바구니</h1>
    <div class="process mb-5">
        <span class="process-cart">장바구니 <i class="bi bi-caret-right"></i> </span>
        <span class="process-order">주문/결제 <i class="bi bi-caret-right"></i></span>
        <span class="process-complete">주문완료</span>
    </div>

    <div class="row add_to_cart_border_bottom p-2">
        <div class="col-md-1">
            <input class="form-check-input " type="checkbox" onClick="toggle(this)" value="" id="flexCheckDefault">
        </div>
        <div class="col-md-3">
            <h6 class="">상품명</h6>
        </div>
        <div class="col-md-1">
            <h6 class="">옵션</h6>
        </div>
        <div class="col-md-1">
            <h6 class=""> 가격</h6>
        </div>
        <div class="col-md-2">
            <h6 class="">수량</h6>
        </div>
        <div class="col-md-2">
            <h6 class="">합집합</h6>
        </div>
        <div class="col-md-2">
            <h6 class="">예약하다</h6>
        </div>
    </div>


    {{-- for mobile devices --}}
    <div class="container">
    <div class="row add_to__cart__mobile_device justify-content-between">
        <div class="col-sm-1 col-1 align-items-center">
            <input class="form-check" type="checkbox" name="checkbox" value="" id="flexCheckDefault">
        </div>
        <div class="col-sm-8 col-8 d-flex justify-content-between">
            <h6 class="d-flex mx-1" style="gap:13px;">
                <img style="min-width:50px; height:50px;" class="img-fluid" src="{{ asset('front_asset/images/insta-before-click.png') }}">
                <div>
                    <p style="font-size:17px" class="text-center">후속 조치</p>
                    <p style="font-size:12px" class="text-center">팔로워 50명 추가</p>
                    <p class="text-center"> ￦7,500</p>
                    <p><a href="javascript:void(0)"><img src="{{ asset('front_asset/images/arrow-left-black.png') }}"></a>3개<a href="javascript:updateBasket(56, 1)"><img src="{{ asset('front_asset/images/arrow-right-black.png') }}"></a></p>
                </div>
            </h6>
       
        </div>
        <div class="col-sm-1 col-1">
            <img src="{{ asset('front_asset/images/icon-x-black.png') }}">
        </div>   
    </div>
    
    </div>
        {{-- end mobiel devices --}}

    <div class="row add_to_cart_border_bottom__1 p-2">
        <div class="col-md-1">
            <input class="form-check-input" type="checkbox" name="checkbox"  value="" id="flexCheckDefault">
        </div>
        <div class="col-md-3">
            <h6 class=" d-flex gap-2"><img src="{{ asset('front_asset/images/insta-before-click.png') }}" width="56px;" height="56px;">
                <div class="">
                    <p style="font-size:17px">후속 조치</p>
                    <p style="font-size:12px">팔로워 50명 추가</p>
                </div>
            </h6>
        </div>
        <div class="col-md-1">
            <h6 class="">50</h6>
        </div>
        <div class="col-md-1">
            <h6 class=""> ￦7,500</h6>
        </div>
        <div class="col-md-2">
            <h6 id="number" ><a href="javascript:void(0)"><img src="{{ asset('front_asset/images/arrow-left-black.png') }}"></a>
               <span class="change_number"> 3개</span>
                <a href="javascript:updateBasket(56, 1)"><img src="{{ asset('front_asset/images/arrow-right-black.png') }}"></a></h6>
        </div>
        <div class="col-md-2">
            <h6 class="">￦70,000</h6>
        </div>
        <div class="col-md-2">
            <h6 class="">1,400원</h6>
        </div>
    </div>
    <div class="d-flex justify-content-between p-2">
        <p>상품금액</p>
        <p>￦105,000</p>
    </div>

    <div class="p-3" style="background: #F6F6F6">
        <div class="d-flex justify-content-between">
            <p>합계</p>
            <p>￦105,000</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>적립금</p>
            <p>2,100원</p>
        </div>
    </div>
    <div class="row mt-5 mb-5 add_to_cart_btn__row">
        <div class="col-md-4">
            <button class="btn p-3 h-10 " style="border:1px solid black;height: 67.5px;width: 184.5px;">선택 상품 주문</button>
        </div>

        <div class="col-md-8 d-flex justify-content-end gap-3 ">
            <button class="btn p-3 h-10 " style="border:1px solid black;height: 67.5px;width: 184.5px;">선택 상품 주문</button>
            <button class="btn btn-dark p-3 " style="height: 67.5px;width: 184.5px;">선택 상품 주문</button>
        </div>
    </div>
    {{-- for mobiel device  --}}

    <div class="row mt-2 mb-5 add_to_cart_btn__row__1">
        <div class="col-sm-4 col-4">
            <button class="btn" style="border:1px solid black; font-size:8px; ">선택 상품 주문</button>
        </div>
        <div class="col-sm-8 col-8">
            <button class="btn" style="border:1px solid black;font-size:9px; ">선택 상품 주문</button>
            <button class="btn btn-dark" style="font-size:9px;">선택 상품 주문</button>
        </div>
    </div>


</main>
<script language="JavaScript">
            function toggle(source) {
                checkboxes = document.getElementsByName('checkbox');
                for(var i=0, n=checkboxes.length; i<n; i++) {
                    checkboxes[i].checked = source.checked;
                }
            }
    </script>

<script>
function toggle(source) {
  checkboxes = document.getElementsByName('checkbox');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
@endsection

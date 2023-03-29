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

</style>
<main class="main container" style="margin-top:160px">
    <h1 class="text-center add_to_cart__heading" style="margin-bottom:55px;">shopping basket</h1>
    <div class="process">
        <span class="process-cart">장바구니 <i class="bi bi-caret-right"></i> </span>
        <span class="process-order">주문/결제 <i class="bi bi-caret-right"></i></span>
        <span class="process-complete">주문완료</span>
    </div>
    <table class="table w-100 ">
        <thead>
            <tr>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                </th>
                <th class="pt-3 pb-3">product name</th>
                <th class="pt-3 pb-3">option</th>
                <th class="pt-3 pb-3"> price</th>
                <th class="pt-3 pb-3">quantity</th>
                <th class="pt-3 pb-3">sum</th>
                <th class="pt-3 pb-3">Reserve</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                </td>
                <td class="d-flex" style="gap:3px"><img src="{{ asset('front_asset/images/insta-before-click.png') }}" width="56px;">
                    <div class="">
                        <p>follow up</p>
                        <p>50 more followers</p>
                    </div>
                </td>
                <td>50</td>
                <td>￦7,500</td>
                <td>
                    <a href="javascript:updateBasket(56, -1)"><img src="{{ asset('front_asset/images/arrow-left-black.png') }}"></a>
                    3개
                    <a href="javascript:updateBasket(56, 1)"><img src="{{ asset('front_asset/images/arrow-right-black.png') }}"></a>
                </td>
                <td>￦70,000</td>
                <td>1,400원</td>
            </tr>
        </tbody>
    </table>

    <div class="d-flex justify-content-between">

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
    <div class=" d-flex justify-content-between mt-5 mb-5 ">
        <button class="btn p-3 h-10 " style="border:1px solid black;height: 67.5px;width: 184.5px;">회원 정보 수정</button>
        <div class="d-flex" style="gap:5px">
            <button class="btn p-3 h-10 " style="border:1px solid black;height: 67.5px;width: 184.5px;">회원 정보 수정</button>
            <button class="btn btn-dark p-3 " style="height: 67.5px;width: 184.5px;">회원 정보 수정</button>
        </div>
    </div>


</main>
@endsection

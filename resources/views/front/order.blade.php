@extends('layouts.layout')
@section('container')
<div class="row justify-content-center ms-auto m-4">
    <div class="col-lg-5 w-30">
        <div class="card">
            <div class="card-body">
                <div class="text-center order-title">주문&결제</div>
                <hr>
                <form style="margin-top: 7%;">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><img class="input-icon" src="{{ asset('front_asset/images/insta-icon.png')}}"> </span>
                        <input type="text" class="form-control border-left-0" placeholder="인스타그램 계정 입력" name="insta_username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><img class="input-icon" src="{{ asset('front_asset/images/at.svg')}}">
                        </span>
                        <input type="text" class="form-control border-left-0" placeholder="이메일 입력" name="email" aria-label="email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><img class="input-icon" src="{{ asset('front_asset/images/heart.PNG')}}"> </span>
                        <select class="form-select border-left-0" name="insta_username" id="">
                            <option value="{{ $package->id }}" selected style="display: flex; gap:2rem">{{ $package->title }}</option>
                            @foreach ($packages as $item)
                            <option data-price="{{ $item->sale_price }}" value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                        <span class="order-page-selected-price">{{ '$'.$package->sale_price }}</span>
                    </div>
                    <hr>
                    <div class="cardbox">
                        <h4>주의사항</h4>
                        <p class="card-text">
                            작업도중 아이디를 바꾸시거나, 비공개 계정으로 전환하실 시 서비스는 중단됩니다.
                            주문량에 따라 완료까지 소요시간은 상이할 수 있습니다.
                            위와 같은 경우, 서비스 환불 및 교환, 재작업은 불가합니다.</p>
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn btn-block text-white">주문하기</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.layout')
@section('container')
<div class="container">
    <div class="row justify-content-center ms-auto mt-5 mb-5">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <p class="payheader text-center">주문상품 확인</p>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                </tr>
                                <tr>
                                    <th>{{ $package->sub_category->category->service->title ?? '' }}</th>
                                    <th>{{ $package->qty ?? '' }}</th>
                                    <th>
                                        @if($package->sale_price)
                                            {{ $package->sale_price * $package->qty }}
                                        @else
                                            {{ $package->original_price * $package->qty }}
                                        @endif
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-3">
                        <p class="text-center order-paragraph">
                            최종 결제 금액
                            <span class="orange_bg">
                                @if($package->sale_price)
                                    {{ $package->sale_price * $package->qty }}
                                @else
                                    {{ $package->original_price * $package->qty }}
                                @endif
                            </span>
                        </p>
                    </div>
                    <div class="row mt-3">
                        <p class="payment-method-heading">결제수단</p>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-6">
                            <input type="radio" name="credit_card" id="credit_card" class="form-radio credit_card">
                            <label for="">신용카드</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="deposit_without_bankbook" id="deposit_without_bankbook" class="form-radio deposit_without_bankbook">
                            <label for="">무통장입금</label>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="paymentbtn justify-content-center m-auto">
                            <button type="submit" class="btn btn-block text-white ">결제하기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

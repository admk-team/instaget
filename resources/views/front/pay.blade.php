@extends('layouts.layout')
@section('container')
<div class="container">
<div class="row justify-content-center ms-auto mt-5 mb-5">
    <div class="col-lg-6 w-30">
        <div class="card border-radius-0">
            <div class="card-body">
                <div class="paycard border-radius-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <p class="payheader text-center">주문상품 확인</p>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">service name</th>
                                    <th scope="col">quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Point</th>
                                </tr>
                                <tr>
                                    <th>korean likes</th>
                                    <th>100</th>
                                    <th>10,000원</th>
                                    <th>100원</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=" pointcontainer">
                    <p>포인트</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="100포" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary btnpoints" type="button">사용 포인트</button>
                        </div>
                    </div>
                </div>
                <div class="paycard border-radius-0">
                    <div class="finalamount">
                        <h1>최종 결제 금액 : <span style="color:#ff563d ;"> 9,900원</span></h1>
                    </div>

                </div>
                <div class="method">
                    <p>결제수단</p>
                    <div class="row">
                        <div class="col text-center">
                            <div class="form-check form-check-inline paymentcheck">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="bg-white m-0 p-0">신용카드</label>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="bg-white m-0 p-0">무통장입금</label>

                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="paymentbtn justify-content-center m-auto">
                <button type="submit" class="btn btn-block text-white ">결제하기</button>
            </div>
        </div>

    </div>

</div>
</div>

@endsection
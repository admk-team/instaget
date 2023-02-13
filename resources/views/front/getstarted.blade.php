@extends('layouts.layout')
@section('container')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center ms-auto">
        <div class="col-lg-6 w-30">
            <div class="checkflex">
                <div class="card">
                    <div class="border-card">
                        <div class="card-body ">
                            <div class="boxheading text-center">주문&결제</div>
                            <hr>
                            <form style="margin-top: 7%;" class="getstarted_form">
                                <div class="input-group mb-3">
                                    <span class="input-group-text order-icon" id="basic-addon1"><img
                                            class="input-icon icon" src="front_asset/images/talk-before-click.png">
                                    </span>
                                    <input type="text" class="form-order border-left-0  getstarted_form--input1 form-control"
                                        placeholder="인스타그램 계정 입력" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text order-icon" id="basic-addon1"><img
                                            class="input-icon icon" src="front_asset/images/talk-before-click.png">
                                    </span>
                                    <input type="text" class="form-order border-left-0 form-control getstarted_form--input1"
                                        placeholder="이메일 입력" aria-label="email" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group">
                                    <div class="selector">
                                        <!-- <input type="hidden" name="plan" value="5"> -->
                                        <img class="input-icon likeicon" src="front_asset/images/talk-before-click.png"
                                            style="width:20px;">
                                        <button type="button" class="form-order getstarted_btn form-control"><strong>100</strong>
                                            추종자<span class="alt">$2.97</span></button>
                                        <div class="dropdown-menu">
                                            <a href="#" data-value="5"><span class="desc"><strong>100</strong>
                                                    followers</span><span class="alt">$2.97</span></a>
                                            <a href="#" data-value="112"><span class="desc"><strong>250</strong>
                                                    followers</span><span class="alt">$4.99</span></a>
                                            <a href="#" data-value="6"><span class="desc"><strong>500</strong>
                                                    followers</span><span class="alt">$6.99</span></a>
                                            <a href="#" data-value="61"><span class="desc"><strong>1000</strong>
                                                    followers</span><span class="alt">$12.99</span></a>
                                            <a href="#" data-value="7"><span class="desc"><strong>2500</strong>
                                                    followers</span><span class="alt">$29.99</span></a>
                                            <a href="#" data-value="8"><span class="desc"><strong>5000</strong>
                                                    followers</span><span class="alt">$39.99</span></a>
                                            <a href="#" data-value="177"><span class="desc"><strong>10000</strong>
                                                    followers</span><span class="alt">$55.99</span></a>
                                            <a href="#" data-value="178"><span class="desc"><strong>20000</strong>
                                                    followers</span><span class="alt">$99.99</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="cardbox">
                                    <h4>주의사항</h4>
                                    <p class="card-text">
                                        작업도중 아이디를 바꾸시거나, 비공개 계정으로 전환하실 시 서비스는 중단됩니다.
                                        주문량에 따라 완료까지 소요시간은 상이할 수 있습니다.
                                        위와 같은 경우, 서비스 환불 및 교환, 재작업은 불가합니다.</p>
                                </div>
                                <div class="button-group">
                                    <button type="submit" class="btn btn-block text-white p-3">주문하기</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
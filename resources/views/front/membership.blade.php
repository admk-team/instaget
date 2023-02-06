@extends('layouts.layout')
@section('container')
<div class="row justify-content-center ms-auto m-5">
  <div class="col-lg-5 w-30">
    <div class="card">
      <div class="card-body">
        <div class="text-center order-title">회원가입</div>
        <div class="justify-content-center d-flex gap-5">
          <p class="logintxt">이미 회원인가요?</p>
        <p class="logintxt regtxt" >로그인 바로가기</p>
        </div>
        <hr>
        <form style="margin-top: 7%;">
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img class="input-icon" src="{{ asset('front_asset/images/at.svg') }}"> </span>
            <input type="text" class="form-control border-left-0" placeholder="이메일  " aria-label="email" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><img class="input-icon" src="{{ asset('front_asset/images/insta-icon.png') }}"> </span>
              <input type="text" class="form-control border-left-0" placeholder="비밀번호" aria-label="Password" aria-describedby="basic-addon1">
            </div>
            <div class="button-group">
              <button type="submit" class="btn btn-block text-white">회원가입</button>
              </div>
        </form>

        
        </div>
      </div>
      <div class="memberbtn">
          <button type="submit" class="btn btn-block">비회원 구매하기</button>
              </div>
    </div>
  </div>
  
</div>
@endsection
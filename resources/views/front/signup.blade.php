@extends('layouts.layout')
@section('container')
<div class="row justify-content-center ms-auto m-5">
  <div class="col-lg-5 w-30">
    <div class="card">
      <div class="card-body">
        <div class="text-center order-title">로그인</div>
        <div class="justify-content-center d-flex gap-5">
          <p class="logintxt">아직 회원이 아닌가요?</p>
        <p class="logintxt regtxt" >회원가입 바로가기</p>
        </div>
        <hr>
        <form style="margin-top: 7%;" method="POST" action="{{ route('front.register') }}">
          @csrf
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img class="input-icon" src="{{ asset('front_asset/images/at.svg') }}"> </span>
            <input type="email" name="email" class="form-control border-left-0" placeholder="이메일 " aria-label="email" aria-describedby="basic-addon1">
          </div>
          @error('email')
          <span class="text-danger">{{$message }}</span>
         @enderror
          <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><img class="input-icon" src="{{ asset('front_asset/images/insta-icon.png') }}"> </span>
              <input type="password" name="password" class="form-control border-left-0" placeholder="비밀번호" aria-label="Password" aria-describedby="basic-addon1">
         </div>
         @error('password')
              <p class="text-danger">{{$message }}</p>
        @enderror
            <div class="button-group">
              <button type="submit" class="btn btn-block text-white">비회원 구매하기</button>
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
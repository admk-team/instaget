@extends('layouts.layout')
@section('container')
<div class="row justify-content-center mr-2 ml-2 md-ms-auto mt-5 mb-5">
  <div class="col-12 col-lg-5">
    <div class="login-card card">
      <div class="card-body">
        <h2 class="text-center mb-3">가입하기</h2>
        <div class="justify-content-center d-flex gap-5">
          <a href="{{ route('front.user.login') }}" class="text-dark text-decoration-none">이미 회원인가요?</a>
          <a href="javascript:void(0)" class="text-oraing text-decoration-none membership_btn">회원가입 바로가기</a>
        </div>
        <hr>
        <form method="POST" action="{{ route('front.user.registration') }}" class="mt-5">
          @csrf
          <div class="input-group mb-3 login-group">
            <span class="input-group-text" id="basic-addon1">
              <img src="{{ asset('front_asset/images/icons/email.svg') }}" alt="">
            </span>
            <input type="email" name="email" class="form-control border-left-0" placeholder="이메일 " aria-label="email" aria-describedby="basic-addon1" value="{{ $email ?? old('email') ?? '' }}">
          </div>
          @error('email')
          <span class="text-danger">{{$message }}</span>
          @enderror
          <div class="input-group mb-3 login-group">
            <span class="input-group-text" id="basic-addon1">
              <img src="{{ asset('front_asset/images/icons/lock.svg') }}" alt="">
            </span>
            <input type="password" name="password" class="form-control border-left-0" placeholder="비밀번호" aria-label="Password" aria-describedby="basic-addon1">
          </div>
          @error('password')
          <p class="text-danger">{{$message }}</p>
          @enderror
          <div class="button-group">
            <button type="submit" class="btn btn-block text-white login">비회원 구매하기</button>
          </div>
        </form>
      </div>
    </div>
    <div class="guest-login mt-4">
      <a href="{{ route('front.instagram.guestpost', isset($email) ? ['email'=> $email] : []) }}" class="btn guest_btn w-100">비회원 구매하기</a>
    </div>
  </div>
</div>
@endsection

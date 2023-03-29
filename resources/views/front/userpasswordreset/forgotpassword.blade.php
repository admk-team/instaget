@extends('layouts.layout')
@section('container')

<div class="container-fluid m-0 p-0">
    {{-- Login Page Code Start here --}}
    <section class="gradient-custom">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center  h-100">
                <div class="col-12 col-md-6 col-lg-6 col-xl-5" style="margin-top:160px; margin-bottom:120px;">
                    <div style="margin-bottom:200px;">
                        <h1 class="text-center user_reset_password__text">비밀번호 재설정</h1>
                    </div>
                  
                    <div class="mb-md-5 mt-md-4 pb-5">
                        <form method="POST" action="{{ route('password.reset.email') }}">
                            @csrf
                            <div class="form-outline form-white mb-3">
                                <input class="form-control" id="username" name="email" placeholder="로그인" type="email"
                                    style="padding: 32px 18px;">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-outline form-white mb-4 ">
                                <button type="submit" class="form-control loginbtn btn btn-dark"
                                    style="padding: 32px 18px;">로그인</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Login Page Code End here --}}
</div>
@endsection
@extends('layouts.layout')
@section('container')
<div class="container-fluid m-0 p-0">
    {{-- Login Page Code Start here --}}
    <section class="gradient-custom">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center  h-100">
                <div class="col-12 col-md-6 col-lg-6 col-xl-5">
                    <h1 class="text-center loginText">비밀번호 재설정</h1>
                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ session()->get('error') }}
                    </div>
                    @endif
                    @if(session()->has('alert'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ session()->get('alert') }}
                    </div>
                    @endif
                    <div class="mb-md-5 mt-md-4 pb-5">
                        <form method="post" action="{{ route('reset.change.password') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-outline form-white mb-3">
                          
                                    <input class="form-control" readonly  id="email" name="email" placeholder="로그인" type="email"
                                    style="padding: 32px 18px;" value="{{ request()->get('email') }}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                            </div>
                            <div class="form-outline form-white mb-3">
                                <input class="form-control"   id="password" name="password" placeholder="비밀번호" type="password"
                                style="padding: 32px 18px;">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="form-outline form-white mb-3">
                                <input class="form-control"   id="password" name="password_confirmation" placeholder="비밀번호 확인" type="password"
                                style="padding: 32px 18px;">
                                    @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="form-outline form-white mb-4 ">
                                <button type="submit" class="form-control form-control-lg bg-dark loginform border-0"> <span 
                                    class="text-white loginbtn">제출하다</span> </button>
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
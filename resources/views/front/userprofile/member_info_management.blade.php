@extends('layouts.layout')
@section('container')
@include('layouts.userheader')
<style>
    

</style>
<main class="main" style="margin-top:160px">
    <h1 class="text-center userinfo__heading">회원 정보 관리 </h1>

    <div class="container-fluid m-0 p-0">
        {{-- Login Page Code Start here --}}
        <section class="gradient-custom ">
            <div class="container py-5 h-100 ">
                <div class="row d-flex justify-content-center  h-100">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-5 ">
    
    <form id="edit_form" class="signup" method="post" action="./edit">
        <div class="sub-header mb-3" style="font-size:22.5px">회원 정보 관리</div>

            <div class="signup-naver-logo"></div>
            <div class="form-group">
                <input class="form-control" id="username" name="username" placeholder="이름" type="text" value="LI DAN" style="padding: 32px 18px;">
            </div>
            <div class="form-group d-flex ">
                <input class="form-control w-75" id="username" name="username" placeholder="이름" type="text" value="lidan1991@naver.com" style="padding: 32px 18px;">
                <button class="w-25 member_info__button">수정</button>

            </div>
            <div class="form-group">
                <input class="form-control" id="username" name="username" placeholder="이름" type="text" value="비밀번호" style="padding: 32px 18px;">
            </div>
            <div class="form-group">
                <input class="form-control" id="username" name="username" placeholder="이름" type="text" value="비밀번호 확인" style="padding: 32px 18px;">
            </div>
            <div class="form-group">
                <input class="form-control" id="username" name="username" placeholder="이름" type="text" value="01099156563" style="padding: 32px 18px;">
            </div>
            <div class="form-group d-flex justify-content-center mt-5">
                <button class="btn btn-dark p-3 w-50">회원 정보 수정</button>
            </div>
    </form>
  
                    </div>
                </div>
            </div>
        </section>
        <div class="form-group d-flex justify-content-center" style="margin-top:50px; gap:50px">
            <p>인스타겟 서비스가 더 이상 필요하지 않으신가요?</p>
            <a href="#" style="cursor:pointer;">회원탈퇴</a>
                </div>
    </div>
</main>

@endsection

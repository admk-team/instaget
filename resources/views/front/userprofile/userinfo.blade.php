@extends('layouts.layout')
@section('container')

@include('layouts.userheader')
<div class="row justify-content-center mr-2 ml-2 md-ms-auto  mb-5" style="margin-top:160px">
   <h1 class="text-center userinfo__heading">서비스 진행 중</h1>
    <div class="container">
        <div class="row userinfo__row" style="overflow=hidden">
            <div class="col-md-6 col-sm-5 col-5 d-flex justify-content-center">
                <a ref="?=recent"  class="userinfo__anchor">서비스 진행 중</a>
            </div>
            <div class="col-md-6 col-sm-5 col-5 d-flex justify-content-center">
                <a  ref="?=recent"  class="userinfo__anchor">마지막 서비스</a>
            </div>
            <hr>
            <hr>
        </div>
        <p class="text-center">3은 사용 가능한 서비스가 없습니다.</p>
        </div>
    </div>

@endsection

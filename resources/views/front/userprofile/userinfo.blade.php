@extends('layouts.layout')
@section('container')
<style>
    .btn-query {
    float: left;
    display: inline-block;
    width: 540px;
    border-bottom: 1px solid #2B2C34;
    padding-bottom: 13.5px;
    text-align: center;
    margin-bottom: 31.5px;
    color: #ABABAD;
    font-size: 21.6px;
    font-weight: 300;
    }
    .btn-query-active {
    border-bottom: 2px solid #2B2C34;
    padding-bottom: 12.6px;
    color: #2B2C34;
    font-weight: 500;
}
</style>
@include('layouts.userheader')
<div class="row justify-content-center mr-2 ml-2 md-ms-auto  mb-5" style="margin-top:160px">
    <div>
        <h1 class="text-center userinfo__heading">서비스 진행 중</h1>
    </div>
    <div class="container">
        <div class="row userinfo__row" style="overflow=hidden">
            <div class="col-md-6 col-sm-5 col-5 d-flex justify-content-center">
                <a class="btn-query btn-query-active removeclass" id="borderChange" href="#" onclick="SetDivPosition();">진행중인 서비스</a>
                
            </div>
            <div class="col-md-6 col-sm-5 col-5 d-flex justify-content-center">
                <a class="btn-query border-chanage" href="#" id="borderChange"  onclick="SetDivPosition();">지난 서비스</a>
            </div>
            <div class="col-md-12 col-sm-5 col-5 ">
            <hr>
            </div>
        </div>
        <p class="text-center">이용 가능한 서비스가 없습니다</p>
        </div>
    </div>

    <script>
          $(".btn-query").click(function(){
        $(".border-chanage").addClass("btn-query-active");
        $(".removeclass").removeClass("btn-query-active");
      });

      $('.removeclass').click(function(){
        $('.removeclass').addClass('btn-query-active');
        $(".border-chanage").removeClass("btn-query-active");
      })
    </script>
    <script>
        function setDivPosition(){
            document.getElementById('borderChange').style.borderBottom='2px solid #2B2C34';
        }
    </script>
  
@endsection

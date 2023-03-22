@extends('layouts.layout')
@section('container')
<style>

.order-search {
    background-color: #f1efff;
    padding: 27px;
    margin-bottom: 54px;
}
.main {
    max-width: 1080px;
}

.main {
    color: #2B2C34;
    margin: 0 auto;
}
.order-search-btn-group a{
    background-color: #fff;
    padding: 10px;
}
table {
    width: 100%;
    border-top: 2px solid #2B2C34;
    border-collapse: collapse;
    table-layout: fixed;
    border-spacing: 0;
    word-break: break-word;
}
tbody{
    border-top: 1px solid #2B2C34;
}
</style>
@include('layouts.userheader')
<main class="main" style="margin-top:160px">
   <h1 class="text-center">구매 내역</h1>
   <div class="order-search">
    <div class="order-search-btn-group d-flex justify-content-end">
        <a id="payments-simplefilter-0"  href="#!">오늘</a>
        <a id="payments-simplefilter-1" href="#!">1 일주</a>
        <a id="payments-simplefilter-2"  href="#!">1 개월</a>
        <a id="payments-simplefilter-3"  href="#!">3 개월</a>
    </div>
</div>
<div class="table-responsive d-none d-md-block">
<table class="order-table table">
    <thead>
    <tr>
        <th class="pt-3 pb-3">주문 번호</th>
        <th class="pt-3 pb-3">상품</th>
        <th class="pt-3 pb-3"> 지불 금액</th>
        <th class="pt-3 pb-3">주문 상태</th>
    </tr>
    </thead>

    <tbody id="payments-body"><tr><td colspan="4"><p align="center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">구매한 상품이 없습니다</font></font></p></td></tr></tbody>
</table>
</div>

<div class="table-responsive d-block d-md-none">
    <caption>명령</caption>
    <table class="order-table table">

        <thead>
        <tr>
            <th class="pt-3 pb-3">숫자</th>
            <th class="pt-3 pb-3">상품</th>
            <th class="pt-3 pb-3">지불</th>
            <th class="pt-3 pb-3">상태</th>
        </tr>
        </thead>
    
        <tbody id="payments-body"><tr><td colspan="4"><p align="center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">구매한 상품이 없습니다</font></font></p></td></tr></tbody>
    </table>
    </div>
<hr/>
</main>
@endsection

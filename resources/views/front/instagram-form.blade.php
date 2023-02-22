@extends('layouts.layout')
  @section('container')
  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-7">
        <div class="card" style="border: 0;border-radius: 20px;">
          <div class="card-body">
            @if (session()->has('error'))
                {{ session()->get('error') }}
            @endif
            <h4>주문&결제</h4>
            <hr>
            <form action="{{ route('front.instagram.fetchpost') }}" method="POST" class="pt-2 pb-2">
              @csrf
              <input type="hidden" value="{{ $package->id ?? session()->get('PACKAGE_ID') }}" name="package_id">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1" style="border: 0;position: absolute;top:10px ">
                  <img src="{{ asset('front_asset/images/icons/email.svg') }}" alt="">
                </span>
                <input type="text" name="instagram_username" class="instagram_user_field" placeholder="인스타그램 아이디" aria-label="Username" aria-describedby="basic-addon1" required>
              </div>
              <div class="input-group mb-5">
                <span class="input-group-text" id="basic-addon1" style="border: 0;position: absolute;top:10px ">
                  <img src="{{ asset('front_asset/images/icons/instagram.svg') }}" alt="">
                </span>
                <input type="email" name="email" class="instagram_user_field" placeholder="귀하의 이메일" aria-label="Username" aria-describedby="basic-addon1" required>
              </div>
              <hr>
              <div class="m-3 auto_upsell">
                <h4>주의사항</h4>
                <p>작업도중 아이디를 바꾸시거나, 비공개 계정으로 전환하실 시 서비스는 중단됩니다.
                  주문량에 따라 완료까지 소요시간은 상이할 수 있습니다.  
                  위와 같은 경우, 서비스 환불 및 교환, 재작업은 불가합니다.</p>
              </div>
              <div class="d-block continue-btn">
                <button class="w-100" type="submit">계속하다</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
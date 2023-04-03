@extends('layouts.layout')
@section('container')
<script type="text/javascript" src="https://testpay.kcp.co.kr/plugin/payplus_web.jsp"></script>

<div class="container">
    <div class="row justify-content-center ms-auto mt-5 mb-5">
        <div class="col-lg-7">
            <div class="card" style="border: 0;border-radius: 20px">
                <div class="card-body">
                    <div class="table-responsive" style="background: #f3f3f6;">
                        <table class="table ">
                            <thead>
                                <p class="payheader text-center">주문상품 확인</p>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Point</th>
                                </tr>
                                <tr>
                                    <th>{{ $package->sub_category->category->service->title ?? '' }}</th>
                                    <th>{{ $package->qty ?? '' }}</th>
                                    <th>
                                        @if($package->sale_price)
                                            {{ $package->sale_price * $package->qty }}
                                        @else
                                            {{ $package->original_price * $package->qty }}
                                        @endif
                                    </th>
                                    <th class="d-flex">
                                        <div>
                                            <span style="color: white;background: #715eff">M </span>
                                        </div>
                                        <div class="original_points" data-points="{{ isset($package->sale_price)?($package->sale_price * $package->qty)*0.02:($package->original_price * $package->qty)*0.02 }}">
                                            @if($package->sale_price)
                                                {{ ($package->sale_price * $package->qty)*0.02 }}
                                            @else
                                                {{ ($package->original_price * $package->qty)*0.02 }}
                                            @endif
                                        </div>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-3">
                        <p style="font-size: 16px;font-weight: 600">포인트들</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control enter_points" placeholder="사용 포인트" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text check_points" id="basic-addon2" style="color: white;background: #715eff">사용 포인트</span>
                            
                        </div>
                        <div class="points_error text-danger"></div>
                        <div class="points_success text-success"></div>
                    </div>
                    <div class="row mt-3" style="background: #f3f3f6;">
                        <p class="text-center order-paragraph">
                            최종 결제 금액
                            <span class="orange_bg" data-price="{{ isset($package->sale_price)?$package->sale_price * $package->qty:$package->original_price * $package->qty}}">
                                @if($package->sale_price)
                                    {{ $package->sale_price * $package->qty }}
                                @else
                                    {{ $package->original_price * $package->qty }}
                                @endif
                                원
                            </span>
                        </p>
                    </div>
                    <div class="row mt-3">
                        <p class="payment-method-heading">결제수단</p>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-6">
                            <input type="radio" name="credit_card" id="credit_card" class="form-radio credit_card" style="height: 20px;width: 20px">
                            <label for="">신용카드</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="deposit_without_bankbook" id="deposit_without_bankbook" class="form-radio deposit_without_bankbook" style="height: 20px;width: 20px">
                            <label for="">무통장입금</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="deposit_without_bankbook" id="deposit_without_bankbook" class="form-radio deposit_without_bankbook" style="height: 20px;width: 20px">
                            <label for="">가상계좌</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="deposit_without_bankbook" id="deposit_without_bankbook" class="form-radio deposit_without_bankbook" style="height: 20px;width: 20px">
                            <label for="">이동통신사 결제</label>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-8 mb-3">
                            <select name="" id="" class="form-control">
                                <option value=""> 선택 은행</option>
                            </select>
                        </div>
                        <div class="col-8">
                            <input type="text" name="" id="" class="form-control" placeholder="사용자 이름 쓰기">
                        </div>
                    </div>
                    <form name="order_info">
                        <input type="hidden" name="ordr_idxx" value="{{ $package->id }}"/>
                        <input type="hidden" name="good_name" value="{{ $package->sub_category->category->service->title }}"/>
                        <input type="hidden" name="good_mny" value="{{ $package->qty }}"/>
                        <input type="hidden" name="pay_method" value="100000000000"/> <!-- Payment Method(Credit Card) -->
                        <input type="hidden" name="site_cd" value="T0000"/>
                        <input type="hidden" name="site_key" value="3grptw1.zW0GSo4PQdaGvsF__"/>
                    </form>
                    <div class="row mt-5">
                        <div class="paymentbtn justify-content-center m-auto">
                            <button type="button" class="btn btn-block text-white" onclick="jsf__pay(document.order_info)">결제하기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
   /* Execute Standard Web */
   function jsf__pay(form )
   {
      try
      {
         KCP_Pay_Execute( form );
      }
      catch (e)
      {
         
      }
   }
</script>
<script>
    $('.check_points').click(function(){
        var original_points = $('.original_points').data('points');
        var enter_points = $('.enter_points').val();
        if(enter_points != ''){
            if(original_points == enter_points){
                var price=$('.orange_bg').data('price');
                var new_price=price-original_points;
                $('.orange_bg').html('');
                $('.orange_bg').append(new_price+'원');
                $('.points_error').html('');
                $('.points_success').html('');
                $('.points_success').append(original_points+' Points is deducted from total price.<br>  New price: <strong>'+new_price+'</strong>');
            }else{
                $('.points_success').html('');
                $('.points_error').html('');
                $('.points_error').html('You have entered the wrong points!');
            }
        }else{
            $('.points_error').html('');
            $('.points_error').html('Please enter the correct points!');
        }
        
    })
</script>

@endsection
    
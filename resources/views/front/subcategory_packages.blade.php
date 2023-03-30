
@extends('layouts.layout')
@section('container')
<div class="container-fluid m-0 p-0">
  <div class="container py-1  d-block d-sm-none p-2 mt-4">
    <!-- New Mobile Menu -->
    <div class="mobile-services-nav">
      <div class="services gap-2">
        @foreach ($services as $service)
        <div class="service" style="width: calc((100% - 2rem) / {{ count($services) }}); aspect-ratio : 1 / 0.9; max-height: 64px;">
          <div href="javascript:void(0)"
            class="text-center btn mobile-social-btn h-100 @if($loop->iteration==1) for-instagram @elseif($loop->iteration==2) for-youtube @elseif($loop->iteration==3) for-naver @elseif($loop->iteration==4) for-appMarketing  @elseif($loop->iteration==5) for-talk @endif">
            <div class="icon">
              <img src="{{ asset('storage/'.$service->bg_image ?? '') }}" alt="" class="service-front-imge">
              <img src="{{ asset('storage/'.$service->bg_image ?? '') }}" alt="" class="service-bg-imge icon-hover">
            </div>
            <!-- <div class="icon-title">
              {{ $service->title ?? '' }}
            </div> -->
          </div>
          <div class="content">
            <div class="accordion">
              @foreach ($service->categories as $category)
              <div class="accordion-item">
                <div class="accordion-header" id="heading{{ $category->id }}">
                  <button class="accordion-button shadow-none collapsed" style="background-color: {{ $category->color }};color:white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $category->id }}"
                    aria-expanded="false" aria-controls="collapse{{ $category->id }}">
                    {{ $category->title ?? '' }}
                  </button>
                </div>
                <div id="collapse{{ $category->id }}" class="accordion-collapse collapse"
                  aria-labelledby="heading{{ $category->id }}" data-bs-parent="#accordionExample">
                  <div class="accordion-body instagram-accordion-body">
                    <ul class="instagram-likes-ul">
                      @foreach ($category->subcategories as $subcategory)
                      <li style="border-left: 3px solid {{ $subcategory->color }};">
                        <a href="{{ route('front.subcategory_packages' , $subcategory->slug) }}" class="text-decoration-none text-dark">{{ $subcategory->title }}</a>
                    </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="active-service" style="display: none;">
      </div>
    </div>

  </div>
  {{-- For Desktop --}}
  <div class="container pt-5 d-none d-md-block mb-5">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-8 d-flex justify-content-center text-center">
        @foreach ($services as $service)
        <div class="dropdown {{ !$loop->last? 'me-3': ''  }}"
          style="width: calc((100% - 7rem) / {{ count($services) }}); aspect-ratio : 1 / 0.9; height:95px;">
          <div href="javascript:void(0)"
            class="text-center desktop-social-btn h-100 @if($loop->iteration==1) for-instagram @elseif($loop->iteration==2) for-youtube @elseif($loop->iteration==3) for-naver @elseif($loop->iteration==4) for-appMarketing  @elseif($loop->iteration==5) for-talk @endif">
            <div class="icon">
              <img src="{{ asset('storage/'.$service->image ?? '') }}" alt="" class="service-front-imge">
              <img src="{{ asset('storage/'.$service->bg_image ?? '') }}" alt="" class="service-bg-imge icon-hover">
            </div>
            <div class="icon-title">
              {{ $service->title ?? '' }}
            </div>
          </div>
          @if(count($service->categories)>0)
          <ul class="dropdown-menu insta-web instagram-pkg-dropdown" aria-labelledby="instaDropDown">
            @foreach ($service->categories as $category)
            <li
              class="instagram-list" onmouseover="changeColors(this, '{{ $category->color ?? 'white' }}', '{{ 'white' }}')" onmouseout="changeColors(this, 'white', '{{ 'black' }}')">
              <a class="dropdown-item" href="#" style="color:{{ $category->color }};display: flex;
                gap: 0.8rem;">
                <img src="{{ asset('storage/'.$category->image ?? '') }}" alt="" style="height: 25px;width: auto"> 
                <span class="flex-grow-1">{{ $category->title ?? '' }}</span>
                @if(count($category->subcategories)>0)
                <i class="bi bi-caret-right"></i>
                @endif
              </a>
              @if(count($category->subcategories)>0)
              <ul class="dropdown-menu dropdown-submenu">
                @foreach ($category->subcategories as $subcategory)
                <li onmouseover="this.style.borderLeft='3px solid {{ $subcategory->color ?? '' }}'" onmouseout="this.style.borderLeft='0'">
                  <a class="dropdown-item" href="{{ route('front.subcategory_packages' , $subcategory->slug) }}">{{ $subcategory->title ?? '' }}</a>
                </li>
                @endforeach
              </ul>
              @endif
            </li>
            @endforeach
          </ul>
          @endif
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="container pb-5">
    <div class="row d-flex justify-content-center">
      <div class=" col-lg-6 pakg_heading p-4 mb-1 title_append d-flex  flex-column align-items-center ">
        <h3 class="text-center heading mb-2">{{ $subcategory_title->title ?? '' }}</h3>
        <p class="text-center p-3 title m-0 px-0">{{ $subcategory_title->description ?? '' }}</p>
      </div>
    </div>
    <div class="row justify-content-center tab-content-parent">
      <div class="packages col-xl-6 col-lg-8 justify-content-center text-center">
            <ul class="nav nav-tabs" id="myTab" role="tablist"> 
              @foreach($subcategories as $sub_category)
              <li class="nav-item service-upper-button-li change_title" role="presentation"  data-url="{{ url('front/get/subcategory/title/'.$sub_category->id) }}">
                <button class="nav-link tabs-button service-upper-button  @if($subcategoryslug == $sub_category->slug)active @endif" id="home-tab{{ $loop->iteration }}" data-bs-toggle="tab"
                  data-bs-target="#home_{{ $loop->iteration }}" type="submit" role="tab" aria-controls="home_{{ $loop->iteration }}"
                  aria-selected="true" href="{{ route('front.login') }}">{{ $sub_category->title ?? '' }}</button>
              </li>
          @endforeach
             
            </ul>
        <div class="tab-content" id="myTabContent">
            @foreach($subcategories as $subcategory)
              <div class="tab-pane fade @if($subcategoryslug == $subcategory->slug)show active @endif" id="home_{{ $loop->iteration }}" role="tabpanel" aria-labelledby="home-tab{{ $loop->iteration }}">
                <div class="d-flex pt-4 justify-content-center mb-3">
                  <div class="tab-pane-header d-flex align-items-center justify-content-center">
                    <img src="{{ asset('front_asset/images/service-tick-icon.png') }}" alt="" class="check-box">
                    <span> &nbsp; 상품상세</span>
                  </div>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                  @php
                    $packages1 = DB::table('packages')->where('sub_category_id' , $subcategory->id)->get()
                  @endphp
                  @foreach ($packages1 as $pakage1)
                  <?php
                  if(strlen($pakage1->sale_price)>2 && strlen($pakage1->original_price)>2){
                     
                          $sale_price = substr($pakage1->sale_price, 0, 2) . ',' . substr($pakage1->sale_price, 2);
                          $original_price = substr($pakage1->original_price, 0, 2) . ',' . substr($pakage1->original_price, 2);
             }
                     else{
                         $sale_price = $pakage1->sale_price;
                         $original_price = $pakage1->original_price;
             }
                  ?>
                    <div data-package-id="{{ $pakage1->id }}" class="package-box bg_orange @if ($loop->iteration==1)active @endif text-center first-box" data-original="{{ $original_price }}" data-sale="{{ $sale_price }}" data-id="{{ $pakage1->id }}" data-scp="scp{{ $subcategory->id}}">
                      <h4 class="fw-bolder">
                
                        {{ $pakage1->qty }}
                      </h4>
                      <span>
                        @if($pakage1->sale_price)
                        {{ floor((($pakage1->original_price-$pakage1->sale_price)*100)/$pakage1->original_price) }}
                        %
                        @endif
                        {{ $pakage1->title }}
                      </span>
                    </div>
                  @endforeach
                </div>
                @php
                $firstpackage = DB::table('packages')->where('sub_category_id' , $subcategory->id)->first();
                @endphp
                <div class="p-4 justify-content-center d-flex packages_prices">
                    @if (isset($firstpackage->sale_price) && $firstpackage->sale_price != '' &&
                    $firstpackage->sale_price != null)
                    <h4 class="sale-price first-box-sale-price">
                        @if(strlen($firstpackage->sale_price)>2 && strlen($firstpackage->original_price)>2)
                        <?php
                             $sale_price = substr($firstpackage->sale_price, 0, 2) . ',' . substr($firstpackage->sale_price, 2);
                             $original_price = substr($firstpackage->original_price, 0, 2) . ',' . substr($firstpackage->original_price, 2);
                         ?>
                        {{ $sale_price ?? '' }}
                        @else
                        {{ $firstpackage->sale_price ?? '' }}
                        @endif
                    </h4>
                    <span class="pt-2" style="font-size: 22px;font-weight: 800">원</span> &nbsp;
                    <del class="orignal-price first-box-orignal-price">
                        {{ $original_price ?? '' }}
                    </del>
                    <del class="pt-2" style="font-size: 20px;font-weight: 600;color: lightgray"> 원</del>
                    @else
                    @if (isset($firstpackage) && $firstpackage!='' && $firstpackage1=null)
                    <h4 class="sale-price first-box-sale-price">
                        {{ floor($firstpackage->original_price) ?? '' }}
                    </h4>
                    <span class="pt-2" style="font-size: 22px;font-weight: 800">원</span> &nbsp;
                    @endif
                    @endif
                </div>
                <div class="p-3 justify-content-center d-none d-md-block">
                  <form action="{{ route('front.instagram.getpost') }}" id="orderForm" method="POST" class="first-box-form">
                    @csrf
                    <input type="hidden" name="pakage_id" class="pakage_id" id="first_pkg">
                  </form>
                  <button class="purchase-btn first-box-purchase-btn" form="orderForm">구매하기</button>
                  <a href="{{ route('front.add_to_cart') }}">
                    <button class="shop-btn">장바구니</button>
                  </a>
                </div>
                {{-- for mobile start --}}
                <div class="d-md-none mobile-checkout-main">
                  <div class="row justify-content-center close-down-btn">
                    <i class="bi bi-chevron-down"></i>
                  </div>
                  <div class="options mb-4">
                    <div class="row px-4 mb-2">
                      <label for="inputPassword" class="col-3 col-form-label">옵션</label>
                      <div class="col-auto col-9">
                        <select class="form-control w-100 package_title_response">
                          {{-- @foreach ($subcategories as $sub_cat)
                            <option value="{{ $sub_cat->id ?? '' }}">{{ $sub_cat->title ?? '' }}</option>
                          @endforeach --}}<option value="">{{ $subcategory->title  }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="row px-4">
                      <label for="inputPassword" class="col-3 col-form-label"></label>
                      <div class="col-auto col-9">
                        <select class="form-control w-100 sub_categories_pkgs" id="scp{{ $subcategory->id }}">
                          @foreach ($packages1 as $pkg)
                            <option value="{{ $pkg->id }}">수량 {{ $pkg->qty }}명 증가</option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="bar d-flex justify-content-between align-items-center mb-2">
                    <div>합계</div>
                    <div class="p-4 justify-content-center d-flex packages_prices">
                      @if (isset($firstpackage->sale_price) && $firstpackage->sale_price != '' && $firstpackage->sale_price != null)
                      <h4 class="sale-price first-box-sale-price">
                        {{ floor($firstpackage->sale_price) ?? '' }}
                      </h4>
                      <span  class="pt-2" style="font-size: 22px;font-weight: 800">원</span>
                      @else
                        @if (isset($firstpackage) && $firstpackage!='' && $firstpackage1=null)
                          <h4 class="sale-price first-box-sale-price">
                            {{ floor($firstpackage->original_price) ?? '' }}
                          </h4>
                          <span class="pt-2" style="font-size: 22px;font-weight: 800">원</span> &nbsp;
                        @endif
                      @endif
                    </div>
                  </div>
                  <div class="py-3 d-flex align-items-center justify-content-center mobile gap-2 flex-wrap">
                    <a href="{{ route('front.instagram.getpost') }}">
                    <button class="purchase-btn">구매하기</button>
                  </a>
                  <a href="{{ route('front.add_to_cart') }}">
                    <button class="shop-btn">장바구니</button>
                  </a>
                  </div>
                </div>
                {{-- for mobile end --}}
              </div>
            @endforeach
        </div>
      </div>
    </div>

  </div>
  <div class="contaier section-dark mb-5">
    <div class="dark-inner">
      <h1 class="text-center text-white fw-bolder">배송완료 된 좋아요 수 <span class="orange-span-text">9,840,561,378</span> 개
      </h1>
    </div>
  </div>

  {{-- <img src="{{ asset('front_asset/images/service-icon-1.png') }}" alt=""> --}}

  <div class="container box-container py-5 my-5">
    <h2 class="box-container-title text-center pb-3">저비용 고효율 SNS마케팅을 경험해 보세요</h2>
    <div>
      <div class="box-section d-flex justify-content-center align-items-center mt-5">
        <div class="box1 box d-flex flex-column align-items-center justify-content-center">
          <img src="{{ asset('front_asset/images/001.png') }}" alt="" class="box-icon">
          <span class="box-title text-center my-4">24시간 주문가동</span>
          <span class="box-description text-center">주문 후 빠른 사직으로 24시간 주문가동됩니다.</span>
        </div>
        <div class="box2 box d-flex flex-column align-items-center justify-content-center">
          <img src="{{ asset('front_asset/images/002.png') }}" alt="" class="box-icon">
          <span class="box-title text-center my-4">실제한국인서비스</span>
          <span class="box-description text-center">모든 SNS마케팅에 실제한국인계정으로 제공됩니다.</span>
        </div>
        <div class="box3 box d-flex flex-column align-items-center justify-content-center">
          <img src="{{ asset('front_asset/images/003.png') }}" alt="" class="box-icon">
          <span class="box-title text-center my-4">1:1전문 상담원</span>
          <span class="box-description text-center">분야 별 전문 마케터가 SNS홍보전략을 상당해드립니다.</span>
        </div>
      </div>
    </div>
  </div>

  <div class="service-faq-section">
    <h2 class="service-faq-title text-center">이용자 자주묻는 질문?</h2>
    <div class="service-faq-container container d-flex mt-3 justify-content-between">
        <div class="service-faq-box">
            <div class="service-faq-question d-flex justify-content-between align-items-center">
                <h4 class="service-faq-question-title mb-0 px-4 fa-regular">
                    <img src="{{ asset('front_asset/images/message.png') }}" alt="">
                    작업 시 계정은 안전한가요?
                </h4>
                <h4 class="service-faq-question-icon mb-0"><i class="bi bi-plus"></i></h4>
            </div>
            <div class="service-faq-answer bg-white px-4">
                <p>인스타그램뿐만 아니라 유튜브,네이버,앱마케팅 등 인스타몽이 제공하는 모든 서비스는 철저한 안전검증을 기반으로 단 한건도 문제가 생긴 적은 없습니다</p>
            </div>
        </div>
        <div class="service-faq-box">
            <div class="service-faq-question d-flex justify-content-between align-items-center">
                <h4 class="service-faq-question-title mb-0 px-4 fa-regular">

                    <img src="{{ asset('front_asset/images/message.png') }}" alt="">서비스 진행은 언제 시작 되나요?
                </h4>
                <h4 class="service-faq-question-icon mb-0"><i class="bi bi-plus"></i></h4>
            </div>
            <div class="service-faq-answer bg-white px-4">
                <p>결제 완료 후 1분내로 시스템에 자동 접수 됩니다. 완료 시점은 상품에 따라 상이하오니 원하는 상품의 상세페이지를 확인하시기 바랍니다. </p>
            </div>
        </div>
    </div>
    <div class="service-faq-container container d-flex mt-3 justify-content-between">
        <div class="service-faq-box">
            <div class="service-faq-question d-flex justify-content-between align-items-center">
                <h4 class="service-faq-question-title mb-0 px-4 fa-regular">

                    <img src="{{ asset('front_asset/images/message.png') }}" alt=""> 교환이나 환불 규정은 어떻게 되나요?
                </h4>
                <h4 class="service-faq-question-icon mb-0"><i class="bi bi-plus"></i></h4>
            </div>
            <div class="service-faq-answer bg-white px-4">
                <p>서비스가 진행 된 경우 교환 및 환불이 불가합니다. 아이디 또는 링크 삽입 착오로 인한 환불은 불가하니 서비스 시작전 다시 한번 확인부탁드립니다. 주의 사항을 참고하지 않아
                    발생되는 피해는 책임지지 않습니다.</p>
            </div>
        </div>
        <div class="service-faq-box">
            <div class="service-faq-question d-flex justify-content-between align-items-center">
                <h4 class="service-faq-question-title mb-0 px-4 fa-regular">

                    <img src="{{ asset('front_asset/images/message.png') }}" alt="">고객센터 운영시간은 어떻게 되나요?
                </h4>
                <h4 class="service-faq-question-icon mb-0"><i class="bi bi-plus"></i></h4>
            </div>
            <div class="service-faq-answer bg-white px-4">
                <p>월 ~ 금(9:30 - 18:30) / 점심시간(12:00 - 13:00) 모든 문의는 최대한 빨리 답변드릴 수 있도록 노력하겠습니다. </p>
            </div>
        </div>
    </div>
</div>

  <div class="service-lower-section container d-flex flex-column justify-content-center align-items-center">
    <h2 class="service-lower-title text-center">서비스를 구매하셨나요?</h2>
    <span class="service-lower-description text-center mt-3">서비스 후기를 남겨주시면 회원님께 소정의 적립금을 지급해 드립니다.</span>
    <div class="d-flex service-lower-lower-section">
      <div class="service-lower-icon d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset('front_asset/images/service-thumb-icon.png') }}" class="service-icon-4" alt="">
        @if(auth()->check())
        <button class="service-lower-button" data-toggle="modal" data-target="#exampleModal1"
            type="button">후기작성</button>
            @else
            <a href="{{ route('front.login') }}"><button class="service-lower-button" 
                type="button">후기작성</button></a>
                @endif
    </div>
 {{-- Review Model start herer --}}
 <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form method="POST" action="{{ route('front.feedback.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="modal-header" style="background-color:#e75e3e">
              <h5 class="modal-title text-white" id="exampleModalLabel"> 리뷰를 작성</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="text-white">&times;</span>
              </button>
          </div>
          <div class="model-body container">
                  
                  <div class="row mt-3">
                      <div class="col-md-12">
                          <select class="form-select" aria-label="Default select example" name="product">
                              <option selected>상품 유형</option>
                              @foreach($sub_category as $subcategory)
                              <option>{{ $subcategory->title ?? '' }}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-12">
                          <div class="rating">
                              <input type="radio" name="rating" value="5" id="5"><label for="5" style="font-size:60px;">☆</label>
                              <input type="radio" name="rating" value="4" id="4"><label for="4" style="font-size:60px;">☆</label>
                              <input type="radio" name="rating" value="3" id="3"><label for="3" style="font-size:60px;">☆</label>
                              <input type="radio" name="rating" value="2" id="2"><label for="2" style="font-size:60px;">☆</label>
                              <input type="radio" name="rating" value="1" id="1"><label for="1" style="font-size:60px;">☆</label>
                          </div>
                      </div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-12">
                          <label> 리뷰를 작성</label>
                          <input type="text" placeholder="제목을 입력하세요" class="form-control" name="subject">
                          <textarea name="description" class="form-control mt-3" style="height:100px" placeholder="리뷰를 3줄 이상 작성하셔야 적립금 1,000원을 드립니다. 서비스 전후 비교사진을 첨부하시면 적립금 2,000원을 드립니다."></textarea>
                      </div>
                  </div>
                  <div class="row mt-3 ">
                      <div class="col-md-12" style="background-color: #F6F6F6;">
                          <div class="d-flex justify-content-center align-items-center">
                            <label>
                              <i class="bi bi-plus-circle " style="font-size:50px;"></i>
                              <input type="file" style="opacity:-100" name="image" class="d-none">
                            </label>
                              <h5 class="pl-2">파일 첨부</h5>
                          </div>

                          <p class="text-center">
                              최대 3개까지 첨부 가능 (jpg, png , jpeg)</p>
                      </div>
                  </div>
                 <div class="row">
                <div class="col-md-12" style="background-color: #EDEDED;height:50px"></div>
                 </div>
                  <p> ※ 이용정책에 맞지 않는 리뷰를 작성하시면 예고 없이 삭제될 수 있습니다.</p>
          </div>
          <div  class="mb-3 d-flex justify-content-center" style="gap:10px;margin:0px auto;">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"> 닫다 </button>
              <button type="submit" class="btn text-white" style="background-color:#e75e3e">입력완료</button>
          </div>
          </form>

      </div>
  </div>
</div>
{{-- Review Model end  herer --}}
      <div class="service-lower-text">
        <div class="lower-review mt-5">
          <div class="d-flex align-items-center bi">
              <img src="{{ asset('front_asset/images/test-icons.png') }}" alt="">
          </div>
          <p class="lower-text-description mt-4">좋아요가 이렇게 빨리 달릴 줄 몰랐고 완벽하게 되는거 같아요 다음에 또 이용할게요</p>
      </div>
      <div class="lower-review mt-5">
          <div class="d-flex align-items-center bi">
              <img src="{{ asset('front_asset/images/test-icons.png') }}" alt="">
          </div>
          <p class="lower-text-description mt-4">인스타그램 게시물 사진마다 좋아요 수량 분할이 되어 다른 곳보다 쓰기 편해요.</p>
      </div>
      <div class="lower-review mt-5">
          <div class="d-flex align-items-center bi">
              <img src="{{ asset('front_asset/images/test-icons.png') }}" alt="">
          </div>
          <p class="lower-text-description mt-4">노출 도달 덕분인지 조회수가 계속 늘어나네요 추천합니다 가성비 아주 좋습니다!</p>
      </div>
      <div class="lower-review mt-5">
          <div class="d-flex align-items-center bi">
              <img src="{{ asset('front_asset/images/test-icons.png') }}" alt="">
          </div>
          <p class="lower-text-description mt-4">한국인 팔로워 몇번이나 구입하고 있습니다. 조만간 팔로워 1만명 구입예정입니다. 잘 부탁드려요.</p>
      </div>
      <div class="lower-review mt-5">
          <div class="d-flex align-items-center bi">
              <img src="{{ asset('front_asset/images/test-icons.png') }}" alt="">
          </div>
          <p class="lower-text-description mt-4">한국인좋아요 배송이 아주 빠르고 좋습니다 금방 채워져요. 가성비템이에요 추천드려요~! </p>
      </div>
      <div class="lower-review mt-5">
          <div class="d-flex align-items-center bi">
              <img src="{{ asset('front_asset/images/test-icons.png') }}" alt="">
          </div>
          <p class="lower-text-description mt-4">구글플레이 앱설치 한번 이용하고 나서 너무 마음에 들어 자주 이용하고 있습니다. </p>
      </div>
      <div class="lower-review mt-5">
          <div class="d-flex align-items-center bi">
              <img src="{{ asset('front_asset/images/test-icons.png') }}" alt="">
          </div>
          <p class="lower-text-description mt-4">유튜브 조회수 주문하고 엄청 빠르게 늘어났어요. 속도는 인스타몽이 최고인것 같습니다. </p>
      </div>
      </div>
    </div>
  </div>

</div>
<!-- custom JS code after importing jquery and owl -->
<script>
  $(document).on("click", (event) => {
    if(event.target.closest('.package-box')){
      element = event.target.closest('.package-box');
      $('.package-box').not(element).removeClass('active');
      $(element).addClass('active');
    }
    
    if(element){
      $("#first_pkg").val($(element).data("package-id"));
      $("#"+$(element).data("scp")).val($(element).data("id")).change();
    }
  });

  $("#orderForm").on("submit", (event) => {
    event.preventDefault();
  });

  const mobileSeriveNav = document.querySelector('.mobile-services-nav');
  const activeServiceContainer = mobileSeriveNav.querySelector('.active-service');
  const serviceBtns = mobileSeriveNav.querySelectorAll('.service > .btn');
  serviceBtns.forEach((btn) => {
    btn.addEventListener('click', (event) => {
      const content = btn.nextElementSibling;
      const contentClone = content.cloneNode(true);

      let alreadyActiveBtn = false;
      serviceBtns.forEach(el => {
        if (el.classList.contains('active1'))
          alreadyActiveBtn = el;
      });

      if (alreadyActiveBtn && alreadyActiveBtn.isSameNode(btn)) {
        alreadyActiveBtn.classList.remove('active1');
        $(activeServiceContainer).slideUp();
        activeServiceContainer.classList.remove('show');
        return;
      }

      if (alreadyActiveBtn) {
        alreadyActiveBtn.classList.remove('active1');
      }

      btn.classList.add('active1');
      activeServiceContainer.classList.add('show');
      $(activeServiceContainer).slideUp('medium', function () {
        activeServiceContainer.innerHTML = '';
        activeServiceContainer.appendChild(contentClone);
        $(activeServiceContainer).slideDown();
      });
    })
  })
</script>
<script>
  $('.first-box').click(function(){
    let original_price=$(this).data('original')
    let sale_price=$(this).data('sale')
    let id=$(this).data('id');
    let closeset_div = $(this).parent().next('.packages_prices').find('.first-box-sale-price')
    let original_closeset_price = $(this).parent().next('.packages_prices').find('.first-box-orignal-price')
    if (sale_price != '') {
        closeset_div.html('')
        closeset_div.append(sale_price)
        original_closeset_price.html('')
        original_closeset_price.append(original_price)
    } else {
        original_closeset_price.html('')
        closeset_div.html('')
        closeset_div.append(original_price)
    }
    $(".pakage_id").val('');
    $(".pakage_id").val($("input.pakage_id").val() + id);

    $('.first-box-purchase-btn').click(function(){
      $('.first-box-form').submit();
    })
  })
</script>
<script>
  $('.change_title').click(function(){
      let url = $(this).data('url');
      $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          let title  = (data['title'] == null ? '' : data['title']);
          let description = (data['description'] == null ? '' : data['description']);
          console.log(title, description)
            $('.title_append').html('')
            $('.title_append').append(`<div class="d-flex  flex-column align-items-center col-lg-6 pakg_heading p-4 mb-1 title_append">
        <h3 class="text-center heading mb-2">`+title+`</h3>
        <p class="text-center p-3 title m-0 px-0">`+description+`</p>
      </div>`)
    }
      })
  })
</script>
<script>
  $('.package_title_response').change(function(){
      let options='';
      let id = $(this).val();
      $.ajax({
          type: "get",
          url: "/get/sub-categories-packages/"+id,
          success: function (response) {
              $('.sub_categories_pkgs').html('');
              $.each(response, function(index,value){
                console.log(value.id);
                  options +='<option value="'+value.id+'">량 '+value.qty+' 증가</option>';
              })
              $('.sub_categories_pkgs').append(options)
          }
      });
  })
</script>
@endsection
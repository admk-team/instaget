
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
          <div class="content">s
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
                        <a href="{{ route('front.subcategory_packages' , $subcategory->slug) }}" class="text-decoration-none">{{ $subcategory->title }}</a>
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
                    <div data-package-id="{{ $pakage1->id }}" class="package-box bg_orange @if ($loop->iteration==1)active @endif text-center first-box" data-original="{{ floor($pakage1->original_price) }}" data-sale="{{ floor($pakage1->sale_price) }}" data-id="{{ $pakage1->id }}">
                      <h4 class="fw-bolder">
                        {{-- @if($pakage1->sale_price)
                        {{ floor($pakage1->sale_price) }}
                        @else
                        {{ floor($pakage1->original_price) }}
                        @endif
                        원 --}}
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
                {{-- <div class="p-4 justify-content-center d-flex">
                  @if (isset($firstpackage->sale_price) && $firstpackage->sale_price != '')
                  <h4 class="sale-price first-box-sale-price">{{ floor($firstpackage->sale_price) ?? floor($firstpackage->original_price) ?? '' }}  </h4><span class="pt-2" style="font-size: 22px;font-weight: 800">원</span> &nbsp;
                  
                  <del class="orignal-price first-box-orignal-price"> {{ floor($firstpackage->original_price) ?? '' }}  </del><del class="pt-2" style="font-size: 20px;font-weight: 600;color: lightgray"> 원</del>
                  @endif
                </div> --}}
                <div class="p-4 justify-content-center d-flex">
                  @if (isset($firstpackage->sale_price) && $firstpackage->sale_price != '' && $firstpackage->sale_price != null)
                  <h4 class="sale-price first-box-sale-price">
                    {{ floor($firstpackage->sale_price) ?? '' }}
                  </h4>
                  <span class="pt-2" style="font-size: 22px;font-weight: 800">원</span> &nbsp;
                  <del class="orignal-price first-box-orignal-price"> 
                    {{ floor($firstpackage->original_price) ?? '' }}
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
                  <button class="shop-btn">장바구니</button>
                </div>
                {{-- for mobile start --}}
                <div class="container d-md-none mobile-checkout-main">
                  <div class="row justify-content-center close-down-btn">
                    <i class="bi bi-chevron-down"></i>
                  </div>
                  <div class="options mb-4">
                    <div class="row px-4 mb-2">
                      <label for="inputPassword" class="col-3 col-form-label">옵션</label>
                      <div class="col-auto col-9">
                        <select class="form-control w-100">
                          <option value="">후속 조치</option>
                          <option value="">좋아요/보기</option>
                          <option value="">일일 후속 조치</option>
                        </select>
                      </div>
                    </div>
                    <div class="row px-4">
                      <label for="inputPassword" class="col-3 col-form-label"></label>
                      <div class="col-auto col-9">
                        <select class="form-control w-100">
                          <option value="">팔로워 50명 추가</option>
                          <option value="">팔로워 250명 확보</option>
                          <option value="">팔로워 500명 확보</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="bar d-flex justify-content-between align-items-center mb-2">
                    <div>합집합</div>
                    <div class="p-4 justify-content-center d-flex">
                      @if (isset($firstpackage->sale_price) && $firstpackage->sale_price != '' && $firstpackage->sale_price != null)
                      <h4 class="sale-price first-box-sale-price">
                        {{ floor($firstpackage->sale_price) ?? '' }}
                      </h4>
                      <span  class="pt-2" style="font-size: 22px;font-weight: 800">₩</span>
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
                    <button class="shop-btn">장바구니</button>
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
    <div class="service-faq-container container d-flex mt-5 justify-content-between">
      <div class="service-faq-box">
        <div class="service-faq-question d-flex justify-content-between align-items-center">
          <h4 class="service-faq-question-title mb-0 px-4 fa-regular">실제 유저로 작업이 되나요?</h4>
          <h4 class="service-faq-question-icon mb-0"><i class="bi bi-plus"></i></h4>
        </div>
        <div class="service-faq-answer bg-white px-4">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error suscipit delectus consequuntur asperiores
            fugit unde dolore corporis possimus tempore! Tempore temporibus atque facilis ex at, neque nemo, aperiam
            fuga magni exercitationem voluptates placeat dolore amet perspiciatis ratione, harum quisquam totam natus
            pariatur. Animi consequatur fugiat nulla. Sit, exercitationem accusamus. Debitis quibusdam quod enim
            blanditiis impedit esse id voluptate provident fugiat quisquam obcaecati molestiae quidem, qui at
            assumumque asperiores ex quisquam tenetur minus dignissimos? Fugiat quod quibusdam, incidunt quas at
            molestias ad! Ullam, voluptates!</p>
        </div>
      </div>
      <div class="service-faq-box">
        <div class="service-faq-question d-flex justify-content-between align-items-center">
          <h4 class="service-faq-question-title mb-0 px-4 fa-regular">실제 유저로 작업이 되나요?</h4>
          <h4 class="service-faq-question-icon mb-0"><i class="bi bi-plus"></i></h4>
        </div>
        <div class="service-faq-answer bg-white px-4">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error suscipit delectus consequuntur asperiores
            fugit unde dolore corporis possimus tempore! Tempore temporibus atque facilis ex at, neque nemo, aperiam
            fuga magni exercitationem voluptates placeat dolore amet perspiciatis ratione, harum quisquam totam natus
            pariatur. Animi consequatur fugiat nulla. Sit, exercitationem accusamus. Debitis quibusdam quod enim
            blanditiis impedit esse id voluptate provident fugiat quisquam obcaecati molestiae quidem, qui at
            assumumque asperiores ex quisquam tenetur minus dignissimos? Fugiat quod quibusdam, incidunt quas at
            molestias ad! Ullam, voluptates!</p>
        </div>
      </div>
    </div>
    <div class="service-faq-container container d-flex mt-5 justify-content-between">
      <div class="service-faq-box">
        <div class="service-faq-question d-flex justify-content-between align-items-center">
          <h4 class="service-faq-question-title mb-0 px-4 fa-regular">실제 유저로 작업이 되나요?</h4>
          <h4 class="service-faq-question-icon mb-0"><i class="bi bi-plus"></i></h4>
        </div>
        <div class="service-faq-answer bg-white px-4">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error suscipit delectus consequuntur asperiores
            fugit unde dolore corporis possimus tempore! Tempore temporibus atque facilis ex at, neque nemo, aperiam
            fuga magni exercitationem voluptates placeat dolore amet perspiciatis ratione, harum quisquam totam natus
            pariatur. Animi consequatur fugiat nulla. Sit, exercitationem accusamus. Debitis quibusdam quod enim
            blanditiis impedit esse id voluptate provident fugiat quisquam obcaecati molestiae quidem, qui at
            assumumque asperiores ex quisquam tenetur minus dignissimos? Fugiat quod quibusdam, incidunt quas at
            molestias ad! Ullam, voluptates!</p>
        </div>
      </div>
      <div class="service-faq-box">
        <div class="service-faq-question d-flex justify-content-between align-items-center">
          <h4 class="service-faq-question-title mb-0 px-4 fa-regular">실제 유저로 작업이 되나요?</h4>
          <h4 class="service-faq-question-icon mb-0"><i class="bi bi-plus"></i></h4>
        </div>
        <div class="service-faq-answer bg-white px-4">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error suscipit delectus consequuntur asperiores
            fugit unde dolore corporis possimus tempore! Tempore temporibus atque facilis ex at, neque nemo, aperiam
            fuga magni exercitationem voluptates placeat dolore amet perspiciatis ratione, harum quisquam totam natus
            pariatur. Animi consequatur fugiat nulla. Sit, exercitationem accusamus. Debitis quibusdam quod enim
            blanditiis impedit esse id voluptate provident fugiat quisquam obcaecati molestiae quidem, qui at
            assumumque asperiores ex quisquam tenetur minus dignissimos? Fugiat quod quibusdam, incidunt quas at
            molestias ad! Ullam, voluptates!</p>
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
        <button class="service-lower-button" data-toggle="modal" data-target="#exampleModal1" type="button">후기작성</button>
        @else
        <a href="{{ route('front.login') }}">
        <button class="service-lower-button"  type="button">후기작성</button>
      </a>
        @endif
    </div>
 {{-- Review Model start herer --}}
 <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header" style="background-color:#e75e3e">
              <h5 class="modal-title text-white" id="exampleModalLabel"> 리뷰를 작성</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="text-white">&times;</span>
              </button>
          </div>
          <div class="model-body container">
              <form method="POST" action="{{ route('front.feedback.store') }}" enctype="multipart/form-data">
                  @csrf
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
                          <div>
                              <input type="file" style="opacity:-100" name="image">
                          </div>
                      </div>
                  </div>
                 <div class="row">
                <div class="col-md-12" style="background-color: #EDEDED;height:50px"></div>
                 </div>
                  <p> ※ 이용정책에 맞지 않는 리뷰를 작성하시면 예고 없이 삭제될 수 있습니다.</p>
          </div>
          <div style="margin:0px auto;" class="mb-3">
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
          <p class="lower-text-description mt-4">How did you make verified users with hundreds of thousands
            of followers to like my picture for such a cheap price?</p>
        </div>
        <div class="lower-review mt-5">
          <div class="d-flex align-items-center bi">
            <img src="{{ asset('front_asset/images/test-icons.png') }}" alt="">
          </div>
          <p class="lower-text-description mt-4">How did you make verified users with hundreds of thousands
            of followers to like my picture for such a cheap price?</p>
        </div>
        <div class="lower-review mt-5">
          <div class="d-flex align-items-center bi">
            <img src="{{ asset('front_asset/images/test-icons.png') }}" alt="">
          </div>
          <p class="lower-text-description mt-4">How did you make verified users with hundreds of thousands
            of followers to like my picture for such a cheap price?</p>
        </div>
        <div class="lower-review mt-5">
          <div class="d-flex align-items-center bi">
            <img src="{{ asset('front_asset/images/test-icons.png') }}" alt="">
          </div>
          <p class="lower-text-description mt-4">How did you make verified users with hundreds of thousands
            of followers to like my picture for such a cheap price?</p>
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
    }
    
    if(element){
      $("#first_pkg").val($(element).data("package-id"));
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
    if(sale_price!=''){
      $('.first-box-sale-price').html('')
      $('.first-box-sale-price').append(sale_price)
      $('.first-box-orignal-price').html('')
      $('.first-box-orignal-price').append(original_price)
    }else{
      $('.first-box-orignal-price').html('')
      $('.first-box-sale-price').html('')
      $('.first-box-sale-price').append(original_price)
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

@endsection
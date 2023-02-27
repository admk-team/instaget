  @extends('layouts.layout')
  @section('container')
  <div class="container-fluid m-0 p-0">
    <div class="container py-1  d-block d-sm-none p-2 mt-4">
      <!-- New Mobile Menu -->
      <div class="mobile-services-nav justify-content-center text-center">
        <div class="services">
          @foreach ($services as $service)
          {{-- style="width: calc((100% - 5rem) / {{ count($services) }}); aspect-ratio : 1 / 0.9;" --}}
          <div class="service">
            <div href="javascript:void(0)"
              class="text-center btn mobile-social-btn  @if($loop->iteration==1) for-instagram @elseif($loop->iteration==2) for-youtube @elseif($loop->iteration==3) for-naver @elseif($loop->iteration==4) for-appMarketing  @elseif($loop->iteration==5) for-talk @endif">
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
                        <li style="border-left: 3px solid {{ $subcategory->color }};"><a href="{{ route('front.subcategory_packages' , $subcategory->slug) }}" class="text-decoration-none">{{ $subcategory->title }}</a>
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
        <div class="col-md-12 col-lg-8 col-xl-8 d-flex justify-content-center text-center">
          @foreach ($services as $service)
          <div class="dropdown {{ !$loop->last? 'me-3': ''  }}"
            style="width: calc((100% - 9rem) / {{ count($services) }}); aspect-ratio : 1 / 0.9; height:81px;">
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
      <div class="row justify-content-center">
        <div class="d-block col-lg-6 pakg_heading p-4 mb-1">
          <h3 class="text-center heading mb-2">인스타팔로워늘리기</h3>
          <p class="text-center p-3 title m-0 px-0">주문후단기간에인스타팔로워가자연스럽게증가하는서비스입니다. 365일24시간연중무휴자동주문처리</p>
        </div>
      </div>
      <div class="row justify-content-center tab-content-parent">
        <div class="packages col-xl-6 col-lg-8 justify-content-center text-center">
              <ul class="nav nav-tabs" id="myTab" role="tablist"> 
                  @foreach(($buttonpackage->categories->first()->subcategories ?? []) as $package)
                    <li class="nav-item service-upper-button-li" role="presentation">
                      <button class="nav-link tabs-button service-upper-button  @if($loop->iteration == 1 )active @endif" id="home-tab{{ $loop->iteration }}" data-bs-toggle="tab"
                        data-bs-target="#home_{{ $loop->iteration }}" type="submit" role="tab" aria-controls="home_{{ $loop->iteration }}"
                        aria-selected="true" href="{{ route('front.login') }}">{{ $package->title ?? '' }}</button>
                    </li>
                @endforeach
               
              </ul>
          <div class="tab-content" id="myTabContent">
              @foreach(($buttonpackage->categories->first()->subcategories ?? '') as $subcategory)
                <div class="tab-pane fade @if($loop->iteration == 1 )show active @endif" id="home_{{ $loop->iteration }}" role="tabpanel" aria-labelledby="home-tab{{ $loop->iteration }}">
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
                          @endif --}}
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
                      <div>₩0</div>
                    </div>
                    <div class="py-3 d-flex align-items-center justify-content-center mobile gap-2 flex-wrap">
                      <button class="purchase-btn">구매하기</button>
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
            <h4 class="service-faq-question-title mb-0 px-4 fa-regular">
              <img src="{{ asset('front_asset/images/message.png') }}" alt="">
              실제 유저로 작업이 되나요?</h4>
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
            <h4 class="service-faq-question-title mb-0 px-4 fa-regular">
              
              <img src="{{ asset('front_asset/images/message.png') }}" alt="">실제 유저로 작업이 되나요?</h4>
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
            <h4 class="service-faq-question-title mb-0 px-4 fa-regular">
              
              <img src="{{ asset('front_asset/images/message.png') }}" alt="">실제 유저로 작업이 되나요?</h4>
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
            <h4 class="service-faq-question-title mb-0 px-4 fa-regular">
              
              <img src="{{ asset('front_asset/images/message.png') }}" alt="">실제 유저로 작업이 되나요?</h4>
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
          <button class="service-lower-button">후기작성</button>
        </div>
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
@endsection
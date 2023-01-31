<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('front_asset/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front_asset/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('front_asset/css/faq.css') }}">
  <title>Instaget</title>

</head>

<body>
  <div class="container-fluid m-0 p-0">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <span>Intagram likes</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSUpportedContent" aria-controls="navbarSUpportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSUpportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">What is Instagram?</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Service
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Instagram</a></li>
                  <li><a class="dropdown-item" href="#">Youtube</a></li>
                  <li><a class="dropdown-item" href="#">Facebook</a></li>
                  <li><a class="dropdown-item" href="#">Ticktok</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('front.reviews') }}">Customer Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Frequently Asked Questions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container py-1  d-block d-sm-none">
      <!-- New Mobile Menu -->
      <div class="mobile-services-nav">
        <div class="services">
          @foreach ($services as $service)
          <div class="service">
            @if($service->slug=='instagram')
            <li class="btn list-group-item instagram-icon d-flex">
              <i class="bi bi-instagram"></i>&nbsp;
            </li>
            @elseif($service->slug=='youtube')
            <li class="btn list-group-item youtube-icon d-flex">
              <i class="bi bi-youtube"></i>&nbsp;
            </li>
            @elseif($service->slug=='naver')
            <li class="btn list-group-item naver-icon d-flex">
              <img src="{{ asset('front_asset/images/icons/naver.png') }}" class="talk-img" alt=""> &nbsp;
            </li>
            @elseif($service->slug=='app-marketing')
            <li class="btn list-group-item appMarketing-icon d-flex instagram-btns">
              <i class="bi bi-phone"></i> &nbsp;
            </li>
            @elseif($service->slug=='kako')
            <li class="btn list-group-item talk-icon d-flex instagram-btns">
              <img src="{{ asset('front_asset/images/icons/talk.png') }}" class="talk-img" alt=""> &nbsp;
            </li>
            @else
            <li class="btn list-group-item instagram-icon d-flex">
              <i class="bi bi-instagram"></i>&nbsp;
            </li>
            @endif
            <div class="content">
              <div class="accordion">
                @foreach ($service->categories as $category)
                <div class="accordion-item">
                  <div class="accordion-header" id="heading{{ $category->id }}">
                    <button class="accordion-button shadow-none collapsed 
                    @if ($loop->iteration==1)
                      insta-danger
                    @elseif($loop->iteration==2)
                      insta-success
                    @elseif($loop->iteration==3)
                    insta-primary
                    @elseif($loop->iteration==4)
                    insta-warning
                    @elseif($loop->iteration==5)
                    insta-info
                    @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $category->id }}"
                      aria-expanded="false" aria-controls="collapse{{ $category->id }}">
                      {{ $category->title ?? '' }}
                    </button>
                  </div>
                  <div id="collapse{{ $category->id }}" class="accordion-collapse collapse"
                    aria-labelledby="heading{{ $category->id }}" data-bs-parent="#accordionExample">
                    <div class="accordion-body instagram-accordion-body">
                      <ul class="instagram-likes-ul">
                        @foreach ($category->subcategories as $subcategory)
                        <li>{{ $category->title }}</li>
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
    <div class="container pt-5 d-none d-md-flex justify-content-center">
      @foreach ($services as $service)
      <div class="dropdown me-2">
        <div href="javascript:void(0)"
          class="text-center desktop-social-btn @if($loop->iteration==1) for-instagram @elseif($loop->iteration==2) for-youtube @elseif($loop->iteration==3) for-naver @elseif($loop->iteration==4) for-appMarketing  @elseif($loop->iteration==5) for-talk @endif">
          <div class="icon">
            @if($loop->iteration==1) <i class="bi bi-instagram"></i> @elseif($loop->iteration==2) <i
              class="bi bi-youtube"></i> @elseif($loop->iteration==3) <img
              src="{{ asset('front_asset/images/icons/naver.png') }}" alt=""> @elseif($loop->iteration==4) <i
              class="bi bi-phone"></i> @elseif($loop->iteration==5) <img
              src="{{ asset('front_asset/images/icons/talk.png') }}" alt=""> @endif
          </div>
          <div class="icon-title">
            <p class="">{{ $service->title ?? '' }}</p>
          </div>
        </div>
        @if(count($service->categories)>0)
        <ul class="dropdown-menu insta-web instagram-pkg-dropdown" aria-labelledby="instaDropDown">
          @foreach ($service->categories as $category)
          <li
            class="@if($loop->iteration==1) instagram-li @elseif($loop->iteration==2) instagram-fo @elseif($loop->iteration==3) instagram-ply @elseif($loop->iteration==4) instagram-cmnt  @elseif($loop->iteration==5) instagram-reel @endif">
            <a class="dropdown-item" href="#">
              <i
                class="bi @if($loop->iteration==1) bi-heart @elseif($loop->iteration==2) bi-person @elseif($loop->iteration==3) bi-play-fill @elseif($loop->iteration==4) bi bi-chat-fill  @elseif($loop->iteration==5) bi bi-file-play @endif p-1"></i>
              {{ $category->title ?? '' }}
              @if(count($category->subcategories)>0)
              <i class="bi bi-caret-right"></i>
              @endif
            </a>
            @if(count($category->subcategories)>0)
            <ul class="dropdown-menu dropdown-submenu">
              @foreach ($category->subcategories as $subcategory)
              <li>
                <a class="dropdown-item" href="#">{{ $subcategory->title ?? '' }}</a>
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


      {{-- <ul class="list-group list-group-horizontal social_icon">
        <li class="list-group-item instagram-icon d-flex instagram-btns">
          <i class="bi bi-instagram"></i>&nbsp;
          <span class="d-none d-md-block">인스 타 그램</span>
        </li>
        <li class="list-group-item youtube-icon d-flex instagram-btns">
          <i class="bi bi-youtube"></i>&nbsp;
          <span class="d-none d-md-block">유튜브</span>
        </li>
        <li class="list-group-item naver-icon d-flex instagram-btns">
          <span class="naver-span">N</span> &nbsp;
          <span class="d-none d-md-block">N사마케팅</span>
        </li>
        <li class="list-group-item appMarketing-icon d-flex instagram-btns">
          <i class="bi bi-phone"></i> &nbsp;
          <span class="d-none d-md-block">앱마케팅</span>
        </li>
        <li class="list-group-item talk-icon d-flex instagram-btns">
          <img src="{{ asset('front_asset/images/icons/talk.png') }}" class="talk-img" alt=""> &nbsp;
          <span class="d-none d-md-block">K사마케팅</span>
        </li>
      </ul> --}}
    </div>
    <div class="container pb-5">
      <div class="row justify-content-center">
        <div class="d-none d-md-block col-lg-6 pakg_heading p-4 mb-1">
          <h3 class="text-center heading">인스타팔로워늘리기</h3>
          <span class="text-center p-3 title">주문후단기간에인스타팔로워가자연스럽게증가하는서비스입니다.</span> <br> <span
            class="text-center p-3 title">365일24시간연중무휴자동주문처리</span>
        </div>
      </div>
      <div class="row justify-content-center tab-content-parent">
        <div class="col-lg-6 justify-content-center text-center">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item service-upper-button-li" role="presentation">
              <button class="nav-link tabs-button service-upper-button active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                type="button" role="tab" aria-controls="home" aria-selected="true">실제한국인팔로워</button>
            </li>
            <li class="nav-item service-upper-button-li" role="presentation">
              <button class="nav-link tabs-button service-upper-button" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                type="button" role="tab" aria-controls="profile" aria-selected="false">리얼한국인팔로워</button>
            </li>
            <li class="nav-item service-upper-button-li" role="presentation">
              <button class="nav-link tabs-button service-upper-button" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                type="button" role="tab" aria-controls="contact" aria-selected="false">외국인팔로워</button>
            </li>
          </ul>
          <div class="row justify-content-center">
            <div class="d-block d-md-none col-lg-6 pakg_heading pt-4 pb-2">
              <h3 class="text-center heading">인스타팔로워늘리기</h3>
              <span class="text-center title">주문후단기간에인스타팔로워가자연스럽게증가하는서비스입니다.365일24시간연중무휴자동주문처리</span>
            </div>
          </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="d-flex pt-4 justify-content-center mb-3">
                <div class="tab-pane-header">
                  <img src="{{ asset('front_asset/images/icons/check.png') }}" alt="" class="check-box">
                  <span> &nbsp; 상품상세</span>
                </div>
              </div>
              <div class="d-flex flex-wrap justify-content-center">
                <div class="package-box bg_orange active text-center">
                  <h4>50</h4>
                  <span>팔로워</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>250</h4>
                  <span>5%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>500</h4>
                  <span>10%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>3000</h4>
                  <span>23%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>5000</h4>
                  <span>26%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
              </div>
              <div class="p-4 justify-content-center d-flex">
                <h4 class="sale-price">57,000원 </h4> &nbsp;<del class="orignal-price"> 60,000</del>
              </div>
              <div class="p-3 justify-content-center d-none d-md-block">
                <button class="purchase-btn">구매하기</button>
                <button class="shop-btn">장바구니</button>
              </div>
              <div class="container d-md-none mobile-checkout-main">
                <div class="row">
                  <div class="row justify-content-center close-down-btn">
                    <i class="bi bi-chevron-down"></i>
                  </div>
                  <div class="col-12">
                    <div class="row justify-center">
                      <div class="col-4">
                        <label for="">옵션</label>
                      </div>
                      <div class="col-8">
                        <select name="" id="" class="form-control mb-1">
                          <option value="">후속 조치</option>
                          <option value="">좋아요/보기</option>
                          <option value="">일일 후속 조치</option>
                        </select>
                        <select name="" id="" class="form-control">
                          <option value="">팔로워 50명 추가</option>
                          <option value="">팔로워 250명 확보</option>
                          <option value="">팔로워 500명 확보</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 mt-2 mobile-total-section">
                    <div class="row">
                      <div class="col-4">
                        <span>합집합</span>
                      </div>
                      <div class="col-8 text-end">
                        <span>₩0</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 d-flex mt-2 justify-content-center mobile-down-btn">
                    <button class="btn btn-light">쇼핑 바구니</button>
                    <button class="btn btn-secondary">선택한 제품 주문</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="d-flex pt-4 justify-content-center mb-3">
                <div class="tab-pane-header">
                  <img src="{{ asset('front_asset/images/icons/check.png') }}" alt="" class="check-box">
                  <span> &nbsp; 상품상세</span>
                </div>
              </div>
              <div class="d-flex flex-wrap justify-content-center">
                <div class="package-box bg_orange text-center">
                  <h4>50</h4>
                  <span>팔로워</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>250</h4>
                  <span>5%할인</span>
                </div>
                <div class="package-box bg_orange active text-center">
                  <h4>500</h4>
                  <span>10%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>3000</h4>
                  <span>23%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>5000</h4>
                  <span>26%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
              </div>
              <div class="p-4 justify-content-center d-flex">
                <h4 class="sale-price">57,000원 </h4> &nbsp;<del class="orignal-price"> 60,000</del>
              </div>
              <div class="p-3 justify-content-center d-none d-md-block">
                <button class="purchase-btn">구매하기</button>
                <button class="shop-btn">장바구니</button>
              </div>
              <div class="container d-md-none mobile-checkout-main">
                <div class="row">
                  <div class="row justify-content-center close-down-btn">
                    <i class="bi bi-chevron-down"></i>
                  </div>
                  <div class="col-12">
                    <div class="row justify-center">
                      <div class="col-4">
                        <label for="">옵션</label>
                      </div>
                      <div class="col-8">
                        <select name="" id="" class="form-control mb-1">
                          <option value="">후속 조치</option>
                          <option value="">좋아요/보기</option>
                          <option value="">일일 후속 조치</option>
                        </select>
                        <select name="" id="" class="form-control">
                          <option value="">팔로워 50명 추가</option>
                          <option value="">팔로워 250명 확보</option>
                          <option value="">팔로워 500명 확보</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 mt-2 mobile-total-section">
                    <div class="row">
                      <div class="col-4">
                        <span>합집합</span>
                      </div>
                      <div class="col-8 text-end">
                        <span>₩0</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 d-flex mt-2 justify-content-center mobile-down-btn">
                    <button class="btn btn-light">쇼핑 바구니</button>
                    <button class="btn btn-secondary">선택한 제품 주문</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="d-flex pt-4 justify-content-center mb-3">
                <div class="tab-pane-header">
                  <img src="{{ asset('front_asset/images/icons/check.png') }}" alt="" class="check-box">
                  <span> &nbsp; 상품상세</span>
                </div>
              </div>
              <div class="d-flex flex-wrap justify-content-center">
                <div class="package-box bg_orange text-center">
                  <h4>50</h4>
                  <span>팔로워</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>250</h4>
                  <span>5%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>500</h4>
                  <span>10%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="package-box bg_orange active text-center">
                  <h4>3000</h4>
                  <span>23%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>5000</h4>
                  <span>26%할인</span>
                </div>
                <div class="package-box bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
              </div>
              <div class="p-4 justify-content-center d-flex">
                <h4 class="sale-price">57,000원 </h4> &nbsp;<del class="orignal-price"> 60,000</del>
              </div>
              <div class="p-3 justify-content-center d-none d-md-block">
                <button class="purchase-btn">구매하기</button>
                <button class="shop-btn">장바구니</button>
              </div>
              <div class="container d-md-none mobile-checkout-main">
                <div class="row">
                  <div class="row justify-content-center close-down-btn">
                    <i class="bi bi-chevron-down"></i>
                  </div>
                  <div class="col-12">
                    <div class="row justify-center">
                      <div class="col-4">
                        <label for="">옵션</label>
                      </div>
                      <div class="col-8">
                        <select name="" id="" class="form-control mb-1">
                          <option value="">후속 조치</option>
                          <option value="">좋아요/보기</option>
                          <option value="">일일 후속 조치</option>
                        </select>
                        <select name="" id="" class="form-control">
                          <option value="">팔로워 50명 추가</option>
                          <option value="">팔로워 250명 확보</option>
                          <option value="">팔로워 500명 확보</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 mt-2 mobile-total-section">
                    <div class="row">
                      <div class="col-4">
                        <span>합집합</span>
                      </div>
                      <div class="col-8 text-end">
                        <span>₩0</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 d-flex mt-2 justify-content-center mobile-down-btn">
                    <button class="btn btn-light">쇼핑 바구니</button>
                    <button class="btn btn-secondary">선택한 제품 주문</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="contaier section-dark mb-5">
      <div class="dark-inner">
        <h1 class="text-center text-white">배송완료 된 좋아요 수 <span class="orange-span-text">9,840,561,378</span> 개</h1>
      </div>
    </div>

    {{-- <img src="{{ asset('front_asset/images/service-icon-1.png') }}" alt=""> --}}

    <div class="container box-container py-5 my-5">
      <h2 class="box-container-title text-center pb-3">저비용 고효율 SNS마케팅을 경험해 보세요</h2>
      <div>
        <div class="box-section d-flex justify-content-center align-items-center mt-5">
          <div class="box1 box d-flex flex-column align-items-center justify-content-center">
            <img src="{{ asset('front_asset/images/service-icon-1.png') }}" alt="" class="box-icon">
            <span class="box-title text-center my-4">24시간 주문가동</span>
            <span class="box-description text-center">주문 후 빠른 사직으로 24시간 주문가동됩니다.</span>
          </div>
          <div class="box2 box d-flex flex-column align-items-center justify-content-center">
            <img src="{{ asset('front_asset/images/service-icon-2.png') }}" alt="" class="box-icon">
            <span class="box-title text-center my-4">실제한국인서비스</span>
            <span class="box-description text-center">모든 SNS마케팅에 실제한국인계정으로 제공됩니다.</span>
          </div>
          <div class="box3 box d-flex flex-column align-items-center justify-content-center">
            <img src="{{ asset('front_asset/images/service-icon-3.png') }}" alt="" class="box-icon">
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error suscipit delectus consequuntur asperiores fugit unde dolore corporis possimus tempore! Tempore temporibus atque facilis ex at, neque nemo, aperiam fuga magni exercitationem voluptates placeat dolore amet perspiciatis ratione, harum quisquam totam natus pariatur. Animi consequatur fugiat nulla. Sit, exercitationem accusamus. Debitis quibusdam quod enim blanditiis impedit esse id voluptate provident fugiat quisquam obcaecati molestiae quidem, qui at assumumque asperiores ex quisquam tenetur minus dignissimos? Fugiat quod quibusdam, incidunt quas at molestias ad! Ullam, voluptates!</p>
          </div>
        </div>
        <div class="service-faq-box">
          <div class="service-faq-question d-flex justify-content-between align-items-center">
            <h4 class="service-faq-question-title mb-0 px-4 fa-regular">실제 유저로 작업이 되나요?</h4>
            <h4 class="service-faq-question-icon mb-0"><i class="bi bi-plus"></i></h4>
          </div>
          <div class="service-faq-answer bg-white px-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error suscipit delectus consequuntur asperiores fugit unde dolore corporis possimus tempore! Tempore temporibus atque facilis ex at, neque nemo, aperiam fuga magni exercitationem voluptates placeat dolore amet perspiciatis ratione, harum quisquam totam natus pariatur. Animi consequatur fugiat nulla. Sit, exercitationem accusamus. Debitis quibusdam quod enim blanditiis impedit esse id voluptate provident fugiat quisquam obcaecati molestiae quidem, qui at assumumque asperiores ex quisquam tenetur minus dignissimos? Fugiat quod quibusdam, incidunt quas at molestias ad! Ullam, voluptates!</p>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error suscipit delectus consequuntur asperiores fugit unde dolore corporis possimus tempore! Tempore temporibus atque facilis ex at, neque nemo, aperiam fuga magni exercitationem voluptates placeat dolore amet perspiciatis ratione, harum quisquam totam natus pariatur. Animi consequatur fugiat nulla. Sit, exercitationem accusamus. Debitis quibusdam quod enim blanditiis impedit esse id voluptate provident fugiat quisquam obcaecati molestiae quidem, qui at assumumque asperiores ex quisquam tenetur minus dignissimos? Fugiat quod quibusdam, incidunt quas at molestias ad! Ullam, voluptates!</p>
          </div>
        </div>
        <div class="service-faq-box">
          <div class="service-faq-question d-flex justify-content-between align-items-center">
            <h4 class="service-faq-question-title mb-0 px-4 fa-regular">실제 유저로 작업이 되나요?</h4>
            <h4 class="service-faq-question-icon mb-0"><i class="bi bi-plus"></i></h4>
          </div>
          <div class="service-faq-answer bg-white px-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error suscipit delectus consequuntur asperiores fugit unde dolore corporis possimus tempore! Tempore temporibus atque facilis ex at, neque nemo, aperiam fuga magni exercitationem voluptates placeat dolore amet perspiciatis ratione, harum quisquam totam natus pariatur. Animi consequatur fugiat nulla. Sit, exercitationem accusamus. Debitis quibusdam quod enim blanditiis impedit esse id voluptate provident fugiat quisquam obcaecati molestiae quidem, qui at assumumque asperiores ex quisquam tenetur minus dignissimos? Fugiat quod quibusdam, incidunt quas at molestias ad! Ullam, voluptates!</p>
          </div>
        </div>
      </div>
    </div>

    <div class="service-lower-section container d-flex flex-column justify-content-center align-items-center">
      <h2 class="service-lower-title text-center">서비스를 구매하셨나요?</h2>
      <span class="service-lower-description text-center mt-3">서비스 후기를 남겨주시면 회원님께 소정의 적립금을 지급해 드립니다.</span>
      <div class="d-flex service-lower-lower-section">
        <div class="service-lower-icon d-flex flex-column justify-content-center align-items-center">
          <img src="{{ asset('front_asset/images/service-icon-4.png') }}" alt="">
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

    {{-- <div class="container pb-4">
      <h1 class="text-center pb-5 pt-5">How It Works</h1>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
          <div class="card service-card">
            <div class="card-body">
              <div class="img">
                <img src="{{ asset('front_asset/images/icons/insta_deliver1.png') }}" alt="">
              </div>
              <div class="title">
                <h2>Instant delivery guaranteed</h2>
              </div>
              <div class="text">
                <p>You will typically start seeing Likes, Followers, and Views within minutes of purchasing.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
          <div class="card service-card">
            <div class="card-body">
              <div class="img">
                <img src="{{ asset('front_asset/images/icons/insta_deliver2.png') }}" alt="">
              </div>
              <div class="title">
                <h2>Our guarantee</h2>
              </div>
              <div class="text">
                <p>We want to leave a lasting impression on our clients. If you aren't satisfied with the quality or
                  delivery of your order, tell us. We'll refund any order that isn't fulfilled.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
          <div class="card service-card">
            <div class="card-body">
              <div class="img">
                <img src="{{ asset('front_asset/images/icons/insta_deliver3.png') }}" alt="">
              </div>
              <div class="title">
                <h2>24/7 customer support</h2>
              </div>
              <div class="text">
                <p>Our dedicated support staff is always available. If you have any questions about our services or
                  experience any problems with your order, please don't hesitate to contact us.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- <div class="container-fluid py-5 testimonials-fluid">
      <div class="container-fluid">
        <div class="services-testimonials justify-content-center">
          <div class="row owl-carousel owl-theme" id="services_testimonials">
            <div class="col-12 services-testimonials-col">
              <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
              </svg>
              <p>Buzzoid has fast turnaround and excellent customer service. Never seen such a
                great experience.</p>
            </div>
            <div class="col-12 services-testimonials-col">
              <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
              </svg>
              <p>Buzzoid has fast turnaround and excellent customer service. Never seen such a
                great experience.</p>
            </div>
            <div class="col-12 services-testimonials-col">
              <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
              </svg>
              <p>Buzzoid has fast turnaround and excellent customer service. Never seen such a
                great experience.</p>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- <div class="container p-4">
      <h1 class="text-center">인스 타 그램 좋아요를 구매할 준비가 되셨나요?</h1>
      <div class="row justify-content-center">
        <div class="col-12 col-md-3 blog_carousel d-flex align-items-stretch">
          <div class="card">
            <div class="card-body">
              <div class="img">
                <img src="{{ asset('front_asset/images/icons/list-services--img-1.svg') }}" alt="">
              </div>
              <div class="text">
                <h2>1. 즉시 배송 보장</h2>
                <p>좋아요를 받을 때까지 기다리지 마세요. 주문은 일반적으로 구매 후 몇 분 이내에 처리됩니다.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-3 blog_carousel d-flex align-items-stretch">
          <div class="card">
            <div class="card-body">
              <div class="img">
                <img src="{{ asset('front_asset/images/icons/list-services--img-2.svg') }}" alt="">
              </div>
              <div class="text">
                <h2>2. 100% 실제 좋아요</h2>
                <p>실제 계정(가짜 계정 없음)을 가진 실제 사용자로부터 고품질의 즉각적인 좋아요를 받으세요.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-3 blog_carousel d-flex align-items-stretch">
          <div class="card">
            <div class="card-body">
              <div class="img">
                <img src="{{ asset('front_asset/images/icons/list-services--img-3.svg') }}" alt="">
              </div>
              <div class="text">
                <h2>3. 24/7 고객 지원</h2>
                <p>나쁜 고객 지원을 처리하는 것보다 더 나쁜 것은 없습니다. 우리는 양질의 서비스를 제공하기 위해 노력합니다.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    {{-- <section class="faq-section mt-5 pt-5">
      <div class="container">
        <div class="faq-badge d-flex justify-content-center">
          <h6 class="text-uppercase">Buy Instagram Likes Easily With Buzzoid</h6>
        </div>
        <p class="text-center">Over 1,000 daily customers trust us as the best site to deliver real Instagram likes
        </p>
        <div class="faqs mt-4">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 mb-3 pb-1">
              <div class="faq-column">
                <span class="faq-question">WHY CHOOSE BUZZOID?​</span>
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
              </div>
              <p class="faq-answer">Buzzoid was formed by a team of digital media experts with over a decade of
                experience operating social media accounts.

                We’re constantly testing new methods of driving social engagement and know what works and what
                doesn’t. We’ve grown thousands of accounts and delivered millions of likes over the past several
                years.

                We're proud to report more than 1000 recurring monthly customers that using Buzzoid to grow their
                social media presence.

                Need social proof? Check our reviews page to see what our past customers are saying about our service
              </p>
            </div>
            <div class="col-lg-6 mb-3 pb-1">
              <div class="faq-column">
                <span class="faq-question">WHICH PACKAGE SHOULD I CHOOSE?​</span>
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
              </div>
              <p class="faq-answer">We offer several different packages to fit your brand’s unique marketing goals and
                budget.

                First, you should decide whether you want high-quality likes or premium likes.

                The high-quality package is a little bit more affordable. It works great for accounts that need a
                general boost in engagement.

                The premium package is better for new accounts or those looking to really step their game up and drive
                more followers and conversions.

                Both packages come in quantities of 50, 100, & 250 per photo or video.</p>
            </div>
            <div class="col-lg-6 mb-3 pb-1">
              <div class="faq-column">
                <span class="faq-question">HOW FAST IS YOUR TURNAROUND TIME?​</span>
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
              </div>
              <p class="faq-answer mb-3 pb-1">We don't waste any time. Our system will process your order within
                minutes. However, our users are 100% authentic, so it can take up to 24 hours to roll out completely.

                We've also learned to avoid Instagram's spam filter by matching the velocity of our likes roll out
                depending on where the accounts are registered. This is a sophisticated process, but it works. There's
                no point buying likes if it's going to penalize your content and slow your growth. This is why we
                prefer to be methodical in how the likes are rolled out depending on the timezone in which most of
                your userbase is registered.</p>
            </div>
            <div class="col-lg-6 mb-3 pb-1">
              <div class="faq-column">
                <span class="faq-question">WHAT INFORMATION DO I NEED TO PROVIDE?</span>
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
              </div>
              <p class="faq-answer">The only information we need is your username and instructions regarding which
                photo or video you want to receive the likes.

                We will never ask for your password or any private information about your account. Be wary of
                companies asking for logins or other sensitive information when buying Instagram likes online — this
                simply isn’t needed to roll out this type of service.</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <div class="container-fluid pt-4 service-feedback">
      <div class="container">
        <h1 class="text-center">서비스를 구매하셨나요?</h1>
        <p class="text-center">서비스 후기를 남겨주시면 회원님께 소정의 적립금을 지급해 드립니다.</p>
        <div class="row pt-4">
          <div class="col-md-4 services-feedback-list">
            <ul class="list-group border-0">
              <li class="list-group-item">
                <div>
                  <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                    <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                    c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                    c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                    <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                    c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                    <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                    <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
                  </svg>
                  <p>How did you make verified users with hundreds of thousands of followers to like my picture for
                    such a cheap price?”</p>
                </div>
              </li>
              <li class="list-group-item">
                <div>
                  <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                    <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                    c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                    c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                    <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                    c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                    <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                    <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
                  </svg>
                  <p>They are good and real””</p>
                </div>
              </li>
              <li class="list-group-item">
                <div>
                  <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                    <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                    c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                    c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                    <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                    c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                    <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                    <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
                  </svg>
                  <p>Actually worked and very professional.””</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4 services-feedback-list">
            <ul class="list-group border-0">
              <li class="list-group-item">
                <div>
                  <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                    <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                    c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                    c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                    <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                    c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                    <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                    <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
                  </svg>
                  <p>How did you make verified users with hundreds of thousands of followers to like my picture for
                    such a cheap price?”</p>
                </div>
              </li>
              <li class="list-group-item">
                <div>
                  <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                    <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                    c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                    c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                    <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                    c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                    <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                    <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
                  </svg>
                  <p>They are good and real””</p>
                </div>
              </li>
              <li class="list-group-item">
                <div>
                  <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                    <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                    c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                    c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                    <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                    c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                    <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                    <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
                  </svg>
                  <p>Actually worked and very professional.””</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4 services-feedback-list">
            <ul class="list-group border-0">
              <li class="list-group-item">
                <div>
                  <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                    <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                    c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                    c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                    <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                    c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                    <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                    <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
                  </svg>
                  <p>How did you make verified users with hundreds of thousands of followers to like my picture for
                    such a cheap price?”</p>
                </div>
              </li>
              <li class="list-group-item">
                <div>
                  <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                    <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                    c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                    c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                    <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                    c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                    <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                    <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
                  </svg>
                  <p>They are good and real””</p>
                </div>
              </li>
              <li class="list-group-item">
                <div>
                  <svg viewBox="0 0 62.4 44.8" class="svg_qouted">
                    <path class="st0" d="M40.8,30.6c-0.9,2.3-1.7,3.9-0.9,6.5c0.7,2.3,2.5,3.9,4.5,5.2c3.7,2.4,8.7,3.6,12.6,0.9
                    c3.8-2.5,5.8-7.3,4.4-11.7c-0.4-1.3-1.2-2.4-2.2-3.2c-2.1-3.2-6.1-4.5-9.9-4.3c-2.2,0.1-4.5,0.8-6.2,2.4c-0.6,0.6-1.1,1.2-1.6,2
                    c-0.2,0.4-0.6,1.4-0.8,2C40.7,30.7,40.6,31.3,40.8,30.6z"></path>
                    <path class="st0" d="M10,41.2c4.6,3.3,12.4,4.1,15.9-1.2c1-1.5,1.5-3.1,1.6-4.6c0.6-3-0.5-6-2.8-8c-0.5-0.7-1.1-1.3-1.6-2
                    c-1.8-2-4.9-2.2-7.2-1c-2.6,0-5.2,0.7-7.3,2.7C4.1,31.2,5.5,37.9,10,41.2z"></path>
                    <path class="st1" d="M42,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C29,27.4,38.5,10.5,48.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C39.2,7.9,31.1,19.6,35,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C41.2,37.8,42.5,37,42,36.2L42,36.2z"></path>
                    <path class="st1" d="M8,36.2c-7.2-11.4,14.9-17.4,18.7-4.6c1.7,5.8-2.8,11.2-8.6,11.6c-3.9,0.2-7.6-1.4-10.5-4.1
                    C-5,27.4,4.5,10.5,14.7,1.3c0.7-0.7-0.3-1.7-1.1-1.1C5.2,7.9-2.9,19.6,1,31.5c2.8,8.4,12.2,16.1,21.3,12
                    c9.3-4.1,7.1-16.5-1.4-20.1c-8.5-3.5-20.1,4-14.3,13.4C7.2,37.8,8.5,37,8,36.2L8,36.2z"></path>
                  </svg>
                  <p>Actually worked and very professional.””</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> --}}
    <footer class="footer">
      <div class="container p-5">
        <div class="row">
          <div class="col-lg-4">
            <div class="footer-img">
              <img src="{{ asset('front_asset/images/logo.png') }}" alt="">
            </div>
            <ul class="list-group border-0">
              <li class="list-group-item border-0">
                <i class="bi bi-envelope"></i> &nbsp;
                <span>info@instaget.com</span>
              </li>
              <li class="list-group-item border-0">
                <i class="bi bi-telephone"></i> &nbsp;
                <span>++0012345678</span>
              </li>
              <li class="list-group-item border-0">
                <i class="bi bi-geo-alt"></i> &nbsp;
                <span>Address: #302, Building A, Seoul Forest SKV1TOWER, 5 Seongsuil-ro 8-gil, Seongdong-gu, Seoul
                  (Seongsu-dong 2-ga)</span>
              </li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h2 class="footer-heading">Services</h2>
            <ul class="list-group border-0">
              <li class="list-group-item border-0">
                <span>Buy Insatgrams Followers</span>
              </li>
              <li class="list-group-item border-0">
                <span>Buy Insatgrams Likes</span>
              </li>
              <li class="list-group-item border-0">
                <span>Buy Insatgrams Views</span>
              </li>
              <li class="list-group-item border-0">
                <span>Insatgrams Reels</span>
              </li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h2 class="footer-heading">Company</h2>
            <ul class="list-group border-0">
              <li class="list-group-item border-0">
                <span>Contact Us</span>
              </li>
              <li class="list-group-item border-0">
                <span>About Us</span>
              </li>
              <li class="list-group-item border-0">
                <span>Privacy Policy</span>
              </li>
              <li class="list-group-item border-0">
                <span>Term of Services</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="row pt-5">
          <p class="text-center text-white">Copyright © INSTAGET. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- custom JS code after importing jquery and owl -->
  <script type="text/javascript">
    $(document).ready(function() {
          $("#owl-row-1").owlCarousel();
      });
      $('#owl-row-1').owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items: 1
              },
              1000: {
                  items: 1
              }
          }
      })
  </script>
  <script>
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
    $('.bg_orange').click(function (event) {
      $('.mobile-checkout-main').addClass('mobile-checkout-main-show');
     })
    $('.close-down-btn').click(function (event) {
      $('.mobile-checkout-main').removeClass('mobile-checkout-main-show');
     })
  </script>
  <script>
    $(document).ready(function(){
      $('#services_testimonials').owlCarousel({
        items: 1,
        nav: true,
        dots: true,
      });
    });
  </script>
  <script>
    let prevoius_element = "";

    $(".faq-column").on("click", (event) => {
        if(event.target.closest(".faq-question")){
            event.target = event.target.parentNode;
        }

        if(event.target.closest(".fa")){
            event.target = event.target.parentNode;
        }

        let element = event.target;
        let get_slider = $("#answer-slider");
        let question = element.getElementsByClassName("faq-question")[0];
        let answer = element.parentNode.getElementsByClassName("faq-answer")[0];
        let icon = element.getElementsByClassName("fa")[0];
        let faq_columns = document.querySelectorAll(".faq-column-active");

        if(prevoius_element == element){
            element.removeAttribute("id");
            element.classList.remove("faq-column-active");
            icon.classList.remove("fa-chevron-up");
            icon.classList.add("fa-chevron-left");
            icon.classList.remove("mt-1");
            if(get_slider.length != 0){
                $("#answer-slider").slideUp("slow");
                get_slider.removeAttr("id");
            }
            prevoius_element = "";
            return;
        }

        prevoius_element = element;

        for(let i=0; i<faq_columns.length; i++){
            if(faq_columns[i].classList.contains("faq-column-active")){
                faq_columns[i].classList.remove("faq-column-active");
                if(faq_columns[i].getElementsByClassName("fa")[0].classList.contains("fa-chevron-up")){
                    faq_columns[i].getElementsByClassName("fa")[0].classList.remove("fa-chevron-up");
                    faq_columns[i].getElementsByClassName("fa")[0].classList.add("fa-chevron-left");
                    faq_columns[i].getElementsByClassName("fa")[0].classList.remove("mt-1");
                }
            }
        }

        if(get_slider.length != 0){
            $("#answer-slider").slideUp("slow");
            get_slider.removeAttr("id");
        }

        element.classList.add("faq-column-active");
        icon.classList.remove("fa-chevron-left");
        icon.classList.add("fa-chevron-up");
        icon.classList.add("mt-1");
        answer.setAttribute("id", "answer-slider");
        $("#answer-slider").slideDown("slow");
    });

  </script>
  <script>

    let element = "";

    $(document).on("click", (event) => {
        if(event.target.closest(".service-faq-box")){
          let mainFaqBox = event.target.closest(".service-faq-box");
          let faqAnswer = mainFaqBox.getElementsByClassName("service-faq-answer")[0];
          let icon = mainFaqBox.getElementsByClassName("service-faq-question")[0].getElementsByClassName("service-faq-question-icon")[0];
          
          if(element === faqAnswer){
            faqAnswer.classList.remove("service-faq-answer-active");
            faqAnswer.classList.add("service-faq-answer-inactive");
            icon.classList.remove("faq-answer-active-icon");
            element = "";
            return;
          }
          element = faqAnswer;

          let allFaqAnswers = document.querySelectorAll(".service-faq-answer");
          for(let i=0; i<allFaqAnswers.length; i++){
              if(faqAnswer !== allFaqAnswers[i] && allFaqAnswers[i].classList.contains("service-faq-answer-active")){
                allFaqAnswers[i].classList.remove("service-faq-answer-active");
                allFaqAnswers[i].classList.add("service-faq-answer-inactive");
                allFaqAnswers[i].parentNode.getElementsByClassName("service-faq-question")[0].getElementsByClassName("service-faq-question-icon")[0].classList.remove("faq-answer-active-icon");
              }
          }

          faqAnswer.classList.remove("service-faq-answer-inactive");
          faqAnswer.classList.add("service-faq-answer-active");
          icon.classList.add("faq-answer-active-icon");
        }
    });

  </script>
</body>

</html>
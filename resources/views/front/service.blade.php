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
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('front_asset/css/style.css') }}">
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
          <div class="service">
            <li class="btn list-group-item instagram-icon d-flex">
              <i class="bi bi-instagram"></i>&nbsp;
            </li>
            <div class="content">
              <div class="accordion">
                <div class="accordion-item">
                  <div class="accordion-header" id="headingOne">
                    <button class="accordion-button shadow-none collapsed insta-danger" type="button"
                      data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                      aria-controls="collapseOne">
                      Buy Instagram Likes
                    </button>
                  </div>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body instagram-accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed shadow-none insta-success" type="button"
                      data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                      aria-controls="collapseTwo">
                      Buy Instagram Followers
                    </button>
                  </div>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body instagram-accordion-body">
                      <ul class="instagram-likes-ul follower-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="service">
            <li class="btn list-group-item youtube-icon d-flex">
              <i class="bi bi-youtube"></i>&nbsp;
            </li>
            <div class="content">
              <div class="accordion">
                <div class="accordion-item">
                  <div class="accordion-header youtube-accordion" id="youtubeH1">
                    <button class="btn d-block shadow-none btn-youtube" type="button" data-bs-toggle=""
                      data-bs-target="#youtubeH1" aria-expanded="false" aria-controls="youtubeH1">
                      Buy Backlinks
                    </button>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header youtube-accordion" id="youtubeH2">
                    <button class="btn d-block shadow-none btn-youtube" type="button" data-bs-toggle=""
                      data-bs-target="#youtubeH2" aria-expanded="false" aria-controls="youtubeH2">
                      SEO Services & Packages
                    </button>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header youtube-accordion" id="youtubeH3">
                    <button class="btn d-block shadow-none btn-youtube" type="button" data-bs-toggle=""
                      data-bs-target="#youtubeH3" aria-expanded="false" aria-controls="youtubeH3">
                      Buy SEO Consulting
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="service">
            <li class="btn list-group-item naver-icon d-flex">
              <img src="{{ asset('front_asset/images/icons/naver.png') }}" class="talk-img" alt=""> &nbsp;
            </li>
            <div class="content">
              <div class="accordion">
                <div class="accordion-item">
                  <div class="accordion-header naver-accordion" id="naverH1">
                    <button class="btn d-block shadow-none naver-bnt" type="button" data-bs-toggle=""
                      data-bs-target="#naverH1" aria-expanded="false" aria-controls="naverH1">
                      Buy Instagram Followers
                    </button>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header naver-accordion" id="naverH2">
                    <button class="btn d-block shadow-none naver-btn" type="button" data-bs-toggle=""
                      data-bs-target="#naverH2" aria-expanded="false" aria-controls="naverH2">
                      Buy Instagram Followers
                    </button>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header naver-accordion" id="naverH3">
                    <button class="btn d-block shadow-none naver-btn" type="button" data-bs-toggle=""
                      data-bs-target="#naverH3" aria-expanded="false" aria-controls="naverH3">
                      Buy Instagram Like
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="service">
            <li class="btn list-group-item appMarketing-icon d-flex instagram-btns">
              <i class="bi bi-phone"></i> &nbsp;
            </li>
            <div class="content">
              <div class="accordion">
                <div class="accordion-item">
                  <div class="accordion-header mobile-accordion" id="mobileH1">
                    <button class="btn d-block shadow-none mobile-btn" type="button" data-bs-toggle=""
                      data-bs-target="#mobileH1" aria-expanded="false" aria-controls="mobileH1">
                      Buy Instagram Followers
                    </button>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header mobile-accordion" id="mobileH2">
                    <button class="btn d-block shadow-none mobile-btn" type="button" data-bs-toggle=""
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Accordion Item #2
                    </button>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header mobile-accordion" id="mobileH3">
                    <button class="btn d-block shadow-none mobile-btn" type="button" data-bs-toggle=""
                      data-bs-target="#mobileH3" aria-expanded="false" aria-controls="mobileH3">
                      Accordion Item #3
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="service">
            <li class="btn list-group-item talk-icon d-flex instagram-btns">
              <img src="{{ asset('front_asset/images/icons/talk.png') }}" class="talk-img" alt=""> &nbsp;
            </li>
            <div class="content">
              <div class="accordion">
                <div class="accordion-item">
                  <div class="accordion-header talk-accordion" id="talkH1">
                    <button class="btn d-block shadow-none talk-btn" type="button" data-bs-toggle=""
                      data-bs-target="#talkH1" aria-expanded="false" aria-controls="talkH1">
                      Accordion Item #1
                    </button>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header talk-accordion" id="talkH2">
                    <button class="btn d-block shadow-none talk-btn" type="button" data-bs-toggle=""
                      data-bs-target="#talkH2" aria-expanded="false" aria-controls="talkH2">
                      Accordion Item #2
                    </button>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header talk-accordion" id="talkH3">
                    <button class="btn d-block shadow-none talk-btn" type="button" data-bs-toggle=""
                      data-bs-target="#talkH3" aria-expanded="false" aria-controls="talkH3">
                      Accordion Item #3
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="active-service" style="display: none;">

        </div>
      </div>

    </div>
    <div class="container pt-5 d-none d-md-flex justify-content-center">
      <div class="dropdown me-2">
        <button class="btn instagram-icon d-flex instagram-btns insta-web-show" type="button" id="instaDropDown"
          data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-instagram text-white"></i>&nbsp;
          <span class="d-none d-md-block text-white">인스 타 그램</span>
        </button>
        <ul class="dropdown-menu insta-web instagram-pkg-dropdown" aria-labelledby="instaDropDown">
          <li class="instagram-li">
            <a class="dropdown-item" href="#">
              <i class="bi bi-heart p-1"></i> Buy Instagram Likes
              <i class="bi bi-caret-right"></i>
            </a>
            <ul class="dropdown-menu dropdown-submenu">
              <li>
                <a class="dropdown-item" href="#">Buy Instagram Likes</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Buy Automatic Instagram Likes</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Buy Instagram Monthly Likes</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Free Instagram Likes</a>
              </li>
              <li>
            </ul>
          </li>
          <li class="instagram-fo">
            <a class="dropdown-item" href="#">
              <i class="bi bi-person p-1"></i> Buy Instagram Likes
            </a>
          </li>
          <li class="instagram-ply">
            <a class="dropdown-item" href="#">
              <i class="bi bi-play-fill"></i> Buy Instagram Views
              <i class="bi bi-caret-right"></i>
            </a>
            <ul class="dropdown-menu dropdown-submenu">
              <li>
                <a class="dropdown-item" href="#">Buy Instagram Views</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Buy Automatic Instagram Views</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Free Instagram Views</a>
              </li>
              <li>
            </ul>
          </li>
          <li class="instagram-cmnt">
            <a class="dropdown-item" href="#">
              <i class="bi bi-chat-fill"></i> Buy Instagram Comments
              <i class="bi bi-caret-right"></i>
            </a>
            <ul class="dropdown-menu dropdown-submenu">
              <li>
                <a class="dropdown-item" href="#">Buy Instagram Comments</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Buy Automatic Instagram Comments</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Buy Instagram Comments Like</a>
              </li>
              <li>
            </ul>
          </li>
          <li class="instagram-reel">
            <a class="dropdown-item" href="#">
              <i class="bi bi-file-play"></i> Instagram Reels
              <i class="bi bi-caret-right"></i>
            </a>
            <ul class="dropdown-menu dropdown-submenu">
              <li>
                <a class="dropdown-item" href="#">Buy Instagram Reels Video Views</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Buy Instagram Reels Like</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Buy Instagram Reels Comments</a>
              </li>
              <li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="dropdown me-2">
        <button class="btn youtube-icon d-flex instagram-btns" type="button" id="youtubeDropDow"
          data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-youtube  text-white"></i>&nbsp;
          <span class="d-none d-md-block  text-white">유튜브</span>
        </button>
        <ul class="dropdown-menu youtube-web active" aria-labelledby="youtubeDropDow">
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Likes
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Likes
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Views
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Comments
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Instagram Reels
            </a>
          </li>
        </ul>
      </div>
      <div class="dropdown me-2">
        <button class="btn  naver-icon d-flex instagram-btns" type="button" id="instaDropDown"
          data-mdb-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('front_asset/images/icons/naver.png') }}" class="talk-img" alt="">
          <span class="d-none d-md-block  text-white">N사마케팅</span>
        </button>
        <ul class="dropdown-menu youtube-web active naver-web" aria-labelledby="youtubeDropDow">
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Likes
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Likes
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Views
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Comments
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Instagram Reels
            </a>
          </li>
        </ul>
      </div>
      <div class="dropdown me-2">
        <button class="btn  appMarketing-icon d-flex instagram-btns" type="button" id="dropdownMenuButton"
          data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-phone text-white"></i> &nbsp;
          <span class="d-none d-md-block text-white">앱마케팅</span>
        </button>
        <ul class="dropdown-menu youtube-web active mobile-web" aria-labelledby="youtubeDropDow">
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Likes
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Likes
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Views
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Comments
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Instagram Reels
            </a>
          </li>
        </ul>
      </div>
      <div class="dropdown me-2">
        <button class="btn talk-icon d-flex instagram-btns" type="button" id="dropdownMenuButton"
          data-mdb-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('front_asset/images/icons/talk.png') }}" class="talk-img" alt=""> &nbsp;
          <span class="d-none d-md-block text-white">K사마케팅</span>
        </button>
        <ul class="dropdown-menu youtube-web active tlak-web" aria-labelledby="youtubeDropDow">
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Likes
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Likes
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Views
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Buy Instagram Comments
            </a>
          </li>
          <li class="">
            <a class="dropdown-item" href="#">
              Instagram Reels
            </a>
          </li>
        </ul>
      </div>
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
        <div class="d-none d-md-block col-lg-6 pakg_heading p-2 mb-1 ">
          <h3 class="text-center heading">인스타팔로워늘리기</h3>
          <span class="text-center p-3 title">주문후단기간에인스타팔로워가자연스럽게증가하는서비스입니다.</span> <br> <span
            class="text-center p-3 title">365일24시간연중무휴자동주문처리</span>
        </div>
      </div>
      <div class="row justify-content-center tab-content-parent">
        <div class="col-lg-6 justify-content-center text-center">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link tabs-button active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                type="button" role="tab" aria-controls="home" aria-selected="true">실제한국인팔로워</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link tabs-button" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                type="button" role="tab" aria-controls="profile" aria-selected="false">리얼한국인팔로워</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link tabs-button" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
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
              <div class="d-flex pt-4 justify-content-center">
                <div class="tab-pane-header">
                  <img src="{{ asset('front_asset/images/icons/check.png') }}" alt="" class="check-box">
                  <span> &nbsp; 상품상세</span>
                </div>
              </div>
              <div class="row tab-content-row">
                <div class="col-3 col-md-2 bg_orange active text-center">
                  <h4>50</h4>
                  <span>팔로워</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>250</h4>
                  <span>5%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>500</h4>
                  <span>10%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>3000</h4>
                  <span>23%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>5000</h4>
                  <span>26%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
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
              <div class="d-flex pt-4 justify-content-center">
                <div class="tab-pane-header">
                  <img src="images/icons/check.png" alt="" class="check-box">
                  <span> &nbsp; 상품상세</span>
                </div>
              </div>
              <div class="row tab-content-row">
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>50</h4>
                  <span>팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>250</h4>
                  <span>5%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange active text-center">
                  <h4>500</h4>
                  <span>10%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>3000</h4>
                  <span>23%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>5000</h4>
                  <span>26%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
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
              <div class="d-flex pt-4 justify-content-center">
                <div class="tab-pane-header">
                  <img src="images/icons/check.png" alt="" class="check-box">
                  <span> &nbsp; 상품상세</span>
                </div>
              </div>
              <div class="row tab-content-row">
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>50</h4>
                  <span>팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>250</h4>
                  <span>5%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>500</h4>
                  <span>10%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange active text-center">
                  <h4>3000</h4>
                  <span>23%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>5000</h4>
                  <span>26%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
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
</body>

</html>
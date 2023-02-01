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
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="{{ asset('front_asset/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front_asset/css/style.css') }}">
  <title>Instaget</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
  <div class="container-fluid m-0 p-0">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('front_asset/images/logo.png') }}" alt="">
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
                <a class="nav-link" href="{{ url('/faq') }}">Frequently Asked Questions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('front.login') }}">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <section class="slider-section">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="overlay">
              <video class="fullscreen" src="{{ asset('front_asset/images/home-bg.mp4')}}" playsinline autoplay muted loop>
              </video>
            </div>

            <div class="carousel-caption trickcenter">
              <h3><span class="text-on-img">팔로워, 좋아요 늘리기 </span>  <br>
                24시간 자동솔루션</h3>
              <div>
                <p class="slider-caption">
                  SNS 실제한국인 팔로워, 좋아요, 순위 트래픽 <br> 간편주문으로 마케팅효과 톡톡히 보세요.
                </p>
              </div>
              <div class="d-flex justify-content-center mt-5">
                <button class="insta-btn">What is instagram</button>
                <button class="service-btn">Service</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- <section class="services-section mt-5">
      <div class="container">
        <div class="row">
          <h3 class="text-center m-2 p-5">Services</h3>
          <div class="col-lg-12">
            <div class="row services-card">
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card border-0">
                  <img src="{{ asset('front_asset/images/icons/1.png')}}" class="card-img-top" alt="...">
                  <div class="d-block image-caption">
                    <p>Follower Up</p>
                    <span>250</span>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Increase Instagram Followers</h5>
                    <p class="card-text">Your followers will grow in no time.
                      A high follower count increases your brand's credibility and
                      helps you attract more followers.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card border-0">
                  <img src="{{ asset('front_asset/images/icons/3.png')}}" class="card-img-top" alt="...">
                  <div class="d-block image-caption">
                    <p class="text-black">Follower Up</p>
                    <span class="text-black">250</span>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Instagram Likes & Views</h5>
                    <p class="card-text">Your followers will grow in no time.
                      A high follower count increases your brand's credibility and
                      helps you attract more followers.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card border-0">
                  <img src="{{ asset('front_asset/images/icons/6.png')}}" class="card-img-top" alt="...">
                  <div class="d-block image-caption">
                    <p>Follower Up</p>
                    <span>250</span>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Daily Followers</h5>
                    <p class="card-text">Your followers will grow in no time.
                      A high follower count increases your brand's credibility and
                      helps you attract more followers.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row services-card">
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card border-0">
                  <img src="{{ asset('front_asset/images/icons/6.png')}}" class="card-img-top" alt="...">
                  <div class="d-block image-caption">
                    <p>Follower Up</p>
                    <span>250</span>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Increase Instagram Followers</h5>
                    <p class="card-text">Your followers will grow in no time.
                      A high follower count increases your brand's credibility and
                      helps you attract more followers.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card border-0">
                  <img src="{{ asset('front_asset/images/icons/2.png')}}" class="card-img-top" alt="...">
                  <div class="d-block image-caption">
                    <p>Follower Up</p>
                    <span>250</span>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Increase Instagram Followers</h5>
                    <p class="card-text">Your followers will grow in no time.
                      A high follower count increases your brand's credibility and
                      helps you attract more followers.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card border-0">
                  <img src="{{ asset('front_asset/images/icons/3.png')}}" class="card-img-top" alt="...">
                  <div class="d-block image-caption">
                    <p class="text-black">Follower Up</p>
                    <span class="text-black">250</span>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Increase Instagram Followers</h5>
                    <p class="card-text">Your followers will grow in no time.
                      A high follower count increases your brand's credibility and
                      helps you attract more followers.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    {{-- <section class="about-us" style="background-image: url('{{ asset('front_asset/images/bg.png') }}');">
      <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
          <h4 class="text-white">Why instaget should i use?</h4>
          <p class="text-white">Instaget's services are based on marketing and account management agency know-how, and are
            proven solutions that have been servicing for many years since the early days of Instagram, YouTube, and Facebook</p>
            <a class="see-more">See more >></a>
        </div>
      </div>
    </section> --}}
    {{-- <section class="customer-feedback">
      <h3 class="text-center text-white">Customer Reviews</h3>
      <div id="owl-row-1" class="owl-carousel owl-theme">
        <div class="item">
          <h3>No tea at all! It's really natural!!</h3>
            <p>It's my first time doing it on Instagram, so I ordered only 250 people, but I'm really satisfied with it because it's really natural! (I've bought Koreans from other companies before, but the photos were too tidy and unfollowed) I </p>
        </div>
        <div class="item">
          <h3>No tea at all! It's really natural!!</h3>
            <p>It's my first time doing it on Instagram, so I ordered only 250 people, but I'm really satisfied with it because it's really natural! (I've bought Koreans from other companies before, but the photos were too tidy and unfollowed) I </p>
        </div>
        <div class="item">
          <h3>No tea at all! It's really natural!!</h3>
            <p>It's my first time doing it on Instagram, so I ordered only 250 people, but I'm really satisfied with it because it's really natural! (I've bought Koreans from other companies before, but the photos were too tidy and unfollowed) I </p>
        </div>
    </div>
    </section> --}}

    <section class="card-section py-5 my-5 font-family">
      <div class="container">
        <div class="row">
          <div class="col-4 d-flex flex-column justify-content-center align-items-center text-center">
            <img src="{{ asset('front_asset/images/home-1.png') }}" alt="">
            <h5 class="card-section-lower-text-1 mt-3" id="animateNumber1">0</h5>
            <h6 class="card-section-lower-text-2">총 누적 주문</h6>
          </div>
          <div class="col-4 d-flex flex-column justify-content-center align-items-center text-center">
            <img src="{{ asset('front_asset/images/home-2.png') }}" alt="">
            <h5 class="card-section-lower-text-1 mt-3" id="animateNumber2">0</h5>
            <h6 class="card-section-lower-text-2">오늘 완료된 주문</h6>
          </div>
          <div class="col-4 d-flex flex-column justify-content-center align-items-center text-center">
            <img src="{{ asset('front_asset/images/home-3.png') }}" alt="">
            <h5 class="card-section-lower-text-1 mt-3" id="animateNumber3">0</h5>
            <h6 class="card-section-lower-text-2">누적 회원 수</h6>
          </div>
        </div>
      </div>
    </section>

    <!-- START: About Section -->
    <div class="container">
      <section class="section section-about">
        <div class="row">
          <!-- Image Area -->
          <div class="col-12 col-lg-6 image-area mb-5 mb-lg-0">
            <div class="image-backgroud">
              <img src="{{ asset('front_asset/images/제목을-입력해주세요_-007.png') }}" class="main-img" alt="">
              <img src="{{ asset('front_asset/images/chart.png') }}" class="img1 d-none d-sm-block" alt="" data-aos="fade-left" data-aos-once="true" data-aos-duration="1500">
              <div class="box1 d-flex align-items-center d-none d-sm-block" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">
                <div class="icon">
                  <img src="{{ asset('front_asset/images/dribbble.PNG') }}" alt="">
                </div>
                <div class="text">
                  <h3>185+</h3>
                  <p>Brands Joined</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Text Area -->
          <div class="col-12 col-lg-6 text-area">
            <h1 class="title">SNS계정 셀프관리 시작해보세요.</h1>
            <p class="description">인스타 팔로워 늘리기 , 인스타 좋아요 늘리기 대표 업체. 인스타그램 마케팅외에도 유튜브,N사 쇼핑,N사 플레이스,구글플레이/ios 앱 마케팅 서비스를 전문으로 하고 있습니다.</p>
            <h3 class="list-title">XXX만의 차별화</h3>
            <div class="d-flex gap-4 flex-wrap">
              <ul class="p-0">
                <li class="d-flex align-items-center gap-2 mb-2">
                  <span class="bi bi-check-circle-fill tick-icon"></span>
                  <span>365일 24시간 자동화 주문</span>
                </li>
                <li class="d-flex align-items-center gap-2 mb-2">
                  <span class="bi bi-check-circle-fill tick-icon"></span>
                  <span>실제 활성 계정으로 구성</span>
                </li>
                <li class="d-flex align-items-center gap-2 mb-2">
                  <span class="bi bi-check-circle-fill tick-icon"></span>
                  <span>SNS랭킹 최적화 된 서비스</span>
                </li>
                <li class="d-flex align-items-center gap-2 mb-2">
                  <span class="bi bi-check-circle-fill tick-icon"></span>
                  <span>마케팅 전문가 무료상담 </span>
                </li>
              </ul>
              <ul class="p-0">
                <li class="d-flex align-items-center gap-2 mb-2">
                  <span class="bi bi-check-circle-fill tick-icon"></span>
                  <span>빠른 작업 속도</span>
                </li>
                <li class="d-flex align-items-center gap-2 mb-2">
                  <span class="bi bi-check-circle-fill tick-icon"></span>
                  <span>100% 안전성 보장</span>
                </li>
                <li class="d-flex align-items-center gap-2 mb-2">
                  <span class="bi bi-check-circle-fill tick-icon"></span>
                  <span>단기간 순위변화</span>
                </li>
                <li class="d-flex align-items-center gap-2 mb-2">
                  <span class="bi bi-check-circle-fill tick-icon"></span>
                  <span>자체개발 SNS솔루션</span>
                </li>
              </ul>
            </div>
            <button class="btn image-text-section-btn text-light mt-3 position-static shadow-none" data-aos="fade-left" data-aos-once="true" data-aos-duration="1200">주문하기</button>
          </div>
        </div>
      </section>
    </div>
    <!-- END: About Section -->

    <section class="dark-section text-light mt-5 font-family">
      <div class="container py-4">
        <h2 class="dark-section-title text-center">XXX  서비스 소개</h2>
        <div class="d-flex justify-content-center">
          <p class="dark-section-text-1 text-center">XXX는 개인계정, 기업계정 관리 및 마케팅 전문 실행사입니다. 
            광고대행사에 맡기지 마시고 저렴한 비용으로 최대의 홍보효과를 체험하세요.</p>
        </div>
        <div class="d-flex flex-column align-items-center">
          <div class="dark-section-cards row d-flex justify-content-center align-items-center mt-3">
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/instagram.png') }}"  alt="">
              <h5 class="dark-section-card-title">인스타그램 마케팅</h5>
              <p class="dark-section-card-text-1">인스타 팔로워 늘리기는  계정 인지도와 직결됩니다. 한국인 팔로워 구매를 통해 단기간에 계정활성화가 가능합니다. 인스타 좋아요 늘리기를 통해 게시물마다 인게이지먼트를 높여 해시태그마다 인기게시물에 올려드립니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/youtube.png') }}"  alt="">
              <h5 class="dark-section-card-title">유튜브 마케팅</h5>
              <p class="dark-section-card-text-1">인스타 팔로워 늘리기는  계정 인지도와 직결됩니다. 한국인 팔로워 구매를 통해 단기간에 계정활성화가 가능합니다. 인스타 좋아요 늘리기를 통해 게시물마다 인게이지먼트를 높여 해시태그마다 인기게시물에 올려드립니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/naver.png') }}"  alt="">
              <h5 class="dark-section-card-title">N쇼핑,N플레이스 마케팅</h5>
              <p class="dark-section-card-text-1">인스타 팔로워 늘리기는  계정 인지도와 직결됩니다. 한국인 팔로워 구매를 통해 단기간에 계정활성화가 가능합니다. 인스타 좋아요 늘리기를 통해 게시물마다 인게이지먼트를 높여 해시태그마다 인기게시물에 올려드립니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/talk.png') }}" alt="">
              <h5 class="dark-section-card-title">K사 마케팅</h5>
              <p class="dark-section-card-text-1">인스타 팔로워 늘리기는  계정 인지도와 직결됩니다. 한국인 팔로워 구매를 통해 단기간에 계정활성화가 가능합니다. 인스타 좋아요 늘리기를 통해 게시물마다 인게이지먼트를 높여 해시태그마다 인기게시물에 올려드립니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/android.png') }}"  alt="">
              <h5 class="dark-section-card-title">구글플레이 앱마케팅</h5>
              <p class="dark-section-card-text-1">인스타 팔로워 늘리기는  계정 인지도와 직결됩니다. 한국인 팔로워 구매를 통해 단기간에 계정활성화가 가능합니다. 인스타 좋아요 늘리기를 통해 게시물마다 인게이지먼트를 높여 해시태그마다 인기게시물에 올려드립니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/google-play.png') }}"  alt="">
              <h5 class="dark-section-card-title">앱스토어 앱마케팅</h5>
              <p class="dark-section-card-text-1">인스타 팔로워 늘리기는  계정 인지도와 직결됩니다. 한국인 팔로워 구매를 통해 단기간에 계정활성화가 가능합니다. 인스타 좋아요 늘리기를 통해 게시물마다 인게이지먼트를 높여 해시태그마다 인기게시물에 올려드립니다.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="image-section my-5 py-1">
      <div class="container d-flex flex-column justify-content-center align-items-center">
        <h2 class="image-section-title text-center">100%효과보는 인스타그램 홍보방법</h2>
        <p class="image-section-text-1 text-center">인기탭에 진출을 위한 브랜드 계정은 데일리팔로워+자동좋아요+자동댓글+자동인게트래픽 패키지로 추천드립니다.</p>
        <img src="{{ asset('front_asset/images/insta-ad-image.png') }}" alt="">
      </div>
    </section>

    <!-- START: Testimonias Section -->
    <div class="section section-testimonials mb-5">
        <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <span class="label-new" data-aos="slide-up" data-aos-once="true" data-aos-duration="1200">TESTIMONIALS</span>
            <h1 class="section-title">What Clients Say About Us</h1>
          </div>
          <div class="col-12 col-lg-6">
            <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut id eu elit augue felis. Penatibus in erat sed id massa, feugiat. Quam nulla</p>
            <a href="javascript:void(0)" class="btn image-text-section-btn text-light mt-3 position-static aos-init aos-animate shadow-none" data-aos="fade-right" data-aos-once="true" data-aos-duration="1200">구매후기 작성하기</a>
          </div>
        </div>

        <!-- Carousel Desktop -->
        <div id="testimonials" class="testimonials owl-carousel owl-theme d-none d-xl-block">
          <div class="testimonial">
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                  <img src="{{ asset('front_asset/images/3.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Nydia Larson</div>
                  <div class="profession">Freelancer</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>

          <div class="testimonial">
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/4.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Nydia Larson</div>
                  <div class="profession">Freelancer</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>

          <div class="testimonial">
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/5.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Nydia Larson</div>
                  <div class="profession">Freelancer</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Carousel sm -->
        <div id="testimonials_md" class="testimonials owl-carousel owl-theme d-md-none">
          <div class="testimonial">
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                  <img src="{{ asset('front_asset/images/3.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Nydia Larson</div>
                  <div class="profession">Freelancer</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>

          <div class="testimonial">
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/4.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Nydia Larson</div>
                  <div class="profession">Freelancer</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>

          <div class="testimonial">
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/5.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Nydia Larson</div>
                  <div class="profession">Freelancer</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Carousel md -->
        <div id="testimonials_lg" class="testimonials owl-carousel owl-theme d-none d-md-block d-xl-none">
          <div class="testimonial">
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                  <img src="{{ asset('front_asset/images/3.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Nydia Larson</div>
                  <div class="profession">Freelancer</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>

          <div class="testimonial">
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/4.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Nydia Larson</div>
                  <div class="profession">Freelancer</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>

          <div class="testimonial">
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/5.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Nydia Larson</div>
                  <div class="profession">Freelancer</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Testimonias Section -->

    <!-- START: Blog Section -->
    <div class="section section-blog py-4 mb-5">
     <div class="container">
      <div class="text-center mb-5">
          <span class="label-new">BLOG & NEWS</span>
          <h1 class="section-title">Latest Blog & News</h1>
          <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut id eu elit augue<br> felis. Penatibus in erat sed id massa, feugiat. Quam nulla facilisi</p>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="blog-post">
              <div class="thumbnail">
                <img src="https://www.wordpress.codeinsolution.com/savvy/wp-content/uploads/sites/7/2022/08/above-top-desk-of-sme-owner-people-home-office-call-talk-in-seo-chart-sale-report.jpg" alt="">
              </div>
              <h1 class="post-title">Five SEO Content Types To Grow Your Business Through 2020</h1>
              <p class="post-description">Five SEO Content Types To Grow Your Business Through 2020 John Doe January 6, 2023 Lorem ipsum dolor sit amet,....</p>
              <a href="javascript:void(0)" class="read-more">READ MORE <span class="bi bi-arrow-right-short"></span></a>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-5">
              <div class="blog-post">
                <div class="thumbnail">
                  <img src="https://www.wordpress.codeinsolution.com/savvy/wp-content/uploads/sites/7/2022/08/stylish-trendy-woman-recording-dance-video-for-social-media-account-on-phone-.jpg" alt="">
                </div>
                <h1 class="post-title">Five SEO Content Types To Grow Your Business Through 2020</h1>
                <p class="post-description">Five SEO Content Types To Grow Your Business Through 2020 John Doe January 6, 2023 Lorem ipsum dolor sit amet,....</p>
                <a href="javascript:void(0)" class="read-more">READ MORE <span class="bi bi-arrow-right-short"></span></a>
              </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="blog-post">
              <div class="thumbnail">
                <img src="https://www.wordpress.codeinsolution.com/savvy/wp-content/uploads/sites/7/2022/08/surfing-social-media-for-marketing-analysis.jpg" alt="">
              </div>
              <h1 class="post-title">Five SEO Content Types To Grow Your Business Through 2020</h1>
              <p class="post-description">Five SEO Content Types To Grow Your Business Through 2020 John Doe January 6, 2023 Lorem ipsum dolor sit amet,....</p>
              <a href="javascript:void(0)" class="read-more">READ MORE <span class="bi bi-arrow-right-short"></span></a>
            </div>
          </div>
        </div>
     </div>
    </div>
    <!-- End: Blog Section -->

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
                <span>Address: #302, Building A, Seoul Forest SKV1TOWER, 5 Seongsuil-ro 8-gil, Seongdong-gu, Seoul (Seongsu-dong 2-ga)</span>
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
          <p class="text-center text-white copywrite">Copyright © INSTAGET. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="{{ asset('front_asset/js/owl.carousel.min.js') }}"></script>
  <script>
    AOS.init();
  </script>
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
    $(document).ready(function(){
      $('#testimonials').owlCarousel({
        items: 3,
        nav: false
      });

      $('#testimonials_md').owlCarousel({
        items: 1,
        nav: false
      });

      $('#testimonials_lg').owlCarousel({
        items: 2,
        nav: false
      });
    });
  </script>

<script>
  (function($) {
    $.fn.animateNumbers = function(stop, commas, duration, ease) {
        return this.each(function() {
            var $this = $(this);
            var isInput = $this.is('input');
            var start = parseInt(isInput ? $this.val().replace(/,/g, "") : $this.text().replace(/,/g, ""));
            var regex = /(\d)(?=(\d\d\d)+(?!\d))/g;
            commas = commas === undefined ? true : commas;
            
            // number inputs can't have commas or it blanks out
            if (isInput && $this[0].type === 'number') {
                commas = false;
            }
            
            $({value: start}).animate({value: stop}, {
                duration: duration === undefined ? 1000 : duration,
                easing: ease === undefined ? "swing" : ease,
                step: function() {
                    isInput ? $this.val(Math.floor(this.value)) : $this.text(Math.floor(this.value));
                    if (commas) {
                        isInput ? $this.val($this.val().replace(regex, "$1,")) : $this.text($this.text().replace(regex, "$1,"));
                    }
                },
                complete: function() {
                    if (parseInt($this.text()) !== stop || parseInt($this.val()) !== stop) {
                        isInput ? $this.val(stop) : $this.text(stop);
                        if (commas) {
                            isInput ? $this.val($this.val().replace(regex, "$1,")) : $this.text($this.text().replace(regex, "$1,"));
                        }
                    }
                }
            });
        });
    };
  })(jQuery);
</script>

<script>
  $(document).ready(function(){
    window.addEventListener('scroll', (event) => {
      if (isInViewport($("#animateNumber1").get(0)))
        $("#animateNumber1").animateNumbers(1159250);
      if (isInViewport($("#animateNumber2").get(0)))
        $("#animateNumber2").animateNumbers(3689);
      if (isInViewport($("#animateNumber3").get(0)))
        $("#animateNumber3").animateNumbers(146800);
    });
  });

  function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)

    );
}
</script>
</body>

</html>
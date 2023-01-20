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
  <link rel="stylesheet" href="{{ asset('front_asset/css/style.css') }}">
  <title>Instaget</title>
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
                <a class="nav-link">Customer Review</a>
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
    <section class="slider-section">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="overlay">
              <video class="fullscreen" src="{{ asset('front_asset/images/bg.mp4')}}" playsinline autoplay muted loop>
              </video>
            </div>

            <div class="carousel-caption trickcenter">
              <!-- <h3>Increase followers and likes with just a few clicks</h3>
              <div>
                <p class="slider-caption">
                  Solve your worries about social media followers and likes through Instagram
                </p>
              </div> -->
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
            <h5 class="card-section-lower-text-1 mt-3">1,159,250</h5>
            <h6 class="card-section-lower-text-2">총 누적 주문</h6>
          </div>
          <div class="col-4 d-flex flex-column justify-content-center align-items-center text-center">
            <img src="{{ asset('front_asset/images/home-2.png') }}" alt="">
            <h5 class="card-section-lower-text-1 mt-3">3,689</h5>
            <h6 class="card-section-lower-text-2">오늘 완료된 주문</h6>
          </div>
          <div class="col-4 d-flex flex-column justify-content-center align-items-center text-center">
            <img src="{{ asset('front_asset/images/home-3.png') }}" alt="">
            <h5 class="card-section-lower-text-1 mt-3">146,800</h5>
            <h6 class="card-section-lower-text-2">누적 회원 수</h6>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <div class="container">
      <section class="section section-about">
        <div class="row">
          <!-- Image Area -->
          <div class="col-12 col-lg-6 image-area">
            <div class="image-backgroud">
              <img src="{{ asset('front_asset/images/제목을-입력해주세요_-007.png') }}" class="main-img" alt="">
              <img src="{{ asset('front_asset/images/chart.png') }}" class="img1" alt="" data-aos="fade-left" data-aos-once="true" data-aos-duration="1500">
              <div class="box1 d-flex align-items-center" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">
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
            <button class="btn image-text-section-btn text-light mt-3" data-aos="fade-left" data-aos-once="true" data-aos-duration="1200">주문하기</button>
          </div>
        </div>
      </section>
    </div>

    <!-- <section class="image-text-section font-family pt-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <img class="image-text-section-image" src="{{ asset('front_asset/images/home-4.jpg') }}" alt="">
          </div>
          <div class="col-lg-6 col-md-12">
            <h5 class="image-text-section-heading">SNS계정 셀프관리 시작해보세요.</h5>
            <p class="image-text-section-text-1 my-4">인스타 팔로워 늘리기 , 인스타 좋아요 늘리기 대표 업체. 
              인스타그램 마케팅외에도 유튜브,N사 쇼핑,N사 플레이스,구글플레이/ios 앱 마케팅 서비스를 전문으로 하고 있습니다.</p>
              <h5 class="image-text-section-heading-2">XXX만의 차별화</h5>
              <div class="image-text-section-tick-text mt-3">
                <div class="row">
                  <div class="col-6 row mb-2">
                    <div class="col-1">
                      <i class="bi bi-check-circle-fill tick-icon"></i>
                    </div>
                    <div class="col-11">
                      <span class="image-text-section-tick-text">365일 24시간 자동화 주문</span>
                    </div>
                  </div>
                  <div class="col-6 row mb-2">
                    <div class="col-1">
                      <i class="bi bi-check-circle-fill tick-icon"></i>
                    </div>
                    <div class="col-11">
                      <span class="image-text-section-tick-text">빠른 작업 속도</span>
                    </div>
                  </div>
                  <div class="col-6 row mb-2">
                    <div class="col-1">
                      <i class="bi bi-check-circle-fill tick-icon"></i>
                    </div>
                    <div class="col-11">
                      <span class="image-text-section-tick-text">실제 활성 계정으로 구성</span>
                    </div>
                  </div>
                  <div class="col-6 row mb-2">
                    <div class="col-1">
                      <i class="bi bi-check-circle-fill tick-icon"></i>
                    </div>
                    <div class="col-11">
                      <span class="image-text-section-tick-text">100% 안전성 보장</span>
                    </div>
                  </div>
                  <div class="col-6 row mb-2">
                    <div class="col-1">
                      <i class="bi bi-check-circle-fill tick-icon"></i>
                    </div>
                    <div class="col-11">
                      <span class="image-text-section-tick-text">SNS랭킹 최적화 된 서비스</span>
                    </div>
                  </div>
                  <div class="col-6 row mb-2">
                    <div class="col-1">
                      <i class="bi bi-check-circle-fill tick-icon"></i>
                    </div>
                    <div class="col-11">
                      <span class="image-text-section-tick-text">단기간 순위변화</span>
                    </div>
                  </div>
                  <div class="col-6 row mb-2">
                    <div class="col-1">
                      <i class="bi bi-check-circle-fill tick-icon"></i>
                    </div>
                    <div class="col-11">
                      <span class="image-text-section-tick-text">마케팅 전문가 무료상담</span>
                    </div>
                  </div>
                  <div class="col-6 row mb-2">
                    <div class="col-1">
                      <i class="bi bi-check-circle-fill tick-icon"></i>
                    </div>
                    <div class="col-11">
                      <h6 class="image-text-section-tick-text">자체개발 SNS솔루션</h6>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn image-text-section-btn text-light mt-3">주문하기</button>
          </div>
        </div>
      </div>
    </section> -->

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
              <img class="mb-3" src="{{ asset('front_asset/images/insta-icon.png') }}" alt="">
              <h5 class="dark-section-card-title">인스타그램 마케팅</h5>
              <p class="dark-section-card-text-1">인스타 팔로워 늘리기는  계정 인지도와 직결됩니다. 한국인 팔로워 구매를 통해 단기간에 계정활성화가 가능합니다. 인스타 좋아요 늘리기를 통해 게시물마다 인게이지먼트를 높여 해시태그마다 인기게시물에 올려드립니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3" src="{{ asset('front_asset/images/youtube-icon.png') }}" alt="">
              <h5 class="dark-section-card-title">유튜브 마케팅</h5>
              <p class="dark-section-card-text-1">인스타 팔로워 늘리기는  계정 인지도와 직결됩니다. 한국인 팔로워 구매를 통해 단기간에 계정활성화가 가능합니다. 인스타 좋아요 늘리기를 통해 게시물마다 인게이지먼트를 높여 해시태그마다 인기게시물에 올려드립니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3" src="{{ asset('front_asset/images/N-icon.png') }}" alt="">
              <h5 class="dark-section-card-title">N쇼핑,N플레이스 마케팅</h5>
              <p class="dark-section-card-text-1">인스타 팔로워 늘리기는  계정 인지도와 직결됩니다. 한국인 팔로워 구매를 통해 단기간에 계정활성화가 가능합니다. 인스타 좋아요 늘리기를 통해 게시물마다 인게이지먼트를 높여 해시태그마다 인기게시물에 올려드립니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3" src="{{ asset('front_asset/images/talk-icon.png') }}" alt="">
              <h5 class="dark-section-card-title">K사 마케팅</h5>
              <p class="dark-section-card-text-1">인스타 팔로워 늘리기는  계정 인지도와 직결됩니다. 한국인 팔로워 구매를 통해 단기간에 계정활성화가 가능합니다. 인스타 좋아요 늘리기를 통해 게시물마다 인게이지먼트를 높여 해시태그마다 인기게시물에 올려드립니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3" src="{{ asset('front_asset/images/android-icon.png') }}" alt="">
              <h5 class="dark-section-card-title">구글플레이 앱마케팅</h5>
              <p class="dark-section-card-text-1">인스타 팔로워 늘리기는  계정 인지도와 직결됩니다. 한국인 팔로워 구매를 통해 단기간에 계정활성화가 가능합니다. 인스타 좋아요 늘리기를 통해 게시물마다 인게이지먼트를 높여 해시태그마다 인기게시물에 올려드립니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3" src="{{ asset('front_asset/images/A-icon.png') }}" alt="">
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

    <footer class="footer">
      <div class="container">
        <div class="row">
          <ul class="list-group list-group-horizontal border-0">
            <li class="list-group-item  border-0"><a href="#">Terms of Use |</a></li>
            <li class="list-group-item  border-0"><a href="#">Privacy Policy |</a></li>
            <li class="list-group-item  border-0"><a href="#">Information Use |</a></li>
          </ul>
        </div>
        <div class="row footer-time-col">
          <ul class="list-group list-group-horizontal border-0">
            <li class="list-group-item  border-0 text-white">
              <span>Service Center </span>
              <span class="footer-numbering">1600 - 5635</span>
            </li>
            <li class="list-group-item  border-0 text-white">
              <span>Customer centeroperating hours </span> 
              <span class="footer-numbering">10:00 ~ 18:00</span>
            </li>
            <li class="list-group-item  border-0 text-white footer-lunch-time">
              <span>Lunch time is from 12:30pm to 1:30pm.
              We work weekends and holidays are off.</span>
            </li>
          </ul>
        </div>
        <div class="row">
          <ul class="list-group list-group-horizontal border-0">
            <li class="list-group-item  border-0 text-white">
              <span class="footer-account-title">Kookmin Bank </span>
              <span class="footer-account_no">653201-04-084892 /</span>
            </li>
            <li class="list-group-item  border-0 text-white">
              <span class="footer-account-title">Shinhan Bank </span> 
              <span class="footer-account_no">140-012-265570</span>
            </li>
          </ul>
        </div>
        <div class="row">
          <p class="copy-right">Copyright © INSTAGET. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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
</body>

</html>
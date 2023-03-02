@extends('layouts.layout')
@section('container')
  <div class="container-fluid m-0 p-0">
    <section class="slider-section">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="overlay">
              <img src="{{ asset('front_asset/images/home-bg-placeholder.png')}}" id="home-bg-placeholder" class="img-fluid" alt="">
              <video class="fullscreen d-none d-md-block" onload="videoReady()" id="home-video" src="{{ asset('front_asset/images/home-bg.mp4')}}" playsinline autoplay muted loop>
              </video>
              <img class="d-md-none d-block w-100" src="{{ asset('front_asset/images/background.jpg')}}"   alt="">
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
                <button class="insta-btn">인스타몽이란?</button>
                <button class="service-btn">서비스</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
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
            <h3 class="list-title">인스타몽만의 차별화</h3>
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
        {{-- <h2 class="dark-section-title text-center">XXX  서비스 소개</h2>
        <div class="d-flex justify-content-center">
          <p class="dark-section-text-1 text-center">XXX는 개인계정, 기업계정 관리 및 마케팅 전문 실행사입니다. 
            광고대행사에 맡기지 마시고 저렴한 비용으로 최대의 홍보효과를 체험하세요.</p>
        </div> --}}
        <div class="d-flex flex-column align-items-center">
          <div class="dark-section-cards row d-flex justify-content-center align-items-center mt-3">
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4" style="height:192px;">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/instagram.png') }}"  alt="">
              <h5 class="dark-section-card-title">인스타그램 마케팅</h5>
              <p class="dark-section-card-text-1">인스타그램 팔로워, 좋아요 늘리기 서비스 뿐만아니라 댓글, 조회수, 노출도달 트래픽 관리를 쉽게 해보세요. </p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/youtube.png') }}"  alt="">
              <h5 class="dark-section-card-title">유튜브 마케팅</h5>
              <p class="dark-section-card-text-1">유튜브 수익창출 채널로 키우는 핵심인 유튜브 조회수, 구독자 늘리기 서비스를 제공합니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/naver.png') }}"  alt="">
              <h5 class="dark-section-card-title">N쇼핑,N플레이스 마케팅</h5>
              <p class="dark-section-card-text-1">N사 쇼핑 및 플레이스 리얼클릭 트래픽을 통해 단기간 순위상승이 가능합니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/talk.png') }}" alt="">
              <h5 class="dark-section-card-title">K사 마케팅</h5>
              <p class="dark-section-card-text-1">K사 채널친구 늘리기 마케팅은 실제 한국인 유저들로 안전하게 집행됩니다. </p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/android.png') }}"  alt="">
              <h5 class="dark-section-card-title">구글플레이 앱마케팅</h5>
              <p class="dark-section-card-text-1">구글 앱 설치, 키워드 설치 및 앱리뷰를 다년간 진행해 온 노하우로 안전한 앱마케팅을 제공합니다.</p>
            </div>
            <div class="dark-section-card col-lg-3 col-md-5 bg-light text-dark mx-3 mb-4">
              <img class="mb-3 social-media-icon" src="{{ asset('front_asset/images/icons/google-play.png') }}"  alt="">
              <h5 class="dark-section-card-title">앱스토어 앱마케팅</h5>
              <p class="dark-section-card-text-1">IOS 앱 설치, 키워드 설치 서비스는  앱 순위상승 효과를 기대할 수 있습니다.  </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="image-section my-5 py-1">
      <div class="container d-flex flex-column justify-content-center align-items-center">
        <h2 class="image-section-title text-center">100%효과보는 인스타그램 홍보방법</h2>
        <p class="image-section-text-1 text-center">인기탭에 진출을 위한 브랜드 계정은 데일리팔로워+자동좋아요+자동댓글+자동인게트래픽 패키지로 추천드립니다.</p>
        <img src="{{ asset('front_asset/images/insta-ad-image.png') }}" alt="" class=" d-none d-md-block">
      </div>
    </section>



    {{-- for mobile device --}}

    <div id="carouselExampleIndicators" class="carousel slide d-md-none" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 " src="{{ asset('front_asset/images/Capture 1.PNG') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('front_asset/images/Capture 2.PNG') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('front_asset/images/Capture 3.PNG') }}" alt="Third slide">
        </div>
      </div>
      <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('front_asset/images/Capture 4.PNG') }}" alt="Third slide">
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('front_asset/images/Capture 5.PNG') }}" alt="Third slide">
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('front_asset/images/Capture 6.PNG') }}" alt="Third slide">
    </div>
  </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    {{-- end for mobile device --}}

    <!-- START: Testimonias Section -->
    <div class="section section-testimonials mb-5">
        <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <span class="label-new" data-aos="slide-up" data-aos-once="true" data-aos-duration="1200">Clients Review</span>
            <h1 class="section-title">이용자 후기</h1>
          </div>
          <div class="col-12 col-lg-6">
            {{-- <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut id eu elit augue felis. Penatibus in erat sed id massa, feugiat. Quam nulla</p> --}}
            {{-- <a href="javascript:void(0)" class="btn image-text-section-btn text-light mt-3 position-static aos-init aos-animate shadow-none" data-aos="fade-right" data-aos-once="true" data-aos-duration="1200">구매후기 작성하기</a> --}}
          </div>
        </div>

        <!-- Carousel Desktop -->
        <div id="testimonials" class="testimonials owl-carousel owl-theme d-none d-xl-block ">
          <div class="testimonial">
            <p class="text">인스타몽에서 좋아요와 인기게시물 트래픽 주문할때마다 인게 잘 올라가네요.</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                  <img src="{{ asset('front_asset/images/3.png') }}" alt="">
                </div>
                <div>
                  <div class="name"> Nov***님</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>

          <div class="testimonial">
            <p class="text">지인추천으로 알게되었는데 인스타몽 쓰고나니 유튜브 채널 키우는게 너무 쉬워졌네요. 수익창출 계정 1주일만에 도달했습니다! </p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/4.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Fiv20***님 </div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>

          <div class="testimonial">
            <p class="text">이곳저곳 이용해보다가 인스타몽을 써본 결과 여기가 제일 주문하기가 쉬운것 같아요. 가격도 저렴하고 속도랑 품질이 완벽하네요! 저는 인스타몽만 이용합니다. </p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/5.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Hun92***님</div>
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
            <p class="text">인스타몽에서 좋아요와 인기게시물 트래픽 주문할때마다 인게 잘 올라가네요.</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                  <img src="{{ asset('front_asset/images/3.png') }}" alt="">
                </div>
                <div>
                  <div class="name"> Nov***님</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>
          <div class="testimonial">
            <p class="text">지인추천으로 알게되었는데 인스타몽 쓰고나니 유튜브 채널 키우는게 너무 쉬워졌네요. 수익창출 계정 1주일만에 도달했습니다!</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/4.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Fiv20***님</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>

          <div class="testimonial">
            <p class="text">이곳저곳 이용해보다가 인스타몽을 써본 결과 여기가 제일 주문하기가 쉬운것 같아요. 가격도 저렴하고 속도랑 품질이 완벽하네요! 저는 인스타몽만 이용합니다.</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/5.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Hun92***님</div>
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
            <p class="text">지인추천으로 알게되었는데 인스타몽 쓰고나니 유튜브 채널 키우는게 너무 쉬워졌네요. 수익창출 계정 1주일만에 도달했습니다!</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                  <img src="{{ asset('front_asset/images/3.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Fiv20***님 </div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>

          <div class="testimonial">
            <p class="text">이곳저곳 이용해보다가 인스타몽을 써본 결과 여기가 제일 주문하기가 쉬운것 같아요. 가격도 저렴하고 속도랑 품질이 완벽하네요! 저는 인스타몽만 이용합니다.</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/4.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Hun92***님</div>
                </div>
              </div>
              <div class="icon d-flex">
                <span class="bi bi-quote"></span>
              </div>
            </div>
          </div>

          <div class="testimonial">
            <p class="text">이곳저곳 이용해보다가 인스타몽을 써본 결과 여기가 제일 주문하기가 쉬운것 같아요. 가격도 저렴하고 속도랑 품질이 완벽하네요! 저는 인스타몽만 이용합니다.</p>
            <div class="info d-flex align-items-center justify-content-between">
              <div class="author d-flex align-items-center gap-3">
                <div class="img">
                <img src="{{ asset('front_asset/images/5.png') }}" alt="">
                </div>
                <div>
                  <div class="name">Hun92***님</div>
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
          {{-- <span class="label-new">BLOG & NEWS</span> --}}
          <h1 class="section-title">SNS마케팅 비법 & 최신로직 </h1>
          <p class="section-description">최신 인스타그램, 유튜브, N사, 앱 마케팅 로직을 인스타몽에서 확인하세요.<br> 전문 마케터가 SNS마케팅 방법에 관한 블로그를 공유해드립니다. </p>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="blog-post">
              <div class="thumbnail">
                <img src="https://www.wordpress.codeinsolution.com/savvy/wp-content/uploads/sites/7/2022/08/above-top-desk-of-sme-owner-people-home-office-call-talk-in-seo-chart-sale-report.jpg" alt="">
              </div>
              <h1 class="post-title">Five SEO Content Types To Grow Your Business Through 2020</h1>
              <p class="post-description">Five SEO Content Types To Grow Your Business Through 2020 John Doe January 6, 2023 Lorem ipsum dolor sit amet,....</p>
              <a href="javascript:void(0)" class="read-more">더 알아보기  <span class="bi bi-arrow-right-short"></span></a>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-5">
              <div class="blog-post">
                <div class="thumbnail">
                  <img src="https://www.wordpress.codeinsolution.com/savvy/wp-content/uploads/sites/7/2022/08/stylish-trendy-woman-recording-dance-video-for-social-media-account-on-phone-.jpg" alt="">
                </div>
                <h1 class="post-title">Five SEO Content Types To Grow Your Business Through 2020</h1>
                <p class="post-description">Five SEO Content Types To Grow Your Business Through 2020 John Doe January 6, 2023 Lorem ipsum dolor sit amet,....</p>
                <a href="javascript:void(0)" class="read-more">더 알아보기  <span class="bi bi-arrow-right-short"></span></a>
              </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="blog-post">
              <div class="thumbnail">
                <img src="https://www.wordpress.codeinsolution.com/savvy/wp-content/uploads/sites/7/2022/08/surfing-social-media-for-marketing-analysis.jpg" alt="">
              </div>
              <h1 class="post-title">Five SEO Content Types To Grow Your Business Through 2020</h1>
              <p class="post-description">Five SEO Content Types To Grow Your Business Through 2020 John Doe January 6, 2023 Lorem ipsum dolor sit amet,....</p>
              <a href="javascript:void(0)" class="read-more">더 알아보기  <span class="bi bi-arrow-right-short"></span></a>
            </div>
          </div>
        </div>
     </div>
    </div>
    <!-- End: Blog Section -->

  </div>
  <script>
    $(document).ready(function() {
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
  <script>
    $("#home-video").css("visibility", "hidden");
    let video = document.getElementById("home-video");
    video.oncanplay = function() {
      $("#home-video").css("visibility", "visible");
      $("#home-bg-placeholder").css("visibility", "hidden");
      $("#home-bg-placeholder").pause();
    };
  </script>
 <script>
    $(document).ready(function(){
  var maxHeight = 0;
  $('.testimonial').each(function(){
    if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
  });
  $('.testimonial').height(maxHeight);
});
  </script> 
@endsection
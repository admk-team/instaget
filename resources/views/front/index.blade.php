<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('front_asset/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
              <video class="fullscreen" src="{{ asset('front_asset/images/Purple.mp4')}}" playsinline autoplay muted loop>
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
    <section class="services-section mt-5">
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
    </section>
    <section class="about-us" style="background-image: url('{{ asset('front_asset/images/bg.png') }}');">
      <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
          <h4 class="text-white">Why instaget should i use?</h4>
          <p class="text-white">Instaget's services are based on marketing and account management agency know-how, and are
            proven solutions that have been servicing for many years since the early days of Instagram, YouTube, and Facebook</p>
            <a class="see-more">See more >></a>
        </div>
      </div>
    </section>
    <section class="customer-feedback">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhUp+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
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
  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
</body>

</html>
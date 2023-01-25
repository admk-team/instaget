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
                        data-bs-target="#navbarSUpportedContent" aria-controls="navbarSUpportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSUpportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">What is Instagram?</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                <a class="nav-link" href="{{ route('front.login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

<section class="vh-100 gradient-custom ">
  <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center  h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
        <h1 class="text-center">Login</h1>
            <div class="mb-md-5 mt-md-4 pb-5">
              <div class="form-outline form-white mb-1">
                <input type="email" id="emial" name="email" class="form-control form-control-lg loginform form1" placeholder="Email Address" />
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password" id="password" name="password" class="form-control form-control-lg loginform form2" placeholder="Password" />
              </div>
              <div class="form-outline form-white mb-4">
                {{-- <input type="submit" class="form-control form-control-lg form" value="Login" /> --}}
                <button type="submit" class="form-control form-control-lg bg-dark loginform"> <span class="text-white">Login</span> </button>
              </div>

              <div class="form-outline form-white mb-4">
                <button type="submit" class="form-control form-control-lg form naver" >
                    <div  style="margin-left: -249px;">
                    <img src="{{ asset('front_asset/images/icons/naver.png') }}" class="img-fluid rounded" style="width: 50px; ">
                   <span>Never Login</span> 
                </div>
                </button>
              </div>
              <div class="form-outline form-white mb-4">
                <button type="submit" class="form-control form-control-lg form kakoa">
                    <div  style="margin-left: -255px;">
                        <img src="{{ asset('front_asset/images/icons/talk.png') }}" class="img-fluid rounded" style="width: 50px; ">
                       <span> Kakao talk</span>
                    </div>
                </button>
              </div>
              <div class="form-outline form-white mb-4">
                <button type="submit" class="form-control form-control-lg loginform google">
                    <div  style="margin-left: -285px;">
                        <img src="{{ asset('front_asset/images/icons/google.png') }}" class="img-fluid rounded" style="width: 50px; ">
                       <span>Google</span> 
                    </div>
                </button>
              </div>
              <div class="d-flex justify-content-between">
                <p>New to Instagram ?</p>
                <a href="#" >SignUp ?</a>
            </div>
            <div class="d-flex justify-content-between">
                <p>Forgot your account ?</p>
                <a href="#" >password reset ?</a>
            </div>
            </div>
            
      </div>
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
</body>

</html>
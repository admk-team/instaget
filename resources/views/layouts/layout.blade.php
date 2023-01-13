<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Instaget</title>
  <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('front/css/color-switcher-design.css') }}" rel="stylesheet">
  <link id="theme-color-file" href="{{ asset('front/css/color-themes/default-theme.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('front/images/favicon.png') }}" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
  <div class="page-wrapper">
    <header class="main-header header-style-one">
      <div class="auto-container">
        <div class="top-header">
          <div class="left-header-area">
            <ul class="contact-area">
              <li>Call: 1600-5635</li>
              <li><span class="far fa-paper-plane"></span> #302, Building A, Seoul Forest SKV1TOWER</li>
              <li><span class="far fa-envelope"></span> <a href="mailto:sola.seo@mail.com">support@herren.co.kr</a></li>
            </ul>
          </div>
          <div class="right-header-area">
            <ul class="social-links">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="header-lower">
          <div class="main-box clearfix">
            <div class="logo-box">
              <div class="logo"><a href="{{ route('front.index') }}"><img src="{{asset('front/images/logo1.png')}}" alt="" title=""></a></div>
            </div>
            <div class="nav-outer clearfix">
              <div class="mobile-nav-toggler"><span class="icon flaticon flaticon-menu"></span></div>
              <nav class="main-menu navbar-expand-md ">
                <div class="collapse show navbar-collapse clearfix" id="navbarSupportedContent">
                  <ul class="navigation clearfix">
                    <li class="current"><a href="{{ route('front.index') }}">Home</a>
                    </li>
                    <li class="dropdown"><a href="#">Instagram</a>
                      <ul>
                        <li><a href="{{ route('front.service', ['service' => 'Instagram', 'category' => 'Instagram Followers']) }}">Instagram Followers</a></li>
                        <li><a href="{{ route('front.service', ['service' => 'Instagram', 'category' => 'Instagram Likes']) }}">Instagram Likes</a></li>
                        <li><a href="{{ route('front.service', ['service' => 'Instagram', 'category' => 'Instagram Comments']) }}">Instagram Comments</a></li>
                        <li><a href="{{ route('front.service', ['service' => 'Instagram', 'category' => 'Instagram Views']) }}">Instagram Views</a></li>
                        <li><a href="{{ route('front.service', ['service' => 'Instagram', 'category' => 'Instagram Impression']) }}">Instagram Impression</a></li>
                      </ul>
                    </li>
                    <li class=""><a href="#">Youtube</a></li>
                    <li class=""><a href="#">Naver</a></li>
                    <li class=""><a href="#">Googleplay App</a></li>
                    <li class=""><a href="#">IOS App</a></li>
                    <li class=""><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="sticky-header">
        <div class="auto-container clearfix">
          <div class="main-box clearfix">
            <div class="logo-box">
              <div class="logo"><a href="{{ route('front.index') }}"><img src="{{asset('front/images/logo1.png')}}" alt="" title=""></a></div>
            </div>
            <div class="nav-outer clearfix">
              <div class="mobile-nav-toggler"><span class="icon flaticon flaticon-menu"></span></div>
              <nav class="main-menu navbar-expand-md "> </nav>
              
            </div>
          </div>
        </div>
      </div>
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fas fa-times"></span></div>
        <nav class="menu-box">
          <div class="nav-logo"><a href="{{ route('front.index') }}"><img src="{{asset('front/images/logo1.png')}}" alt="" title=""></a></div>
          <div class="menu-outer"></div>
          <div class="options-box clearfix">
            <div class="social-box">
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="form-back-drop"></div>
    @yield('container')
    <footer class="main-footer" style="background-image: url(/front/images/background/6.png);">
      <div class="auto-container">
        <div class="widgets-section">
          <div class="row">
            <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="footer-widget about-widget">
                    <div class="footer-logo">
                      <figure> <a href="{{ route('front.index') }}"><img src="{{asset('front/images/logo11.png')}}" alt=""></a> </figure>
                    </div>
                    <div class="widget-content">
                      
                    </div>
                  </div>
                </div>
                <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="footer-widget gallery-widget">
                    <h4 class="widget-title">Projects</h4>
                    <div class="widget-content">
                      <div class="outer clearfix">
                        <figure class="image"> <a href="{{asset('front/images/resource/work-thumb-1.png')}}" class="lightbox-image"
                            title="Image Title Here"><img src="{{asset('front/images/resource/work-thumb-1.png')}}" alt=""></a> </figure>
                        <figure class="image"> <a href="{{asset('front/images/resource/work-thumb-2.png')}}" class="lightbox-image"
                            title="Image Title Here"><img src="{{asset('front/images/resource/work-thumb-2.png')}}" alt=""></a> </figure>
                        <figure class="image"> <a href="{{asset('front/images/resource/work-thumb-3.png')}}" class="lightbox-image"
                            title="Image Title Here"><img src="{{asset('front/images/resource/work-thumb-3.png')}}" alt=""></a> </figure>
                        <figure class="image"> <a href="{{asset('front/images/resource/work-thumb-4.png')}}" class="lightbox-image"
                            title="Image Title Here"><img src="{{asset('front/images/resource/work-thumb-4.png')}}" alt=""></a> </figure>
                        <figure class="image"> <a href="{{asset('front/images/resource/work-thumb-5.png')}}" class="lightbox-image"
                            title="Image Title Here"><img src="{{asset('front/images/resource/work-thumb-5.png')}}" alt=""></a> </figure>
                        <figure class="image"> <a href="{{asset('front/images/resource/work-thumb-6.png')}}" class="lightbox-image"
                            title="Image Title Here"><img src="{{asset('front/images/resource/work-thumb-1.png')}}" alt=""></a> </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
              <div class="row clearfix">
                <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                  <div class="footer-widget links-widget">
                    <h4 class="widget-title">Useful links</h4>
                    <div class="widget-content">
                      <ul class="list">
                        <li><a href="#">Instagram Followers</a></li>
                        <li><a href="#">Instagram Likes</a></li>
                        <li><a href="#">Instagram Comments</a></li>
                        <li><a href="#">Instagram Views</a></li>
                        <li><a href="#">Instagram Impression</a></li>
                      </ul>
                      <ul class="list">
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">Naver</a></li>
                        <li><a href="#">Googleplay App</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                  <div class="footer-widget contact-widget">
                    <h4 class="widget-title">Contacts</h4>
                    <div class="widget-content">
                      <ul class="list-style-one">
                        <li><span class="icon fas fa-phone-volume"></span>334234-34234</li>
                        <li><span class="icon fas fa-map-marker-alt"></span> I-8 Markaz Islamabad</li>
                        <li><span class="icon fas fa-envelope"></span> admk@admksolutions.com</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="auto-container">
          <div class="inner-container clearfix">
            <div class="social-links">
              <ul class="social-icon-two">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
              </ul>
            </div>
            <div class="copyright-text">
              <p>Copyright © 2023 Instaget by <a href="https://admksolutions.com/" target="_blank">Admksolutions.</a> All right reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div class="scroll-to-top scroll-to-target theme-btn btn-style-one" data-target="html">
    <span class="txt"><i class="fas fa-arrow-up"></i></span>
  </div>
  <script src="{{ asset('front/js/jquery.js') }}"></script>
  <script src="{{ asset('front/js/popper.min.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.fancybox.js') }}"></script>
  <script src="{{ asset('front/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('front/js/parallax.min.js') }}"></script>
  <script src="{{ asset('front/js/owl.js') }}"></script>
  <script src="{{ asset('front/js/wow.js') }}"></script>
  <script src="{{ asset('front/js/appear.js') }}"></script>
  <script src="{{ asset('front/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
  <script src="{{ asset('front/js/nav-tool.js') }}"></script>
  <script src="{{ asset('front/js/mixitup.js') }}"></script>
  <script src="{{ asset('front/js/particles-js.js') }}"></script>
  <script src="{{ asset('front/js/script.js') }}"></script>
  <script src="{{ asset('front/js/color-settings.js') }}"></script>
</body>

</html>
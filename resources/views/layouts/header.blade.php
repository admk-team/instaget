<header class="main-header header-style-one">
    <div class="auto-container">
      <div class="top-header">
        <div class="left-header-area">
          <ul class="contact-area">
            <li>Call: 1600-5635</li>
            <li><span class="far fa-paper-plane"></span> #302, Building A, Seoul Forest SKV1TOWER</li>
            <li><span class="far fa-envelope"></span> <a href="#">support@herren.co.kr</a></li>
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
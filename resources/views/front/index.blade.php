@extends('layouts.layout')
@section('container')
<section class="hidden-bar">
  <div class="inner-box">
    <div class="cross-icon"><span class="fas fa-times"></span></div>
    <div class="about-sec">
      <div class="logo"><a href="{{ route('front.index') }}"><img src="{{asset('front/images/logo-2.png')}}" alt="" title=""></a></div>
      <div class="title">
        <h2>About Us</h2>
      </div>
      <p>The argument in favor of using filler text goes something like this: If you use real content in the Consulting
        Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the
        design.</p>
      <a href="about.html" class="theme-btn btn-style-one"><span class="txt">Learn More</span></a>
    </div>
    <div class="contact-info-box">
      <ul class="info-list">
        <li>sola@example.com</li>
        <li>+(123) 456 7890</li>
      </ul>
      <ul class="social-links">
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
      </ul>
    </div>
  </div>
</section>
<section class="banner-section" style="background-image: url('/front/images/main-banner/insta.png');">
  <div id="particles-js"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="content-column col-lg-6 col-md-12 col-sm-12">
        <div class="content-inner">
          <h1>Increase followers & <br> likes with just a few clicks</h1>
          <p>Solve your worries about social media followers and likes
            <br> through Instagram. </p> <a
            href="#" class="theme-btn btn-style-one"><span class="txt">Get Started</span></a>
        </div>
      </div>
      <div class="image-column col-lg-6 col-md-12 col-sm-12">
        <div class="image-box"> <img src="{{asset('front/images/main-banner/11.png')}}" alt="banner image"></div>
      </div>
    </div>
  </div>
</section>
<section class="services-section">
  <div class="auto-container">
    <div class="row">
      <div class="services-box col-lg-4 col-md-6 col-sm-12">
        <div class="service-block">
          <div class="inner-box">
            <div class="service-box-front">
              <div class="image-box">
                <figure class="image"><a href="#"><img src="{{asset('front/images/insta.png')}}"
                      alt="Services Image"></a></figure>
              </div>
              <div class="lower-content">
                <h3><a href="#">increase instagram followers</a></h3>
                <p>
                  Your followers will grow in no time. A high follower count increases your brand's credibility and helps you attract more followers.
                </p>
                <div class="link-box"> <a href="#" class="theme-btn btn-style-two"><span
                      class="txt">Learn More</span></a></div>
              </div>
            </div>
            <div class="service-box-back">
              <div class="service-box-wave"> <svg class="waves" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none"
                  shape-rendering="auto">
                  <defs>
                    <path id="gentle-wave"
                      d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                  </defs>
                  <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0,31,231,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(0,34,225,0.7)" />
                  </g>
                </svg></div>
              <div class="image-box">
                <figure class="image"><a href="#"><img src="{{asset('front/images/services/1.png')}}"
                      alt="Services Image"></a></figure>
              </div>
              <div class="lower-content">
                <h3><a href="#">Instagram Likes & Views</a></h3>
                <p>Get likes and views in no time. A high number of likes and views will allow your post to be exposed to a large number of popular posts</p>
                <div class="link-box"> <a href="#" class="theme-btn btn-style-one"><span
                      class="txt">Learn More</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="services-box col-lg-4 col-md-6 col-sm-12">
        <div class="service-block active">
          <div class="inner-box">
            <div class="service-box-front">
              <div class="image-box">
                <figure class="image"><a href="#"><img src="{{asset('front/images/services/2.png')}}"
                      alt="Services Image"></a></figure>
              </div>
              <div class="lower-content">
                <h3><a href="#">Daily Followers</a></h3>
                <p>We will increase the number of followers by splitting them over a set period of time. It is recommended for customers who are burdened with raising many followers at once .</p>
                <div class="link-box"> <a href="#" class="theme-btn btn-style-two"><span
                      class="txt">Learn More</span></a></div>
              </div>
            </div>
            <div class="service-box-back">
              <div class="service-box-wave"> <svg class="waves" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none"
                  shape-rendering="auto">
                  <defs>
                    <path id="gentle-wave-1"
                      d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                  </defs>
                  <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0,31,231,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(0,34,225,0.7)" />
                  </g>
                </svg></div>
              <div class="image-box">
                <figure class="image"><a href="#"><img src="{{asset('front/images/services/2.png')}}"
                      alt="Services Image"></a></figure>
              </div>
              <div class="lower-content">
                <h3><a href="#">Daily good</a></h3>
                <p>During the month, new photos uploaded to the account will be immediately recognized and the number of likes equal to the number of purchased photos will be raised.</p>
                <div class="link-box"> <a href="#" class="theme-btn btn-style-one"><span
                      class="txt">Learn More</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="services-box col-lg-4 col-md-6 col-sm-12">
        <div class="service-block">
          <div class="inner-box">
            <div class="service-box-front">
              <div class="image-box">
                <figure class="image"><a href="#"><img src="{{asset('front/images/services/3.png')}}"
                      alt="Services Image"></a></figure>
              </div>
              <div class="lower-content">
                <h3><a href="#">Increase Youtube Views</a></h3>
                <p>Increase your video views in a fraction of the time.
                  If the number of views increases, it will be exposed to popular videos, and
                  the product will be uploaded together with the viewing time.</p>
                <div class="link-box"> <a href="#" class="theme-btn btn-style-two"><span
                      class="txt">Learn More</span></a></div>
              </div>
            </div>
            <div class="service-box-back">
              <div class="service-box-wave"> <svg class="waves" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none"
                  shape-rendering="auto">
                  <defs>
                    <path id="gentle-wave-2"
                      d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                  </defs>
                  <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0,31,231,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(0,34,225,0.7)" />
                  </g>
                </svg></div>
              <div class="image-box">
                <figure class="image"><a href="#"><img src="{{asset('front/images/services/3.png')}}"
                      alt="Services Image"></a></figure>
              </div>
              <div class="lower-content">
                <h3><a href="#">increase youtube subscribers</a></h3>
                <p>Subscriber count is an indicator of popularity and a measure of success. In particular, a large number of subscribers will help you get more subscribers.</p>
                <div class="link-box"> <a href="#" class="theme-btn btn-style-one"><span
                      class="txt">Learn More</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about-section" style="background-image: url(images/background/1.png);">
  <div class="auto-container">
    <div class="row">
      <div class="image-column col-lg-6 col-md-12 col-sm-12">
        <div class="inner-column">
          <div class="image-box">
            <figure class="alphabet-img wow fadeInRight"><img src="{{asset('front/images/resource/about-img.png')}}" alt="about img">
            </figure>
          </div>
        </div>
      </div>
      <div class="content-column col-lg-5 offset-lg-1 col-md-12 col-sm-12">
        <div class="inner-column wow fadeInLeft">
          <div class="content-box">
            <div class="sec-title text-left">
              <h6 class="subtitle">Why InstaGet should I use ?</h6>
              <h2>Our Instagram <br /> services have</h2>
            </div>
            <p>been conducting Instagram marketing and account management agency since the early days of Instagram, and
              it is a proven solution that has been serving for many years based on know-how.</p>
            <p>Instaget's services are based on marketing and account management agency know-how, and are
              proven solutions that have been servicing for many years since the early days of Instagram, YouTube, and Facebook.</p>
            <div class="link-box"><a href="#" class="theme-btn btn-style-one"><span class="txt">About
                  More</span></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="services-section style-two" style="background-image: url(/front/images/background/2.png);">
  <div class="upper-box">
    <div class="auto-container">
      <div class="sec-title text-center light">
        <h6 class="subtitle">Buy Social Services</h6>
        <h2>Buy Instagram, Facebook, Youtube Services</h2>
      </div>
    </div>
  </div>
  <div class="services-box">
    <div class="auto-container">
      <div class="services-carousel owl-carousel owl-theme">
        <div class="service-block-five fb_services">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="#"><img src="{{asset('front/images/social/2.png')}}"
                    alt="Services Image"></a></figure>
            </div>
            <div class="lower-content">
              <h4><a href="#">Facebook Services</a></h4>
            </div>
          </div>
        </div>
        <div class="service-block-five insta-services">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="#"><img src="{{asset('front/images/social/1.png')}}"
                    alt="Services Image"></a></figure>
            </div>
            <div class="lower-content">
              <h4><a href="#">Buy Instagram Likes</a></h4>
            </div>
          </div>
        </div>
        <div class="service-block-five navar-services">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="#"><img src="{{asset('front/images/social/3.png')}}"
                    alt="Services Image"></a></figure>
            </div>
            <div class="lower-content">
              <h4><a href="#">Buy Naver Services</a></h4>
            </div>
          </div>
        </div>
        <div class="service-block-five youtube-services">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="#"><img src="{{asset('front/images/social/4.png')}}"
                    alt="Services Image"></a></figure>
            </div>
            <div class="lower-content">
              <h4><a href="#">YouTube Services</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="testimonial-section">
  <div class="auto-container">
    <div class="row">
      <div class="image-column col-lg-6 col-md-12 col-sm-12">
        <div class="image-box">
          <figure><img src="{{asset('front/images/resource/testimonial.png')}}" alt="Testimonial Image"></figure>
        </div>
      </div>
      <div class="testimonial-column col-lg-6 col-md-12 col-sm-12">
        <div class="sec-title">
          <h6 class="subtitle">Testimonials</h6>
          <h2>What clients are saying <br /> for our work</h2>
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme">
          <div class="testimonial-block">
            <div class="inner-box">
              <div class="text">“It's my first time doing it on Instagram, so I ordered only 250 people, but I'm really satisfied with it because it's really natural! I've bought Koreans from other companies before, but the photos were too tidy and unfollowed”</div>
              <div class="icon-quote"><i class="flaticon flaticon-quote"></i></div>
              <div class="info-box">
                <div class="thumb"><img src="{{asset('front/images/resource/thumb.png')}}" alt=""></div>
                <div class="text-box">
                  <h4 class="name">Megan Mori</h4> <span class="designation">Marketing Manager</span>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-block">
            <div class="inner-box">
              <div class="text">“It's my first time doing it on Instagram, so I ordered only 250 people, but I'm really satisfied with it because it's really natural!”</div>
              <div class="icon-quote"><i class="flaticon flaticon-quote"></i></div>
              <div class="info-box">
                <div class="thumb"><img src="{{asset('front/images/resource/thumb.png')}}" alt=""></div>
                <div class="text-box">
                  <h4 class="name">Megan Mori</h4> <span class="designation">Marketing Manager</span>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-block">
            <div class="inner-box">
              <div class="text">“It's my first time doing it on Instagram, so I ordered only 250 people, but I'm really satisfied with it because it's really natural!”</div>
              <div class="icon-quote"><i class="flaticon flaticon-quote"></i></div>
              <div class="info-box">
                <div class="thumb"><img src="{{asset('front/images/resource/thumb.png')}}" alt=""></div>
                <div class="text-box">
                  <h4 class="name">Megan Mori</h4> <span class="designation">Marketing Manager</span>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-block">
            <div class="inner-box">
              <div class="text">“It's my first time doing it on Instagram, so I ordered only 250 people, but I'm really satisfied with it because it's really natural!”</div>
              <div class="icon-quote"><i class="flaticon flaticon-quote"></i></div>
              <div class="info-box">
                <div class="thumb"><img src="{{asset('front/images/resource/thumb.png')}}" alt=""></div>
                <div class="text-box">
                  <h4 class="name">Megan Mori</h4> <span class="designation">Marketing Manager</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
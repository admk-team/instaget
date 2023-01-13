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
<section class="banner-section" style="background-image: url('/front/images/main-banner/banner-bg.png');">
  <div id="particles-js"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="content-column col-lg-6 col-md-12 col-sm-12">
        <div class="content-inner">
          <div class="video-link"> <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery"
              data-caption=""><span class="icon fa fa-play" aria-hidden="true"></span><i class="ripple"></i></a></div>
          <h1>Increase followers & <br> likes with just a few clicks</h1>
          <p>Solve your worries about social media followers and likes
            <br> through Instagram. </p> <a
            href="#" class="theme-btn btn-style-one"><span class="txt">Get Started</span></a>
        </div>
      </div>
      <div class="image-column col-lg-6 col-md-12 col-sm-12">
        <div class="image-box"> <img src="{{asset('front/images/main-banner/1.png')}}" alt="banner image"></div>
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
                <figure class="image"><a href="#"><img src="{{asset('front/images/services/1.png')}}"
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
                <h3><a href="#">Online Accounting</a></h3>
                <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press
                  release distribution.</p>
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
                <h3><a href="#">The board</a></h3>
                <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press
                  release distribution.</p>
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
              <h6 class="subtitle">Grow Traffice & Increase Revenue</h6>
              <h2>Appear on the <br /> front page of google!</h2>
            </div>
            <p>We are full-service Internet marketing and SEO company offering innovative web marketing solutions to mid
              to large size companies across the globe. As a leader in SEO, web design, ecommerce, website conversion,
              and Internet
              marketing services, our firm prides ourselves.</p>
            <p>We have an ever-expanding trophy cabinet for our web design, SEO, and digital marketing work.</p>
            <div class="link-box"><a href="about.html" class="theme-btn btn-style-one"><span class="txt">About
                  More</span></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="services-section style-two" style="background-image: url(images/background/2.png);">
  <div class="upper-box">
    <div class="auto-container">
      <div class="sec-title text-center light">
        <h6 class="subtitle">Seach Engine & Social Media Optmization</h6>
        <h2>Full service <br /> digital marketing agency</h2>
      </div>
    </div>
  </div>
  <div class="services-box">
    <div class="auto-container">
      <div class="services-carousel owl-carousel owl-theme">
        <div class="service-block-five">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="#"><img src="{{asset('front/images/services/4.png')}}"
                    alt="Services Image"></a></figure>
            </div>
            <div class="lower-content">
              <h4><a href="#">Social Media Marketing</a></h4>
            </div>
          </div>
        </div>
        <div class="service-block-five">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="#"><img src="{{asset('front/images/services/5.png')}}"
                    alt="Services Image"></a></figure>
            </div>
            <div class="lower-content">
              <h4><a href="#">Adanced Media Analytics</a></h4>
            </div>
          </div>
        </div>
        <div class="service-block-five">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="#"><img src="{{asset('front/images/services/6.png')}}"
                    alt="Services Image"></a></figure>
            </div>
            <div class="lower-content">
              <h4><a href="#">Organic Long Term SEO</a></h4>
            </div>
          </div>
        </div>
        <div class="service-block-five">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="#"><img src="{{asset('front/images/services/7.png')}}"
                    alt="Services Image"></a></figure>
            </div>
            <div class="lower-content">
              <h4><a href="#">Date Saveing Security</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="team-section">
  <div class="team-bg wow fadeInRight" style="background-image: url(images/background/3.png);"></div>
  <div class="auto-container">
    <div class="sec-title text-center">
      <h6 class="subtitle">Our Specialists Worker</h6>
      <h2>Meet our expert team works <br /> for your business</h2>
    </div>
    <div class="team-carousel owl-carousel owl-theme">
      <div class="team-block">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/1.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Olivia Jayden</a></h4> <span class="designation">Project Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-1">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/2.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Noah Michael</a></h4> <span class="designation">Market Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-2">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/3.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Emma William</a></h4> <span class="designation">General Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-3">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/4.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Matthew David</a></h4> <span class="designation">CEO of Company</span>
          </div>
        </div>
      </div>
      <div class="team-block">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/1.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Olivia Jayden</a></h4> <span class="designation">Project Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-1">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/2.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Noah Michael</a></h4> <span class="designation">Market Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-2">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/3.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Emma William</a></h4> <span class="designation">General Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-3">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/4.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Matthew David</a></h4> <span class="designation">CEO of Company</span>
          </div>
        </div>
      </div>
      <div class="team-block">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/1.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Olivia Jayden</a></h4> <span class="designation">Project Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-1">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/2.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Noah Michael</a></h4> <span class="designation">Market Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-2">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/3.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Emma William</a></h4> <span class="designation">General Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-3">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/4.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Matthew David</a></h4> <span class="designation">CEO of Company</span>
          </div>
        </div>
      </div>
      <div class="team-block">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/1.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Olivia Jayden</a></h4> <span class="designation">Project Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-1">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/2.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Noah Michael</a></h4> <span class="designation">Market Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-2">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/3.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Emma William</a></h4> <span class="designation">General Manager</span>
          </div>
        </div>
      </div>
      <div class="team-block team-block-3">
        <div class="inner-box">
          <div class="image-box">
            <div class="image"><a href="team.html"><img src="{{asset('front/images/team/4.jpg')}}" alt=""></a></div>
          </div>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
          </ul>
          <div class="text-box">
            <h4 class="name"><a href="team.html">Matthew David</a></h4> <span class="designation">CEO of Company</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="progress-sec">
  <div class="progress-bg"></div>
  <div class="container">
    <div class="row">
      <div class="content-column col-lg-6 col-md-12 col-sm-12">
        <div class="content-box">
          <div class="sec-title text-left">
            <h6 class="subtitle">Our Benefits</h6>
            <h2>Get more visiter on <br /> your website</h2>
            <p>As a leader in SEO, web design, ecommerce, website conversion,& Internet marketing services, our firm
              prides.</p>
          </div>
          <div class="progress-levels">
            <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
              <div class="progress-header clearfix">
                <div class="box-title">DIGITAL STRATEGY</div>
                <div class="progress-percentage">
                  <div class="count-box"><span class="count-text" data-speed="2000" data-stop="70">0</span>%</div>
                </div>
              </div>
              <div class="progress-bar">
                <div class="bar-inner">
                  <div class="bar progress-line" data-width="70"></div>
                </div>
              </div>
            </div>
            <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
              <div class="progress-header clearfix">
                <div class="box-title">FINANCIAL SERVICES</div>
                <div class="progress-percentage">
                  <div class="count-box"><span class="count-text" data-speed="2000" data-stop="55">0</span>%</div>
                </div>
              </div>
              <div class="progress-bar">
                <div class="bar-inner">
                  <div class="bar progress-line" data-width="55"></div>
                </div>
              </div>
            </div>
            <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
              <div class="progress-header clearfix">
                <div class="box-title">CONSULTING</div>
                <div class="progress-percentage">
                  <div class="count-box"><span class="count-text" data-speed="2000" data-stop="65">0</span>%</div>
                </div>
              </div>
              <div class="progress-bar">
                <div class="bar-inner">
                  <div class="bar progress-line" data-width="65"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="image-cloumn col-lg-6 col-md-12 col-sm-12">
        <div class="image-box">
          <figure><img src="{{asset('front/images/resource/progress-1.png')}}" alt="progress image"></figure>
          <div class="animated-img-1"></div>
          <div class="animated-img-2"></div>
          <div class="animated-img-3"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="clients-section">
  <div class="auto-container">
    <div class="sponsors-outer">
      <ul class="sponsors-carousel owl-carousel owl-theme">
        <li class="slide-item">
          <figure class="image-box"><a href="#"><img src="{{asset('front/images/clients/1.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="#"><img src="{{asset('front/images/clients/2.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="#"><img src="{{asset('front/images/clients/3.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="#"><img src="{{asset('front/images/clients/4.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="#"><img src="{{asset('front/images/clients/5.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="#"><img src="{{asset('front/images/clients/1.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="#"><img src="{{asset('front/images/clients/2.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="#"><img src="{{asset('front/images/clients/3.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="#"><img src="{{asset('front/images/clients/4.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="#"><img src="{{asset('front/images/clients/5.png')}}" alt=""></a></figure>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="projects-section">
  <div class="auto-container">
    <div class="sec-title text-left">
      <h6 class="subtitle">Explore Case Studies</h6>
      <h2>Solid results of our <br> different case studies</h2>
    </div>
  </div>
  <div class="inner-container">
    <div class="projects-carousel owl-carousel owl-theme">
      <div class="project-block">
        <div class="image-box">
          <figure class="image"><img src="{{asset('front/images/gallery/1.jpg')}}" alt=""></figure>
          <div class="overlay-box"><a href="project-detail.html"><i class="fa fa-link"></i></a></div>
        </div>
        <div class="text-box"> <span class="tag">Digital</span>
          <h3><a href="project-detail.html">Mobile App Vister</a></h3>
        </div>
      </div>
      <div class="project-block">
        <div class="image-box">
          <figure class="image"><img src="{{asset('front/images/gallery/2.jpg')}}" alt=""></figure>
          <div class="overlay-box"><a href="project-detail.html"><i class="fa fa-link"></i></a></div>
        </div>
        <div class="text-box"> <span class="tag">Business</span>
          <h3><a href="project-detail.html">Digital Work</a></h3>
        </div>
      </div>
      <div class="project-block">
        <div class="image-box">
          <figure class="image"><img src="{{asset('front/images/gallery/3.jpg')}}" alt=""></figure>
          <div class="overlay-box"><a href="project-detail.html"><i class="fa fa-link"></i></a></div>
        </div>
        <div class="text-box"> <span class="tag">Digital PR</span>
          <h3><a href="project-detail.html">Innovative Interface</a></h3>
        </div>
      </div>
      <div class="project-block">
        <div class="image-box">
          <figure class="image"><img src="{{asset('front/images/gallery/4.jpg')}}" alt=""></figure>
          <div class="overlay-box"><a href="project-detail.html"><i class="fa fa-link"></i></a></div>
        </div>
        <div class="text-box"> <span class="tag">SEO Marketing</span>
          <h3><a href="project-detail.html">Opertray Division</a></h3>
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
              <div class="text">“Working with Reuss is always an absolute joy, both personally and professionally. Tommy
                is an amazing speaker; her experience, expertise and genuine passion for what she does is obvious in
                every word he says.”</div>
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
              <div class="text">“Working with Reuss is always an absolute joy, both personally and professionally. Tommy
                is an amazing speaker; her experience, expertise and genuine passion for what she does is obvious in
                every word he says.”</div>
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
              <div class="text">“Working with Reuss is always an absolute joy, both personally and professionally. Tommy
                is an amazing speaker; her experience, expertise and genuine passion for what she does is obvious in
                every word he says.”</div>
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
              <div class="text">“Working with Reuss is always an absolute joy, both personally and professionally. Tommy
                is an amazing speaker; her experience, expertise and genuine passion for what she does is obvious in
                every word he says.”</div>
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
<section class="news-section" style="background-image: url(images/background/4.png);">
  <div class="auto-container">
    <div class="sec-title text-center">
      <h6 class="subtitle">Our Latest News</h6>
      <h2>Announcements & news<br />for our reviwer</h2>
    </div>
    <div class="news-carousel owl-carousel owl-theme">
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-1.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">10 ways technology today at improved business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-2.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">How wireless technology more changing business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-3.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">Thirty surrogate mothers the trafficking.</a></h4> <a href="blog-detail.html"
              class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-1.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">10 ways technology today at improved business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-2.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">How wireless technology more changing business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-3.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">Thirty surrogate mothers the trafficking.</a></h4> <a href="blog-detail.html"
              class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-1.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">10 ways technology today at improved business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-2.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">How wireless technology more changing business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-3.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">Thirty surrogate mothers the trafficking.</a></h4> <a href="blog-detail.html"
              class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-1.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">10 ways technology today at improved business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-2.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">How wireless technology more changing business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-3.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">Thirty surrogate mothers the trafficking.</a></h4> <a href="blog-detail.html"
              class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-1.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">10 ways technology today at improved business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-2.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">How wireless technology more changing business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-3.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">Thirty surrogate mothers the trafficking.</a></h4> <a href="blog-detail.html"
              class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-1.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">10 ways technology today at improved business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-2.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">How wireless technology more changing business</a></h4> <a
              href="blog-detail.html" class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
      <div class="news-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image"><img src="{{asset('front/images/resource/news-3.jpg')}}" alt=""></figure>
            <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
          </div>
          <div class="caption-box">
            <ul class="info">
              <li><i class="fas fa-calendar-alt"></i>Feb 18, 2022</li>
              <li>|</li>
              <li><i class="fas fa-user-alt"></i>By Admin</li>
            </ul>
            <h4><a href="blog-detail.html">Thirty surrogate mothers the trafficking.</a></h4> <a href="blog-detail.html"
              class="theme-btn btn-style-one"><span class="txt">Read More</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-info-section">
  <div class="auto-container">
    <div class="inner-container" style="background-image: url(images/background/5.png);">
      <div class="text-box">
        <h2>Get Your Site Optimised & Converting Now</h2>
        <p>Through careful selection, we’ve curated a group of digital marketing experts.</p>
      </div>
      <div class="contect-box"> <a href="#" class="theme-btn btn-style-two"><span class="txt">Submit
            Now</span></a></div>
    </div>
  </div>
</section>
@endsection
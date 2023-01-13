@extends('layouts.layout')
@section('container')
<div class="bg-light">
    <section class="page-title" style="background-image:url({{ asset('front/images/background/22.png') }});">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Instagram</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="invested-sec altrenate">
        <div class="upper-box">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h2 class="subtitle">FOLLOWER UP</h2>
                    <h6 class="mb-3">You can increase the number of your followers<br>
                        in a short time.
                        You can get followers at a relatively low price.<br>
                        Private accounts cannot use this service.<br></h6>
                    <p class="text-muted">* The time that it takes for services may vary</p>
                </div>
            </div>
        </div>
        <div class="services-box mb-5 pb-5">
            <div class="auto-container">
                <div class="services-carousel owl-carousel owl-theme">
                    <div class="service-block-five">
                    <div class="inner-box text-center">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{asset('front/images/services/4.png')}}"
                                    alt="Services Image"></a></figure>
                            </div>
                            <div class="lower-content">
                            <h4 class="text-center"><a href="#">Follower Up</a></h4>
                            <p>Follower Up</p>
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
                        <h4><a href="#">Buy Instagram Likes</a></h4>
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
                        <h4><a href="#">Buy Instagram Followers</a></h4>
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
                        <h4><a href="#">Buy Instagram Views</a></h4>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- <section class="services-section altrenate" style="background-image: url({{ asset('front/images/background/10.png') }});">
    <div class="container-fluid">
        <div class="sec-title text-center light">
            <h6 class="subtitle">Best Service Provider</h6>
            <h2>Our digital marketing solution <br /> services for all</h2>
        </div>
        <div class="inner-container">
            <div class="row clearfix">
                <div class="left-column pull-left col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="service-block-two">
                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                <div class="icon-box red"> <span class="icon flaticon flaticon-seo"></span></div>
                                <div class="text-box">
                                    <h4><a href="blog-detail.html">SEO Optimization</a></h4>
                                    <p>Eorem ipsum dolorsit ameta odiut areaperspicis under water.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-two">
                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="250ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 250ms; animation-name: fadeInLeft;">
                                <div class="icon-box green"> <span class="icon flaticon flaticon-target"></span></div>
                                <div class="text-box">
                                    <h4><a href="blog-detail.html">Target Audience</a></h4>
                                    <p>Eorem ipsum dolorsit ameta odiut areaperspicis under water.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-two">
                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="500ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInLeft;">
                                <div class="icon-box light-blue"> <span class="icon flaticon flaticon-startup"></span></div>
                                <div class="text-box">
                                    <h4><a href="blog-detail.html">Fast Loading</a></h4>
                                    <p>Eorem ipsum dolorsit ameta odiut areaperspicis under water.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column wow zoomIn" data-wow-delay="600ms">
                        <div class="image-box">
                            <figure><img src="{{ asset('front/images/resource/service-center.png') }}" alt="service center"></figure>
                        </div>
                    </div>
                </div>
                <div class="right-column pull-right col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="service-block-three">
                            <div class="inner-box wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                                <div class="icon-box blue"> <span class="icon flaticon flaticon-fluctuation"></span></div>
                                <div class="text-box">
                                    <h4><a href="blog-detail.html">Data Analysis</a></h4>
                                    <p>Eorem ipsum dolorsit ameta odiut areaperspicis under water.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-three">
                            <div class="inner-box wow fadeInRight animated" data-wow-delay="250ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 250ms; animation-name: fadeInRight;">
                                <div class="icon-box purple"> <span class="icon flaticon flaticon-mouse"></span></div>
                                <div class="text-box">
                                    <h4><a href="blog-detail.html">Pay Per Click</a></h4>
                                    <p>Eorem ipsum dolorsit ameta odiut areaperspicis under water.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-block-three">
                            <div class="inner-box wow fadeInRight animated" data-wow-delay="500ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInRight;">
                                <div class="icon-box yellow"> <span class="icon flaticon flaticon-social-media"></span></div>
                                <div class="text-box">
                                    <h4><a href="blog-detail.html">Social Media</a></h4>
                                    <p>Eorem ipsum dolorsit ameta odiut areaperspicis under water.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="get-started-sec" style="background-image: url({{ asset('images/background/11.png') }});">
    <div class="auto-container">
        <div class="row">
            <div class="col-12 text-center inner-box">
                <div class="sec-title text-center">
                    <h6 class="subtitle">More With Us</h6>
                    <h2>You want to showcase your website <br /> in top join with us</h2> <a href="#" class="theme-btn btn-style-one"><span class="txt">Get Started</span></a></div>
            </div>
        </div>
    </div>
</section>
<section class="fun-fact-and-image">
    <div class="pattern-layer-one" style="background-image: url({{ asset('front/images/main-banner/cross-icon.png') }})"></div>
    <div class="pattern-layer-two" style="background-image: url({{ asset('front/images/main-banner/banner-icon-5.png') }})"></div>
    <div class="pattern-layer-three" style="background-image: url({{ asset('front/images/main-banner/banner-icon-6.png') }})"></div>
    <div class="pattern-layer-four" style="background-image: url({{ asset('front/images/main-banner/banner-icon.png') }})"></div>
    <div class="pattern-layer-five" style="background-image: url({{ asset('front/images/main-banner/banner-icon-1.png') }})"></div>
    <div class="pattern-layer-six" style="background-image: url({{ asset('front/images/main-banner/banner-icon-2.png') }})"></div>
    <div class="pattern-layer-seven" style="background-image: url({{ asset('front/images/main-banner/banner-icon-8.png') }})"></div>
    <div class="pattern-layer-eight" style="background-image: url({{ asset('front/images/main-banner/banner-icon-7.png') }})"></div>
    <div class="pattern-layer-nine" style="background-image: url({{ asset('front/images/main-banner/banner-icon-10.png') }})"></div>
    <div class="pattern-layer-ten" style="background-image: url({{ asset('front/images/main-banner/banner-icon-9.png') }})"></div>
    <div class="pattern-layer-eleven" style="background-image: url({{ asset('front/images/main-banner/banner-icon-3.png') }})"></div>
    <div class="pattern-layer-tweleve" style="background-image: url({{ asset('front/images/main-banner/banner-icon-4.png') }})"></div>
    <div class="auto-container">
        <div class="row">
            <div class="image-column col-lg-6 col-md-12">
                <div class="image-box parallax-scene-3 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="100ms">
                    <div class="image" data-depth="0.30"> <img src="{{ asset('images/resource/fact-1.png') }}" alt="Fact Image"></div>
                </div>
            </div>
            <div class="counter-colum col-lg-6 col-md-12">
                <div class="counter-box">
                    <div class="count-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="100ms">
                        <div class="count"><span class="count-text" data-speed="5000" data-stop="140">0</span><i>m</i></div>
                        <h5 class="counter-title">Digital Global Audience Reach</h5>
                    </div>
                    <div class="count-box wow fadeInUp" data-wow-delay="400ms" data-wow-duration="400ms">
                        <div class="count"><span class="count-text" data-speed="5000" data-stop="74">0</span><i>%</i></div>
                        <h5 class="counter-title">Of the audience is under 34 years</h5>
                    </div>
                    <div class="count-box wow fadeInUp" data-wow-delay="700ms" data-wow-duration="700ms">
                        <div class="count"><span class="count-text" data-speed="5000" data-stop="1720">0</span></div>
                        <h5 class="counter-title">Content pieces produced everyday</h5>
                    </div>
                    <div class="count-box wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="1000ms">
                        <div class="count"><span class="count-text" data-speed="5000" data-stop="96">0</span><i>%</i></div>
                        <h5 class="counter-title">Employee worldwide Satisfy</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-section style-three" style="background-image:url({{ asset('front/images/background/17.png') }});">
    <div class="upper-box">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h6 class="subtitle">Best Service Provider</h6>
                <h2>Our digital marketing solution <br /> services for all</h2>
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="service-block-six wow fadeInDown" data-wow-delay="100ms" data-wow-duration="100ms">
                    <div class="inner-box">
                        <div class="lower-content">
                            <h4><a href="service-detail.html">Social Media <br /> Marketing</a></h4>
                            <p>Eorem ipsum dolorsit ameta odiut areaperspicis under water.</p>
                        </div>
                        <div class="image-box">
                            <figure><img src="images/services/16.png" alt="Service Image"></figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="service-block-six wow fadeInDown" data-wow-delay="300ms" data-wow-duration="300ms">
                    <div class="inner-box">
                        <div class="lower-content">
                            <h4><a href="service-detail.html">Adanced Media <br /> Analytics</a></h4>
                            <p>Eorem ipsum dolorsit ameta odiut areaperspicis under water.</p>
                        </div>
                        <div class="image-box">
                            <figure><img src="images/services/17.png" alt="Service Image"></figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="service-block-six wow fadeInDown" data-wow-delay="500ms" data-wow-duration="500ms">
                    <div class="inner-box">
                        <div class="lower-content">
                            <h4><a href="service-detail.html">Date Saveing <br /> Security</a></h4>
                            <p>Eorem ipsum dolorsit ameta odiut areaperspicis under water.</p>
                        </div>
                        <div class="image-box">
                            <figure><img src="images/services/18.png" alt="Service Image"></figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="service-block-six wow fadeInDown" data-wow-delay="700ms" data-wow-duration="700ms">
                    <div class="inner-box">
                        <div class="lower-content">
                            <h4><a href="service-detail.html">Organic Long <br /> Term SEO</a></h4>
                            <p>Eorem ipsum dolorsit ameta odiut areaperspicis under water.</p>
                        </div>
                        <div class="image-box">
                            <figure><img src="images/services/19.png" alt="Service Image"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
@endsection
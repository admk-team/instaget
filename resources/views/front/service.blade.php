<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <title>Instaget</title>
  <style>
.navbar-brand{
  background-color: rgb(245, 211, 0);
}
.navbar-brand span{
  color: black;
  padding: 10px;
  font-size: 18px;
  font-weight: 600;
}
.social_icon .list-group-item{
  color: white;
  margin-right: 10px;
  border-radius: 9px;
  border: 0;
}
.list-group-horizontal>.list-group-item:first-child{
  border-bottom-left-radius: 0px;
  border-top-right-radius: 0px;
}
.social_icon .list-group-item a{
  color: white;
  text-decoration: none;
}
.instagram-icon{
  background-image: linear-gradient(to bottom right, #feda75 , #fa7e1e ,#d62976 ,#962fbf,#4f5bd5 );
}
.youtube-icon{
  background: rgb(255 0 0);
}
.naver-icon{
  background-color: #31b500;
}
.appMarketing-icon{
  background-color: #4f96d5;
}
.talk-icon{
  background-color: rgb(245, 211, 0);
}
.naver-span{
  padding-left: 5px;
  padding-right: 5px;
  padding-bottom: 2px;
  font-weight: 800;
  border: 2px solid white;
}
.talk-img{
  height: 20px;
}
.heading{
  font-size: 24px;
  font-weight: 600; 
}
.title{
  font-size: 18px;
}
.pakg_heading{
  border-bottom: 1px solid black;
  text-align: center;
  padding-bottom: 10px;
}
@media (max-width:480px){
  .social_icon{
    display: flex;
    flex-direction: column;
  }
  .social_icon .list-group-item {
    margin: 5px;
  }
  .bg_orange {
    margin-bottom: 15px;
  }
  .purchase-btn,.shop-btn{
    margin-bottom: 10px;
  }
  .tab-content-parent{
    padding: 0;
  }
  .nav-tabs{
    justify-content: center;
  }
  .tabs-button {
    width: 306px!important;
    margin-top: 7px!important;
    margin-right: 16px!important;
  }
  .tab-content{
    margin-top: 10px!important;
  }
}
.tab-content-parent{
  padding: 1rem;
}
.nav-tabs{
  border: 0;
}
.tabs-button{
  background-color: rgb(208, 208, 208)!important;
  color: rgb(0, 0, 0)!important;
  border: 0!important;
  padding: 10px!important;
  border-radius: 15px!important;
  height: 60px!important;
  border-radius: 13px!important;
  width: 189px;
  margin-right: 16px;

}
.tabs-button.active{
  background-color: rgb(252, 82, 48)!important;
  color: white!important;
}
.tab-content{
  border: 2px solid rgb(252, 82, 48);
  position: relative;
  margin-top: -10px;
  z-index: 1;
  border-radius: 10px;
  width: 97%;
  background: white;
  box-shadow: 0 4px 7px -1px #a8a8a8;
}
.check-box{
  height: 24px;
}
.tab-content-row{
  padding-bottom: 0.5rem;
  padding-top: 1.5rem;
  padding-right: 1.5rem;
  padding-left: 1.5rem;
}
.bg_orange{
  margin-left: 10px;
  margin-right: 5px;
  margin-bottom: 10px;
  padding: 10px;
  border-radius: 7px;
}
.bg_orange.active h4{
  color: white;
}
.bg_orange.active span{
  color: white;
}
.bg_orange.active{
  background-color: rgb(252, 82, 48);
}
.bg_orange{
  background-color: #EEEEEE;
}
.bg_orange h4{
  color: rgb(0, 0, 0);
}
.bg_orange span{
  color: rgb(252, 82, 48);
  font-size: 15px;
}
.sale-price{
  font-weight: 700;
}
.orignal-price{
  color: #d0d0d0;
  font-weight: 700;
}
.purchase-btn{
  background: rgb(252, 82, 48);
  border:0;
  margin:2px;
  color: white;
  height: 50px;
  width: 120px;
  font-size: 20px;
  font-weight: 600;
  box-shadow: 0px 1px 1px 0px black;
}
.shop-btn{
  background: rgb(238, 238, 238);
  border:0;
  margin:2px;
  color: black;
  height: 50px;
  width: 120px;
  font-size: 20px;
  font-weight: 600;
  box-shadow: 0px 1px 1px 0px black;
}
.tab-pane-header{
  border-bottom: 1px solid black;
  padding: 5px;
}
.list-group-item{
  border-radius: 12px!important;
}
  </style>
</head>

<body>
  <div class="container-fluid m-0 p-0">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <span>Intagram likes</span>
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
    <div class="container pt-5 d-flex justify-content-center">
      <ul class="list-group list-group-horizontal social_icon">
        <li class="list-group-item instagram-icon">
          <i class="bi bi-instagram"></i> 
          <a href="">인스 타 그램</a>
        </li>
        <li class="list-group-item youtube-icon">
          <i class="bi bi-youtube"></i> 유튜브
        </li>
        <li class="list-group-item naver-icon">
          <span class="naver-span">N</span> N사마케팅
        </li>
        <li class="list-group-item appMarketing-icon">
          <i class="bi bi-phone"></i> 앱마케팅
        </li>
        <li class="list-group-item talk-icon">
          <img src="{{asset('front_asset/images/icons/talk.png')}}" class="talk-img" alt=""> K사마케팅
        </li>
      </ul>
    </div>
    <div class="container pb-5">
      <div class="row p-5 justify-content-center">
        <div class="col-lg-6 pakg_heading">
          <h3 class="text-center heading">인스타팔로워늘리기</h3>
          <span class="text-center p-3 title">주문후단기간에인스타팔로워가자연스럽게증가하는서비스입니다.</span> <br> <span  class="text-center p-3 title">365일24시간연중무휴자동주문처리</span>
        </div>
      </div>
      <div class="row justify-content-center tab-content-parent">
        <div class="col-lg-6 justify-content-center text-center">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link tabs-button active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">실제한국인팔로워</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link tabs-button" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">리얼한국인팔로워</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link tabs-button" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">외국인팔로워</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="d-flex pt-4 justify-content-center">
                <div class="tab-pane-header">
                  <img src="{{asset('front_asset/images/icons/check.png')}}" alt="" class="check-box">
                  <span> &nbsp; 상품상세</span>
                </div>
              </div>
              <div class="row tab-content-row">
                <div class="col-5 col-md-2 bg_orange active text-center">
                  <h4>50</h4>
                  <span>팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>250</h4>
                  <span>5%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>500</h4>
                  <span>10%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>3000</h4>
                  <span>23%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>5000</h4>
                  <span>26%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
              </div>
              <div class="p-4 justify-content-center d-flex">
                <h4 class="sale-price">57,000원 </h4> &nbsp;<del class="orignal-price"> 60,000</del>
              </div>
              <div class="p-3 justify-content-center">
                <button class="purchase-btn">구매하기</button>
                <button class="shop-btn">장바구니</button>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="d-flex pt-4 justify-content-center">
                <div class="tab-pane-header">
                  <img src="{{asset('front_asset/images/icons/check.png')}}" alt="" class="check-box">
                  <span> &nbsp; 상품상세</span>
                </div>
              </div>
              <div class="row tab-content-row">
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>50</h4>
                  <span>팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>250</h4>
                  <span>5%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange active text-center">
                  <h4>500</h4>
                  <span>10%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>3000</h4>
                  <span>23%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>5000</h4>
                  <span>26%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
              </div>
              <div class="p-4 justify-content-center d-flex">
                <h4 class="sale-price">57,000원 </h4> &nbsp;<del class="orignal-price"> 60,000</del>
              </div>
              <div class="p-3 justify-content-center">
                <button class="purchase-btn">구매하기</button>
                <button class="shop-btn">장바구니</button>
              </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="d-flex pt-4 justify-content-center">
                <div class="tab-pane-header">
                  <img src="{{asset('front_asset/images/icons/check.png')}}" alt="" class="check-box">
                  <span> &nbsp; 상품상세</span>
                </div>
              </div>
              <div class="row tab-content-row">
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>50</h4>
                  <span>팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>250</h4>
                  <span>5%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>500</h4>
                  <span>10%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="col-5 col-md-2 bg_orange active text-center">
                  <h4>3000</h4>
                  <span>23%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>5000</h4>
                  <span>26%할인</span>
                </div>
                <div class="col-5 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>30%할인</span>
                </div>
              </div>
              <div class="p-4 justify-content-center d-flex">
                <h4 class="sale-price">57,000원 </h4> &nbsp;<del class="orignal-price"> 60,000</del>
              </div>
              <div class="p-3 justify-content-center">
                <button class="purchase-btn">구매하기</button>
                <button class="shop-btn">장바구니</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <footer class="footer">
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
    </footer> -->
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
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
    crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <title>Instaget</title>
  <style>
    @font-face {
      font-family: 'Roboto';
      src: url("font/NotoSansKR-Regular.otf") format("opentype");
      font-style: normal;
    }

    body {
      font-family: 'Roboto';
    }

    .navbar-brand {
      background-color: rgb(245, 211, 0);
    }

    .navbar-brand span {
      color: black;
      padding: 10px;
      font-size: 18px;
      font-weight: 600;
    }

    .social_icon .list-group-item {
      color: white;
      margin-right: 10px;
      border-radius: 9px;
      border: 0;
    }

    .list-group-horizontal>.list-group-item:first-child {
      border-bottom-left-radius: 0px;
      border-top-right-radius: 0px;
    }

    .social_icon .list-group-item a {
      color: white;
      text-decoration: none;
    }

    .instagram-icon {
      background-image: linear-gradient(to bottom right, #feda75, #fa7e1e, #d62976, #962fbf, #4f5bd5);
    }

    .youtube-icon {
      background: rgb(255 0 0);
    }

    .naver-icon {
      background-color: #31b500;
    }

    .appMarketing-icon {
      background-color: #4f96d5;
    }

    .talk-icon {
      background-color: rgb(245, 211, 0);
    }

    .naver-span {
      padding-left: 5px;
      padding-right: 5px;
      /* padding-bottom: 2px; */
      font-weight: 800;
      border: 2px solid white;
      margin-bottom: -5px;
    }

    .talk-img {
      height: 20px;
      margin-top: 5px;
      margin-bottom: -1px;
    }

    .heading {
      font-size: 24px;
      font-weight: 600;
    }

    .title {
      font-size: 18px;
    }

    .pakg_heading {
      border-bottom: 1px solid black;
      text-align: center;
      padding-bottom: 10px;
    }

    @media (max-width:480px) {
      .social_icon {
        /* display: flex;
    flex-direction: column; */
      }

      .list-group-item {
        border-radius: 0 !important;
      }

      /* .social_icon .list-group-item {
    margin: 5px;
  } */
      .bg_orange {
        margin-bottom: 15px;
      }

      .purchase-btn,
      .shop-btn {
        margin-bottom: 10px;
      }

      .tab-content-parent {
        padding: 0;
      }

      .nav-tabs {
        justify-content: center;
      }

      .tabs-button {
        width: 306px !important;
        margin-top: 7px !important;
        margin-right: 16px !important;
      }

      .tab-content {
        margin-top: 10px !important;
      }

      .heading {
        font-size: 16px;
        font-weight: 600;
      }

      .title {
        font-size: 15px;
      }
    }

    .tab-content-parent {
      padding: 1rem;
    }

    .nav-tabs {
      border: 0;
    }

    .tabs-button {
      background-color: #F3F0FF !important;
      color: rgb(0, 0, 0) !important;
      border: 0 !important;
      padding: 10px !important;
      border-radius: 15px !important;
      height: 60px !important;
      border-radius: 13px !important;
      width: 189px;
      margin-right: 16px;

    }

    .tabs-button.active {
      background-color: rgb(252, 82, 48) !important;
      color: white !important;
    }

    .tab-content {
      border: 2px solid rgb(252, 82, 48);
      position: relative;
      margin-top: -10px;
      z-index: 1;
      border-radius: 10px;
      width: 97%;
      background: white;
      box-shadow: 0 4px 7px -1px #a8a8a8;
    }

    .check-box {
      height: 24px;
    }

    .tab-content-row {
      padding-bottom: 0.5rem;
      padding-top: 1.5rem;
      padding-right: 1.5rem;
      padding-left: 1.5rem;
    }

    .bg_orange {
      margin-left: 10px;
      margin-right: 5px;
      margin-bottom: 10px;
      padding: 10px;
    }

    .bg_orange.active h4 {
      color: white;
    }

    .bg_orange.active span {
      color: white;
    }

    .bg_orange.active {
      background-color: rgb(252, 82, 48);
    }

    .bg_orange {
      background-color: #F3F0FF;
      border-radius: 10px;
    }

    .bg_orange h4 {
      color: rgb(0, 0, 0);
    }

    .bg_orange span {
      color: rgb(252, 82, 48);
      font-size: 15px;
    }

    .sale-price {
      font-weight: 700;
    }

    .orignal-price {
      color: #d0d0d0;
      font-weight: 700;
    }

    .purchase-btn {
      background: rgb(252, 82, 48);
      border: 0;
      margin: 2px;
      color: white;
      height: 50px;
      width: 120px;
      font-size: 20px;
      font-weight: 600;
      box-shadow: 0px 1px 1px 0px black;
    }

    .shop-btn {
      background: #F3F0FF;
      border: 0;
      margin: 2px;
      color: black;
      height: 50px;
      width: 120px;
      font-size: 20px;
      font-weight: 600;
      box-shadow: 0px 1px 1px 0px black;
    }

    .tab-pane-header {
      border-bottom: 1px solid black;
      padding: 5px;
    }

    .list-group-item {
      border-radius: 12px;
    }

    .list-group-horizontal>.list-group-item:first-child {
      border-bottom-left-radius: 12px;
      border-top-right-radius: 12px;
    }

    .list-group-horizontal>.list-group-item+.list-group-item {
      border-bottom-left-radius: 12px;
      border-top-right-radius: 12px;
    }

    .btn-purple {
      color: #b34c82;
    }

    .btn-purple:hover {
      color: white;
      background-color: #b34c82;
    }

    .btn-apricot {
      color: #b47306;
    }

    .btn-apricot:hover {
      color: white;
      background-color: #b47306;
    }

    .social-dropdown {
      position: absolute;
      width: 138px;
      z-index: 1;
      margin-left: -18px;
      margin-top: 38px;
      display: none;
      box-shadow: 1px 1px 4px 1px #F3F0FF;
    }

    .social-dropdown-show {
      display: block;
    }

    .social-dropdown ul {
      margin: 0;
      padding-left: 7px;
    }

    .social-dropdown ul li {
      list-style: none;
    }

    .social-dropdown ul li a {
      color: black !important;
      font-size: 16px;
      margin: 0;
      text-decoration: none;
      padding: 0;
    }

    /*====================== Mobile services menu ============================*/
    .mobile-services-nav {}

    .mobile-services-nav .active-service {
      width: 100%;
      margin-top: 3px;
    }

    .mobile-services-nav .service .btn {
      /* width: 100%;
  border: 1px solid rgba(0,0,0,.5); */
      color: #F3F0FF;
    }

    .mobile-services-nav .service .content {
      display: none;
      width: 100%;
    }

    .mobile-services-nav .services {
      display: flex;
      gap: 3px;

    }

    .mobile-services-nav .services .service {
      flex-grow: 1;
    }

    .mobile-services-nav .accordion-item {
      margin-bottom: 8px;
    }

    .mobile-services-nav .accordion-button {
      padding: 16px 8px;
      font-size: 16px;
      border: none;
    }

    .insta-danger {
      background-color: #d04545;
      color: white;
    }

    .mobile-services-nav .accordion-button::after {
      color: white;
    }

    .instagram-accordion-body {
      padding: 5px;
    }

    .instagram-likes-ul {
      list-style: none;
      padding-left: 0;
      line-height: 2;
    }

    .instagram-likes-ul li {
      background: #F3F0FF;
      margin-bottom: 5px;
      border-left: 3px solid #d04545;
    }

    .insta-success {
      background-color: #22a568 !important;
      color: white;
    }

    .follower-ul li {
      background: #F3F0FF;
      margin-bottom: 5px;
      border-left: 3px solid #22a568;
    }

    .mobile-services-nav .service .btn {
      color: #F3F0FF;
      text-align: center;
      align-items: center;
      justify-content: center;
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
    <div class="container py-5  d-block d-sm-none">
      <!-- New Mobile Menu -->
      <div class="mobile-services-nav">
        <div class="services">
          <div class="service">
            <li class="btn list-group-item instagram-icon d-flex">
              <i class="bi bi-instagram"></i>&nbsp;
            </li>
            <div class="content">
              <div class="accordion">
                <div class="accordion-item">
                  <div class="accordion-header" id="headingOne">
                    <button class="accordion-button shadow-none collapsed insta-danger" type="button"
                      data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                      aria-controls="collapseOne">
                      Buy Instagram Likes
                    </button>
                  </div>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body instagram-accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed shadow-none insta-success" type="button"
                      data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                      aria-controls="collapseTwo">
                      Buy Instagram Followers
                    </button>
                  </div>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body instagram-accordion-body">
                      <ul class="instagram-likes-ul follower-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="service">
            <li class="btn list-group-item youtube-icon d-flex">
              <i class="bi bi-youtube"></i>&nbsp;
            </li>
            <div class="content">
              <div class="accordion">
                <div class="accordion-item">
                  <div class="accordion-header" id="headingOne">
                    <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Buy Instagram Followers
                    </button>
                  </div>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Buy Instagram Followers
                    </button>
                  </div>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Buy Instagram Followers
                    </button>
                  </div>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="service">
            <li class="btn list-group-item naver-icon d-flex">
              <span class="naver-span">N</span> &nbsp;
            </li>
            <div class="content">
              <div class="accordion">
                <div class="accordion-item">
                  <div class="accordion-header" id="headingOne">
                    <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Buy Instagram Followers
                    </button>
                  </div>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Buy Instagram Followers
                    </button>
                  </div>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Buy Instagram Like
                    </button>
                  </div>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="service">
            <li class="btn list-group-item appMarketing-icon d-flex instagram-btns">
              <i class="bi bi-phone"></i> &nbsp;
            </li>
            <div class="content">
              <div class="accordion">
                <div class="accordion-item">
                  <div class="accordion-header" id="headingOne">
                    <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Buy Instagram Followers
                    </button>
                  </div>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Accordion Item #2
                    </button>
                  </div>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Accordion Item #3
                    </button>
                  </div>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="service">
            <li class="btn list-group-item talk-icon d-flex instagram-btns">
              <img src="{{ asset('front_asset/images/icons/talk.png') }}" class="talk-img" alt=""> &nbsp;
            </li>
            <div class="content">
              <div class="accordion">
                <div class="accordion-item">
                  <div class="accordion-header" id="headingOne">
                    <button class="accordion-button shadow-none collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Accordion Item #1
                    </button>
                  </div>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Accordion Item #2
                    </button>
                  </div>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Accordion Item #3
                    </button>
                  </div>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="instagram-likes-ul">
                        <li>Buy Instagram Likes</li>
                        <li>Buy Automatic Instagram Likes</li>
                        <li>Buy Instagram Monthly Likes</li>
                        <li>Free Instagram Likes</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="active-service" style="display: none;">

        </div>
      </div>

    </div>
    <div class="container pt-5 d-none d-md-flex justify-content-center">
      <ul class="list-group list-group-horizontal social_icon">
        <li class="list-group-item instagram-icon d-flex instagram-btns">
          <i class="bi bi-instagram"></i>&nbsp;
          <span class="d-none d-md-block">인스 타 그램</span>
          <div class="card social-dropdown">
            <ul>
              <li><a href="">인스타그램 좋아요 구매</a></li>
              <li><a href="">인스타그램 팔로워 구매</a></li>
              <li><a href="">인스타그램 댓글 구매</a></li>
              <li><a href="">인스타그램 릴</a></li>
            </ul>
          </div>
        </li>
        <li class="list-group-item youtube-icon d-flex instagram-btns">
          <i class="bi bi-youtube"></i>&nbsp;
          <span class="d-none d-md-block">유튜브</span>
          <div class="card social-dropdown">
            <ul>
              <li><a href="">인스타그램 좋아요 구매</a></li>
              <li><a href="">인스타그램 팔로워 구매</a></li>
              <li><a href="">인스타그램 댓글 구매</a></li>
              <li><a href="">인스타그램 릴</a></li>
            </ul>
          </div>
        </li>
        <li class="list-group-item naver-icon d-flex instagram-btns">
          <span class="naver-span">N</span> &nbsp;
          <span class="d-none d-md-block">N사마케팅</span>
          <div class="card social-dropdown">
            <ul>
              <li><a href="">인스타그램 좋아요 구매</a></li>
              <li><a href="">인스타그램 팔로워 구매</a></li>
              <li><a href="">인스타그램 댓글 구매</a></li>
              <li><a href="">인스타그램 릴</a></li>
            </ul>
          </div>
        </li>
        <li class="list-group-item appMarketing-icon d-flex instagram-btns">
          <i class="bi bi-phone"></i> &nbsp;
          <span class="d-none d-md-block">앱마케팅</span>
          <div class="card social-dropdown">
            <ul>
              <li><a href="">인스타그램 좋아요 구매</a></li>
              <li><a href="">인스타그램 팔로워 구매</a></li>
              <li><a href="">인스타그램 댓글 구매</a></li>
              <li><a href="">인스타그램 릴</a></li>
            </ul>
          </div>
        </li>
        <li class="list-group-item talk-icon d-flex instagram-btns">
          <img src="{{ asset('front_asset/images/icons/talk.png') }}" class="talk-img" alt=""> &nbsp;
          <span class="d-none d-md-block">K사마케팅</span>
          <div class="card social-dropdown">
            <ul>
              <li><a href="">인스타그램 좋아요 구매</a></li>
              <li><a href="">인스타그램 팔로워 구매</a></li>
              <li><a href="">인스타그램 댓글 구매</a></li>
              <li><a href="">인스타그램 릴</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <div class="container pb-5">
      <div class="row justify-content-center">
        <div class="d-none d-md-block col-lg-6 pakg_heading p-5 ">
          <h3 class="text-center heading">인스타팔로워늘리기</h3>
          <span class="text-center p-3 title">주문후단기간에인스타팔로워가자연스럽게증가하는서비스입니다.</span> <br> <span
            class="text-center p-3 title">365일24시간연중무휴자동주문처리</span>
        </div>
      </div>
      <div class="row justify-content-center tab-content-parent">
        <div class="col-lg-6 justify-content-center text-center">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link tabs-button active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                type="button" role="tab" aria-controls="home" aria-selected="true">실제한국인팔로워</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link tabs-button" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                type="button" role="tab" aria-controls="profile" aria-selected="false">리얼한국인팔로워</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link tabs-button" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                type="button" role="tab" aria-controls="contact" aria-selected="false">외국인팔로워</button>
            </li>
          </ul>
          <div class="row justify-content-center">
            <div class="d-block d-md-none col-lg-6 pakg_heading pt-4 pb-2">
              <h3 class="text-center heading">인스타팔로워늘리기</h3>
              <span class="text-center title">주문후단기간에인스타팔로워가자연스럽게증가하는서비스입니다.365일24시간연중무휴자동주문처리</span>
            </div>
          </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="d-flex pt-4 justify-content-center">
                <div class="tab-pane-header">
                  <img src="{{ asset('front_asset/images/icons/check.png') }}" alt="" class="check-box">
                  <span> &nbsp; 상품상세</span>
                </div>
              </div>
              <div class="row tab-content-row">
                <div class="col-3 col-md-2 bg_orange active text-center">
                  <h4>50</h4>
                  <span>팔로워</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>250</h4>
                  <span>5%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>500</h4>
                  <span>10%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>1000</h4>
                  <span>18%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>2000</h4>
                  <span>20%팔로워</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>3000</h4>
                  <span>23%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
                  <h4>5000</h4>
                  <span>26%할인</span>
                </div>
                <div class="col-3 col-md-2 bg_orange text-center">
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
                  <img src="images/icons/check.png" alt="" class="check-box">
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
                  <img src="images/icons/check.png" alt="" class="check-box">
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
  <script>
    $('.instagram-btns').hover(function(event) {
      $(this).find('.social-dropdown').slideDown();
  }, function() {
      $(this).find('.social-dropdown').hide();
  });
  </script>
  <script>
    const mobileSeriveNav = document.querySelector('.mobile-services-nav');
  const activeServiceContainer = mobileSeriveNav.querySelector('.active-service');
  const serviceBtns = mobileSeriveNav.querySelectorAll('.service > .btn');
  serviceBtns.forEach((btn) => {
    btn.addEventListener('click', (event) => {
      const content = btn.nextElementSibling;
      const contentClone = content.cloneNode(true);

      let alreadyActiveBtn = false;
      serviceBtns.forEach(el => {
        if (el.classList.contains('active1'))
          alreadyActiveBtn = el;
      });

      if (alreadyActiveBtn && alreadyActiveBtn.isSameNode(btn)) {
        alreadyActiveBtn.classList.remove('active1');
        $(activeServiceContainer).slideUp();
        activeServiceContainer.classList.remove('show');
        return;
      }

      if (alreadyActiveBtn) {
        alreadyActiveBtn.classList.remove('active1');
      }

      btn.classList.add('active1');
      activeServiceContainer.classList.add('show');
      $(activeServiceContainer).slideUp('medium', function () {
        activeServiceContainer.innerHTML = '';
        activeServiceContainer.appendChild(contentClone);
        $(activeServiceContainer).slideDown();
      });
    })
  })
  </script>
</body>

</html>
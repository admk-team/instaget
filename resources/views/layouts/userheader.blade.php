
<nav class="navbar navbar-expand-lg d-block navbar-dark" style="background-color:#aeaeae;">
    <div class="container">
      {{-- <a class="navbar-brand" href="{{ route('front.index') }}">
        <span>Intagram likes</span>
      </a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbaruserprofile" aria-controls="navbarSUpportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span ><img src="{{ asset('front_asset/images/arrow-down-purple.png') }}"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbaruserprofile">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('front.user_info') }}">서비스 진행 중</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('front.purchase_history') }}">주문 내역</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('front.member_info') }}">회원정보 관리</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('front.logout') }}">로그 아웃</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- <div class="w-100 d-md-none d-block" style="background-color:#2B2C34; height:100px;">
  </div> --}}

</header>


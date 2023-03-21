
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-block">
    <div class="container">
      <a class="navbar-brand" href="{{ route('front.index') }}">
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
            <a class="nav-link active" aria-current="page" href="{{ route('front.index') }}"> 인스타몽 소개</a>
          </li>
          <li class="nav-item dropdown">
            <?php
            $sercivce = DB::table('services')->first();
               ?>
            <a class="nav-link dropdown-toggle" onclick="window.location.href='{{ route('front.service',$sercivce->slug) }}'" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              서비스
            </a>
         <x-navbar></x-navbar>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('front.reviews') }}">고객후기
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('front.faq') }}">자주 묻는 질문</a>
          </li>
          @if (!auth()->user())
            <li class="nav-item">
              <a class="nav-link" href="{{ route('front.login') }}">로그인</a>
            </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="{{ route('front.login') }}">로그 아웃</a>
              </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  <div class="w-100 d-md-none d-block" style="background-color:#2B2C34; height:100px;">
  </div>

</header>
<div class="form-back-drop"></div>

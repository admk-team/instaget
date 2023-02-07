
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
            <a class="nav-link active" aria-current="page" href="{{ route('front.index') }}">What is Instagram?</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Service
            </a>
         <x-navbar></x-navbar>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('front.reviews') }}">Customer Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('front.faq') }}">Frequently Asked Questions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('front.login') }}">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="form-back-drop"></div>

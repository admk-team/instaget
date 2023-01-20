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
  <link rel="stylesheet" href="{{ asset('front_asset/css/style.css') }}">
  <title>Instaget</title>
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
                <a class="nav-link" href="{{ route('front.reviews') }}">Customer Review</a>
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
    <div class="container p-3">
      <div class="row pt-4">
        <h3 class="review-title text-center font-bold">Customer Testimonials</h3>
        <p class="review-text text-center">Please leave a review of the service you purchased on Instagram</p>
      </div>
      <div class="row">
        <div class="col-12 justify-content-right text-right">
          <ul class="list-group list-group-horizontal border-0 float-right">
            <li class="list-group-item border-0 text-primary"><i class="bi bi-check-lg"></i>&nbsp; Newest</li>
            <li class="list-group-item border-0"><i class="bi bi-check-lg"></i>&nbsp; Popularity</li>
          </ul>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>Number</th>
                <th>Product Type</th>
                <th>Title</th>
                <th>Grade</th>
                <th>Writer</th>
                <th>Views</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>follow up</td>
                <td>Instagram follower increase review!</td>
                <td>
                  <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                  </div>
                </td>
                <td>this**</td>
                <td>12310</td>
              </tr>
              <tr>
                <td>1</td>
                <td>follow up</td>
                <td>Instagram follower increase review!</td>
                <td>
                  <div class="rating">
                    <input type="radio" id="star10" name="rating" value="5" checked/><label for="star5" title="Meh">5 stars</label>
                    <input type="radio" id="star9" name="rating" value="4" checked/><label for="star4" title="Kinda bad">4 stars</label>
                    <input type="radio" id="star8" name="rating" value="3" checked/><label for="star3" title="Kinda bad">3 stars</label>
                    <input type="radio" id="star7" name="rating" value="2" checked/><label for="star2" title="Sucks big tim">2 stars</label>
                    <input type="radio" id="star6" name="rating" value="1" checked/><label for="star1" title="Sucks big time">1 star</label>
                  </div>
                </td>
                <td>this**</td>
                <td>12310</td>
              </tr>
              <tr>
                <td>1</td>
                <td>follow up</td>
                <td>Instagram follower increase review!</td>
                <td>
                  <div class="rating">
                    <input type="radio" id="star15" name="rating" value="5" checked/><label for="star5" title="Meh">5 stars</label>
                    <input type="radio" id="star14" name="rating" value="4" checked/><label for="star4" title="Kinda bad">4 stars</label>
                    <input type="radio" id="star13" name="rating" value="3" checked/><label for="star3" title="Kinda bad">3 stars</label>
                    <input type="radio" id="star12" name="rating" value="2" checked/><label for="star2" title="Sucks big tim">2 stars</label>
                    <input type="radio" id="star11" name="rating" value="1" checked/><label for="star1" title="Sucks big time">1 star</label>
                  </div>
                </td>
                <td>this**</td>
                <td>12310</td>
              </tr>
              <tr>
                <td>2</td>
                <td>follow up</td>
                <td>Instagram follower increase review!</td>
                <td>
                  <div class="rating">
                    <input type="radio" id="star20" name="rating" value="5"/><label for="star5" title="Meh">5 stars</label>
                    <input type="radio" id="star19" name="rating" value="4"/><label for="star4" title="Kinda bad">4 stars</label>
                    <input type="radio" id="star18" name="rating" value="3"/><label for="star3" title="Kinda bad">3 stars</label>
                    <input type="radio" id="star17" name="rating" value="2"/><label for="star2" title="Sucks big tim">2 stars</label>
                    <input type="radio" id="star16" name="rating" value="1"/><label for="star1" title="Sucks big time">1 star</label>
                  </div>
                </td>
                <td>this**</td>
                <td>12310</td>
              </tr>
              <tr>
                <td>3</td>
                <td>follow up</td>
                <td>Instagram follower increase review!</td>
                <td>
                  <div class="rating">
                    <input type="radio" id="star25" name="rating" value="5"/><label for="star5" title="Meh">5 stars</label>
                    <input type="radio" id="star24" name="rating" value="4"/><label for="star4" title="Kinda bad">4 stars</label>
                    <input type="radio" id="star23" name="rating" value="3"/><label for="star3" title="Kinda bad">3 stars</label>
                    <input type="radio" id="star22" name="rating" value="2"/><label for="star2" title="Sucks big tim">2 stars</label>
                    <input type="radio" id="star21" name="rating" value="1"/><label for="star1" title="Sucks big time">1 star</label>
                  </div>
                </td>
                <td>this**</td>
                <td>12310</td>
              </tr>
              <tr>
                <td>4</td>
                <td>follow up</td>
                <td>Instagram follower increase review!</td>
                <td>
                  <div class="rating">
                    <input type="radio" id="star30" name="rating" value="5"/><label for="star5" title="Meh">5 stars</label>
                    <input type="radio" id="star29" name="rating" value="4"/><label for="star4" title="Kinda bad">4 stars</label>
                    <input type="radio" id="star28" name="rating" value="3"/><label for="star3" title="Kinda bad">3 stars</label>
                    <input type="radio" id="star27" name="rating" value="2"/><label for="star2" title="Sucks big tim">2 stars</label>
                    <input type="radio" id="star26" name="rating" value="1"/><label for="star1" title="Sucks big time">1 star</label>
                  </div>
                </td>
                <td>this**</td>
                <td>12310</td>
              </tr>
              <tr>
                <td>5</td>
                <td>follow up</td>
                <td>Instagram follower increase review!</td>
                <td>
                  <div class="rating">
                    <input type="radio" id="star35" name="rating" value="5"/><label for="star5" title="Meh">5 stars</label>
                    <input type="radio" id="star34" name="rating" value="4"/><label for="star4" title="Kinda bad">4 stars</label>
                    <input type="radio" id="star33" name="rating" value="3"/><label for="star3" title="Kinda bad">3 stars</label>
                    <input type="radio" id="star32" name="rating" value="2"/><label for="star2" title="Sucks big tim">2 stars</label>
                    <input type="radio" id="star31" name="rating" value="1"/><label for="star1" title="Sucks big time">1 star</label>
                  </div>
                </td>
                <td>this**</td>
                <td>12310</td>
              </tr>
              <tr>
                <td>6</td>
                <td>follow up</td>
                <td>Instagram follower increase review!</td>
                <td>
                  <div class="rating">
                    <input type="radio" id="star4" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
                    <input type="radio" id="star39" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
                    <input type="radio" id="star38" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
                    <input type="radio" id="star37" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
                    <input type="radio" id="star36" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                  </div>
                </td>
                <td>this**</td>
                <td>12310</td>
              </tr>
              <tr>
                <td>7</td>
                <td>follow up</td>
                <td>Instagram follower increase review!</td>
                <td>
                  <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5"/><label for="star5" title="Meh">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4"/><label for="star4" title="Kinda bad">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3"/><label for="star3" title="Kinda bad">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2"/><label for="star2" title="Sucks big tim">2 stars</label>
                    <input type="radio" id="star1" name="rating" value="1"/><label for="star1" title="Sucks big time">1 star</label>
                  </div>
                </td>
                <td>this**</td>
                <td>12310</td>
              </tr>
            </tbody>
          </table>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container p-5">
        <div class="row">
          <div class="col-lg-4">
            <div class="footer-img">
              <img src="{{ asset('front_asset/images/logo.png') }}" alt="">
            </div>
            <ul class="list-group border-0">
              <li class="list-group-item border-0">
                <i class="bi bi-envelope"></i> &nbsp;
                <span>info@instaget.com</span>
              </li>
              <li class="list-group-item border-0">
                <i class="bi bi-telephone"></i> &nbsp;
                <span>++0012345678</span>
              </li>
              <li class="list-group-item border-0">
                <i class="bi bi-geo-alt"></i> &nbsp;
                <span>Address: #302, Building A, Seoul Forest SKV1TOWER, 5 Seongsuil-ro 8-gil, Seongdong-gu, Seoul (Seongsu-dong 2-ga)</span>
              </li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h2 class="footer-heading">Services</h2>
            <ul class="list-group border-0">
              <li class="list-group-item border-0">
                <span>Buy Insatgrams Followers</span>
              </li>
              <li class="list-group-item border-0">
                <span>Buy Insatgrams Likes</span>
              </li>
              <li class="list-group-item border-0">
                <span>Buy Insatgrams Views</span>
              </li>
              <li class="list-group-item border-0">
                <span>Insatgrams Reels</span>
              </li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h2 class="footer-heading">Company</h2>
            <ul class="list-group border-0">
              <li class="list-group-item border-0">
                <span>Contact Us</span>
              </li>
              <li class="list-group-item border-0">
                <span>About Us</span>
              </li>
              <li class="list-group-item border-0">
                <span>Privacy Policy</span>
              </li>
              <li class="list-group-item border-0">
                <span>Term of Services</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="row pt-5">
          <p class="text-center text-white">Copyright © INSTAGET. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</body>

</html>
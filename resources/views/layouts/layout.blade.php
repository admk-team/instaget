<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="{{ asset('front_asset/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front_asset/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('front_asset/css/faq.css') }}">
  <title>Instaget</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
  <header>

    <div class="page-wrapper">
      @include('layouts.header')

      @yield('container')

      @include('layouts.footer')
    </div>

    <div class="scroll-to-top scroll-to-target theme-btn btn-style-one" data-target="html">
      <span class="txt"><i class="fas fa-arrow-up"></i></span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('front_asset/js/owl.carousel.min.js') }}"></script>  
    {{-- Kakao Talk --}}
    <script src="https://t1.kakaocdn.net/kakao_js_sdk/2.1.0/kakao.min.js"
    integrity="sha384-dpu02ieKC6NUeKFoGMOKz6102CLEWi9+5RQjWSV0ikYSFFd8M3Wp2reIcquJOemx" crossorigin="anonymous"></script>
    {{-- Axios --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- custom JS code after importing jquery and owl -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#owl-row-1").owlCarousel();
      });
      $('#owl-row-1').owlCarousel({
        loop: true
        , margin: 10
        , nav: false
        , responsive: {
          0: {
            items: 1
          }
          , 600: {
            items: 1
          }
          , 1000: {
            items: 1
          }
        }
      })
    </script>
    <script>
      $(document).ready(function() {
        $('#testimonials').owlCarousel({
          items: 3
          , nav: false
        });
        $('#testimonials_md').owlCarousel({
          items: 1
          , nav: false
        });
        $('#testimonials_lg').owlCarousel({
          items: 2
          , nav: false
        });
      });
    </script>
    <script>
      (function($) {
        $.fn.animateNumbers = function(stop, commas, duration, ease) {
          return this.each(function() {
            var $this = $(this);
            var isInput = $this.is('input');
            var start = parseInt(isInput ? $this.val().replace(/,/g, "") : $this.text().replace(/,/g, ""));
            var regex = /(\d)(?=(\d\d\d)+(?!\d))/g;
            commas = commas === undefined ? true : commas;
            // number inputs can't have commas or it blanks out
            if (isInput && $this[0].type === 'number') {
              commas = false;
            }
            $({
              value: start
            }).animate({
              value: stop
            }, {
              duration: duration === undefined ? 1000 : duration
              , easing: ease === undefined ? "swing" : ease
              , step: function() {
                isInput ? $this.val(Math.floor(this.value)) : $this.text(Math.floor(this.value));
                if (commas) {
                  isInput ? $this.val($this.val().replace(regex, "$1,")) : $this.text($this.text().replace(regex, "$1,"));
                }
              }
              , complete: function() {
                if (parseInt($this.text()) !== stop || parseInt($this.val()) !== stop) {
                  isInput ? $this.val(stop) : $this.text(stop);
                  if (commas) {
                    isInput ? $this.val($this.val().replace(regex, "$1,")) : $this.text($this.text().replace(regex, "$1,"));
                  }
                }
              }
            });
          });
        };
      })(jQuery);
    </script>
    <!-- custom JS code after importing jquery and owl -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#owl-row-1").owlCarousel();
      });
      $('#owl-row-1').owlCarousel({
        loop: true
        , margin: 10
        , nav: false
        , responsive: {
          0: {
            items: 1
          }
          , 600: {
            items: 1
          }
          , 1000: {
            items: 1
          }
        }
      })
    </script>
    <script>
      function changeColors(self, bg = 'white', color = 'white') {
        self.style.backgroundColor = bg;
        self.style.color = color;
        self.querySelector('a').style.backgroundColor = bg;
        self.querySelector('a').style.color = color;
      }
    </script>
    <script>
      $('.bg_orange').click(function(event) {
        $('.mobile-checkout-main').addClass('mobile-checkout-main-show');
      })
      $('.close-down-btn').click(function(event) {
        $('.mobile-checkout-main').removeClass('mobile-checkout-main-show');
      })
    </script>
    <script>
      $(document).ready(function() {
        $('#services_testimonials').owlCarousel({
          items: 1
          , nav: true
          , dots: true
        , });
      });
    </script>
    <script>
      // let element = "";
      $(document).on("click", (event) => {
        if (event.target.closest(".service-faq-box")) {
          let mainFaqBox = event.target.closest(".service-faq-box");
          let faqAnswer = mainFaqBox.getElementsByClassName("service-faq-answer")[0];
          let icon = mainFaqBox.getElementsByClassName("service-faq-question")[0].getElementsByClassName("service-faq-question-icon")[0];

          if (element === faqAnswer) {
            faqAnswer.classList.remove("service-faq-answer-active");
            faqAnswer.classList.add("service-faq-answer-inactive");
            icon.classList.remove("faq-answer-active-icon");
            element = "";
            mainFaqBox.classList.remove("isDropdown");
            return;
          }
          element = faqAnswer;

          let allFaqAnswers = document.querySelectorAll(".service-faq-answer");
          for (let i = 0; i < allFaqAnswers.length; i++) {
            if (faqAnswer !== allFaqAnswers[i] && allFaqAnswers[i].classList.contains("service-faq-answer-active")) {
              allFaqAnswers[i].classList.remove("service-faq-answer-active");
              allFaqAnswers[i].classList.add("service-faq-answer-inactive");
              allFaqAnswers[i].parentNode.getElementsByClassName("service-faq-question")[0].getElementsByClassName("service-faq-question-icon")[0].classList.remove("faq-answer-active-icon");
              allFaqAnswers[i].parentNode.classList.remove("isDropdown");
            }
          }

          mainFaqBox.classList.add("isDropdown");
          faqAnswer.classList.remove("service-faq-answer-inactive");
          faqAnswer.classList.add("service-faq-answer-active");
          icon.classList.add("faq-answer-active-icon");
        }
      });

    </script>
    <script>
      $(document).on("click", (event) => {
        if (!event.target.closest(".mbl-service-icon")) {
          let allImgs = document.querySelectorAll(".mbl-service-img");
          for (let i = 0; i < allImgs.length; i++) {
            if (allImgs[i].getAttribute("id") == "mbl-service-icon-1") {
              allImgs[i].setAttribute("src", "{{ asset('front_asset/images/insta-before-click.png') }}");
            }

            if (allImgs[i].getAttribute("id") == "mbl-service-icon-2") {
              allImgs[i].setAttribute("src", "{{ asset('front_asset/images/youtube-before-click.png') }}");
            }

            if (allImgs[i].getAttribute("id") == "mbl-service-icon-3") {
              allImgs[i].setAttribute("src", "{{ asset('front_asset/images/mbl-before-click.png') }}");
            }

            if (allImgs[i].getAttribute("id") == "mbl-service-icon-4") {
              allImgs[i].setAttribute("src", "{{ asset('front_asset/images/navar-before-click.png') }}");
            }

            if (allImgs[i].getAttribute("id") == "mbl-service-icon-5") {
              allImgs[i].setAttribute("src", "{{ asset('front_asset/images/talk-before-click.png') }}");
            }
            allImgs[i].parentNode.getElementsByClassName("mbl-serice-icon-text")[0].classList.remove("text-white");
          }
        }
      });

      $(".mbl-service-icon").on("mouseenter", (event) => {
        if (event.target.closest(".mbl-service-icon")) {
          let allImgs = document.querySelectorAll(".mbl-service-img");
          for (let i = 0; i < allImgs.length; i++) {
            if (allImgs[i].getAttribute("id") == "mbl-service-icon-1") {
              allImgs[i].setAttribute("src", "{{ asset('front_asset/images/insta-before-click.png') }}");
            }

            if (allImgs[i].getAttribute("id") == "mbl-service-icon-2") {
              allImgs[i].setAttribute("src", "{{ asset('front_asset/images/youtube-before-click.png') }}");
            }

            if (allImgs[i].getAttribute("id") == "mbl-service-icon-3") {
              allImgs[i].setAttribute("src", "{{ asset('front_asset/images/mbl-before-click.png') }}");
            }

            if (allImgs[i].getAttribute("id") == "mbl-service-icon-4") {
              allImgs[i].setAttribute("src", "{{ asset('front_asset/images/navar-before-click.png') }}");
            }

            if (allImgs[i].getAttribute("id") == "mbl-service-icon-5") {
              allImgs[i].setAttribute("src", "{{ asset('front_asset/images/talk-before-click.png') }}");
            }

            allImgs[i].parentNode.getElementsByClassName("mbl-serice-icon-text")[0].classList.remove("text-white");
          }

          let item = event.target.closest(".mbl-service-icon");
          let image = $(item).find("img:eq(0)");

          $(item).find(".mbl-serice-icon-text:eq(0)").addClass("text-white");
          if (image.attr("id") == "mbl-service-icon-1") {
            image.attr("src", "http://127.0.0.1:8000/front_asset/images/intsa-after-click.png")
          }

          if (image.attr("id") == "mbl-service-icon-2") {
            image.attr("src", "http://127.0.0.1:8000/front_asset/images/youtube-after-click.png")
          }

          if (image.attr("id") == "mbl-service-icon-3") {
            image.attr("src", "http://127.0.0.1:8000/front_asset/images/mbl-after-click.png")
          }

          if (image.attr("id") == "mbl-service-icon-4") {
            image.attr("src", "http://127.0.0.1:8000/front_asset/images/navar-after-click.png")
          }

          if (image.attr("id") == "mbl-service-icon-5") {
            image.attr("src", "http://127.0.0.1:8000/front_asset/images/talk-after-click.png")
          }
        }
      });

      let element = "";
      $(document).on("click", (event) => {
        if (event.target.closest(".service-faq-box")) {
          let mainFaqBox = event.target.closest(".service-faq-box");
          let faqAnswer = mainFaqBox.getElementsByClassName("service-faq-answer")[0];
          let icon = mainFaqBox.getElementsByClassName("service-faq-question")[0].getElementsByClassName("service-faq-question-icon")[0];

          if (element === faqAnswer) {
            faqAnswer.classList.remove("service-faq-answer-active");
            faqAnswer.classList.add("service-faq-answer-inactive");
            icon.classList.remove("faq-answer-active-icon");
            element = "";
            return;
          }
          element = faqAnswer;

          let allFaqAnswers = document.querySelectorAll(".service-faq-answer");
          for (let i = 0; i < allFaqAnswers.length; i++) {
            if (faqAnswer !== allFaqAnswers[i] && allFaqAnswers[i].classList.contains("service-faq-answer-active")) {
              allFaqAnswers[i].classList.remove("service-faq-answer-active");
              allFaqAnswers[i].classList.add("service-faq-answer-inactive");
              allFaqAnswers[i].parentNode.getElementsByClassName("service-faq-question")[0].getElementsByClassName("service-faq-question-icon")[0].classList.remove("faq-answer-active-icon");
            }
          }

          faqAnswer.classList.remove("service-faq-answer-inactive");
          faqAnswer.classList.add("service-faq-answer-active");
          icon.classList.add("faq-answer-active-icon");
        }
      });

      jQuery(document).ready(function($) {
        let getUrl = window.location.origin;

        $('.social-icons-image1').on({
          'click': function() {
            let src = ($('#image1').attr('src') === getUrl + 'front_asset/images/icons/youtube-after-click.png') ? 'front_asset/images/icons/youtube-after-click.png' : 'front_asset/images/icons/youtube-before-click.png';
            $('#image1').attr('src', src);
          }
        });

        $('.social-icons-image2').on({
          'click': function() {
            $('#image2').attr('src', '/front_asset/images/icons/intsa-after-click.png');
          }
        });

        $('.social-icons-image3').on({
          'click': function() {
            $('#image3').attr('src', '/front_asset/images/icons/navar-after-click.png');
          }
        });

        $('.social-icons-image4').on({
          'click': function() {
            $('#image4').attr('src', '/front_asset/images/icons/talk-after-click.png');
          }
        });
      });

    </script>
    <script>
      let prevoius_element = "";

      $(".faq-column").on("click", (event) => {
        if (event.target.closest(".faq-question")) {
          event.target = event.target.parentNode;
        }

        if (event.target.closest(".fa")) {
          event.target = event.target.parentNode;
        }

        let element = event.target;
        let get_slider = $("#answer-slider");
        let question = element.getElementsByClassName("faq-question")[0];
        let answer = element.parentNode.getElementsByClassName("faq-answer")[0];
        let icon = element.getElementsByClassName("fa")[0];
        let faq_columns = document.querySelectorAll(".faq-column-active");

        if (prevoius_element == element) {
          element.removeAttribute("id");
          element.classList.remove("faq-column-active");
          icon.classList.remove("fa-chevron-up");
          icon.classList.add("fa-chevron-left");
          icon.classList.remove("mt-1");
          if (get_slider.length != 0) {
            $("#answer-slider").slideUp("slow");
            get_slider.removeAttr("id");
          }
          prevoius_element = "";
          return;
        }

        prevoius_element = element;

        for (let i = 0; i < faq_columns.length; i++) {
          if (faq_columns[i].classList.contains("faq-column-active")) {
            faq_columns[i].classList.remove("faq-column-active");
            if (faq_columns[i].getElementsByClassName("fa")[0].classList.contains("fa-chevron-up")) {
              faq_columns[i].getElementsByClassName("fa")[0].classList.remove("fa-chevron-up");
              faq_columns[i].getElementsByClassName("fa")[0].classList.add("fa-chevron-left");
              faq_columns[i].getElementsByClassName("fa")[0].classList.remove("mt-1");
            }
          }
        }

        if (get_slider.length != 0) {
          $("#answer-slider").slideUp("slow");
          get_slider.removeAttr("id");
        }

        element.classList.add("faq-column-active");
        icon.classList.remove("fa-chevron-left");
        icon.classList.add("fa-chevron-up");
        icon.classList.add("mt-1");
        answer.setAttribute("id", "answer-slider");
        $("#answer-slider").slideDown("slow");
      });

    </script>
</body>

</html>

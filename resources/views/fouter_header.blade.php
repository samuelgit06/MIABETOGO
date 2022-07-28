<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MIABETOGO</title>

    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="css/style-starter.css">
  </head>
  <body>
<!--w3l-header-->

<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
            <h4>MIABETOGO</h4>
            <!doctype html>
            <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
            
                <!-- CSRF Token -->
                <meta name="csrf-token" content="{{ csrf_token() }}">
            
                <title>{{ config('app.name', 'Laravel') }}</title>
            
                <!-- Scripts -->
                <script src="{{ asset('js/app.js') }}" defer></script>
            
                <!-- Fonts -->
                <link rel="dns-prefetch" href="//fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
            
                <!-- Styles -->
                <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            </head>
            <body>
                <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav me-auto">
            
                                </ul>
            
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ms-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif
            
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
            
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </body>
            </html>
            
</header>
@yield('content')
<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
          </div>
          <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5">
  
            <ul>
              <h6 class="footer-title-29">Useful Links</h6>
              <li><a href="{{ URL:: to ('/index')}}">Home</a></li>
              <li><a href="{{ URL:: to ('/services')}}">Galleries</a></li>
              <li><a href="{{ URL:: to ('/reservation')}}">Reservation</a></li>
             <!-- <li><a href="#blogposts"> Blog posts</a></li>
              <li><a {{ URL:: to ('/news')}}">Contact us</a></li>-->
            </ul>
          </div>
         <!-- <div class="col-lg-3 col-md-6 col-sm-5 footer-list-29 footer-3 mt-lg-0 mt-5">
              <h6 class="footer-title-29">Latest from blog</h6>
              <div class="footer-post mb-4">
                <a href="#url">Work Passionately</a>
                <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
              </div>
              <div class="footer-post">
                <a href="#url">Work Passionately without any hesitation</a>
                <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
              </div>
              
          </div>-->
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Nouvelles  </h6>
            <p>Entrer votre mail pour recevoir des nouvelles </p>
  
            <form action="#" class="subscribe" method="post">
              <input type="email" name="email" placeholder="Your Email Address" required="">
              <button><span class="fa fa-envelope-o"></span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  -<section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
       <!-- <p class="col-lg-8 copy-footer-29">© 2020 Hotels. All rights reserved | Designed by <a
            href="https://w3layouts.com">W3layouts</a></p>-->
  
            <!--<div class="col-lg-4 main-social-footer-29">
          <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
          <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
          <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
          <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
        </div>-->
  
      </div>
    </div>
  
   <!-- move top -->
   <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };
  
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }
  
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
  </section>
  
  <!-- Template JavaScript -->
  <script src="js/jquery-3.3.1.min.js"></script>
  
  <script src="js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  
  <!-- script for owlcarousel -->
  <script>
    $(document).ready(function () {
      $('.owl-testimonial').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script for owlcarousel -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
  
        fixedContentPos: false,
        fixedBgPos: true,
  
        overflowY: 'auto',
  
        closeBtnInside: true,
        preloader: false,
  
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });
  
      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',
  
        fixedContentPos: false,
        fixedBgPos: true,
  
        overflowY: 'auto',
  
        closeBtnInside: true,
        preloader: false,
  
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>
  
  
  <!-- disable body scroll which navbar is in active -->
  <script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
  </script>
  <!-- disable body scroll which navbar is in active -->
  
  <script src="js/bootstrap.min.js"></script>
  
  </body>
  
  </html>
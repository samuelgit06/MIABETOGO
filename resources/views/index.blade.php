@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="fr">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MIABETOGO</title>

    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="css/style-starter.css">
  </head>
  <!--<body>


<header class="w3l-header-nav">
\
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
            <h4>MIABETOGO</h4>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
				-<li class="nav-item active">
						<a class="nav-link" href="{{ URL:: to ('/index')}}">Home</a>
					</li>-->
				<!--	<li class="nav-item @@about__active">
						<a class="nav-link" href="{{ URL:: to ('/about')}}">About</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="{{ URL:: to ('/services')}}">Services</a>
					</li>
          <li class="nav-item @@about__active">
						<a class="nav-link" href="{{ URL:: to ('/services')}}">Gallerie</a>
					</li>
					
				</ul>
				<a href="{{ URL:: to ('/login')}}" class="ml-3 book btn btn-secondary btn-style">connecter vous</a>
        <a href="{{ URL:: to ('/ajout_etablissement')}}" class="ml-3 book btn btn-secondary btn-style">ajouter un etablissement</a>
			</div>
		</div>
	</nav>

</header>-->
<!-- //w3l-header -->
 <!-- main-slider -->
 <section class="w3l-main-slider" id="home">
     <div class="companies20-content">
         <div class="owl-one owl-carousel owl-theme">
             <div class="item">
                 <li>
                     <div class="slider-info banner-view bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>Trouver des hotels et maison pour passer votre sejour
                                     </h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{ URL:: to ('/reservation')}}">rerserver maintenant</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info  banner-view banner-top1 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>Explorer les offres de location de voiture </h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{ URL:: to ('/index_voiture')}}">en savoir plus</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top2 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>visiter des meilleurs endroits au togo 
                                     </h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{ URL:: to ('/tourisme')}}">en savoir plus </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
            <!-- <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top3 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>faites vous accompagner des experts en tourisme au togo </h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{ URL:: to ('/services')}}">en savoir plus </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>-->
         </div>
     </div>
 </section>
 <!-- /main-slider -->

<!-- //w3l-availability-form-section -->
<!-- about -->
<section class="w3l-about py-5">
	<div class="container py-sm-4">
		<div class="row">
			<div class="col-lg-6 about-left mb-md-0 mb-5">
				<h3 class="title-big">vous voullez passer un sejour au togo ,reserver dès maintenant</h3>
				<h5>We make the best for all our customers.</h5>
				<p class="mt-3">Duis nisi sapien, elementum finibus fermentum eget, aliquet leo. Mauris hendrerit vel ex.
					Quisque vitae luctus massa. Phasellus sed aliquam leo. Vestibulum ullamcorper a massa eu fringilla.
					Integer ultrices finibus sed nisi. in convallis felis dapibus sit amet. Lorem ipsum dolor, sit 
					amet consectetur adipisicing elit. Totam, porro! Lorem ipsum dolor sit amet.</p>
				<a href="{{ URL:: to ('/reservation')}}"class="btn btn-style btn-primary mt-sm-5 mt-4">Learn About Us</a>
			</div>
			<div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
				<img src="images/top.jpg" alt="" class="img-fluid img-border mt-4" />
				<img src="images/bottom.jpg" alt="" class="img-fluid position-absolute img-position" />
			</div>
		</div>
	</div>
</section>
<!-- //about -->
<section class="w3l-index3">
  <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
          <div class="row">
              <div class="col-lg-6 left-wthree-img text-righ">
                  <div class="position-relative">
                      <img src="images/videobg.jpg" alt="" class="img-fluid" />
                      <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                          <span class="video-play-icon">
                              <span class="fa fa-play"></span>
                          </span>
                      </a>
                      <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                      <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                          <iframe src="https://player.vimeo.com/video/246941769" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self">
                  <h6>Decouvrir le TOGO </h6>
                  <h3 class="title-big">Faites vous accompagner par les services de tourisme sur la place pour visiter les meilleurs places au togo</h3>
                  <p class="mt-3"></p>
                  <ul class="w3l-right-book mt-4">
                      <li><span class="fa fa-check" aria-hidden="true"></span>We make the best for all our customers</li>
                      <li><span class="fa fa-check" aria-hidden="true"></span>Follow our Resort Luxury Hotels</li>
                      <li><span class="fa fa-check" aria-hidden="true"></span>Luxury hotels and best resorts</li>
                      <li><span class="fa fa-check" aria-hidden="true"></span>Double rooms and family rooms</li>
                      <li><span class="fa fa-check" aria-hidden="true"></span>Enjoy a luxury experience</li>
                  </ul>
                  <a href="{{ URL:: to ('/tourisme')}}"class="btn btn-style btn-primary mt-4">Check all packages</a>
              </div>
          </div>
      </div>
  </div>
</section>
<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">besoin d'une voiture pour votre sejour </h3>
        <div class="ban-content-inf row py-lg-3">
            <div class="maghny-gd-1 col-lg-6">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="assets/images/room1.jpg" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Hotel and Best Resort
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From 20$ </p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a  ref="{{ URL:: to ('/index-voiture')}}" >mailleurs tarifs de location </a></h3>
                       <!-- <ul class="mb-3">
                            <li><span class="fa fa-users"></span> 2 Guests</li>
                            <li><span class="fa fa-bed"></span> Double bed</li>
                            <li><span class="fa fa-bed"></span> 15sqft</li>
                        </ul>-->
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A recusandae, illum sequi numquam
                            tempora voluptates?</p>
                        <a href="{{ URL:: to ('/index-voiture')}}" class="btn btn-style btn-primary mt-sm-4 mt-3"> voir plus </a>
                    </div>
                </div>
            </div>
            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row">
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="images/room2.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Family Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="images/room3.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Double Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- quotation -->
<div class="quotation py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="welcome-left text-center py-md-5 py-3">
			<h3>Enjoy a Luxury experience. Discover our locaions. Relax and enjoy your holiday</h3>
			<a href="{{ URL:: to ('/reservation')}}" class="btn btn-style transparent-btn mt-sm-5 mt-4 mr-2">Reserver maintenant</a>
		</div>
	</div>
</div></section>
<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
         <!--  <h6 class="footer-title-29">Contact Us</h6>
         <ul>
            <li>
              <p><span class="fa fa-map-marker"></span> Luxury hotel, #32841 block, #221DRS Rental & Paid rooms
                business, UK.</p>
            </li>
            <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(21)-255-999-8888</a></li>
            <li><a href="mailto:hotels@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                hotels@mail.com</a></li>
          </ul>-->
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
@endsection
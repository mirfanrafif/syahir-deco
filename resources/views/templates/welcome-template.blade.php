<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Syahir Decoration - @yield('title')</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome/font-awesome.min.css') }}">
  <!-- Animation -->
  <link rel="stylesheet" href="{{ asset('plugins/animate.css') }}">
  <!-- Prettyphoto -->
  <link rel="stylesheet" href="{{ asset('plugins/prettyPhoto.css') }}">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{ asset('plugins/owl/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/owl/owl.theme.css') }}">
  <!-- Flexslider -->
  <link rel="stylesheet" href="{{ asset('plugins/flex-slider/flexslider.css') }}">
  <!-- Slick-slider -->
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
  <!-- Style Swicther -->
  <link id="style-switch" href="{{ asset('css/presets/preset3.css') }}" media="screen" rel="stylesheet" type="text/css">
  <!-- Main Stylesheet -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!--Favicon-->
  <link rel="icon" href="{{ asset('img/favicon/favicon-32x32.png') }}" type="image/x-icon" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/favicon/favicon-144x144.png') }}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/favicon/favicon-72x72.png') }}">
  <link rel="apple-touch-icon-precomposed" href="{{ asset('img/favicon/favicon-54x54.png') }}">

</head>

<body>
  <div class="body-inner">

    <header id="header" class="fixed-top header" role="banner">
      <a class="navbar-brand navbar-bg" href="index.html">
        {{-- <img class="img-fluid float-right" src="images/logo.png" alt="logo"> --}}
        <h1>Hai</h1>
      </a>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
            data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
          </button>

          <div class="collapse navbar-collapse text-center" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown active">
                <a class="nav-link" href="/">Home</a></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  List Barang
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/barang">Paket Dekorasi</a>
                  <a class="dropdown-item" href="/barang">Dekorasi Pendukung</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Kontak</a></a>
              </li>
              <li class="nav-item">
                <a href="/login" class="btn btn-primary white m-2" data-duration-in=".5" data-animation-in="fadeInUp"
                  data-delay-in=".5">Login</a>
              </li>
              <li class="nav-item">
                <a href="/register" class="btn btn-primary solid m-2" data-duration-in=".5" data-animation-in="fadeInUp"
                  data-delay-in=".5">Daftar Sekarang</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    @yield('content')

    <!-- Footer start -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 footer-widget">
            <h3 class="widget-title">Recent Posts</h3>
            <div class="latest-post-items media">
              <div class="latest-post-content media-body">
                <h4><a href="#">Bulgaria claims to find Europe's 'oldest town'</a></h4>
                <p class="post-meta">
                  <span class="author">Posted by John Doe</span>
                  <span class="post-meta-cat">in<a href="#"> Blog</a></span>
                </p>
              </div>
            </div><!-- 1st Latest Post end -->

            <div class="latest-post-items media">
              <div class="latest-post-content media-body">
                <h4><a href="#">Few Answers in Case of Murdered Law Professor</a></h4>
                <p class="post-meta">
                  <span class="date"><i class="icon icon-calendar"></i> Mar 15, 2015</span>
                  <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">03</a></span>
                </p>
              </div>
            </div><!-- 2nd Latest Post end -->

            <div class="latest-post-items media">
              <div class="latest-post-content media-body">
                <h4><a href="#">Over the year we have lots of experience in our field</a></h4>
                <p class="post-meta">
                  <span class="date"><i class="icon icon-calendar"></i> Apr 17, 2015</span>
                  <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">14</a></span>
                </p>
              </div>
            </div><!-- 3rd Latest Post end -->

          </div>
          <!--/ End Recent Posts-->

          <div class="col-md-6 col-sm-12 footer-widget footer-about-us">
            <h3 class="widget-title">About Craft</h3>
            <p>We are a awward winning multinational company. We believe in quality and standard worldwide.
            </p>
            <h4>Address</h4>
            <p>1102 Saint Marys, Junction City, KS</p>
            <div class="row">
              <div class="col-md-6">
                <h4>Email:</h4>
                <p>info@craftbd.com</p>
              </div>
              <div class="col-md-6">
                <h4>Phone No.</h4>
                <p>+(785) 238-4131</p>
              </div>
            </div>
            <form action="#" role="form">
              <div class="input-group subscribe">
                <input type="email" class="form-control" placeholder="Email Address" required="">
                <span class="input-group-addon">
                  <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
                </span>
              </div>
            </form>
          </div>
          <!--/ end about us -->

        </div><!-- Row end -->
      </div><!-- Container end -->
    </footer><!-- Footer end -->


    <!-- Copyright start -->
    <section id="copyright" class="copyright angle">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <ul class="footer-social unstyled">
              <li>
                <a title="Twitter" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
                </a>
                <a title="Facebook" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
                </a>
                <a title="Google+" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
                </a>
                <a title="linkedin" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
                </a>
                <a title="Pinterest" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
                </a>
                <a title="Skype" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
                </a>
                <a title="Dribble" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!--/ Row end -->
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="copyright-info">
              &copy; Copyright 2019 Themefisher. <span>Designed by <a
                  href="https://themefisher.com">Themefisher.com</a></span>
            </div>
          </div>
        </div>
        <!--/ Row end -->
        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
          <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
        </div>
      </div>
      <!--/ Container end -->
    </section>
    <!--/ Copyright end -->

  </div><!-- Body inner end -->

  <!-- jQuery -->
  <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
  <!-- Style Switcher -->
  <script type="text/javascript" src="{{ asset('plugins/style-switcher.js') }}"></script>
  <!-- Owl Carousel -->
  <script type="text/javascript" src="{{ asset('plugins/owl/owl.carousel.js') }}"></script>
  <!-- PrettyPhoto -->
  <script type="text/javascript" src="{{ asset('plugins/jquery.prettyPhoto.js') }}"></script>
  <!-- Bxslider -->
  <script type="text/javascript" src="{{ asset('plugins/flex-slider/jquery.flexslider.js') }}"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="{{ asset('plugins/slick/slick.min.js') }}"></script>
  <!-- Isotope -->
  <script type="text/javascript" src="{{ asset('plugins/isotope.js') }}"></script>
  <script type="text/javascript" src="{{ asset('plugins/ini.isotope.js') }}"></script>
  <!-- Wow Animation -->
  <script type="text/javascript" src="{{ asset('plugins/wow.min.js') }}"></script>
  <!-- Eeasing -->
  <script type="text/javascript" src="{{ asset('plugins/jquery.easing.1.3.js') }}"></script>
  <!-- Counter -->
  <script type="text/javascript" src="{{ asset('plugins/jquery.counterup.min.js') }}"></script>
  <!-- Waypoints -->
  <script type="text/javascript" src="{{ asset('plugins/waypoints.min.js') }}"></script>

  <script src="{{ asset('plugins/google-map/gmap.js') }}"></script>

  <!-- Main Script -->
  <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
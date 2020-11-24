<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Syahir Decoration - @yield('title')</title>

  <!-- FAVICON -->
  <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap-slider.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Owl Carousel -->
  <link href="{{ asset('plugins/slick-carousel/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="{{ asset('plugins/fancybox/jquery.fancybox.pack.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light navigation">
            <a class="navbar-brand" href="index.html">
              <img src="{{ asset('images/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto main-nav ">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link" href="/barang">Barang</a>
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto mt-10">
                @guest
                <li class="nav-item">
                  <a class="nav-link login-button" href="/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white add-button" href="/register">
                    Daftar</a>
                </li>
                @else

                <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Hai, {{Auth::user()->nama}}
                  </a>

                  <!-- Dropdown list -->
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/user/sewa">Daftar Sewa</a>
                    <a class="dropdown-item" href="/logout">Logout</a>
                  </div>
                </li>
                @endauth
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  @yield('content')

  <!--============================
=            Footer            =
=============================-->

  <footer class="footer section section-sm">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
          <!-- About -->
          <div class="block about">
            <!-- footer logo -->
            <img src="{{ asset('images/logo-footer.png') }}" alt="">
            <!-- description -->
            <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <!-- Link list -->
        <div class="col-lg-2 offset-lg-1 col-md-3">
          <div class="block">
            <h4>Site Pages</h4>
            <ul>
              <li><a href="#">Boston</a></li>
              <li><a href="#">How It works</a></li>
              <li><a href="#">Deals & Coupons</a></li>
              <li><a href="#">Articls & Tips</a></li>
              <li><a href="terms-condition.html">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
        <!-- Link list -->
        <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
          <div class="block">
            <h4>Admin Pages</h4>
            <ul>
              <li><a href="category.html">Category</a></li>
              <li><a href="single.html">Single Page</a></li>
              <li><a href="store.html">Store Single</a></li>
              <li><a href="single-blog.html">Single Post</a>
              </li>
              <li><a href="blog.html">Blog</a></li>



            </ul>
          </div>
        </div>
        <!-- Promotion -->
        <div class="col-lg-4 col-md-7">
          <!-- App promotion -->
          <div class="block-2 app-promotion">
            <div class="mobile d-flex">
              <a href="">
                <!-- Icon -->
                <img src="{{ asset('images/footer/phone-icon.png') }}" alt="mobile-icon">
              </a>
              <p>Get the Dealsy Mobile App and Save more</p>
            </div>
            <div class="download-btn d-flex my-3">
              <a href="#"><img src="{{ asset('images/apps/google-play-store.png') }}" class="img-fluid" alt=""></a>
              <a href="#" class=" ml-3"><img src="{{ asset('images/apps/apple-app-store.png') }}" class="img-fluid"
                  alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container End -->
  </footer>
  <!-- Footer Bottom -->
  <footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © <script>
                var CurrentYear = new Date().getFullYear()
            document.write(CurrentYear)
              </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com"
                target="_blank">themefisher.com</a></p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
            <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
            <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
            <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
            <li><a class="fa fa-vimeo" href=""></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
  </footer>

  <!-- JAVASCRIPTS -->
  <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap-slider.js') }}"></script>
  <!-- tether js -->
  <script src="{{ asset('plugins/tether/js/tether.min.js') }}"></script>
  <script src="{{ asset('plugins/raty/jquery.raty-fa.js') }}"></script>
  <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
  <script src="{{ asset('plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
  </script>
  <script src="{{ asset('plugins/google-map/gmap.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
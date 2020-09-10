
<!doctype html>
<html lang="en">
  <head>
    <title>Lazatto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="{{ url('asset/frontend/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ url('asset/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('asset/frontend/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ url('asset/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('asset/frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('asset/frontend/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('asset/frontend/css/aos.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@700&display=swap" rel="stylesheet">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ url('asset/frontend/css/style.css') }}">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
  
    <div class="site-wrap"  id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
        
      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="site-logo">
              <a href="#" class="text-black"><img src="{{ asset('asset/frontend/images/logo.png') }}" style="max-height: 70px;"></a>
            </div>
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="http://localhost:7777/l4z4tt0/public/" class="nav-link">Beranda</a></li>
                  <li><a href="http://localhost:7777/l4z4tt0/public/tentang-kami" class="nav-link">Mengenal Lebih Dekat</a></li>
                  <li><a href="http://localhost:7777/l4z4tt0/public/menu-lazatto" class="nav-link">Menu Lazatto</a></li>
                  <li><a href="#testimonials-section" class="nav-link">News & Update</a></li>
                  <li><a href="#blog-section" class="nav-link">Lokasi Outlet</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact Us</a></li>
                </ul>
              </nav>
            </div>
            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </header>
      
      @yield('content')

      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-8">
                  <h2 class="footer-heading mb-4"><img src="images/logo.png" style="max-height: 100px;"></h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                </div>
                <div class="col-md-4 ml-auto">
                  <h2 class="footer-heading mb-4">NAVIGATION</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Mengenal Lebih Dekat</a></li>
                    <li><a href="#">Menu Lazatto</a></li>
                    <li><a href="#">News & Update</a></li>
                    <li><a href="#">Lokasi Outlet</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="footer-heading mb-4">CONTACT</h2>
                  <h6>Head Office</h6>
                  <p>Jl. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  <p>Ph : +62 123 456</p>
                </div>
                <div class="col-md-6">
                  <h2 class="footer-heading mb-4">KEMITRAAN</h2>
                  <ul class="list-unstyled">
                    <li><b>SWAKELOLA</b></li>
                    <li><b>MUDHARABAH</b></li>
                    <li><b>MURABAHAH</b></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
              <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> Lazatto Chicken & Burger
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </small></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="{{ url('asset/frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('asset/frontend/js/popper.min.js') }}"></script>
    <script src="{{ url('asset/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('asset/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('asset/frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ url('asset/frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('asset/frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ url('asset/frontend/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ url('asset/frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ url('asset/frontend/js/aos.js') }}"></script>
    <script src="{{ url('asset/frontend/js/main.js') }}"></script>
    
  </body>
</html>
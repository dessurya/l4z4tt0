
<!doctype html>
<html lang="en">
  <head>
    <title>Lazatto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')

    <link rel="icon" type="image/png" href="{{ App\Http\Controllers\HomeController::getSiteIcon() }}" />
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
    <style>
      header .site-logo img{
        max-height: 110px;
      }

      .sticky-wrapper .site-navbar,
      .sticky-wrapper.is-sticky .site-navbar{
        box-shadow: 0px 6px 10px grey;
      }
      .sticky-wrapper.is-sticky .site-navbar ul li a,
      .site-navbar .site-navigation .site-menu > li > a{
        color: #522e34 !important;
      }

      .sticky-wrapper.is-sticky .site-navbar ul li a.active,
      .site-navbar .site-navigation .site-menu > li > a.active{
        font-weight: bolder;
        color: #3c0004 !important;
      }

      .color-one > *{
        color: #73654a !important;
      }
      .site-footer{
        padding: 2em 0;
      }
      .site-footer #componen{
        padding-top: 45px;
      }
      .site-footer *,
      .site-footer p,
      .site-footer a{
        color: black;
        margin-bottom: 0px;
      }
      .site-footer a{
        font-weight: bolder;
      }
      .site-footer a.active{
        color: #d4332b;
      }
      .site-footer .footer-heading{
        color: #48151a;
      }
      .site-footer ul li{
        margin-bottom: 0px;
      }

      .my-btn-red{
        color: white;
        border-radius: 11px;
        background-color:#EB2326;
        border: .6px solid rgba(0,0,0,0);
        transition: all .56s;
      }
      .my-btn-red:hover{
        background-color:rgba(255,255,255,.4);
        border: .6px solid #EB2326;
        color: #EB2326;
      }

      .my-btn-yellow{
        border: .6px solid rgba(0,0,0,0);
        border-radius: 11px;
        background-color:#fec907;
        color:#040700;
        transition: all .56s;
      }
      .my-btn-yellow:hover{
        background-color:rgba(255,255,255,.4);
        border: .6px solid #fec907;
        color: #fec907;
      }
      @media (min-width: 768px){
        .site-footer{
          padding: 2em 0;
        }
      }

      @media (max-width: 568px){
        .site-navbar,
        .sticky-wrapper .shrink{
          padding: 1em !important;
        }
        header .site-logo img{
          max-height: 85px;
        }

        .site-footer #componen .col-md-4{
          margin-bottom: 2em;
        }
      }
    </style>
    @stack('link')
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
        
      {{ App\Http\Controllers\HomeController::getHeader() }}
      @yield('content')
      {{ App\Http\Controllers\HomeController::getFooter() }}
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
    @stack('script')
  </body>
</html>
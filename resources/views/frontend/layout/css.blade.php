<link rel="icon" type="image/png" href="{{ App\Http\Controllers\HomeController::getSiteIcon() }}" />
<link rel="stylesheet" href="{{ url('asset/frontend/fonts/icomoon/style.css') }}">
<link rel="stylesheet" href="{{ url('asset/frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('asset/frontend/css/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ url('asset/frontend/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ url('asset/frontend/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ url('asset/frontend/fonts/flaticon/font/flaticon.css') }}">
<link rel="stylesheet" href="{{ url('asset/frontend/css/aos.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ url('asset/frontend/css/style.css') }}">
<style>
    body{
        font-family: 'Open Sans', sans-serif;
        color: #505050;
    }
    h1, h2, h3, h4, h5, h6{
        font-family: 'Open Sans', sans-serif;
        font-weight: 800;
    }

    .sticky-wrapper header{
        font-size: 10pt;
        font-family: 'Open Sans', sans-serif;
    }

    .sticky-wrapper header .site-logo img{
        transition: all .56s;
        max-height: 90px;
    }

    .sticky-wrapper.is-sticky header .site-logo img{
        max-height: 65px;
    }

    .sticky-wrapper .site-navbar{
        transition: all .56s;
        box-shadow: 0px 0px 0px rgba(0,0,0, 0);
    }
    .sticky-wrapper.is-sticky .site-navbar{
        box-shadow: 0px 3px 6px rgba(5,5,5, .8);
    }
    .sticky-wrapper.is-sticky .site-navbar ul li a,
    .site-navbar .site-navigation .site-menu > li > a{
        transition: all .56s;
        color: #522e34 !important;
    }
    .sticky-wrapper.is-sticky .site-navbar ul li a:hover,
    .site-navbar .site-navigation .site-menu > li > a:hover,
    .sticky-wrapper.is-sticky .site-navbar ul li a.active,
    .site-navbar .site-navigation .site-menu > li > a.active,
    .sticky-wrapper.is-sticky .site-navbar ul li a.active:hover,
    .site-navbar .site-navigation .site-menu > li > a.active:hover{
    color: #EB2326 !important;
        font-weight: 600;
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
    .site-footer a:hover,
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
        border: 3px solid rgba(0,0,0,0);
        transition: all .56s;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
    }
    .my-btn-red:hover{
        background-color:rgba(255,255,255,.4);
        border: 3px solid #ffc107;
        color: #ffc107;
    }

    .my-btn-green{
        color: white;
        border-radius: 11px;
        background-color:#3CA630;
        border: 3px solid rgba(0,0,0,0);
        transition: all .56s;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
    }
    .my-btn-green:hover{
        background-color:rgba(255,255,255,.4);
        border: 3px solid #3CA630;
        color: #3CA630;
    }

    .my-btn-yellow{
        border: 3px solid rgba(0,0,0,0);
        border-radius: 11px;
        background-color: #ffc107;
        color:#591019;
        transition: all .56s;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
    }
    .my-btn-yellow:hover{
        background-color:rgba(255,255,255,.4);
        border: 3px solid #ffc107;
        color: #ffc107;
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
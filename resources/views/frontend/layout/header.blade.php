<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
<div class="container">
    <div class="row align-items-center position-relative">
    <div class="site-logo">
        <a href="#" class="text-black"><img src="{{ $navigasi_logo }}"></a>
    </div>
    <div class="col-12">
        <nav class="site-navigation text-right ml-auto " role="navigation">
        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
            @foreach($site_menu as $row)
            <li><a href="{{ route($row->route) }}" class="nav-link {{ Route::is($row->route) ? 'active' : '' }}">{{strtoupper($row->name)}}</a></li>
            @endforeach
            <?php /*
            <li><a href="http://localhost:7777/l4z4tt0/public/" class="nav-link">Beranda</a></li>
            <li><a href="http://localhost:7777/l4z4tt0/public/tentang-kami" class="nav-link">Mengenal Lebih Dekat</a></li>
            <li><a href="http://localhost:7777/l4z4tt0/public/menu-lazatto" class="nav-link">Menu Lazatto</a></li>
            <li><a href="#testimonials-section" class="nav-link">News & Update</a></li>
            <li><a href="#blog-section" class="nav-link">Lokasi Outlet</a></li>
            <li><a href="#contact-section" class="nav-link">Contact Us</a></li>
            <li><a href="#contact-section" class="nav-link"></a></li> {{ $ashdiusahdsa }}
            */ ?>
        </ul>
        </nav>
    </div>
    <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
    </div>
</div>
</header>
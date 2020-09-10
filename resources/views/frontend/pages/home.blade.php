@extends('frontend.layout.web')

@section('content')

<!-- BANNER SLIDER -->
<div class="owl-carousel slide-one-item" id="banner">
    @foreach($items as $slider)
    <?php 
        $image = $slider->picture;
        $trimmed = str_replace('http://localhost:7777/l4z4tt0/public/', '', $image) ; 
    ?>
    <div class="site-section-cover img-bg-section" style="background-image: url('{{ asset($trimmed) }}'); " ></div>
    @endforeach
</div>
<!-- END BANNER SLIDER -->



<!-- MENU SECTION -->
@foreach($site_menu as $menu)
<div class="site-section bg-warning block-13" id="team-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <?php $menuData = $menu->config; ?>
                    <h2>{{ $menuData['menu_lazatto']['title'] }}</h2>
                    <hr>
                    <p class="mt-3">{!! $menuData['menu_lazatto']['decription'] !!}</p>
                </div>
            </div>
        </div>
        <div class="owl-carousel nonloop-block-13">
            <div>
                <div class="block-testimony-1 text-center">
                    <img src="{{ asset('asset/frontend/images/default_250x250.png') }}" width="250px" max-height="250px">
                </div>
            </div>
            <div>
                <div class="block-testimony-1 text-center">
                    <img src="{{ asset('asset/frontend/images/default_250x250.png') }}" width="250px" max-height="250px">
                </div>
            </div>
            <div>
                <div class="block-testimony-1 text-center">
                    <img src="{{ asset('asset/frontend/images/default_250x250.png') }}" width="250px" max-height="250px">
                </div>
            </div>
            <div>
                <div class="block-testimony-1 text-center">
                    <img src="{{ asset('asset/frontend/images/default_250x250.png') }}" width="250px" max-height="250px">
                </div>
            </div>
            <div>
                <div class="block-testimony-1 text-center">
                    <img src="{{ asset('asset/frontend/images/default_250x250.png') }}" width="250px" max-height="250px">
                </div>
            </div>
            <div>
                <div class="block-testimony-1 text-center">
                    <img src="{{ asset('asset/frontend/images/default_250x250.png') }}" width="250px" max-height="250px">
                </div>
            </div>
            
        </div>
        <div class="text-center mt-5">
            <a href="#" class="btn btn-lg text-white" style="border-radius: 11px;background-color:#EB2326">{{ $menuData['menu_lazatto']['title_link'] }}</a>
        </div>
    </div>
</div>
@endforeach
<!-- END MENU SECTION -->



<!-- ABOUT SECTION -->
@foreach($site_menu as $menu)
<section class="site-section bg-light" id="pricing-section">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-md-7">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <?php $menuData = $menu->config; ?>
                    <h2>{{ $menuData['tentang_kami']['title'] }}</h2>
                    <hr>
                    <p class="mt-3">{!! $menuData['tentang_kami']['decription'] !!}</p>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                <img src="{{ $menuData['tentang_kami']['picture'] }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                <p>{!! $menuData['menu_lazatto']['decription'] !!}</p>
                <a href="#" class="btn btn-lg text-white" style="border-radius: 11px;background-color:#EB2326">{{ $menuData['tentang_kami']['title_link'] }}</a>
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- END MENU SECTION -->



<!-- NEWS & UPDATE SECTION -->
<div class="site-section" style="background-color: #591019">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2 class="text-white">News & Update</h2>
                <hr>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                <div>
                    <a href="single.html" class="mb-4 d-block"><img src="{{ asset('asset/frontend/images/default_457x216.png') }}" alt="Image" class="img-fluid rounded"></a>
                    <h5><a href="single.html">Lorem Ipsum Dolor Sit Amet</a></h5>
                    <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">Diposting pada : 1 Juli 2020</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                    <p><a href="single.html">Read More</a></p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                <div>
                    <a href="single.html" class="mb-4 d-block"><img src="{{ asset('asset/frontend/images/default_457x216.png') }}" alt="Image" class="img-fluid rounded"></a>
                    <h5><a href="single.html">Lorem Ipsum Dolor Sit Amet</a></h5>
                    <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">Diposting pada : 1 Juli 2020</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                    <p><a href="single.html">Read More</a></p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                <div>
                    <a href="single.html" class="mb-4 d-block"><img src="{{ asset('asset/frontend/images/default_457x216.png') }}" alt="Image" class="img-fluid rounded"></a>
                    <h5><a href="single.html">Lorem Ipsum Dolor Sit Amet</a></h5>
                    <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">Diposting pada : 1 Juli 2020</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                    <p><a href="single.html">Read More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END NEWS & UPDATE SECTION -->



<!-- LOKASI SECTION -->
<div class="site-section bg-light" id="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Lokasi Outlet</h2>
                <hr>
            </div>
            </div>
        </div>
    </div>
    <div class="full-width-image">
        <img src="{{ asset('asset/frontend/images/home-page/map.png') }}" class="img-fluid mx-auto d-block">
    </div>
</div>
<!-- END LOKASI SECTION -->



<!-- KEMITRAAN SECTION -->
<div class="site-section" id="blog-section">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-md-7">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <h2>Informasi Kemitraan</h2>
                    <hr>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quae temporibus tenetur vitae iusto suscipit alias, laudantium, porro unde tempora.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                <img src="{{ asset('asset/frontend/images/swakelola.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-12 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                <img src="{{ asset('asset/frontend/images/mudharabah.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-12 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                <img src="{{ asset('asset/frontend/images/murabahah.png') }}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="#" class="btn btn-lg text-white" style="border-radius: 11px;background-color:#EB2326">Selengkapnya</a>
        </div>
    </div>
</div>
<!-- END KEMITRAAN SECTION -->
@endsection
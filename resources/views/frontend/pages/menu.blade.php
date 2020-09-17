@extends('frontend.layout.web')

@section('title')
- {{ $site_menu->name }}
@endsection

@push('meta')
<meta name="author" content="Lazatto Chicken & Burger">
<meta name="title" content="Lazatto Chicken & Burger - {{ $site_menu->name }}">
<meta name="description" content="Lazatto Chicken & Burger - {{ $site_menu->name }}">
<meta name="keywords" content="Lazatto Chicken & Burger - {{ $site_menu->name }}">
@endpush

@push('link')
<style>
    .block-testimony-1{
        padding: 10px;
    }
    #menu-section img.menu-promo{
        width: 100%;
        margin: 0 auto;
    }
    @media (max-width: 568px){
        #menu-section img.menu-promo{
            width: 80%;
        }
    }
</style>
@endpush

@push('script')
<script>
    $('.owl-carousel.menu-promo').owlCarousel({
        center: false,
        items: 1,
        loop: true,
        stagePadding: 0,
        margin: 0,
        smartSpeed: 1000,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1675,
        nav: false,
        dots: false,
        navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
        responsive: {
            600: {
                margin: 0,
                nav: false,
                items: 1
            },
            1000: {
                margin: 0,
                stagePadding: 0,
                nav: false,
                items: 1
            },
            1200: {
                margin: 0,
                stagePadding: 0,
                nav: false,
                items: 3
            }
        }
    });
</script>
@endpush

@section('content')
    @if($site_menu->config['banner']['show'] == 'true')
    <div class="owl-carousel slide-one-item">
        <div class="site-section-cover img-bg-section" style="background-image: url('{{ $site_menu->config['banner']['picture'] }}'); " ></div>
    </div>
    @endif


    <div class="site-section bg-light block-13" id="menu-section">

        @if($site_menu->config['promo']['show'] == 'true')
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <h2>{{ $site_menu->config['promo']['title'] }}</h2>
                        <hr>
                        <p class="mt-3">{!! $site_menu->config['promo']['decription'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="owl-carousel menu-promo">
            @foreach($Menus->where('menu','promo') as $menu)
                <div>
                    <div class="block-testimony-1 text-center">
                        <a href="{{ $menu->picture }}">
                            <img class="menu-promo" src="{{ $menu->picture }}" style="border-radius:11px">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        @endif

        <div class="container">
            @if($site_menu->config['reguler']['show'] == 'true')
            <div class="row mb-5 mt-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <h2>{{ $site_menu->config['reguler']['title'] }}</h2>
                        <hr>
                        <p class="mt-3">{!! $site_menu->config['reguler']['decription'] !!}</p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                @foreach($Menus->where('menu','reguler') as $menu)
                    <div class="col-md-3 mb-4 mb-5 col-lg-3" data-aos="fade-up" data-aos-delay="">
                        <img src="{{ $menu->picture }}" class="img-fluid" style="border-radius:11px">
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
@endsection
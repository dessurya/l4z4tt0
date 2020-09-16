@extends('frontend.layout.web')

<?php
// @push('meta')
// <meta name="author" content="Lazatto Chicken & Burger">
// <meta name="title" content="Lazatto Chicken & Burger - {{ $menudata['promo']['title'] }}">
// <meta name="description" content="Lazatto Chicken & Burger - {{ $menudata['promo']['title'] }}">
// <meta name="keywords" content="Lazatto Chicken & Burger - {{ $menudata['promo']['title'] }}">
// @endpush
?>

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
    @foreach($site_menu as $menu)
    <?php $menuData = $menu->config; ?>

    @if($menuData['banner']['show'] == 'true')
    <div class="owl-carousel slide-one-item">
        <div class="site-section-cover img-bg-section" style="background-image: url('{{ $menuData['banner']['picture'] }}'); " ></div>
    </div>
    @endif


    <div class="site-section bg-light block-13" id="menu-section">

        @if($menuData['promo']['show'] == 'true')
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <h2>{{ $menuData['promo']['title'] }}</h2>
                        <hr>
                        <p class="mt-3">{!! $menuData['promo']['decription'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="owl-carousel menu-promo">
            @foreach($items as $promo)
                @if($promo->menu == 'promo')
                <div>
                    <div class="block-testimony-1 text-center">
                        <a href="{{ $promo->picture }}">
                            <img class="menu-promo" src="{{ $promo->picture }}" style="border-radius:11px">
                        </a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
        @endif

        <div class="container">
            @if($menuData['reguler']['show'] == 'true')
            <div class="row mb-5 mt-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <h2>{{ $menuData['reguler']['title'] }}</h2>
                        <hr>
                        <p class="mt-3">{!! $menuData['reguler']['decription'] !!}</p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                @foreach($items as $reguler)
                    @if($reguler->menu == 'reguler')
                    <div class="col-md-3 mb-4 mb-5 col-lg-3" data-aos="fade-up" data-aos-delay="">
                        <img src="{{ $reguler->picture }}" class="img-fluid" style="border-radius:11px">
                    </div>
                    @endif
                @endforeach
            </div>
            @endif
        </div>
    </div>
    @endforeach
@endsection
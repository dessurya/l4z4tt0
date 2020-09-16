@extends('frontend.layout.web')

<?php
// @push('meta')
// <meta name="author" content="Lazatto Chicken & Burger">
// <meta name="title" content="Lazatto Chicken & Burger - {{ $menudata['profile']['title'] }}">
// <meta name="description" content="Lazatto Chicken & Burger - {{ $menudata['profile']['title'] }}">
// <meta name="keywords" content="Lazatto Chicken & Burger - {{ $menudata['profile']['title'] }}">
// @endpush
?>

@section('content')
    @foreach($site_menu as $menu)
    <?php $menuData = $menu->config; ?>

    @if($menuData['banner']['show'] == 'true')
    <div class="owl-carousel slide-one-item">
        <div class="site-section-cover img-bg-section" style="background-image: url('{{ $menuData['banner']['picture'] }}'); " ></div>
    </div>
    @endif

    @if($menuData['profile']['show'] == 'true')    
    <section class="site-section" id="pricing-section" style="background-color: #F8F8F8">
        <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-md-7">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <h2>{{ $menuData['profile']['title'] }}</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                <img src="{{ $menuData['profile']['picture'] }}" class="img-fluid" style="border-radius:11px">
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                <p>{!! $menuData['profile']['decription'] !!}</p>
            </div>
        </div>
    </section>
    @endif

    @if($menuData['sejarah']['show'] == 'true')
    <div class="site-section bg-warning" id="blog-section">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-md-7">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <h2>{{ $menuData['sejarah']['title'] }}</h2>
                    <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                    <img src="{{ $menuData['sejarah']['picture'] }}" class="img-fluid" style="border-radius:11px">
                </div>
            </div>
            <div class="text-center">
                <p>{!! $menuData['profile']['decription'] !!}</p>
            </div>
        </div>
    </div>
    @endif

    @if($menuData['visi_misi']['show'] == 'true')
    <div class="site-section">
        <div class="block__73694 mb-2" id="services-section">
            <div class="mb-5 justify-content-center text-center">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <h2>{{ $menuData['visi_misi']['title'] }}</h2>
                    <hr>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex no-gutters align-items-stretch justify-content-center mb-5">
                    <div class="col-12 col-lg-6 block__73422" style="background-image: url('{{ $menuData['visi_misi']['visi_picture']  }}');border-radius:11px;" data-aos="fade-right" data-aos-delay="">
                    </div>
                    <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
                        <h2 class="mb-3 text-black">Visi</h2>
                        <p>{!! $menuData['visi_misi']['visi_content'] !!}</p>
                    </div>
                </div>
            </div>      
        </div>
        <div class="block__73694">
            <div class="container">
                <div class="row d-flex no-gutters align-items-stretch">
                    <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('{{ $menuData['visi_misi']['misi_picture'] }}');border-radius:11px;" data-aos="fade-left" data-aos-delay="">
                    </div>
                    <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
                        <h2 class="mb-3 text-black">Misi</h2>
                        <p>{!! $menuData['visi_misi']['misi_content'] !!}</p>
                    </div>
                </div>
            </div>      
        </div>
    </div>
    @endif

    @endforeach
@endsection
@extends('frontend.layout.web')

<?php
// @push('meta')
// <meta name="author" content="Lazatto Chicken & Burger">
// <meta name="title" content="Lazatto Chicken & Burger - {{ $menudata['profile']['title'] }}">
// <meta name="description" content="Lazatto Chicken & Burger - {{ $menudata['profile']['title'] }}">
// <meta name="keywords" content="Lazatto Chicken & Burger - {{ $menudata['profile']['title'] }}">
// @endpush
?>

@push('link')
<script src="https://kit.fontawesome.com/e9ed70db8d.js" crossorigin="anonymous"></script>
@endpush

@section('content')
  @foreach($site_menu as $menu)
  <?php $menuData = $menu->config; ?>

    @if($menuData['banner']['show'] == 'true')
    <div class="owl-carousel slide-one-item">
        <div class="site-section-cover img-bg-section" style="background-image: url('{{ $menuData['banner']['picture'] }}'); " ></div>
    </div>
    @endif

    @if($menuData['form']['show'] == 'true')    
    <section class="site-section shadow" id="pricing-section" style="background-color: #F8F8F8">
        <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-md-7">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <h2>{{ $menuData['form']['title'] }}</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                <img src="{{ $menuData['form']['picture'] }}" class="img-fluid" style="border-radius:11px;max-height: 150px;">
                <p class="text-center">{!! $menuData['form']['decription'] !!}</p>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                <form method="POST" action="#">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control border border-dark" name="name" placeholder="Name" style="border-radius: 11px;">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border border-dark" name="email" placeholder="Email" style="border-radius: 11px;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control border border-dark" name="email" placeholder="Subject" style="border-radius: 11px;">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control border border-dark" rows="5" name="message" placeholder="Your Message" style="border-radius: 11px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-md my-btn-red">Submit</button>
                </form>
            </div>
        </div>
    </section>
    @endif

    @if($menuData['kemitraan']['show'] == 'true')
    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>{{ $menuData['kemitraan']['title'] }}</h2>
              <hr>
              <p class="mt-3">{!! $menuData['kemitraan']['decription'] !!}</p>
            </div>
          </div>
        </div>

        @foreach($items as $item)
        <div class="row justify-content-center mb-5">
          <div class="card" style="max-width: 50rem;border: 3px solid #F3C928; border-radius: 11px">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <img src="{{ $item->picture }}" style="max-height: 110px">
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                  <h5 class="card-title text-uppercase text-dark">{{ $item->name }}</h5>
                  <p class="card-text">{!! $item->content !!}</p>
                  <a href="#" class="btn my-btn-green"><i class="fab fa-whatsapp"></i> WhatsApp Chat</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endif
  @endforeach
@endsection
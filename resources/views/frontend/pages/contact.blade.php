@extends('frontend.layout.web')

@section('title')
- {{ $site_menu->name }}
@endsection

@push('meta')
<meta name="author" content="{{ App\Http\Controllers\HomeController::getSiteConfig()->name }}">
<meta name="title" content="{{ App\Http\Controllers\HomeController::getSiteConfig()->name }} - {{ $site_menu->name }}">
<meta name="description" content="{{ App\Http\Controllers\HomeController::getSiteConfig()->name }} - {{ $site_menu->name }}">
<meta name="keywords" content="{{ App\Http\Controllers\HomeController::getSiteConfig()->name }} - {{ $site_menu->name }}">
@endpush

@push('link')
<script src="https://kit.fontawesome.com/e9ed70db8d.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    @if($site_menu->config['banner']['show'] == 'true')
    <div class="owl-carousel slide-one-item">
        <div class="site-section-cover img-bg-section" style="background-image: url('{{ $site_menu->config['banner']['picture'] }}'); " ></div>
    </div>
    @endif

    @if($site_menu->config['form']['show'] == 'true')    
    <section class="site-section shadow" id="pricing-section" style="background-color: #F8F8F8">
        <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-md-7">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <h2>{{ $site_menu->config['form']['title'] }}</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                <img src="{{ $site_menu->config['form']['picture'] }}" class="img-fluid" style="border-radius:11px;max-height: 150px;">
                <p class="text-center">{!! $site_menu->config['form']['decription'] !!}</p>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                <form method="POST" action="{{ route('contact.inbox.add') }}">
                    @csrf
                    <div class="form-group">
                        <input required type="text" class="form-control border border-dark" name="name" placeholder="Name" style="border-radius: 11px;">
                    </div>
                    <div class="form-group">
                        <input required type="email" class="form-control border border-dark" name="email" placeholder="Email" style="border-radius: 11px;">
                    </div>
                    <div class="form-group">
                        <input required type="text" class="form-control border border-dark" name="subject" placeholder="Subject" style="border-radius: 11px;">
                    </div>
                    <div class="form-group">
                        <textarea required class="form-control border border-dark" rows="5" name="message" placeholder="Your Message" style="border-radius: 11px;"></textarea>
                    </div>
                    @if(Session::has('info'))
                    <p class="alert alert-info">{{ Session::get('info') }}</p>
                    @endif
                    <button type="submit" class="btn btn-md my-btn-red">Submit</button>
                </form>
            </div>
        </div>
    </section>
    @endif

    @if($site_menu->config['kemitraan']['show'] == 'true')
    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>{{ $site_menu->config['kemitraan']['title'] }}</h2>
              <hr>
              <p class="mt-3">{!! $site_menu->config['kemitraan']['decription'] !!}</p>
            </div>
          </div>
        </div>

        @foreach($items as $item)
        <div id="{{ Str::slug($item->name) }}" class="row justify-content-center mb-5">
          <div class="card" style="max-width: 50rem;border: 3px solid #F3C928; border-radius: 11px">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <img src="{{ $item->picture }}" style="max-height: 110px">
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                  <h5 class="card-title text-uppercase text-dark">{{ $item->name }}</h5>
                  <p class="card-text">{!! $item->content !!}</p>
                  <a href="https://api.whatsapp.com/send?phone={{ App\Http\Controllers\HomeController::getSiteConfig()->config['wa_no'] }}&text=Hallo%20{{ App\Http\Controllers\HomeController::getSiteConfig()->name }}%20saya%20tertarik%20dengan%20program%20anda%20mohon%20berikan%20info%20lebih%20lanjut." target="_blank" class="btn my-btn-green"><i class="fab fa-whatsapp"></i> WhatsApp Chat</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endif
@endsection
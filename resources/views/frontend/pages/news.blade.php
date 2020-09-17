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
<style>
  h5, p{
    color: #000000;
  }
  a:hover h5{
    color: #D7302C;
  }
  a:hover p{
    color: #D7302C;
  }
</style>
@endpush

@section('content')
    @foreach($site_menu as $menu)
    <?php $menuData = $menu->config; ?>

    @if($menuData['banner']['show'] == 'true')
    <div class="owl-carousel slide-one-item">
        <div class="site-section-cover img-bg-section" style="background-image: url('{{ $menuData['banner']['picture'] }}'); " ></div>
    </div>
    @endif

    @if($menuData['news']['show'] == 'true')
      <div class="site-section bg-light">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mb-5">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>{{ $menuData['news']['title'] }}</h2>
                <hr>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach($items as $item)
              @if($item->flag_show == 'Y')
                <div class="col-md-4 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="">
                  <div>
                      <img src="{{ $item->picture }}" alt="Image" class="img-fluid rounded">
                      <a href="{{ route('news.read', $item->slug) }}">
                        <h5>{{ $item->name }}</h5>
                        <p class="mb-3 text-uppercase small"><span class="mr-2">Diposting pada : <?php echo date('d F Y', strtotime($item->created_at)); ?></span></p> 
                        <p>{!! $item->introduction !!}</p>
                      </a>
                  </div>
                </div>
              @endif
            @endforeach
          </div>
          <div class="row justify-content-center">
            {{ $items->links() }}
          </div>
        </div>
      </div>
    @endif
    @endforeach
@endsection
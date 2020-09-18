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
  h5, p{
    transition: .52s all;
    color: #000000;
  }
  a:hover h5{
    color: #D7302C;
  }
  .site-section img{
        width: 100%;
        height: 220px;
        border-radius: 12px;
    }
</style>
@endpush

@section('content')
    @if($site_menu->config['banner']['show'] == 'true')
    <div class="owl-carousel slide-one-item">
        <div class="site-section-cover img-bg-section" style="background-image: url('{{ $site_menu->config['banner']['picture'] }}'); " ></div>
    </div>
    @endif

    @if($site_menu->config['news']['show'] == 'true')
      <div class="site-section bg-light">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mb-5">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>{{ $site_menu->config['news']['title'] }}</h2>
                <hr>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach($items as $item)
              @if($item->flag_show == 'Y')
                <div class="col-md-4 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="">
                  <div>
                      <img src="{{ $item->picture }}" alt="Image" class="mb-3">
                      <a href="{{ route('news.read', $item->slug) }}">
                        <h5>{{ $item->name }}</h5>
                      </a>
                      <p class="mb-3 text-uppercase small"><span class="mr-2">Diposting pada : <?php echo date('d F Y', strtotime($item->created_at)); ?></span></p> 
                      <p class="text-justify">{!! Str::words(strip_tags($item->introduction), 20, '...') !!}</p>
                      <p><a href="{{ route('news.read',['slug'=>$item->slug]) }}">Read More</a></p>
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
@endsection
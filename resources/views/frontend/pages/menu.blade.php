@extends('frontend.layout.web')

@section('content')
    @foreach($site_menu as $menu)
    <?php $menuData = $menu->config; ?>

    @if($menuData['banner']['show'] == 'true')
    <div class="owl-carousel slide-one-item">
        <div class="site-section-cover img-bg-section" style="background-image: url('{{ $menuData['banner']['picture'] }}'); " ></div>
    </div>
    @endif


    <div class="site-section bg-light block-13" id="team-section">
        <div class="container">

            @if($menuData['promo']['show'] == 'true')
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <h2>{{ $menuData['promo']['title'] }}</h2>
                        <hr>
                        <p class="mt-3">{!! $menuData['promo']['decription'] !!}</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel nonloop-block-13">
                @foreach($items as $promo)
                    @if($promo->menu == 'promo')
                    <div>
                        <div class="block-testimony-1 text-center">
                            <a href="{{ $promo->picture }}">
                                <img src="{{ $promo->picture }}" width="250px" height="350px" style="border-radius:11px">
                            </a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            @endif

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
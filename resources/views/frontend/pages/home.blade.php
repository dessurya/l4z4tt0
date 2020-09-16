@extends('frontend.layout.web')

@push('link')
<style>
    .site-section-cover, .site-section-cover .container > .row{
        min-height: 530px;
    }
    .slide-one-item .img-bg-section .title h2{
        color: black;
        font-size: 35pt;
    }
    .slide-one-item .img-bg-section .title{
        margin-bottom: 2em;
    }
    .slide-one-item .img-bg-section .btn{
        min-width: 160px;
    }

    #kemitraan-section .link h3 a{
        color: #000403;
        background-color: #fec907;
        padding: .3em 1.6em;
        border-radius: 12px;
        box-shadow: 0px 8px 8px rgba(215,215,215,.8);
        transition: all .56s;
    }
    #kemitraan-section .link h3 a:hover{
        box-shadow: 0px 0px 0px rgba(215,215,215,.8);
        background-color:rgba(255,255,255,.4);
        border: .6px solid #ffc107;
        color: #ffc107;
    }
    #news-section img{
        width: 100%;
        height: 220px;
        border-radius: 12px;
    }
    #location-section img{
        width: 100%;
    }
</style>
@endpush

@push('meta')
<meta name="author" content="Lazatto Chicken & Burger">
<meta name="title" content="Lazatto Chicken & Burger">
<meta name="description" content="Lazatto Chicken & Burger">
<meta name="keywords" content="Lazatto Chicken & Burger">
@endpush

@section('content')
    <?php /* BANNER SLIDER */ ?>
    @if($menuData['slider']['show'] == 'true')
        <div class="owl-carousel slide-one-item" id="banner">
            @foreach($items as $slider)
                <div class="site-section-cover img-bg-section" style="background-image: url('{{ $slider->picture }}'); " >
                    <div class="container pt-5">
                        <div class="pt-5" style="width:70%;">
                            @if($slider->flag_name == 'Y') 
                            <div class="title">
                                <h2>{{ $slider->name }}</h2>
                            </div> 
                            @endif
                            @if($slider->flag_button == 'Y')
                            <div class="btn">
                                <a href="{{ $slider->button_url }}" target="_blank" class="btn btn-lg my-btn-red">{{ $slider->button_title }}</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    <?php /* END BANNER SLIDER */ ?>



    <?php /* MENU SECTION */ ?>
    @if($menuData['menu_lazatto']['show'] == 'true')
        <div class="site-section bg-warning block-13" id="team-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2>{{ $menuData['menu_lazatto']['title'] }}</h2>
                            <hr>
                            <div class="mt-3 color-one">{!! $menuData['menu_lazatto']['decription'] !!}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel nonloop-block-13" data-aos="fade-up" data-aos-delay="">
                @foreach($menu_reguler as $menu_reguler)
                <div>
                    <div class="block-testimony-1 text-center">
                        <img src="{{ $menu_reguler->picture }}" style="border-radius:11px">
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('menu') }}" class="btn btn-lg my-btn-red">{{ $menuData['menu_lazatto']['title_link'] }}</a>
            </div>
        </div>
    @endif
    <?php /* END MENU SECTION */ ?>



    <?php /* ABOUT SECTION */ ?>
    @if($menuData['tentang_kami']['show'] == 'true')
        <section class="site-section bg-light" id="pricing-section">
            <div class="container">
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2>{{ $menuData['tentang_kami']['title'] }}</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                        <img src="{{ $menuData['tentang_kami']['picture'] }}" class="img-fluid" style="border-radius:11px">
                    </div>
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-6 color-one" data-aos="fade-up" data-aos-delay="">
                        <div>{!! $menuData['tentang_kami']['decription'] !!}</div>
                        <div class="text-center">
                            <a href="{{ route('tentang_kami') }}" class="btn btn-md my-btn-red">{{ $menuData['tentang_kami']['title_link'] }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <?php /* END MENU SECTION */ ?>



    <?php /* NEWS & UPDATE SECTION */ ?>
    @if($menuData['news']['show'] == 'true')
        <div id="news-section" class="site-section" style="background-color: #591019; color: white;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <h2 class="text-white">{{ $menuData['news']['title'] }}</h2>
                        <hr style="background: white;">
                    </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($news as $row)
                    <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                        <div>
                            <a href="{{ route('news.read',['slug'=>$row->slug]) }}" class="mb-4 d-block">
                                <img src="{{ $row->picture }}" alt="Image">
                            </a>
                            <h5><a class="text-white" href="{{ route('news.read',['slug'=>$row->slug]) }}">{{ $row->name }}</a></h5>
                            <p class="text-muted mb-3 text-uppercase small"><span class="mr-2 text-white">Diposting pada : {{ date('d F Y H:i' ,strtotime($row->created_at)) }}</span></p>
                            <p>{!! Str::words(strip_tags($row->introduction), 20, '...') !!}</p>
                            <p><a href="{{ route('news.read',['slug'=>$row->slug]) }}">Read More</a></p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="text-center mt-5">
                    <a href="{{ route('news') }}" class="btn btn-lg my-btn-yellow">{{ $menuData['news']['title_link'] }}</a>
                </div>
            </div>
        </div>
    @endif
    <?php /* END NEWS & UPDATE SECTION */ ?>



    <?php /* LOKASI SECTION */ ?>
    @if($menuData['location']['show'] == 'true')
        <div class="site-section bg-light" id="location-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <h2>{{ $menuData['location']['title'] }}</h2>
                        <hr>
                    </div>
                    </div>
                </div>
            </div>
            <div class="full-width-image">
                <img src="{{ $menuData['location']['picture'] }}" class="d-block">
            </div>
        </div>
    @endif
    <?php /* END LOKASI SECTION */ ?>



    <?php /* KEMITRAAN SECTION */ ?>
    @if($menuData['kemitraan']['show'] == 'true')
        <div class="site-section" id="kemitraan-section">
            <div class="container">
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2>{{ $menuData['kemitraan']['title'] }}</h2>
                            <hr>
                            <div class="mt-3 color-one">
                                {!! $menuData['kemitraan']['decription'] !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php /*
                        <div class="col-md-12 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                            <img src="{{ asset('asset/frontend/images/swakelola.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-12 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                            <img src="{{ asset('asset/frontend/images/mudharabah.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-12 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                            <img src="{{ asset('asset/frontend/images/murabahah.png') }}" class="img-fluid" alt="">
                        </div>
                    */ ?>

                    @foreach($Kemitraan as $row)
                    <div class="col-md-12 col-lg-4 text-center mb-5 link" data-aos="fade-up" data-aos-delay="">
                        <h3>
                            <a href="{{ Route::is('contact') ? '#'.Str::slug($row->name) : route('contact').'#'.Str::slug($row->name) }}">
                            {{ $row->name }}
                            </a>
                        </h3>
                    </div>
                    @endforeach
                </div>
                <div class="text-center mt-5">
                    <a href="{{ route('contact') }}" class="btn btn-lg my-btn-red">{{ $menuData['kemitraan']['title_link'] }}</a>
                </div>
            </div>
        </div>
    @endif
    <?php /* END KEMITRAAN SECTION */ ?>
@endsection
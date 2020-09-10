@extends('frontend.layout.web')

@section('content')
    <?php /* BANNER SLIDER */ ?>
    @if($menuData['slider']['show'] == 'true')
        <div class="owl-carousel slide-one-item" id="banner">
            @foreach($items as $slider)
                <div class="site-section-cover img-bg-section" style="background-image: url('{{ $slider->picture }}'); " >
                <?php
                    // tambah kan section titile dan button 
                    // contoh
                    // @if($slider->flag_name == 'Y') <div class="title">{{ $slider->name }}</div> @endif
                    // @if($slider->flag_button == 'Y')
                    // <div class="btn">
                    //     <a href="{{ $slider->button_url }}" target="_blank">{{ $slider->button_title }}</a>
                    // </div>
                    // @endif
                ?>
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
                            <div class="mt-3">{!! $menuData['menu_lazatto']['decription'] !!}</div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel nonloop-block-13">
                    @foreach($menu_reguler as $menu_reguler)
                    <div>
                        <div class="block-testimony-1 text-center">
                            <img src="{{ $menu_reguler->picture }}" style="border-radius:11px">
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-lg text-white" style="border-radius: 11px;background-color:#EB2326">{{ $menuData['menu_lazatto']['title_link'] }}</a>
                </div>
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
                            <div class="mt-3">{!! $menuData['tentang_kami']['decription'] !!}</div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                        <img src="{{ $menuData['tentang_kami']['picture'] }}" class="img-fluid" style="border-radius:11px">
                    </div>
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                        <p>{!! $menuData['menu_lazatto']['decription'] !!}</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-md text-white" style="border-radius: 11px;background-color:#EB2326">{{ $menuData['tentang_kami']['title_link'] }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <?php /* END MENU SECTION */ ?>



    <?php /* NEWS & UPDATE SECTION */ ?>
    @if($menuData['news']['show'] == 'true')
        <div class="site-section" style="background-color: #591019">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <h2 class="text-white">{{ $menuData['news']['title'] }}</h2>
                        <hr>
                    </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($news as $row)
                    <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                        <div>
                            <a href="{{ route('news.read',['slug'=>$row->slug]) }}" class="mb-4 d-block">
                                <img src="{{ $row->picture }}" alt="Image" class="img-fluid rounded">
                            </a>
                            <h5><a href="{{ route('news.read',['slug'=>$row->slug]) }}">{{ $row->name }}</a></h5>
                            <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">Diposting pada : {{ $row->created_at }}</span></p>
                            <p>{!! Str::words(strip_tags($row->introduction), 20, '...') !!}</p>
                            <p><a href="{{ route('news.read',['slug'=>$row->slug]) }}">Read More</a></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <?php /* END NEWS & UPDATE SECTION */ ?>



    <?php /* LOKASI SECTION */ ?>
    @if($menuData['location']['show'] == 'true')
        <div class="site-section bg-light" id="blog-section">
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
                <img src="{{ $menuData['location']['picture'] }}" class="img-fluid mx-auto d-block">
            </div>
        </div>
    @endif
    <?php /* END LOKASI SECTION */ ?>



    <?php /* KEMITRAAN SECTION */ ?>
    @if($menuData['kemitraan']['show'] == 'true')
        <div class="site-section" id="blog-section">
            <div class="container">
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2>{{ $menuData['kemitraan']['title'] }}</h2>
                            <hr>
                            <div class="mt-3">
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
                    <div class="col-md-12 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                        <h3>{{ $row->name }}</h3>
                    </div>
                    @endforeach
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-lg text-white" style="border-radius: 11px;background-color:#EB2326">Selengkapnya</a>
                </div>
            </div>
        </div>
    @endif
    <?php /* END KEMITRAAN SECTION */ ?>
@endsection
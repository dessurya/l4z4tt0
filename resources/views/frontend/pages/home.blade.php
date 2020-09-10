@extends('frontend.layout.web')

@section('content')
    @foreach($site_menu as $menu)
    @php $menuData = $menu->config; @endphp

        <!-- BANNER SLIDER -->
        @if($menuData['slider']['show'] == 'true')
            <div class="owl-carousel slide-one-item" id="banner">
                @foreach($items->take($menuData['slider']['max_item']) as $slider)
                    <div class="site-section-cover img-bg-section" style="background-image: url('{{ $slider->picture }}'); " >
                    <?php
                        // tambah kan section titile dan button 
                        // contoh
                        // @if($slider->flag_name == 'Y') <div class="title">{{ $slider->name }}</div> @endif
                        // @if($slider->flag_button == 'Y')
                        // <div class="btn">
                        //     <a href="{{ $slider->button_url }}">{{ $slider->button_title }}</a>
                        // </div>
                        // @endif
                    ?>
                    </div>
                @endforeach
            </div>
        @endif
        <!-- END BANNER SLIDER -->



        <!-- MENU SECTION -->
        @if($menuData['menu_lazatto']['show'] == 'true')
            @foreach($site_menu as $menu)
                <div class="site-section bg-warning block-13" id="team-section">
                    <div class="container">
                        <div class="row mb-5 justify-content-center">
                            <div class="col-md-7 text-center">
                                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                                    <?php $menuData = $menu->config; ?>
                                    <h2>{{ $menuData['menu_lazatto']['title'] }}</h2>
                                    <hr>
                                    <p class="mt-3">{!! $menuData['menu_lazatto']['decription'] !!}</p>
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
            @endforeach
        @endif
        <!-- END MENU SECTION -->



        <!-- ABOUT SECTION -->
        @if($menuData['tentang_kami']['show'] == 'true')
            @foreach($site_menu as $menu)
                <section class="site-section bg-light" id="pricing-section">
                    <div class="container">
                        <div class="row mb-5 justify-content-center text-center">
                            <div class="col-md-7">
                                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                                    <?php $menuData = $menu->config; ?>
                                    <h2>{{ $menuData['tentang_kami']['title'] }}</h2>
                                    <hr>
                                    <p class="mt-3">{!! $menuData['tentang_kami']['decription'] !!}</p>
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
            @endforeach
        @endif
        <!-- END MENU SECTION -->



        <!-- NEWS & UPDATE SECTION -->
        @if($menuData['news']['show'] == 'true')
            <div class="site-section" style="background-color: #591019">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2 class="text-white">News & Update</h2>
                            <hr>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                            <div>
                                <a href="single.html" class="mb-4 d-block"><img src="{{ asset('asset/frontend/images/default_457x216.png') }}" alt="Image" class="img-fluid rounded"></a>
                                <h5><a href="single.html">Lorem Ipsum Dolor Sit Amet</a></h5>
                                <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">Diposting pada : 1 Juli 2020</span></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                                <p><a href="single.html">Read More</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                            <div>
                                <a href="single.html" class="mb-4 d-block"><img src="{{ asset('asset/frontend/images/default_457x216.png') }}" alt="Image" class="img-fluid rounded"></a>
                                <h5><a href="single.html">Lorem Ipsum Dolor Sit Amet</a></h5>
                                <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">Diposting pada : 1 Juli 2020</span></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                                <p><a href="single.html">Read More</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                            <div>
                                <a href="single.html" class="mb-4 d-block"><img src="{{ asset('asset/frontend/images/default_457x216.png') }}" alt="Image" class="img-fluid rounded"></a>
                                <h5><a href="single.html">Lorem Ipsum Dolor Sit Amet</a></h5>
                                <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">Diposting pada : 1 Juli 2020</span></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                                <p><a href="single.html">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <!-- END NEWS & UPDATE SECTION -->



        <!-- LOKASI SECTION -->
        @if($menuData['location']['show'] == 'true')
            <div class="site-section bg-light" id="blog-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2>Lokasi Outlet</h2>
                            <hr>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="full-width-image">
                    <img src="{{ asset('asset/frontend/images/home-page/map.png') }}" class="img-fluid mx-auto d-block">
                </div>
            </div>
        @endif
        <!-- END LOKASI SECTION -->



        <!-- KEMITRAAN SECTION -->
        @if($menuData['kemitraan']['show'] == 'true')
            <div class="site-section" id="blog-section">
                <div class="container">
                    <div class="row mb-5 justify-content-center text-center">
                        <div class="col-md-7">
                            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                                <h2>Informasi Kemitraan</h2>
                                <hr>
                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quae temporibus tenetur vitae iusto suscipit alias, laudantium, porro unde tempora.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                            <img src="{{ asset('asset/frontend/images/swakelola.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-12 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                            <img src="{{ asset('asset/frontend/images/mudharabah.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-12 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                            <img src="{{ asset('asset/frontend/images/murabahah.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-lg text-white" style="border-radius: 11px;background-color:#EB2326">Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endif
        <!-- END KEMITRAAN SECTION -->
    @endforeach
@endsection
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
<style>
    #location-section img{
        width: 100%;
    }
    .collapsible {
        background-color: #FFC107;
        color: #000000;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 32px;
        font-weight: bold;
        border-radius: 11px;
    }
    #location-section h6{
        color: #000000;
    }
    button:focus{
        outline: none;
    }

    .content {
        margin-top:-15px;
        padding: 15px 18px;
        overflow: hidden;
        height: 0;
        transition:all .52s;
        background-color: rgba(255,255,255,0);
    }

    .colorBackGround{
        background-color: #F8F9FA;
        height: 100%;
    }
</style>
<script src="https://kit.fontawesome.com/e9ed70db8d.js" crossorigin="anonymous"></script>
@endpush

@section('content')
        @if($site_menu->config['maps']['show'] == 'true')
            <div class="site-section bg-light" id="location-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                                <h2>{{ $site_menu->config['maps']['title'] }}</h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="full-width-image">
                    <img src="{{ $site_menu->config['maps']['picture'] }}" class="d-block">
                </div>
            </div>
        @endif
        <div class="site-section" id="location-section">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($items as $item)
                        <div class="city-collapse mb-4" style="width: 100%">
                            <button type="button" class="collapsible">
                                <table style="width:100%">
                                    <tr>
                                        <td class="align-middle">
                                            {{ $item->city }}
                                        </td>
                                        <td class="align-middle text-right">
                                            <i class="fas fa-map-marker-alt fa-1x float-right" style="color:#ED4A3B"></i>
                                        </td>
                                    </tr>
                                </table>
                            </button>
                            <div class="content">
                                <div class="row">
                                    @foreach($item->collapseLocation as $outlet)
                                            <div class="col-lg-3 mt-3">
                                                <h6 class="font-weight-bold">{{ $outlet->name }}</h6>
                                                <div>{!! $outlet->address !!}</div>
                                            </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection

@push('script')
<script>
    $(document).on('click', '.collapsible', function () {
       $(this).next().toggleClass('colorBackGround');
    });
    // var coll = document.getElementsByClassName("collapsible");
    // var i;

    // for (i = 0; i < coll.length; i++) {
    // coll[i].addEventListener("click", function() {
    //     this.classList.toggle("active");
    //     var content = this.nextElementSibling;
    //     content.toggle();
    //     // if (content.style.display === "block") {
    //     // content.style.display = "none";
    //     // } else {
    //     // content.style.display = "block";
    //     // }
    // });
    // }
</script>
@endpush
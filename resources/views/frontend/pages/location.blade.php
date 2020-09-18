@extends('frontend.layout.web')

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

    .content {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #F8F9FA;
    }
</style>
<script src="https://kit.fontawesome.com/e9ed70db8d.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    @foreach($site_menu as $menu)
        <?php $menuData = $menu->config; ?>
        @if($menuData['maps']['show'] == 'true')
            <div class="site-section bg-light" id="location-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                                <h2>{{ $menuData['maps']['title'] }}</h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="full-width-image">
                    <img src="{{ $menuData['maps']['picture'] }}" class="d-block">
                </div>
            </div>
        @endif
        <div class="site-section" id="location-section">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($items as $item)
                        <div class="city-collapse mb-4" style="width: 100%">
                            <button type="button" class="collapsible">
                                {{ $item->city }}
                                <i class="fas fa-map-marker-alt fa-1x float-right" style="color:#ED4A3B"></i>
                            </button>
                            <div class="content">
                                <div class="row">
                                    @foreach($item->collapseLocation as $outlet)
                                        @if($outlet->flag_show == 'Y')
                                            <div class="col-lg-3 mt-3">
                                                <h6 class="font-weight-bold">{{ $outlet->name }}</h6>
                                                <p>{!! $outlet->address !!}</p>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
@endsection

@push('script')
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
        content.style.display = "none";
        } else {
        content.style.display = "block";
        }
    });
    }
</script>
@endpush
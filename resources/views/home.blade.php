@extends('layouts.app')

@section('title', 'Restaurants | '.config('app.name'))

@section('extra-css')
    @if(auth()->user() && auth()->user()->favorites->first())
        <!-- Tiny-Slider -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    @endif
    @if(!Session::has('address'))
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css"/>
    <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
    @endif
@endsection

@section('content')
<div class="container pt-4">
    <div class="row pt-2">
        <div class="col-md-6 offset-md-3">
            @if(!Session::has('address'))
                <div id="geocoder" class="geocoder mb-3"></div>
            @else
                <form action="{{ route('home.index', ['search' => 'search']) }}" method="GET">
                    <div class="input-group d-flex mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Search for restaurants">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
        <div class="col-md-3 pr-0">
            <div class="btn-group float-right" style="padding-right: 15px;">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-sort-amount-up"></i> Sort
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <h6 class="dropdown-header">Sort By</h6>
                    <a class="dropdown-item" href="{{ route('home.index', ['sort' => 'delivery']) }}"><i class="fas fa-car" style="width:14px"></i> Delivery Fee</a>
                    <a class="dropdown-item" href="{{ route('home.index', ['sort' => 'reviews']) }}"><i class="fas fa-award" style="width:14px"></i> Reviews</a>
                    <a class="dropdown-item" href="{{ route('home.index', ['sort' => 'price']) }}"><i class="fas fa-dollar-sign" style="width:14px"></i> Price</a>
                </div>
            </div>
        </div>
    </div>
    @if(auth()->user() && auth()->user()->favorites->first())
        <div class="row mt-4">
            <h2 class="col-md-12"><span class="highlight-container-r"><span class="highlight"><i class="fas fa-heart"></i> Favorite Restaurants</span></span></h2>
            <div class="col-md-12">
                <div class="my-slider mb-5">
                    @foreach(auth()->user()->favorites as $fav)
                        <div>
                            <div class="card_slide">
                                <div class="card_slide__image">
                                    <img src="{{ url('storage/'.$fav->image) }}">
                                </div>
                                <div class="card_slide__text">
                                    <a href="{{ route('home.show', $fav->slug) }}" class="none"><p>{{ $fav->name }}</p></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="row mt-3">
        <div class="col-md-12"><h2><span class="highlight-container-y"><span class="highlight">{!! $title !!}</span></span></h2></div>
    </div>
    <div class="row">
        @foreach($restaurants as $restaurant)
            <div class="module col-md-3 p-0">
                <a href="{{ route('home.show', $restaurant->slug) }}">
                    <img src="{{ url('storage/'.$restaurant->image) }}" class="w-100">
                    <div class="content">
                        <h1>{{ $restaurant->name }}</h1>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            {{ $restaurants->appends(request()->input())->links() }}
        </div>
    </div>
</div>
@endsection

@section('extra-js')
    @if(auth()->user() && auth()->user()->favorites->first())
        <script type="module">
            var slider = tns({
                container: '.my-slider',
                items: 4,
                loop:false,
                mouseDrag: true,
                nav: false,
                autoWidth: true,
                gutter: 24,
                controls: false,
                viewportMax: 1140,
                swipeAngle: false,
            });
        </script>
    @endif
    @if(!Session::has('address'))<script src="{{ asset('js/geocoder.js') }}"></script>@endif
@endsection

@extends('layouts.app')

@section('title', config('app.name').' | Home')

@section('extra-css')
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
                <form action="{{ route('home.search') }}" accept-charset="UTF-8" method="get">
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
            <div class="btn-group float-right">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-sort-amount-up"></i> Sort
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <h6 class="dropdown-header">Sort By</h6>
                    <a class="dropdown-item" href="#"><i class="fas fa-car" style="width:14px"></i> Delivery Fee</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-award" style="width:14px"></i> Reviews</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-dollar-sign" style="width:14px"></i> Price</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($restaurants as $restaurant)
            <div class="module col-md-3 p-0">
                <a href="{{ route('home.show', $restaurant->id) }}">
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
            {{ $restaurants->links() }}
        </div>
    </div>
</div>
@endsection

@section('extra-js')
    @if(!Session::has('address'))<script src="{{ asset('js/geocoder.js') }}"></script>@endif
@endsection

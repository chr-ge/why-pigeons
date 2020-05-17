@extends('layouts.app')

@section('title', 'Order | '.$order->restaurant->name )

@section('extra-css')
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css" rel="stylesheet" />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js"></script>
    <link
        rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.css"
        type="text/css"
    />
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <h2>
                <span class="highlight-container-y"><span class="highlight">
                        {{ $order->status->first()->status === 'reserved' ? 'Pickup From: ' : 'Deliver To: ' }}
                </span></span>
                {{ $restaurant_address }}
            </h2>
        </div>
        <div class="row">
            <div id="map" style="width: 100%; height: 70vh"></div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                @if($order->status->first()->status === 'reserved')
                    <form method="POST" action="{{ route('driver.foodPickupComplete', $order->id) }}" class="d-flex justify-content-center">
                        @csrf
                        <button class="btn btn-info btn-lg w-25">Food Pickup Complete</button>
                    </form>
                @elseif($order->status->first()->status === 'food_picked_up')
                    <form method="POST" action="{{ route('driver.foodDeliveryComplete', $order->id) }}" class="d-flex justify-content-center">
                        @csrf
                        <button class="btn btn-success btn-lg w-25">Food Delivered To Customer</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoia25pZmVib3NzIiwiYSI6ImNrOWlyazllcTE1NmQzZXBuZXh5MHVpM3QifQ.eNaU-QnXEbcFzghOYUGVvA';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-73.65, 45.5087],
            zoom: 13
        });
        var directions = new MapboxDirections({
                accessToken: mapboxgl.accessToken,
                unit: 'metric',
        });
        directions.setOrigin([-73.65, 45.5087]);
        @if($order->status->first()->status === 'reserved')
            directions.setDestination([-73.65654, 45.5087564]);
        @else
            directions.setDestination(['{{ $order->address->longitude }}', '{{ $order->address->latitude }}']);
        @endif
        map.addControl(
            directions,
            'top-left',
        );
    </script>
@endsection

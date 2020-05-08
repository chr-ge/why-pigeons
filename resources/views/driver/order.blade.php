@extends('layouts.app')

@section('title', 'Order | '.$order->id )

@section('extra-css')
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css" rel="stylesheet" />
    <style>
        /*#map { position: absolute; top: 0; bottom: 0; width: 100%; }*/
    </style>
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
            <h1>Order: #{{ $order->id }}</h1>
        </div>
        <div class="row">
            <div id="map" style="width: 100%; height: 75vh"></div>
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
        directions.setDestination([-73.65654, 45.5087564]);
        map.addControl(
            directions,
            'top-left',
        );
    </script>
@endsection

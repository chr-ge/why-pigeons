@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="position-relative overflow-hidden p-3 text-center"
             style="background-image: url('/public/storage/{{ $restaurant->image }}'); background-size: cover;background-position: center;">
            <div class="col-md-5 p-lg-5 mx-auto my-5" style="background: #F8FAFC">
                <h1 class="display-4 font-weight-normal">{{ $restaurant->name }}</h1>
                <p class="lead font-weight-normal">
                    @foreach($restaurant->categories as $category)
                        <span class="badge badge-primary">{{$category->name}}</span>
                    @endforeach
                </p>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="card-columns mt-4">
            @foreach($menus as $menu)
                <div class="card">
                    <div class="row no-gutters">
                        @if(isset($menu->image))
                            <div class="col-md-4">
                                <img src="{{ url('storage/'.$menu->image) }}" class="w-100" alt="">
                            </div>
                        @endif
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $menu->name }}</h5>
                                <p class="card-text">{{ $menu->description }}</p>
                                <p class="card-text"><small class="text-muted">${{ $menu->price }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

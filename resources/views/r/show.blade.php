@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="position-relative overflow-hidden p-3 text-center bg-light"
             style="background-image: url('/public/storage/{{ $restaurant->image }}'); background-size: cover;background-position: center;">
            <div class="col-md-5 p-lg-5 mx-auto my-5" style="background: #F8FAFC">
                <h1 class="display-4 font-weight-normal">{{ $restaurant->name }}</h1>
                <p class="lead font-weight-normal">{{ $restaurant->description }}</p>
                <a class="btn btn-outline-secondary" href="https://getbootstrap.com/docs/4.4/examples/product/#">Coming soon</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <div class="row">
            <div class="col-3 p-5">
                <img src="/public/storage/{{ $restaurant->image }}" class="w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4">{{ $restaurant->name }}</div>
                    </div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $restaurant->name }}</div>
                <div>{{ $restaurant->description }}</div>
                <div><a href="#">{{ $restaurant->category_id }}</a></div>
            </div>
        </div>
    </div>
@endsection

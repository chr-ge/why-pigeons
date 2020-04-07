@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="position-relative overflow-hidden p-3 text-center"
             style="background-image: url('{{ url('storage/'.$restaurant->image) }}'); background-size: cover;background-position: center;">
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
                        @if($menu->image)
                        <div class="col-md-8">
                        @else
                        <div class="col-md-12">
                        @endif
                            <div class="pl-3 pt-3">
                                <h5 class="card-title">{{ $menu->name }}</h5>
                                <p class="card-text pr-3">{{ $menu->description }}</p>
                            </div>
                        </div>
                        @if($menu->image)
                            <div class="col-md-4">
                                <div class="pr-3 pt-3">
                                    <img src="{{ url('storage/'.$menu->image) }}" class="w-100" alt="">
                                </div>
                            </div>
                        @endif
                        <div class="row no-gutters pt-2 w-100">
                            <div class="pl-3 pb-3 w-100">
                                <div class="d-inline-flex align-items-center w-100">
                                    <p class="card-text m-0"><small class="text-muted">${{ $menu->price }}</small></p>
                                    <div class="w-100 pr-3">
                                        <button style="float:right;"class="btn btn-primary">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

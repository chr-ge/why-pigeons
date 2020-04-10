@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="position-relative overflow-hidden p-3 text-center"
             style="background-image: url('{{ url('storage/'.$restaurant->image) }}'); background-size: cover;background-position: center;">
            <div class="col-md-5 p-lg-5 mx-auto my-5" style="background: #F8FAFC;">
                <h1 class="display-4 font-weight-normal">{{ $restaurant->name }}</h1>
                <p class="lead font-weight-normal">
                    <span class="badge badge-danger">9.5</span> &#183;
                    @foreach($restaurant->categories as $category)
                        <span class="badge badge-primary">{{$category->name}}</span>
                    @endforeach
                </p>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="categories-nav">
            <ul role="tablist">
                @foreach($categories as $category)
                    <li>
                        <a class="nav-link category-a" data-toggle="pill" onclick="window.location.href='#{{$category->name}}';" role="tab" aria-selected="false">{{$category->name}}</a>
                    </li>
                @endforeach
                <li class="float-right">
                    <a class="nav-link category-info" title="More info" data-toggle="modal" aria-labelledby="modal-default" data-target="#modal-default" aria-hidden="true" role="dialog" aria-selected="false"><i class="fa fa-info-circle"></i></a>
                    <div class="modal fade" id="modal-default" tabindex="-1">
                        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="modal-title-default">More Info</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    <h3><i class="fa fa-clock"></i> {{ __('Operating Hours') }}</h3>
                                    <p>Tue - Fri 10:00 AM - 4:00 PM, 10:00 AM - 4:00 PM<br>
                                        Sat, Sun 10:00 AM - 4:00 PM, 9:30 AM - 4:00 PM</p>
                                    <h3><i class="fa fa-map-marker-alt"></i> Address</h3>
                                    <p class="mb-0">{{$restaurant->address->street_address}}, {{$restaurant->address->city}}</p>
                                    <p>{{$restaurant->address->province}}, {{$restaurant->address->country}} {{$restaurant->address->postal_code}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        @foreach($categories as $category)
            <h2 class="mt-4" id="{{$category->name}}">{{$category->name}}</h2>
            <div class="card-columns">
                @foreach($menus as $menu)
                    @if($menu->category_id == $category->id)
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
                                            <button style="float:right;" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
@endsection

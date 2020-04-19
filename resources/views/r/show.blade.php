@extends('layouts.app')

@section('title', $restaurant->name.' - '.$restaurant->address->city)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="row header-image" style="background-image: url('{{ url('storage/'.$restaurant->image) }}')"></div>
                <div class="row information">
                    <h1 class="m-0 my-auto">{{ $restaurant->name }}</h1>
                    <p class="lead ml-5 mb-0 my-auto"><span class="badge badge-danger">4.5</span></p>
                    <div class="info-icon ml-auto">
                        <a class="nav-link pr-0" title="More info" data-toggle="modal" aria-labelledby="modal-default" data-target="#modal-default" aria-hidden="true" role="dialog" aria-selected="false"><i class="fa fa-info-circle"></i></a>
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
                                        @if(\App\RestaurantHours::hoursExist($restaurant->id))
                                            <h3><i class="fa fa-clock"></i> {{ __('Today\'s Hours') }}</h3>
                                            <p>{{ \App\RestaurantHours::displayHours($restaurant->id) }} </p>
                                        @endif
                                        <h3><i class="fa fa-map-marker-alt"></i> Address</h3>
                                        <p class="mb-0">{{$restaurant->address->street_address}}, {{$restaurant->address->city}}</p>
                                        <p>{{$restaurant->address->province}}, {{$restaurant->address->country}} {{$restaurant->address->postal_code}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 p-0">
                        <ul id="navigation">
                            @foreach($categories as $category)
                                <li>
                                    <a id="{{$category->name}}-link" onclick="window.location.href='#{{$category->name}}'">
                                        {{$category->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-9 menu-list">
                        @foreach($categories as $category)
                            <div class="category" id="{{$category->name}}">
                                <h2>{{$category->name}}</h2>
                                @foreach($menus as $menu)
                                    @if($menu->category_id == $category->id)
                                        <div class="row no-gutters menu-card">
                                            <div class="row no-gutters w-100">
                                                <div class="col-8">
                                                    <div class="row no-gutters">
                                                        <h5>{{$menu->name}}</h5>
                                                    </div>
                                                    <div class="row no-gutters">
                                                        <p class="m-0 p-0">{{$menu->description}}</p>
                                                    </div>
                                                    <div class="row no-gutters">
                                                        <p class="m-0 p-0">${{$menu->price}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <img src="{{ url('storage/'.$menu->image) }}" alt=" ">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-3">
                @include('partials.cart')
            </div>
        </div>
    </div>

    <script>
        $( document ).ready(function() {
            var nav = document.getElementById("navigation");
            //var offset = jQuery(nav).offset().top;
            jQuery(window).scroll(function(){
                var scrollPos = jQuery(window).scrollTop();
                if(scrollPos >= 429){
                    nav.classList.add("fixed");
                }
                else{
                    nav.classList.remove("fixed");
                }

                $('.category').each(function() {
                    var target = $(this).offset().top;
                    var id = $(this).attr('id');

                    if (scrollPos >= target) {
                        $('#navigation > li > a').removeClass('active');
                        var link = document.getElementById(id + "-link");
                        link.classList.add('active');
                    }
                    if(scrollPos<429){
                        $('#navigation > li > a').removeClass('active');
                    }
                });
            });
        });
    </script>
@endsection

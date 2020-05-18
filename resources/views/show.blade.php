@extends('layouts.app')

@section('title', $restaurant->name.' - '.$restaurant->address->city)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row header-image" style="background-image: url('{{ url('storage/'.$restaurant->image) }}')"></div>
                <div class="row information">
                    <h1 class="m-0 my-auto">{{ $restaurant->name }}</h1>
                    <p class="lead ml-5 mb-0 my-auto"><span class="badge badge-rating">{{ $rating }}</span></p>
                    <p class="h5 ml-3 mb-0 my-auto"><span class="badge badge-delivery">{{ $restaurant->delivery_fee == 0.00 ? 'Free Delivery' : '$'.$restaurant->delivery_fee.' Delivery' }}</span></p>
                    <p class="h5 ml-3 mb-0 my-auto"><span class="badge badge-price">{{ $restaurant->categories->first()->name }}</span></p>
                    <div id="favorite-button" class="ml-auto my-auto" data-restaurant="{{ $restaurant->slug }}" data-fav="{{ $favorite ? 'true' : 'false'}}"></div>
                    <div class="info-icon">
                        <a class="nav-link pr-0" title="More info" data-toggle="modal" aria-labelledby="modal-default" data-target="#modal-default" aria-hidden="true" role="dialog" aria-selected="false"><i class="fa fa-info-circle"></i></a>
                        <div class="modal fade" id="modal-default" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered" role="document">
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
                                            <p>{{ \App\RestaurantHours::displayHours($restaurant->id) }}</p>
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
                    <div class="col-md-3 p-0">
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
                    <div class="col-md-9 menu-list">
                        @foreach($categories as $category)
                            <div class="category" id="{{$category->name}}">
                                <h2>{{$category->name}}</h2>
                                @foreach($menus as $menu)
                                    @if($menu->category_id == $category->id)
                                        <a class="menu-link" data-toggle="modal" data-target="{{ $menu->available ? '#modal-menu-'.$menu->id : '' }}">
                                            <div class="row no-gutters menu-card">
                                                <div class="row no-gutters w-100">
                                                    <div class="col-md-9">
                                                        <div class="row no-gutters" >
                                                            <h5 class="itemTitle">{{$menu->name}}</h5>
                                                        </div>
                                                        <div class="row no-gutters">
                                                            <p class="m-0 p-0 itemDescription">{{$menu->description}}</p>
                                                        </div>
                                                        <div class="row no-gutters">
                                                            <p class="m-0 p-0 itemPrice">{{ $menu->getPrice() }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        @if($menu->image)
                                                            <img src="{{ url('storage/'.$menu->image) }}" alt="{{ $menu->name }}">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        @if($menu->available)
                                            <div class="modal fade" id="modal-menu-{{$menu->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-menu-{{$menu->id}}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <form method="POST" action="{{ route('cart.store', $menu->id) }}">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="modal-title-menu-{{$menu->id}}">{{$menu->name}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <p>{{$menu->description}}</p>
                                                                <div class="form-group">
                                                                    <textarea class="form-control instructions" placeholder="Add special instructions for the restaurant" rows="1" name="instructions" id="instructions" maxlength="255"></textarea>
                                                                </div>
                                                                <div class="center-block">
                                                                    <input name="quantity" type="number" value="1" min="1" max="20" step="1" required />
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer p-0">
                                                                <button type="submit" class="btn btn-success btn-block">Add To Order</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @include('partials.cart')
            </div>
        </div>
    </div>

    <script>
        $( document ).ready(function() {
            $("input[type='number']").inputSpinner();

            var nav = document.getElementById("navigation");
            var ignoreNextScroll = false;
            var navLinks = nav.getElementsByTagName("li");
            for(var i = 0; i < navLinks.length; i++){
                var anchor = navLinks[i].getElementsByTagName("a");
                anchor[0].addEventListener("click",function(){
                    $('#navigation > li > a').removeClass('active');
                    this.classList.add('active');
                    ignoreNextScroll = true;
                    var scrollPos = jQuery(window).scrollTop();
                    if(scrollPos >= 429){
                        nav.classList.add("fixed");
                    }
                    else{
                        nav.classList.remove("fixed");
                    }
                });
            }

            //var offset = jQuery(nav).offset().top;
            jQuery(window).scroll(function(){
                if(ignoreNextScroll){
                    return ignoreNextScroll = false;;
                }
                else{
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
                }
            });

            //Textarea auto-resize
            $('textarea').each(function () {
                this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;');
            }).on('input', function () {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            });
        });
    </script>
@endsection

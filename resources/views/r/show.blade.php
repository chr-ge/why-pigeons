@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="row header-image" style="background-image: url('{{ url('storage/'.$restaurant->image) }}')"></div>
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
                                                    <img src="{{ url('storage/'.$menu->image) }}" alt="{{$menu->name}}">
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

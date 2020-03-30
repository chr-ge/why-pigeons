@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-2">
        <div class="col-6 offset-md-3">
            <form action="{{action('HomeController@search')}}" accept-charset="UTF-8" method="get">
                <div class="form-group d-flex">
                    <input type="text" name="search" class="form-control">
                    <span class="form-group-btn">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($restaurants as $restaurant)
            <div class="module col-4 mb-4">
                <a href="{{ route('home.show', $restaurant->id) }}">
                    <img src="{{ url('storage/'.$restaurant->image) }}" class="w-100">
                    <div class="content">
                        <h1>{{ $restaurant->name }}</h1>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        @foreach($restaurants as $restaurant)
            <div class="col-4">
                <img src="/public/storage/{{ $restaurant->image }}" class="w-100"/>
                <a href="/public/r/{{$restaurant->id}}">{{ $restaurant->name }}</a>
            </div>
        @endforeach
    </div>
</div>
@endsection

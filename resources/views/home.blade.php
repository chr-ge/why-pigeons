@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        @foreach($restaurants as $restaurant)
            <div class="col-4">
                <img src="/storage/{{ $restaurant->image }}" class="w-100"/>
            </div>
        @endforeach
    </div>
</div>
@endsection

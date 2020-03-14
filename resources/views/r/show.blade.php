@extends('layouts.app')

@section('content')
    <div class="container">
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

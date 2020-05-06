@extends('layouts.app')

@section('content')
    <div class="container" style="height: 65vh">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('svg/dove.svg' )}}" style="height: 50px; width: 50px">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="mt-4">Seems like you got lost and ended up here...</h2>
                        <a href="{{ route('home.index') }}" class="btn btn-primary mt-4">Browse Restaurants</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

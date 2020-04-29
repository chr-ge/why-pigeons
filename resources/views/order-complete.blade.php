@extends('layouts.app')

@section('title', 'Thanks for your order!')

@section('content')
    <div class="container" style="height: 65vh">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('svg/dove.svg' )}}" style="height: 150px; width: 150px">
                    </div>
                    <div class="card-body text-center">
                        <h2>Order Placed</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

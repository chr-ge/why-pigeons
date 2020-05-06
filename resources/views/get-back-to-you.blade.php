@extends('layouts.app')

@section('title', 'Thanks for your interest!')

@section('content')
    <div class="container" style="height: 65vh">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('svg/dove.svg' )}}" style="height: 150px; width: 150px">
                    </div>
                    <div class="card-body text-center">
                        <h2>Thanks for your interest! We'll contact you in about 1-3 business days.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

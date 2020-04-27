@extends('layouts.app')

@section('title', 'Thanks for your interest!')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Thanks for your interest! We'll contact you in about 1-3 business days.</div>

                    <div class="card-body">
                        <img src="{{ asset('svg/dove.svg' )}}" style="height: 150px; width: 150px">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

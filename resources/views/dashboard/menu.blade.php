@extends('dashboard.layouts.app')

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex" style="background-image: url('/public/storage/{{ auth()->user()->image }}'); background-size: cover; background-position: center center;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h1 class="display-2 text-white">Menu</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <h2 class="mb-0"></h2>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>

        @include('dashboard.layouts.footers.auth')
    </div>
@endsection


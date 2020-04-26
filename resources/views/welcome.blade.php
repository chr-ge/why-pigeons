<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            html, body {
                background-color: white;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                overflow-x: hidden;
                margin: 0;
            }
            .clip{
                background-color: #bfbddb;
                clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);
            }
            .clip2{
                background-color: #b5afdb;
                clip-path: polygon(0% 0%, 75% 0%, 100% 100%, 25% 100%);
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="pt-0">
        <div class="clip">
            <div class="flex-center position-ref full-height" style="">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ route('home.index') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <div class="position-relative overflow-hidden text-center bg-light">
                    <div class="col-md-8 p-lg-5 mx-auto my-5">
                        <img src="{{ asset('svg/dove.svg' )}}" style="height: 60px; width: 60px;">
                        <h1 class="display-4 font-weight-normal">Food and maybe some pigeons?</h1>
                        <p class="lead font-weight-normal">Quick food delivery right to your door.</p>
                        <a class="btn btn-outline-secondary btn-lg" href="{{ route('home.index') }}">Order Now</a>
                    </div>
                    <div class="product-device shadow-sm d-none d-md-block"></div>
                    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                </div>
            </div>
        </div>
        <div class="clip2">
            <div class="row">
                <div class="col-md-4 mt-4" style="margin-left: 25%">
                    <div class="card flex-md-row box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Drivers</strong>
                            <h3 class="text-dark mb-2">Drive With Us</h3>
                            <p class="card-text mb-auto">Earn extra money in your spare time. Set your availability, keep 100% of your delivery fees and tips, and get paid weekly.</p>
                            <a href="{{ route('register.driver') }}" class="btn btn-info btn-sm">Join Now</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" style="width: 200px; height: 250px;" src="{{asset('svg/driver.jpeg')}}" data-holder-rendered="true">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-4" style="margin-left: 50%">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Restaurants</strong>
                            <h3 class="text-dark mb-2">Partner With Us</h3>
                            <p class="card-text mb-auto">Team up with us to reach more customers. Let us take care of the details, so you can stay focused on making great food.</p>
                            <a href="{{ route('register.restaurant') }}" class="btn btn-success btn-sm">Apply Now</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" style="width: 200px; height: 250px;" src="{{asset('storage/uploads/default.jpeg')}}" data-holder-rendered="true">
                    </div>
                </div>
            </div>
        </div>

        @extends('layouts.footer')
    </body>
</html>

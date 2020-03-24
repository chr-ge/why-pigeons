<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Restaurant Dashboard</title>
        <!-- Favicon -->
        <link href="{{ asset('/svg/dove.svg') }}" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('dashboard/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
        <link href="{{ asset('dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('dashboard/css/argon.min.css?v=1.0.0') }}" rel="stylesheet">
    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
        @include('dashboard.layouts.navbars.sidebar')
        <div class="main-content">
            @include('dashboard.layouts.navbars.navbar')
            @yield('content')
        </div>

        <script src="{{ asset('dashboard/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

        @stack('js')

        <!-- Argon JS -->
        <script src="{{ asset('dashboard/js/argon.min.js?v=1.0.0') }}"></script>
    </body>
</html>

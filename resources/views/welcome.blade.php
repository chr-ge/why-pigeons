<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                <div class="col-md-8 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 font-weight-normal">Food and maybe some pigeons?</h1>
                    <p class="lead font-weight-normal">Quick food delivery right to your door.</p>
                    <a class="btn btn-outline-secondary" href="#">Coming soon</a>
                </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>
        </div>
        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <img src="/public/svg/dove.svg" height="30px">
                    <small class="d-block mb-3 text-muted">© 2020</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Cool stuff</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Random feature</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Team feature</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Stuff for developers</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Another one</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Restaurants</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Resource</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Resource name</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Another resource</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Locations</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Montreal</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Laval</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Toronto</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Ottawa</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Team</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Locations</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Privacy</a></li>
                        <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/product/#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>

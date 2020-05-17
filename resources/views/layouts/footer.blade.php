<footer class="container py-5" id="footer">
    <div class="row">
        <div class="col-12 col-md">
            <img src="{{asset('svg/dove.svg')}}" height="30px">
            <small class="d-block mb-3 text-muted">© {{ now()->year }}</small>
        </div>
        <div class="col-6 col-md">
            <h5>Drivers</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="{{route('login.driver')}}">Driver Login</a></li>
                <li><a class="text-muted" href="{{route('register.driver')}}">Drive with us</a></li>
                <li><a class="text-muted" href="#">Team feature</a></li>
                <li><a class="text-muted" href="#">Driver Support</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Restaurants</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="{{route('login.restaurant')}}">Restaurant Login</a></li>
                <li><a class="text-muted" href="{{route('register.restaurant')}}">Partner with us</a></li>
                <li><a class="text-muted" href="#">Advantages</a></li>
                <li><a class="text-muted" href="#">Restaurant Support</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Locations</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="{{ route('home.index') }}">Montreal</a></li>
                <li><a class="text-muted" href="#">Laval</a></li>
                <li><a class="text-muted" href="#">Toronto</a></li>
                <li><a class="text-muted" href="#">Ottawa</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About Us</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">The Team</a></li>
                <li><a class="text-muted" href="#">Jobs</a></li>
                <li><a class="text-muted" href="{{ route('privacy') }}">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>

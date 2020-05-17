<div class="row align-items-center justify-content-xl-between">
    <div class="col-xl-6">
        <div class="copyright text-center text-xl-left text-muted">
            &copy; {{ now()->year }} <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> &amp;
            <a href="https://www.updivision.com" class="font-weight-bold" target="_blank">Updivision</a>
        </div>
    </div>
    <div class="col-xl-6">
        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
                <a href="{{ route('home.index') }}" class="nav-link" target="_blank">Browse Restaurants</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Contact Us</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('login.driver') }}" class="nav-link" target="_blank">Drivers</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Help</a>
            </li>
        </ul>
    </div>
</div>

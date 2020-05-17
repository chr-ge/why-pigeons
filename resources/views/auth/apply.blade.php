@extends('layouts.app')

@section('title', 'Become a partner restaurant')

@section('extra-css')
    <style>
        .imagerow{
            background: url("https://i.pinimg.com/originals/07/7d/e1/077de1e0a97edc48c026661b9a3ba190.jpg");
        }
        .right-image{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
<div class="container pt-2">
    <div class="modal-body row">
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="right-image"/>
        </div>
        <div class="col-md-6">
            <form enctype="multipart/form-data" action='{{ url("register/$url") }}' method="POST" class="form-signin">
                @csrf

                <h1 class="h2 mb-3 font-weight-normal">Become a partner restaurant</h1>

                <input id="name" type="text" placeholder="Restaurant Name" class="form-control top @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <input id="email" type="email" placeholder="Email" class="form-control middle @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <input id="phone" type="tel" placeholder="Phone Number" class="form-control bottom @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                <input id="street_address" type="text" placeholder="Street Address" class="form-control top @error('street_address') is-invalid @enderror" name="street_address" value="{{ old('street_address') }}" required autocomplete="street_address" autofocus>
                <div class="input-group">
                    <input id="city" type="text" placeholder="City" class=" form-control middle @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                    <input id="province" type="text" placeholder="Province" class="form-control middle @error('province') is-invalid @enderror" name="province" value="{{ old('province') }}" required autocomplete="province" autofocus>
                </div>
                <div class="input-group">
                    <input id="postal_code" type="text" placeholder="Postal Code" class="form-control bottom @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" required autocomplete="postal_code" autofocus>
                    <select id="country" class="form-control bottom" name="country">
                        <option value="" disabled selected>Country</option>
                        @foreach($countries as $country)
                            <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div>

                <select id="category_id" class="form-control" name="category_id">
                    <option value="" disabled selected>Type of cuisine</option>
                    @foreach($categories as $category => $value)
                        <option value="{{ $value }}">{{ $category }}</option>
                    @endforeach
                </select>

                @error('street_address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="mt-5">
                    <p class="legal">
                        By clicking “Apply Now,” you agree to Why Pigeons Why?
                        <a href="#">General Terms and Conditions</a> and acknowledge
                        you have read the <a href="#">Privacy Policy</a>.
                    </p>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Apply Now') }}
                </button>
            </form>
            <div class="card card-login">
                <div class="card-body">
                    <h5 class="card-title d-inline-block">
                        Already have an account with us?
                        <a href="{{ route('login.restaurant') }}">Login</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

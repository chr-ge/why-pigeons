@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('address.create') }}">
        @csrf

        <div class="form-group row">
            <label for="street_address" class="col-md-4 col-form-label text-md-right">Street Address</label>

            <div class="col-md-6">
                <input id="street_address" type="text" class="form-control @error('name') is-invalid @enderror" name="street_address" value="{{ old('street_address') }}" required autocomplete="street_address" autofocus>

                @error('street_address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class=".form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="province" class="col-md-4 col-form-label text-md-right">Province</label>

            <div class="col-md-6">
                <input id="province" type="text" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ old('province') }}" required autocomplete="province" autofocus>

                @error('province')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="postal_code" class="col-md-4 col-form-label text-md-right">Postal Code</label>

            <div class="col-md-6">
                <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" required autocomplete="postal_code" autofocus>

                @error('postal_code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>

            <div class="col-md-6">
                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

                @error('country')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Create') }}
                </button>
            </div>
        </div>

    </form>
</div>
@endsection

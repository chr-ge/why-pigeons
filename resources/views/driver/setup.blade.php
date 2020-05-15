@extends('layouts.app')

@section('title', 'Become a partner driver')

@section('content')
<div class="container pt-2" style="height: 66vh">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('svg/license.png') }}" class="w-100 p-3"/>
        </div>
        <div class="col-md-6 modal-body ">
            <form enctype="multipart/form-data" action='{{ route('driver.storeDriversLicense') }}' method="POST" class="form-signin" style="border-radius: 0.25rem">
                @csrf
                <h1 class="h2 mb-3 font-weight-normal">Enter Your Drivers License</h1>

                @if($errors)
                    @foreach ($errors->all() as $error)
                        <div style="color: red">{{ $error }}</div>
                    @endforeach
                @endif

                <input id="license_number" type="text" placeholder="License Number" class="form-control top @error('license_number') is-invalid @enderror" name="license_number" value="{{ old('license_number') }}" required autocomplete="license_number" autofocus>
                <input id="dob" type="text" placeholder="Date of Birth" onfocus="(this.type='date')" class="form-control middle @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                <input id="reference_number" type="text" placeholder="Reference Number" class="form-control middle @error('reference_number') is-invalid @enderror" name="reference_number" value="{{ old('reference_number') }}" required autocomplete="reference_number" autofocus>
                <div class="input-group">
                    <input id="valid_on" type="text" placeholder="Valid On" onfocus="(this.type='date')" class="form-control bottom @error('valid_on') is-invalid @enderror" name="valid_on" value="{{ old('valid_on') }}" required autocomplete="valid_on" autofocus>
                    <input id="expires_on" type="text" placeholder="Expires On" onfocus="(this.type='date')" class="form-control bottom @error('expires_on') is-invalid @enderror" name="expires_on" value="{{ old('expires_on') }}" required autocomplete="expires_on" autofocus>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Save Drivers License') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection

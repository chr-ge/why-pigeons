@extends('layouts.app')
<style>
    .imagerow{
        background: url("https://i.pinimg.com/originals/07/7d/e1/077de1e0a97edc48c026661b9a3ba190.jpg");
    }

    img{
        width: 100%;
    }

    .form-signin {
        width: 100%;
        background: #94f0ff;
        max-width: 500px;
        padding: 15px;
        margin: auto;
    }
    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
    .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-radius: 0;
    }
    .form-signin input[type="tel"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
@section('content')
<div class="container">
    <div class="modal-body row">
        <div class="col-md-6">
            <!-- <img src="https://i.pinimg.com/originals/07/7d/e1/077de1e0a97edc48c026661b9a3ba190.jpg"/> -->
            <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"/>
        </div>
        <div class="col-md-6">
            <form enctype="multipart/form-data" action='{{ url("register/$url") }}' method="POST" class="form-signin">
                @csrf

                <h1 class="h2 mb-3 font-weight-normal">Become a partner restaurant</h1>

                <input id="name" type="text" placeholder="Restaurant Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                <input id="phone" type="tel" placeholder="Phone Number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                <select id="category_id" class="form-control" name="category_id">
                    <option value="" disabled selected>Type of cuisine</option>
                    @foreach($categories as $category => $value)
                        <option value="{{ $value }}">{{ $category }}</option>
                    @endforeach
                </select>

                <div class="custom-file mt-2">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose a Restaurant Image</label>
                </div>

                <button type="submit" class="btn btn-primary mt-5">
                    {{ __('Apply Now') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

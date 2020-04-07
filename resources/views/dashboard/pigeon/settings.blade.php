@extends('layouts.dashboard.app')

@section('content')
    <div class="header bg-gradient-info pb-8 pt-5 pt-lg-7 d-flex">
        <!-- Header container -->
        <div class="container-fluid">
            <div class="header-body">
                <div class="row">
                    <div class="col-md-12 {{ $class ?? '' }}">
                        <h1 class="display-2 text-white">Settings</h1>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('restaurant.index') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Account</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-10 ml-auto mr-auto mb-xl-0">
                <div class="card shadow">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">{{ __('Edit your Account Information') }}</h3>
                    </div>
                    <div class="card-body" >
                        <form method="POST" action="{{ route('pigeon.updateAccount') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label class="col-form-label" for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $pigeon->name }}" placeholder="Name" id="name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="col-form-label" for="username">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') ?? $pigeon->username }}" placeholder="Username" id="username">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="password">Old Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="********" id="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="new_password">New Password</label>
                                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" placeholder="********" id="new_password">

                                        @error('new_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                            @if (Session::has('success'))
                                <div class="alert alert-success w-auto alert-dismissible fade show mb-0" style="display: inline-block;padding: 0.34rem 2rem" role="alert">
                                    <span class="alert-icon"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
                                    <span class="alert-text mr-4">{!! Session::get('success') !!}</span>
                                    <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.dashboard.footers.auth')
    </div>
@endsection


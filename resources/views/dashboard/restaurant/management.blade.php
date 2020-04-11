@extends('layouts.dashboard.app')

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex" style="background-image: url('/public/storage/{{ auth()->user()->image }}'); background-size: cover; background-position: center center;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h1 class="display-2 text-white">Management</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-xl-0">
                <div class="row">
                    <div class="col-xl-12 mb-xl-0">
                        <div class="card shadow">
                            <div class="card-header">
                                <h2 class="mb-0"><i class="fas fa-tags"></i> Categories</h2>
                            </div>
                            <div class="card-body">
                                <div>
                                    @foreach(auth()->user()->categories as $category)
                                        <span class="badge badge-primary">{{$category->name}}</span>
                                    @endforeach
                                </div>
                                <form method="POST" action="{{ route('addCategory') }}" enctype ="multipart/form-data">
                                    @csrf
                                    <div class="input-group mt-3">
                                        <select id="category_id" class="form-control" name="category_id">
                                            <option value="" disabled selected>Type of cuisine</option>
                                            @foreach($categories as $category => $value)
                                                <option value="{{ $value }}">{{ $category }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary">Add category</button>
                                    </div>
                                    @if (Session::has('error'))
                                        <div class="w-50 alert alert-danger mt-3 mb-0">
                                            {!! Session::get('error') !!}
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-12 mb-xl-0">
                        <div class="card shadow">
                            <div class="card-header">
                                <h2 class="mb-0"><i class="fas fa-image"></i> Image</h2>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img src="{{ url('storage/'.auth()->user()->image) }}" alt="Restaurant Image" class="w-100"/>
                                    </div>
                                    <form method="POST" action="{{ route('setImage') }}" enctype ="multipart/form-data" class="col-9"   >
                                        @csrf
                                        @if ($errors->has('image'))
                                            <strong style="color: red">{{ $errors->first('image') }}</strong>
                                        @endif
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="image">Choose a Restaurant Image</label>
                                            <input type="file" class="custom-file-input" id="image" name="image" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2 float-right">{{ __('Update Image') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-xl-0">
                <div class="card shadow h-100">
                    <div class="card-header">
                        <h2 class="mb-0"><i class="fa fa-clock"></i> Operating Hours</h2>
                    </div>
                    <div class="card-body">
                        @if(\App\RestaurantHours::hoursExist())
                            <form method="POST" action="{{ route('updateOperatingHours') }}">
                                @method('PATCH')
                        @else
                            <form method="POST" action="{{ route('setOperatingHours') }}">
                        @endif
                            @csrf

                            @for($i = 1; $i < 8; $i++)
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="{{ 'day-'.$i }}" class="col-md-6 col-form-label form-control-label">{{ \App\RestaurantHours::dayFromNumber($i)}}</label>
                                            <label for="{{ 'day-'.$i }}" class="col-md-6 col-form-label form-control-label">{!! \App\RestaurantHours::hoursExist() ? \App\RestaurantHours::setStatus($i) : ''!!}</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input class="form-control" type="time" value="{{ \App\RestaurantHours::hoursExist() ? old($i.'-open') ?? \App\RestaurantHours::getOpenTime($i) : old($i.'-open')}}" id="{{ $i.'-open' }}" name="{{ $i.'-open' }}">
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="time" value="{{ \App\RestaurantHours::hoursExist() ? old($i.'-open') ?? \App\RestaurantHours::getCloseTime($i) : old($i.'-close')}}" id="{{ $i.'-close' }}" name="{{ $i.'-close' }}">
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            <button type="submit" class="btn btn-primary btn-block">{{ \App\RestaurantHours::hoursExist() ? __('Save Changes') : __('Set Hours') }}</button>
                        </form>
                    </div>
                </div>
                @if(session()->get('errors'))
                    <script>alert('{{ session()->get('errors')->first() }}')</script>
                @endif
            </div>
        </div>
        @include('layouts.dashboard.footers.auth')
    </div>
@endsection


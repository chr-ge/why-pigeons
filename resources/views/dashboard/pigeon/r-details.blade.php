@extends('layouts.dashboard.app')

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex" style="background-image: url('/public/storage/{{ $restaurant->image }}'); background-size: cover; background-position: center center;">
        <!-- Mask -->
        <span class="mask bg-gradient-cyan opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h1 class="display-2 text-white">{{$restaurant->name}}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-xl-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card bg-gradient-info border-0">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Restaurant Reviews</h5>
                                        <span class="h2 font-weight-bold mb-0 text-white">5 stars</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap text-light">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bg-gradient-info border-0">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Total Menu Items</h5>
                                        <span class="h2 font-weight-bold mb-0 text-white">{{$menu_items}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                            <i class="ni ni-basket"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap text-light">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-12 mb-xl-0">
                        <div class="card shadow">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h2 class="mb-0">Information</h2>
                                    </div>
                                    <div class="col">
                                        <ul class="nav nav-pills justify-content-end">
                                            @if($restaurant->active === 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Not Active</span>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <dl class="dl-horizontal w-50" style="float: left;display: inline-block">
                                    <dt>Email</dt>
                                    <dd>{{$restaurant->email}}</dd>

                                    <dt>Phone</dt>
                                    <dd>{{$restaurant->phone}}</dd>

                                    <dt>Main Category</dt>
                                    <dd>{{App\Category::find($restaurant->category_id)->name}}</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>Address</dt>
                                    <dd>{{$restaurant->address->street_address}}</dd>
                                    <dd>{{$restaurant->address->city}}, {{$restaurant->address->province}}, {{$restaurant->address->country}}</dd>
                                    <dd>{{$restaurant->address->postal_code}}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-xl-0">
                <div class="card shadow h-100">
                    <div class="card-header">
                        <h2 class="mb-0">Operating Hours</h2>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>

        @include('layouts.dashboard.footers.auth')
    </div>
@endsection


@extends('layouts.dashboard.app')

@section('content')
    <style>
        .button-container form,
        .button-container form div {
            display: inline;
            margin-right: 5px;
        }
    </style>

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
                    @if(!isset($restaurant->password))
                        <div class="col-xl-12 mb-xl-0">
                            <div class="card shadow border-danger">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h2 class="mb-0">{{ __('Set Temporary Password') }}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('pigeon.setTempPass', $restaurant->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Set Temporary Password" name="temp_pass">
                                            <div class="input-group-append">
                                                <input type="submit" value="Update" class="btn btn-primary" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
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
                            <div class="card bg-gradient-blue border-0">
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
                                        <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> {{$menu_change}}%</span>
                                        <span class="text-nowrap text-light">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
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
                                            <span class="badge @if($restaurant->active) badge-success @else badge-danger @endif">{{$restaurant->getStatus()}}</span>
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

                                    <dt>Categories</dt>
                                    <dd>
                                        @foreach($restaurant->categories as $category)
                                            <span class="badge badge-primary">{{$category->name}}</span>
                                        @endforeach
                                    </dd>
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

        <div class="row mt-4">
            <div class="col-xl-12 mb-xl-0">
                <div class="card shadow border-danger">
                    <div class="card-body button-container">
                        <form method="POST" action="{{ route('pigeon.activateRestaurant', $restaurant->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            {!!
                                $restaurant->active
                                ? '<input type="submit" value="Deactivate" class="btn btn-warning" />'
                                : '<input type="submit" value="Activate" class="btn btn-success" />'
                            !!}
                        </form>
                        @can('delete-restaurant')
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete">Delete</button>
                            <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
                                <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                    <div class="modal-content bg-gradient-danger">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="modal-title-delete">Your attention is required</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="py-3 text-center">
                                                <i class="ni ni-bell-55 ni-3x"></i>
                                                <h4 class="heading mt-4">{{__('Are you sure?')}}</h4>
                                                <p>Deleting this restaurant cannot be reversed! All associated items will also be permanently deleted (Address, Menu Items).</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <form method="POST" action="{{ route('pigeon.delRestaurant', $restaurant->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="{{__('Delete')}}" class="btn btn-white"/>
                                            </form>
                                            <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <input type="button" value="{{__('Delete')}}" class="btn btn-danger" disabled/>
                        @endcan
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.dashboard.footers.auth')
    </div>
@endsection


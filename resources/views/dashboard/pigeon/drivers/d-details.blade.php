@extends('layouts.dashboard.app')

@section('content')
    <style>
        .button-container form,
        .button-container form div {
            display: inline;
            margin-right: 5px;
        }
    </style>

    <div class="header pb-8 pt-5 pt-lg-8 d-flex">
        <!-- Mask -->
        <span class="mask bg-gradient-cyan opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h1 class="display-2 text-white">{{$driver->name}}</h1>
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
                                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Account Created On</h5>
                                        <span class="h2 font-weight-bold mb-0 text-white">{{ $driver->created_at }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                            <i class="fas fa-user-clock"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-white mr-2">Last Updated:</span>
                                    <span class="text-nowrap text-light">{{ $driver->updated_at }}</span>
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
                                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Driver</h5>
                                        <span class="h2 font-weight-bold mb-0 text-white">N/A</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                            <i class="ni ni-basket"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> N/A %</span>
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
                                <h2 class="mb-0"><i class="fa fa-info-circle"></i> Information</h2>
                            </div>
                            <div class="card-body">
                                <dl class="dl-horizontal w-50" style="float: left;display: inline-block">
                                    <dt>Email</dt>
                                    <dd>{{$driver->email}}</dd>

                                    <dt>Phone</dt>
                                    <dd>{{$driver->phone}}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-xl-0">
                <div class="card shadow h-100">
                    <div class="card-header">
                        <h2 class="mb-0"><i class="ni ni-delivery-fast"></i> Trips</h2>
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
                                                <p>Deleting this driver cannot be reversed!</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <form method="POST" action="{{ route('pigeon.delDriver', $driver->id) }}" enctype="multipart/form-data">
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


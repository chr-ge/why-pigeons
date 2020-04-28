@extends('layouts.dashboard.app')

@section('content')
    <style>
        .table-action {
            font-size:.875rem;
            margin:0 .25rem;
            color:#adb5bd
        }
        .table-action:hover {
            color:#919ca6
        }
        .table-action-delete:hover {
            color:#f5365c
        }
        .button-container form,
        .button-container form div {
            display: inline;
        }
    </style>

    <div class="header bg-gradient-pink pb-8 pt-5 pt-lg-7 d-flex">
        <!-- Header container -->
        <div class="container-fluid">
            <div class="header-body">
                <div class="row">
                    <div class="col-md-12 {{ $class ?? '' }}">
                        <h1 class="display-2 text-white">Drivers</h1>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('pigeon.index') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('pigeon.drivers') }}">Drivers</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                    </div>
                </div>
                @if (Session::has('success'))
                    <div class="row">
                        <div class="col col-md-6 offset-md-3 text-center">
                            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                <span class="alert-icon"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                <span class="alert-text">{!! Session::get('success') !!}</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Drivers</h3>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive" data-toggle="list" data-list-values='["id", "name", "phone", "type", "city"]'>
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="id">ID</th>
                                    <th scope="col" class="sort" data-sort="name">Name</th>
                                    <th scope="col" class="sort" data-sort="phone">Phone</th>
                                    <th scope="col" class="sort" data-sort="type">Type</th>
                                    <th scope="col" class="sort" data-sort="city">City</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($drivers as $driver)
                                    <tr>
                                        <th>
                                            {{$driver->id}}
                                        </th>
                                        <th>
                                            {{$driver->name}}
                                        </th>
                                        <td>
                                            {{$driver->phone}}
                                        </td>
                                        <td>
                                            {{$driver->type ?? 'N/A'}}
                                        </td>
                                        <td>
                                            {{$driver->address->city ?? 'N/A'}}
                                        </td>
                                        <td>
                                            <button class="btn btn-sm" data-toggle="tooltip" onclick="window.location ='{{route('pigeon.driverDetails', $driver->id)}}'">
                                                <i class="fas fa-info-circle"></i> View
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    @if($drivers->hasPages())
                        <div class="card-footer">
                            {{ $drivers->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @include('layouts.dashboard.footers.auth')
    </div>
@endsection


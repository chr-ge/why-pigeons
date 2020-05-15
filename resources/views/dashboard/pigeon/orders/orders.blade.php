@extends('layouts.dashboard.app')

@section('content')
    <style>
        .button-container form,
        .button-container form div {
            display: inline;
        }
    </style>

    <div class="header bg-gradient-info pb-8 pt-5 pt-lg-7 d-flex">
        <!-- Header container -->
        <div class="container-fluid">
            <div class="header-body">
                <div class="row">
                    <div class="col-md-12 {{ $class ?? '' }}">
                        <h1 class="display-2 text-white">Orders</h1>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('pigeon.index') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('pigeon.orders') }}">Orders</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Orders</h3>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive" data-toggle="list" data-list-values='["id", "status", "restaurant", "user", "ordered_at", "city"]'>
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="id">ID</th>
                                    <th scope="col" class="sort" data-sort="status">Status</th>
                                    <th scope="col" class="sort" data-sort="restaurant">Restaurant</th>
                                    <th scope="col" class="sort" data-sort="user">Customer</th>
                                    <th scope="col" class="sort" data-sort="ordered_at">Ordered At</th>
                                    <th scope="col" class="sort" data-sort="city">City</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($orders as $order)
                                    <tr>
                                        <th>
                                            {{ $order->id }}
                                        </th>
                                        <th>
                                            <span class="badge badge-info">
                                                {{ $order->status }}
                                            </span>
                                        </th>
                                        <td>
                                            {{ $order->restaurant->name }}
                                        </td>
                                        <td>
                                            {{ $order->user->name }}
                                        </td>
                                        <td>
                                            {{ Carbon\Carbon::parse($order->created_at)->toDayDateTimeString() }}
                                        </td>
                                        <td>
                                            {{ App\Address::getCity($order->id) }}
                                        </td>
                                        <td>
                                            <button class="btn btn-sm" data-toggle="tooltip" onclick="window.location ='{{route('pigeon.orderDetails', $order->id)}}'">
                                                <i class="fas fa-info-circle"></i> View
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    @if($orders->hasPages())
                        <div class="card-footer">
                            {{ $orders->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @include('layouts.dashboard.footers.auth')
    </div>
@endsection


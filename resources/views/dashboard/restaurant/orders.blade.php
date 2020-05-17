@extends('layouts.dashboard.app')

@section('content')
    <style>
        .button-container form,
        .button-container form div {
            display: inline;
        }
    </style>
    <div class="header bg-gradient-primary pb-8 pt-5 pt-lg-7 d-flex">
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
                                <li class="breadcrumb-item"><a href="{{ route('restaurant.index') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Restaurant</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
                    <div class="table-responsive" data-toggle="list" data-list-values='["ordered_at", "status", "quantity", "total"]'>
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="ordered_at">Order Placed On</th>
                                    <th scope="col" class="sort" data-sort="status">status</th>
                                    <th scope="col" class="sort" data-sort="quantity">Item Quantity</th>
                                    <th scope="col" class="sort" data-sort="total">Total</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($orders as $order)
                                    <tr>
                                        <td>
                                            {{ Carbon\Carbon::parse($order->created_at)->toDayDateTimeString() }}
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <span class="badge {{$order->status->first()->getColor()}}">
                                                    {{ str_replace('_', ' ', $order->status->first()->status) }}
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            {{ $order->total_items_qty }}
                                        </td>
                                        <td class="budget">
                                            ${{ $order->billing_total }}
                                        </td>
                                        <td>
                                            <button class="btn btn-sm" data-toggle="tooltip" onclick="window.location ='{{ route('restaurant.orderDetails', $order->id) }}'">
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


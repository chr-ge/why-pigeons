@extends('layouts.dashboard.app')

@section('content')
    <style>
        .total {
            background-color: #e3e3e3;
            padding: 0.5rem;
        }
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
                    <h1 class="display-2 text-white">Order: #{{$order->id}}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 mb-xl-4">
                <div class="row h-100">
                    <div class="col-xl-12 mb-xl-0">
                        <div class="card shadow h-100">
                            <div class="card-header">
                                <h2 class="mb-0"><i class="fa fa-info-circle"></i> Information</h2>
                            </div>
                            <div class="card-body">
                                <dl class="dl-horizontal">
                                    <dt>Order Placed On</dt>
                                    <dd>{{ \Carbon\Carbon::parse($order->created_at)->toDayDateTimeString() }}</dd>
                                    <dt>Customer</dt>
                                    <dd>{{ $order->user->name }}</dd>
                                    <dt>Restaurant</dt>
                                    <dd>{{ $order->restaurant->name }}</dd>
                                    <dt>Driver</dt>
                                    <dd>{{ $order->driver->name ?? 'N/A' }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-xl-4">
                <div class="row h-100">
                    <div class="col-xl-12 mb-xl-0">
                        <div class="card shadow h-100">
                            <div class="card-header">
                                <h2 class="mb-0"><i class="fa fa-shopping-basket"></i> Order</h2>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h3>Total Items: </h3><h3>{{ $order->total_items_qty }}</h3>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h3>Subtotal: </h3><h3>${{ $order->billing_subtotal }}</h3>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h3>Delivery Fee: </h3><h3>{{ $order->billing_delivery == 0.00 ? 'Free' : '$'.$order->billing_delivery }}</h3>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h3>GST/QST: </h3><h3>${{ $order->billing_tax }}</h3>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h3>Tip: </h3><h3>${{ $order->driver_tip }}</h3>
                                </div>
                                <div class="d-flex justify-content-between total">
                                    <h3 class="mb-0"><b>Total: </b></h3><h3 class="mb-0"><b>${{ $order->billing_total }}</b></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-xl-4">
                <div class="row h-100">
                    <div class="col-xl-12 mb-xl-0">
                        <div class="card shadow h-100">
                            <div class="card-header">
                                <h2 class="mb-0"><i class="fa fa-stream"></i> Status</h2>
                            </div>
                            <div class="card-body">
                                <div class="list-group">
                                    @foreach($statuses as $status)
                                        <div class="pb-2 d-flex justify-content-between h3">
                                            <span class="badge {{ $status->getColor() }}">{{ str_replace('_', ' ', $status->status) }}</span>
                                            <span>{{ Carbon\Carbon::parse($status->created_at)->toTimeString() }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 mb-xl-0">
                <div class="card shadow border-danger">
                    <div class="card-body button-container">
                        <a href="{{ route('pigeon.userDetails', $order->user->id) }}" class="btn btn-info">View User</a>
                        <a href="{{ route('pigeon.restaurantDetails', $order->restaurant->slug) }}" class="btn btn-info">View Restaurant</a>
                        @if($order->driver)<a href="{{ route('pigeon.driverDetails', $order->driver->id) }}" class="btn btn-info">View Driver</a>@endif
                        @if(!$order->isBlocked())
                            <form method="POST" action="{{ route('pigeon.refundOrder', $order->id) }}">
                                @csrf
                                <button class="btn btn-warning">{{__('Refund Order')}}</button>
                            </form>
                            <form method="POST" action="{{ route('pigeon.cancelOrder', $order->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">{{__('Cancel Order')}}</button>
                            </form>
                        @else
                            <button class="btn btn-warning disabled">Refund Order</button>
                            <button class="btn btn-danger disabled">Cancel Order</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.dashboard.footers.auth')
    </div>
@endsection


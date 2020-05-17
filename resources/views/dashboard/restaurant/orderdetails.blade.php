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
                    <h1 class="display-2 text-white">Order #{{ $order->id }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-3 mb-xl-0 mt-4">
                <div class="row h-100">
                    <div class="col-xl-12 mb-xl-0">
                        <div class="card shadow h-100">
                            <div class="card-header">
                                <h2 class="mb-0"><i class="fa fa-info-circle"></i> Information</h2>
                            </div>
                            <div class="card-body">
                                <dl class="dl-horizontal" style="float: left;display: inline-block">
                                    <dt>Order Status:</dt>
                                    <dd><span class="badge {{ $order->status->first()->getColor() }}" style="font-size: 0.8rem">{{ $order->status->first()->status }}</span></dd>

                                    <dt class="mt-4">Order Placed At:</dt>
                                    <dd>{{$order->created_at}}</dd>

                                    <dt class="mt-4">Total Order Quantity:</dt>
                                    <dd>{{$order->total_items_qty}}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 mb-xl-0 mt-4">
                <div class="card shadow h-100">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2 class="mb-0"><i class="fa fa-receipt"></i> Ordered Menu Items</h2>
                        </div>
                    </div>
                    <div class="card-body" style="padding-top: 1rem">
                        <div class="row">
                            <div class="col-md-6"><h2 class="mb-0">Menu Item</h2></div>
                            <div class="col-md-6"><h2 class="mb-0">Item Prepared?</h2></div>
                        </div>
                        <hr class="my-3" style="border-top: 1px solid rgba(0,0,0,.05);"/>
                        <form method="POST" action="{{ route('restaurant.completeOrder', $order->id) }}">
                            @csrf
                            @foreach($order->menu_items as $item)
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <span class="badge badge-dark">{{ $item->pivot->quantity }}</span>
                                        <h4 class="d-inline-block mb-0">{{$item->name}}</h4>
                                        @if($item->pivot->special)<h5 style="text-indent:2em">- {{ $item->pivot->special }}</h5>@endif
                                    </div>
                                    <div class="col-md-6">
                                        <label class="custom-toggle mb-0">
                                            <input type="checkbox" {{ $order->isBlocked() || $order->status->first()->status === 'food_ready_for_pickup' ? 'checked disabled' : 'required'}}>
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </div>
                                </div>
                            @endforeach

                            <button class="btn {{ $order->status->first()->status === 'food_ready_for_pickup' ? 'btn-dark' : 'btn-success' }} btn-block mt-4" type="submit"
                                    title="{{ $order->status === 'ready_for_pickup' ? 'Order has already been completed.' :
                                        'Toggle all switches to complete order.'}}"
                                    @if($order->isBlocked() || $order->status->first()->status === 'food_ready_for_pickup') disabled @endif>Complete Order
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-xl-12 mb-xl-0">
                <div class="card shadow border-danger">
                    <div class="card-body button-container">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete"
                                @if($order->isBlocked()) disabled @endif>{{__('Cancel')}}</button>
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
                                            <p>Are you sure you want to cancel this order?</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{ route('restaurant.cancelOrder', $order->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <input type="submit" value="{{__('Cancel')}}" class="btn btn-white"/>
                                        </form>
                                        <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.dashboard.footers.auth')
    </div>
@endsection


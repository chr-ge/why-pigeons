@extends('layouts.app')

@section('title', 'Your Order History')

@section('content')
    <div class="container">
        <h1 class="pt-4">Your Order History</h1>

        <div class="row justify-content-center">
            <div class="col-md-12">
                @forelse($orders as $order)
                    <div class="card mt-4">
                        <div class="card-header card-header-bg">
                            <h4 class="mb-0 d-inline-block">{!! '<b>#'.$order->id.'</b>'.' | Order From '.$order->restaurant->name !!}</h4>
                            <h4 class="mb-0 float-right">{{ Carbon\Carbon::parse($order->created_at)->toFormattedDateString() }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="w-50">
                                        <div class="m-row">
                                            <h5>Status: </h5><h5><span class="badge {{ $order->getStatus() }}">{{ $order->status }}</span></h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>Subtotal: </h5><h5>${{ $order->billing_subtotal }}</h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>Delivery Fee: </h5><h5>${{ $order->billing_delivery }}</h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>GST/QST: </h5><h5>${{ $order->billing_tax }}</h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>Tip: </h5><h5>${{ $order->driver_tip }}</h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>Total: </h5><h5>${{ $order->billing_total }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    @foreach($order->menu_items as $item)
                                        <ul class="list-unstyled">
                                            <li><span class="badge badge-dark">{{ $item->pivot->quantity }}</span> {{$item->name}}</li>
                                        </ul>
                                    @endforeach
                                </div>
                                <div class="col-md-2">
                                    <div class="list-group text-center">
                                        <a href="{{ route('home.show', $item->restaurant_id) }}" class="list-group-item list-group-item-action">Order Again</a>
                                        <a href="#" class="list-group-item list-group-item-action">Leave a Review</a>
                                        <a href="#" class="list-group-item list-group-item-action">Request Refund</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card mt-5">
                                <div class="card-body text-center">
                                    <i class="fas fa-receipt fa-4x" style="color: #BFBDDB;"></i>
                                    <h2 class="mt-4">You haven't made any orders yet.</h2>
                                <p class="px-5 py-4">You haven't made any orders yet. Try one of our awesome restaurants and place your first order!</p>
                                <a href="{{ route('home.index') }}" class="btn btn-primary">Browse Restaurants</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
        @if($orders->hasPages())
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    {{ $orders->links() }}
                </div>
            </div>
        @endif
    </div>
@endsection

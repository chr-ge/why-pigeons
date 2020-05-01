@extends('layouts.app')

@section('title', 'Your Order History')

@section('content')
    <div class="container" style="height: 65vh">
        <h1 class="pt-4">Your Order History</h1>

        <div class="row justify-content-center">
            <div class="col-md-12">
                @forelse($orders as $order)
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4 class="mb-0">{!! '<b>#'.$order->id.'</b>'.' | '.$order->created_at !!}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Tip: ${{ $order->driver_tip }}</h5>
                                    <h5>Total: ${{ $order->billing_total }}</h5>
                                </div>
                                <div class="col-md-6">
                                    @foreach($order->menu_items as $item)
                                        <ul class="list-unstyled">
                                            <li><span class="badge badge-dark">{{ $item->pivot->quantity }}</span> {{$item->name}}</li>
                                        </ul>
                                    @endforeach
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
    </div>
@endsection

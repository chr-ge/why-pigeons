@extends('layouts.app')

@section('title', 'Your Trip History')

@section('content')
    <div class="container">
        <h1 class="pt-4">Your Trip History</h1>

        <div class="row justify-content-center">
            <div class="col-md-12">
                @forelse($trips as $trip)
                    <div class="card mt-4">
                        <div class="card-header card-header-bg">
                            <h4 class="mb-0 d-inline-block">{!! '<b>#'.$trip->id.'</b>'.' | Trip From '.$trip->restaurant->name !!}</h4>
                            <h4 class="mb-0 float-right">{{ Carbon\Carbon::parse($trip->created_at)->toFormattedDateString() }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="w-50">
                                        <div class="m-row">
                                            <h5>Status: </h5><h5><span class="badge {{ $trip->getStatus() }}">{{ $trip->status }}</span></h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>Subtotal: </h5><h5>${{ $trip->billing_subtotal }}</h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>Delivery Fee: </h5><h5>${{ $trip->billing_delivery }}</h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>GST/QST: </h5><h5>${{ $trip->billing_tax }}</h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>Tip: </h5><h5>${{ $trip->driver_tip }}</h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>Total: </h5><h5>${{ $trip->billing_total }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    @foreach($trip->menu_items as $item)
                                        <ul class="list-unstyled">
                                            <li><span class="badge badge-dark">{{ $item->pivot->quantity }}</span> {{$item->name}}</li>
                                        </ul>
                                    @endforeach
                                </div>
                                <div class="col-md-2">
                                    <div class="list-group text-center">
                                        <a href="{{ route('home.show', $item->restaurant->slug) }}" class="list-group-item list-group-item-action">Order Again</a>
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
                                    <i class="fas fa-route fa-4x" style="color: #BFBDDB;"></i>
                                    <h2 class="mt-4">You haven't made any trips yet.</h2>
                                <p class="px-5 py-4">You haven't made any trips yet. Check our the trips list and reserve your first trip!</p>
                                <a href="{{ route('driver.index') }}" class="btn btn-primary">Reserve Trip</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
        @if($trips->hasPages())
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    {{ $trips->links() }}
                </div>
            </div>
        @endif
    </div>
@endsection

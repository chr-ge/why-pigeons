@extends('layouts.app')

@section('title', 'Your Trip History')

@section('content')
    <div class="container" @if($trips->count() < 2) style="height: 66vh" @endif>
        <h1 class="pt-4">Your Trip History</h1>

        <div class="row justify-content-center">
            <div class="col-md-12">
                @forelse($trips as $trip)
                    <div class="card mt-4">
                        <div class="card-header card-header-bg">
                            <h4 class="mb-0 d-inline-block">{!! '<b>#'.$trip->id.'</b>'.' | Trip To '.$trip->restaurant->name !!}</h4>
                            <h4 class="mb-0 float-right">{{ Carbon\Carbon::parse($trip->created_at)->toFormattedDateString() }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="w-25">
                                        <div class="m-row">
                                            <h5>Status: </h5><h5><span class="badge {{ $trip->status->first()->getColor() }}">{{ $trip->status->first()->status }}</span></h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>Delivery: </h5><h5>{{ $trip->billing_delivery == 0.00 ? 'Free' : '$'.$trip->billing_delivery }}</h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>Tip: </h5><h5>${{ $trip->driver_tip }}</h5>
                                        </div>
                                        <div class="m-row">
                                            <h5>Total: </h5><h5>${{ number_format($trip->driver_tip + $trip->billing_delivery, 2, '.', '') }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <div class="list-group text-center">
                                        <a href="{{ route('driver.order', $trip->id) }}" class="list-group-item list-group-item-action">View Route</a>
                                        <a href="#" class="list-group-item list-group-item-action @if($trip->status->first()->status === 'delivered') disabled @endif">Cancel</a>
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
                                <p class="px-5 py-4">You haven't made any trips yet. Check out the trips list and reserve your first trip!</p>
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

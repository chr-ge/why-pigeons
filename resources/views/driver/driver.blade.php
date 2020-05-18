@extends('layouts.app')

@section('title', config('app.name').' | Driver')

@section('content')
    <div class="container mt-4">
        @if(count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Error!</strong> {{ $errors->first() }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(\Gate::denies('license-is-created', auth()->user()->id))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Attention!</strong> You have not provided your Drivers License.
                    <a href="{{ route('driver.setup') }}" class="alert-link">add it here</a>
                </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(!auth()->user()->vehicle)
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Attention!</strong> You have not provided your vehicle information.
                <a href="{{ route('driver.vehicle') }}" class="alert-link">add it here</a>
            </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            @include('partials.driver_cards')
        </div>
        @if($reserved)
            <div class="row mt-5">
                <div class="col-md-12">
                    <h3><span class="highlight-container-y"><span class="highlight">Reserved Active Orders</span></span></h3>
                </div>
                <div class="col-md-12">
                    <div class="list-group">
                        <li class="list-group-item list-group-item-action orders-list">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-0 d-inline-block">{{ $reserved->restaurant->name }}</h4><span style="padding: 0 0.5rem">•</span>
                                <h4 class="mb-0 d-inline-block">{{ $reserved->restaurant->address->street_address }}</h4>
                            </div>
                            <a href="{{ route('driver.order', $reserved->id) }}" class="btn btn-success btn-sm btn-driver">View Trip</a>
                        </li>
                    </div>
                </div>
            </div>
        @endif
        <div class="row mt-5">
            <div class="col-md-12">
                <h3><span class="highlight-container-y"><span class="highlight">Orders Available For Pickup</span></span></h3>
            </div>
            <div class="col-md-12">
                <div class="list-group">
                    @forelse($orders as $order)
                        <li class="list-group-item list-group-item-action">
                            <form class="orders-list" method="POST" action="{{ route('driver.reserve', $order->id) }}">
                                @csrf
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 d-inline-block">{{ $order->restaurant->name }}</h4><span style="padding: 0 0.5rem">•</span>
                                    <h4 class="mb-0 d-inline-block">{{ $order->restaurant->address->street_address }}</h4>
                                </div>
                                <button class="btn btn-pigeon btn-sm btn-driver">Reserve</button>
                            </form>
                        </li>
                    @empty
                        <li class="list-group-item"><h5 class="mb-0 text-muted">No active orders at this time.</h5></li>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection

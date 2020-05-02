@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @if(Gate::denies('license-is-created', auth()->user()->id))
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
    </div>
@endsection

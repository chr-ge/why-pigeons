@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Search</div>

                <div class="card-body">
                    {{session('status') == true}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($restaurants as $restaurant)
            <div class="module col-4 mb-4">
                <a href="/public/r/{{ $restaurant->id }}">
                    <img src="/public/storage/{{ $restaurant->image }}" class="w-100">
                    <div class="content">
                        <h1>{{ $restaurant->name }}</h1>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection


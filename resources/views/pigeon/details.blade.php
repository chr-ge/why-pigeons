@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/public/pigeon">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Restaurants</a></li>
            <li class="breadcrumb-item active">{{ $restaurant->name }}</li>
        </ol>
        <div class="row">
            <div class="col-3 p-3">
                <img src="/public/storage/{{ $restaurant->image }}" class="w-100">
            </div>
            <div class="col-9 pt-3">
                @if (Session::has('success'))
                    <div class="d-flex alert alert-success">
                        {!! Session::get('success') !!}
                    </div>
                @endif

                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4">{{ $restaurant->name }}</div>

                    </div>
                </div>

                <div class="d-flex">
                    <div class="pr-5">ID: <strong>{{ $restaurant->id }}</strong></div>
                    <div class="pr-5">Email: <strong>{{ $restaurant->email }}</strong></div>
                    <div class="pr-5">Phone: <strong>{{ $restaurant->phone }}</strong></div>
                    <div class="pr-5">Category_id: <strong>{{ $restaurant->category_id }}</strong></div>
                </div>

                <div class="w-50 pt-4">
                    @if($restaurant->password === null)
                        <form method="POST" action="/public/pigeon/details/{{ $restaurant->id }}">
                            @method('PATCH')
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Set Temporary Password" name="temp_pass">
                                <div class="input-group-append">
                                    <input type="submit" value="Update" class="btn btn-primary" />
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Restaurant Dashboard</div>

                    <div class="card-body">
                        Hi Chef!
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Categories</div>

                    <div class="card-body">
                        <div>
                            @foreach($restaurant->categories as $category)
                                <span class="badge badge-primary">{{$category->name}}</span>
                            @endforeach
                        </div>
                        <form method="POST" action="{{ route('addCategory') }}">
                            @csrf
                            <div class="input-group mt-3 w-50">
                                <select id="category_id" class="form-control" name="category_id">
                                    <option value="" disabled selected>Type of cuisine</option>
                                    @foreach($categories as $category => $value)
                                        <option value="{{ $value }}">{{ $category }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary">Add category</button>
                            </div>
                        </form>
                        @if (Session::has('error'))
                            <div class="w-50 alert alert-danger mt-3 mb-0">
                                {!! Session::get('error') !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        Hi boss! <br />{{ date('H:i F-d-y') }}
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">New Restaurants</div>

                    <div class="card-body">
                        <table class="table table-hover table-striped table-sm m-0">
                            <thead>
                                <tr>
                                    <td>Restaurant Name</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Category</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($new_restaurants as $restaurant)
                                    <tr>
                                        <td>{{ $restaurant->name }}</td>
                                        <td>{{ $restaurant->email }}</td>
                                        <td>{{ $restaurant->phone }}</td>
                                        <td>{{ $restaurant->category_id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Restaurants</div>

                    <div class="card-body">
                        <table class="table table-hover table-striped table-sm m-0">
                            <thead>
                            <tr>
                                <td>Restaurant Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Category</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($all_restaurants as $restaurant)
                                <tr>
                                    <td>{{ $restaurant->name }}</td>
                                    <td>{{ $restaurant->email }}</td>
                                    <td>{{ $restaurant->phone }}</td>
                                    <td>{{ $restaurant->category_id }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.dashboard.app')

@section('content')
    <style>
        .table-action {
            font-size:.875rem;
            margin:0 .25rem;
            color:#adb5bd
        }
        .table-action:hover {
            color:#919ca6
        }
        .table-action-delete:hover {
            color:#f5365c
        }
        .button-container form,
        .button-container form div {
            display: inline;
        }
    </style>

    <div class="header bg-gradient-primary pb-8 pt-5 pt-lg-7 d-flex">
        <!-- Header container -->
        <div class="container-fluid">
            <div class="header-body">
                <div class="row">
                    <div class="col-md-12 {{ $class ?? '' }}">
                        <h1 class="display-2 text-white">Restaurant Applications</h1>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('pigeon.index') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('pigeon.restaurants') }}">Restaurants</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Applications</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                    </div>
                </div>
                @if (Session::has('success'))
                    <div class="row">
                        <div class="col col-md-6 offset-md-3 text-center">
                            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                <span class="alert-icon"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                <span class="alert-text">{!! Session::get('success') !!}</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Restaurants</h3>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive" data-toggle="list" data-list-values='["name", "description", "price", "category"]'>
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Restaurant Name</th>
                                    <th scope="col" class="sort" data-sort="price">Email</th>
                                    <th scope="col" class="sort" data-sort="price">Phone</th>
                                    <th scope="col" class="sort" data-sort="category">Category</th>
                                    <th scope="col" class="sort" data-sort="city">City</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($restaurants as $restaurant)
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    @if($restaurant->image)
                                                        <img alt="Image" src="{{ url('storage/'.$restaurant->image) }}">
                                                    @endif
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{$restaurant->name}}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <span class="status">{{$restaurant->email}}</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <span class="status">{{$restaurant->phone}}</span>
                                            </span>
                                        </td>
                                        <td>
                                            {{App\Category::find($restaurant->category_id)->name}}
                                        </td>
                                        <td>
                                            {{$restaurant->address->city ?? 'N/A'}}
                                        </td>
                                        <td>
                                            <div class="button-container">
                                                <div style="display: inline-block">
                                                    <a href="{{route('restaurant.editMenuItem', $restaurant->id)}}" class="table-action" data-toggle="tooltip" data-original-title="Edit menu item" onclick="window.location ='{{route('restaurant.editMenuItem', $restaurant->id)}}'">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </div>

                                                <form id="delete-form-{{$restaurant->id}}" action="{{route('restaurant.deleteMenuItem', $restaurant->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div>
                                                        <a href="" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete menu item"
                                                           onclick="document.getElementById('delete-form-{{$restaurant->id}}').submit();">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    @if($restaurants->hasPages())
                        <div class="card-footer">
                            {{ $restaurants->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @include('layouts.dashboard.footers.auth')
    </div>
@endsection


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
                        <h1 class="display-2 text-white">Menu</h1>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('restaurant.index') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Restaurant</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Menu</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="{{ route('restaurant.newMenuItem') }}" class="btn btn-sm btn-neutral">New</a>
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
                        <h3 class="mb-0">{{auth()->user()->name}} Menu</h3>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive" data-toggle="list" data-list-values='["name", "description", "price", "category"]'>
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Item Name</th>
                                    <th scope="col" class="sort" data-sort="description">Description</th>
                                    <th scope="col" class="sort" data-sort="price">Price</th>
                                    <th scope="col" class="sort" data-sort="category">Category</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($menu_items as $menu_item)
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <span class="avatar rounded-circle mr-3">
                                                    @if($menu_item->image)
                                                        <img alt="Image" src="{{ url('storage/'.$menu_item->image) }}">
                                                    @endif
                                                </span>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{$menu_item->name}}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <span class="status">{{ \Illuminate\Support\Str::limit($menu_item->description, 40, $end='...') }}</span>
                                            </span>
                                        </td>
                                        <td class="budget">
                                            $ {{$menu_item->price}}
                                        </td>
                                        <td>
                                            {{$menu_item->category->name ?? 'None'}}
                                        </td>
                                        <td>
                                            <div class="button-container">
                                                <div style="display: inline-block">
                                                    <a href="{{route('restaurant.editMenuItem', $menu_item->id)}}" class="table-action" data-toggle="tooltip" data-original-title="Edit menu item" onclick="window.location ='{{route('restaurant.editMenuItem', $menu_item->id)}}'">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </div>

                                                <form id="delete-form-{{$menu_item->id}}" action="{{route('restaurant.deleteMenuItem', $menu_item->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div>
                                                        <a href="" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete menu item"
                                                           onclick="document.getElementById('delete-form-{{$menu_item->id}}').submit();">
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
                    <!-- Pagination -->
                    @if($menu_items->hasPages())
                        <div class="card-footer">
                            {{ $menu_items->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @include('layouts.dashboard.footers.auth')
    </div>
@endsection


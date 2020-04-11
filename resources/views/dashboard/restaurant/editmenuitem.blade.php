@extends('layouts.dashboard.app')

@section('content')
    <script>
        $(document).ready(function () {
            $('#categories').select2().val('{{$menu->category_id}}').trigger('change');
        });
    </script>
    <style>
        .select2-selection__rendered {
            line-height: 46px !important;
        }
        .select2-selection {
            height: 46px !important;
        }
        .select2-selection__arrow {
            height: 46px !important;
        }
    </style>
    <div class="header bg-gradient-info pb-8 pt-5 pt-lg-7 d-flex">
        <!-- Header container -->
        <div class="container-fluid">
            <div class="header-body">
                <div class="row">
                    <div class="col-md-12 {{ $class ?? '' }}">
                        <h1 class="display-2 text-white">Edit Menu Item</h1>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('restaurant.index') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Restaurant</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('restaurant.menu') }}">Menu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-10 ml-auto mr-auto mb-xl-0">
                <div class="card shadow">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0"><i class="far fa-edit"></i> Edit menu item #{{$menu->id}}</h3>
                    </div>
                    <div class="card-body" >
                        <form method="POST" action="{{route('restaurant.updateMenuItem', $menu->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label class="col-form-label" for="name">Item Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $menu->name }}" placeholder="Item Name" id="name" required>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="description">Item Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="2" resize="none">{{ old('description') ?? $menu->description}}</textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="custom-file mb-4" style="height: auto">
                                <label class="custom-file-label" for="image">{{ $menu->image ?: 'Choose an optional menu image' }}</label>
                                <input type="file" class="custom-file-input" id="image" name="image">

                                @error('image')
                                <div class="text-danger" role="alert">
                                    <small><strong>{{ $message }}</strong></small>
                                </div>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label" for="price">Price</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') ?? $menu->price }}" required>
                                        </div>

                                        @error('price')
                                        <div class="text-danger mb-4" role="alert">
                                            <small><strong>{{ $message }}</strong></small>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <div class="input-group" >
                                            <select id="categories" class="form-control" name="category_id" style="width: 100%" required>
                                                @foreach($categories as $category => $value)
                                                    <option value="{{$value}}">{{$category}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.dashboard.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/select2.min.js') }}"></script>
@endpush


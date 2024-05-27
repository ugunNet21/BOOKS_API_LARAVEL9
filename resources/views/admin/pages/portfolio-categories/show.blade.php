@extends('admin.layouts.app')

@section('title', 'View Portfolio Category')

@section('content')
    <div class="container">
        <div id="main">
            <header class="mb-3">
                <div class="page-header">
                    <div class="page-title">
                        <h3>View Portfolio Category</h3>
                    </div>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('portfolios_categries.index') }}">Portfolio Categories</a></li>
                            <li>View</li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Category Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <p>{{ $category->title }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <p>{{ $category->description }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <p>{{ $category->status }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="picture">Picture</label>
                                    @if ($category->picture)
                                        <img src="{{ asset('storage/category_pictures/' . $category->picture) }}"
                                            alt="Category Picture" style="max-width: 200px;">
                                    @else
                                        <p>No picture available</p>
                                    @endif
                                </div><br>
                                <div class="form-group">
                                    <a href="{{ route('portfolios_categries.index') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
@endsection

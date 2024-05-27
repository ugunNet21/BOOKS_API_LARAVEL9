@extends('admin.layouts.app')

@section('title', 'View Portfolio')

@section('content')
   <div class="container">
    <div id="main">
        <header class="mb-3">
            <div class="page-header">
                <div class="page-title">
                    <h3>View Portfolio</h3>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('portfolios.index') }}">Portfolios</a></li>
                        <li>View</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Portfolio Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <p>{{ $portfolio->title }}</p>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <p>{{ $portfolio->description }}</p>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <p>{{ $portfolio->category->title }}</p>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <p>{{ $portfolio->status }}</p>
                            </div>
                            @if ($portfolio->picture)
                                <div class="form-group">
                                    <label for="picture">Picture</label>
                                    <div>
                                        <img src="{{ asset('storage/portfolio_pictures/' . $portfolio->picture) }}"
                                            alt="Portfolio Picture" style="max-width: 200px;">
                                    </div>
                                </div>
                            @endif
                            <br>
                            <div class="form-group">
                                <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
   </div>
@endsection

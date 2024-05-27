@extends('admin.layouts.app')

@section('title', 'Portfolios')
@section('content')
    <div class="container">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-content">
                <div class="page-title">
                    <h3>Page / Portfolios</h3>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li>Portfolios</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Portfolios</h4>
                            <div class="card-options">
                                <a href="{{ route('portfolios.create') }}" class="btn btn-primary">Add New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portfolios as $portfolio)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $portfolio->title }}</td>
                                                <td>{{ $portfolio->description }}</td>
                                                <td>{{ $portfolio->category->title }}</td>
                                                <td>{{ $portfolio->status }}</td>
                                                <td>
                                                    <a href="{{ route('portfolios.show', $portfolio->id) }}"
                                                        class="btn btn-info btn-sm">View</a>
                                                    <a href="{{ route('portfolios.edit', $portfolio->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="{{ route('portfolios.destroy', $portfolio->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this portfolio?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

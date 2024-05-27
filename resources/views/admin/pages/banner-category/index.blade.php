@extends('admin.layouts.app')
@section('title')
    Dashboard - Banner Categories
@endsection
@section('content')
    <div class="container">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Page / Banner Categories</h3>
            </div>
            <div class="page-content">
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <a href="{{ route('banner_categories.create') }}" class="btn btn-primary">Add Banner Categories</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Banner Categories</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Picture</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bannerCategories as $category)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    {{-- <td>{{ $category->id }}</td> --}}
                                                    <td>{{ $category->title }}</td>
                                                    <td>{{ $category->description }}</td>
                                                    <td>
                                                        @if ($category->picture)
                                                            <img src="{{ asset('storage/category_banner/' . $category->picture) }}"
                                                                alt="Category Picture" style="max-width: 200px;">
                                                        @else
                                                            No picture available
                                                        @endif
                                                    </td>
                                                    <td>{{ $category->status }}</td>
                                                    <td>
                                                        <a href="{{ route('banner_categories.edit', $category->id) }}"
                                                            class="btn btn-sm btn-primary">Edit</a>
                                                        <form action="{{ route('banner_categories.destroy', $category->id) }}"
                                                            method="POST" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
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
    </div>
    <!-- /.container-fluid -->
@endsection

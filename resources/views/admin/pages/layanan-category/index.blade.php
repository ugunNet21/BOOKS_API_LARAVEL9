@extends('admin.layouts.app')

@section('title', 'Services Categories')

@section('content')
   <div class="container">
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Services Categories</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Services Categories
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-3 col-12">
                <div class="btn-group float-md-right">
                    <a href="{{ route('layanans_categories.create') }}" class="btn btn-primary btn-sm"><i
                            class="feather icon-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- DataTables example -->
            <section id="data-list-view" class="data-list-view-header">
                <div class="table-responsive">
                    <table class="table data-list-view">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="product-name">{{ $category->title }}</td>
                                    <td class="product-category">{{ $category->description }}</td>
                                    <td class="product-status">
                                        @if ($category->status == 'aktif')
                                            <span class="badge badge-success">Aktif</span>
                                        @else
                                            <span class="badge badge-danger">Tidak Aktif</span>
                                        @endif
                                    </td>
                                    <td class="product-action">
                                        <a href="{{ route('layanans_categories.show', $category->id) }}"
                                            class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('layanans_categories.edit', $category->id) }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('layanans_categories.destroy', $category->id) }}"
                                            method="POST" class="d-inline">
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
            </section>
            <!-- /DataTables example -->
        </div>
    </div>
   </div>
@endsection

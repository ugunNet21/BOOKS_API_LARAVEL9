<!-- resources/views/admin/pages/testimonials/index.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Testimonials')

@section('content')
    <div class="container">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-content">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-left mb-0">Testimonials</h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active">Testimonials
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-right col-md-3 col-12">
                        <div class="btn-group float-md-right">
                            <a href="{{ route('testimonials.create') }}" class="btn btn-primary btn-sm"><i
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
                                        <th>Content</th>
                                        <th>Rating</th>
                                        <th>Author Name</th>
                                        <th>Author Position</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonials as $testimonial)
                                        <tr>
                                            <td>{{ $testimonial->id }}</td>
                                            <td>{{ $testimonial->content }}</td>
                                            <td>{{ $testimonial->rating }}</td>
                                            <td>{{ $testimonial->author_name }}</td>
                                            <td>{{ $testimonial->author_position }}</td>
                                            <td>
                                                <a href="{{ route('testimonials.show', $testimonial->id) }}"
                                                    class="btn btn-info">View</a>
                                                <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="{{ route('testimonials.destroy', $testimonial->id) }}"
                                                    method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this testimonial?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

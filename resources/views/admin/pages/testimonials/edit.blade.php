<!-- resources/views/admin/pages/testimonials/edit.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Edit Testimonials')

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
                    <h2>Edit Testimonial</h2>
                    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea class="form-control" id="content" name="content" rows="3">{{ $testimonial->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating:</label>
                            <input type="number" class="form-control" id="rating" name="rating" min="1"
                                max="5" value="{{ $testimonial->rating }}">
                        </div>
                        <div class="form-group">
                            <label for="author_name">Author Name:</label>
                            <input type="text" class="form-control" id="author_name" name="author_name"
                                value="{{ $testimonial->author_name }}">
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture:</label>
                            <input type="file" class="form-control-file" id="picture" name="picture">
                            <img src="{{ asset('images/' . $testimonial->picture) }}" alt="Author Picture">
                        </div>
                        <div class="form-group">
                            <label for="author_position">Author Position:</label>
                            <input type="text" class="form-control" id="author_position" name="author_position"
                                value="{{ $testimonial->author_position }}">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

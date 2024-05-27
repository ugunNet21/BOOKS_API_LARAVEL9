<!-- resources/views/admin/pages/testimonials/show.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Detail Testimonials')

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
                    <h2>Testimonial Detail</h2>
                    <p><strong>Content:</strong> {{ $testimonial->content }}</p>
                    <p><strong>Rating:</strong> {{ $testimonial->rating }}</p>
                    <p><strong>Author Name:</strong> {{ $testimonial->author_name }}</p>
                    <p><strong>Author Position:</strong> {{ $testimonial->author_position }}</p>
                    <img src="{{ asset('images/' . $testimonial->picture) }}" alt="Author Picture" style="max-width: 200px;">
                </div>
            </div>
        </div>
    </div>
@endsection

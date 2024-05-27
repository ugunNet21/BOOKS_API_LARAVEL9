@extends('admin.layouts.app')

@section('title', 'Show Services Category')

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
                            <h2 class="content-header-title float-left mb-0">Show Services Category</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('layanans_categories.index') }}">Services
                                            Categories</a>
                                    </li>
                                    <li class="breadcrumb-item active">Show
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Services Category Details</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" class="form-control"
                                                value="{{ $category->title }}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" class="form-control" readonly>{{ $category->description }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" id="status" class="form-control"
                                                value="{{ $category->status }}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="picture">Picture</label><br>
                                            @if ($category->picture)
                                                <img src="{{ asset('storage/category_pictures/' . $category->picture) }}"
                                                    alt="Category Picture" style="max-width: 200px;">
                                            @else
                                                <span>No Picture Available</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Horizontal form layout section end -->
            </div>
        </div>
    </div>
@endsection

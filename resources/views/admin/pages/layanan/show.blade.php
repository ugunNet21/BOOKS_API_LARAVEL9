@extends('admin.layouts.app')

@section('title', 'Show Services')

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
                            <h2 class="content-header-title float-left mb-0">Show Services</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('layanans.index') }}">Services</a>
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
                                    <h4 class="card-title">Services Details</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" class="form-control"
                                                value="{{ $layanan->title }}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" class="form-control" readonly>{{ $layanan->description }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <input type="text" id="category" class="form-control"
                                                value="{{ $layanan->category->title }}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" id="status" class="form-control"
                                                value="{{ $layanan->status }}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="picture">Picture</label><br>
                                            @if ($layanan->picture)
                                                <img src="{{ asset('storage/layanan_pictures/' . $layanan->picture) }}"
                                                    alt="Layanan Picture" style="max-width: 200px;">
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

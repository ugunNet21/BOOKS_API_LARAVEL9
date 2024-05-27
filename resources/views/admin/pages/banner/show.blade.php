@extends('admin.layouts.app')
@section('title')
    Detail Banner
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
                <h3>Page / Detail Banner</h3>
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Banner Detail</h6>
                            </div>
                            <div class="card-body">
                                <p><strong>Title:</strong> {{ $banner->title }}</p>
                                <p><strong>Description:</strong> {{ $banner->description }}</p>
                                <p><strong>Address:</strong> {{ $banner->address }}</p>
                                <p><strong>Status:</strong> {{ $banner->status }}</p>
                                <p><strong>Picture:</strong></p>
                                @if ($banner->picture)
                                    <img src="{{ asset('storage/banner_pictures/' . $banner->picture) }}"
                                        alt="Banner Picture" style="max-width: 200px;">
                                @else
                                    <p>No picture available</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

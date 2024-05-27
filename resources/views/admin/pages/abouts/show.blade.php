@extends('admin.layouts.app')

@section('title', 'Show About - My Bio')

@section('content')
   <div class="container">
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Page / About</h3>
        </div>
        <div class="page-content">
            <div class="content-heading">
                <div class="heading-left">
                    <h1 class="page-title">Show About</h1>
                    <p class="page-subtitle">View about information</p>
                </div>
                <div class="heading-right mb-2">
                    <a href="{{ route('abouts.index') }}" class="btn btn-secondary">Back to About</a>
                </div>
            </div>

            <div class="content-body">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" class="form-control" value="{{ $about->title }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" class="form-control" rows="4" disabled>{{ $about->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea id="address" class="form-control" rows="4" disabled>{{ $about->address }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="projects_completed">Project Completed</label>
                            <input type="text" id="projects_completed" class="form-control" value="{{ $about->projects_completed }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="happy_clients">Happy Clients</label>
                            <input type="text" id="happy_clients" class="form-control" value="{{ $about->happy_clients }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture</label><br>
                            @if ($about->picture)
                                <img src="{{ asset('storage/about_pictures/' . $about->picture) }}" alt="About Picture"
                                    style="max-width: 200px;">
                            @else
                                <p>No Picture Available</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" id="status" class="form-control" value="{{ $about->status }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection

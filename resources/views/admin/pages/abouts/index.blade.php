@extends('admin.layouts.app')

@section('title', 'About - My Bio')

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
                        <h1 class="page-title">About</h1>
                        <p class="page-subtitle">List of about information</p>
                    </div>
                    <div class="heading-right mb-2">
                        <a href="{{ route('abouts.create') }}" class="btn btn-primary">Add New</a>
                    </div>
                </div>

                <div class="content-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Address</th>
                                            <th>Picture</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($abouts as $about)
                                            <tr>
                                                <td>{!! Str::limit($about->title, 50 ) !!}</td>
                                                <td>{!! Str::limit($about->description, 50) !!}</td>
                                                <td>{!! Str::limit($about->address, 100) !!}</td>
                                                <td>
                                                    @if ($about->picture)
                                                        <img src="{{ asset('storage/about_pictures/' . $about->picture) }}"
                                                            alt="{{ $about->title }}" style="max-width: 100px;">
                                                    @else
                                                        No picture available
                                                    @endif
                                                </td>
                                                <td>{{ $about->status }}</td>
                                                <td>
                                                    <a href="{{ route('abouts.show', $about->id) }}"
                                                        class="btn btn-sm btn-info">View</a>
                                                    <a href="{{ route('abouts.edit', $about->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('abouts.destroy', $about->id) }}" method="POST"
                                                        style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this about?')">Delete</button>
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

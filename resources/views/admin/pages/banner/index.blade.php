@extends('admin.layouts.app')
@section('title')
    Dashboard - Banner
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
                <h3>Page / Banner</h3>
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Banner List</h6>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('banner.create') }}" class="btn btn-primary mb-3">{{ __('Add Banner') }}</a>
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
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($banners as $banner)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    {{-- <td>{{ $banner->id }}</td> --}}
                                                    <td>{{ $banner->title }}</td>
                                                    <td>{{ $banner->description }}</td>
                                                    <td>
                                                        @if ($banner->picture)
                                                            <img src="{{ asset('storage/banner_pictures/' . $banner->picture) }}"
                                                                alt="Banner Picture" style="max-width: 200px;">
                                                        @else
                                                            No picture available
                                                        @endif
                                                    </td>
                                                    <td>{{ $banner->status }}</td>
                                                    <td>
                                                        <a href="{{ route('banner.edit', $banner->id) }}"
                                                            class="btn btn-sm btn-primary">Edit</a>
                                                        <form action="{{ route('banner.destroy', $banner->id) }}" method="POST"
                                                            style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this banner?')">Delete</button>
                                                        </form>
                                                        <a href="{{ route('banner.show', $banner->id) }}"
                                                            class="btn btn-sm btn-info">View</a>
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
@endsection

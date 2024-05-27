<!-- resources/views/skills/index.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Skills')

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
                                <h2 class="content-header-title float-left mb-0">Skills</h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active">Skills
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-right col-md-3 col-12">
                        <div class="btn-group float-md-right">
                            <a href="{{ route('skills.create') }}" class="btn btn-primary btn-sm"><i
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
                                        <th>Picture</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($skills as $skill)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $skill->title }}</td>
                                            <td>{{ $skill->description }}</td>
                                            <td>
                                                @if ($skill->picture)
                                                    <img src="{{ asset('storage/skill_pictures/' . $skill->picture) }}"
                                                        alt="{{ $skill->title }}" width="50">
                                                @endif
                                            </td>
                                            <td>{{ $skill->status ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('skills.show', $skill->id) }}"
                                                    class="btn btn-primary btn-sm">View</a>
                                                <a href="{{ route('skills.edit', $skill->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
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
@endsection

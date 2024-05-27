<!-- resources/views/skills/show.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Skill Details')

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
                                <h2 class="content-header-title float-left mb-0">Skill Details</h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('skills.index') }}">Skills</a>
                                        </li>
                                        <li class="breadcrumb-item active">Skill Details
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Skill Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $skill->title }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" readonly>{{ $skill->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="picture">Picture</label>
                                        @if ($skill->picture)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/skill_pictures/' . $skill->picture) }}" alt="{{ $skill->title }}" width="100">
                                            </div>
                                        @else
                                            <p>No picture available</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control" id="status" name="status" value="{{ $skill->status ? 'Active' : 'Inactive' }}" readonly>
                                    </div>
                                    <a href="{{ route('skills.index') }}" class="btn btn-secondary">Back to Skills</a>
                                    <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-warning">Edit</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

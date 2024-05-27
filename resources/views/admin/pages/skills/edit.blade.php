<!-- resources/views/skills/edit.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Edit Skill')

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
                                <h2 class="content-header-title float-left mb-0">Edit Skill</h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('skills.index') }}">Skills</a>
                                        </li>
                                        <li class="breadcrumb-item active">Edit Skill
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
                                    <h4 class="card-title">Edit Skill</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $skill->title }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $skill->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="picture">Picture</label>
                                            <input type="file" class="form-control-file" id="picture" name="picture" accept="image/*">
                                            @if ($skill->picture)
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/skill_pictures/' . $skill->picture) }}" alt="{{ $skill->title }}" width="100">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status" required>
                                                <option value="1" {{ $skill->status ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ !$skill->status ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="{{ route('skills.index') }}" class="btn btn-secondary">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

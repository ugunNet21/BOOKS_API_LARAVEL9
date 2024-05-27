@extends('admin.layouts.app')

@section('title', 'Create About - My Bio')

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
                        <h1 class="page-title">Create About</h1>
                        <p class="page-subtitle">Add a new about information</p>
                    </div>
                    <div class="heading-right mb-2">
                        <a href="{{ route('abouts.index') }}" class="btn btn-secondary">Back to About</a>
                    </div>
                </div>

                <div class="content-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="{{ old('title') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" id="address" class="form-control" rows="4" required>{{ old('address') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="projects_completed">Project Completed</label>
                                    <input type="number" name="projects_completed" id="projects_completed" class="form-control"
                                        rows="4" required>{{ old('projects_completed') }}</input>
                                </div>
                                <div class="form-group">
                                    <label for="happy_clients">Happy Clients</label>
                                    <input type="number" name="happy_clients" id="happy_clients" class="form-control" rows="4"
                                        required>{{ old('happy_clients') }}</input>
                                </div>

                                <div class="form-group">
                                    <label for="picture">Picture</label>
                                    <input type="file" name="picture" id="picture" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="">Select Status</option>
                                        <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif
                                        </option>
                                        <option value="tidak aktif" {{ old('status') == 'tidak aktif' ? 'selected' : '' }}>
                                            Tidak
                                            Aktif
                                        </option>
                                    </select>
                                </div><br>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

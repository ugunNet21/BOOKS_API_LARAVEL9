@extends('admin.layouts.app')
@section('title','Edit Banner Categories')
@section('content')
    <div class="container">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Page / Edit Banner Categories</h3>
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Banner Category</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('banner_categories.update', $bannerCategory->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ $bannerCategory->title }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3">{{ $bannerCategory->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="picture">Picture</label>
                                        <input type="file" class="form-control-file" id="picture" name="picture">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="aktif" {{ $bannerCategory->status == 'aktif' ? 'selected' : '' }}>
                                                Aktif
                                            </option>
                                            <option value="tidak aktif"
                                                {{ $bannerCategory->status == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif
                                            </option>
                                        </select>
                                    </div><br>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

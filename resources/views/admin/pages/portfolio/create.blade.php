@extends('admin.layouts.app')

@section('title', 'Create Portfolio')

@section('content')
   <div class="container">
    <div id="main">
        <header class="mb-3">
            <div class="page-header">
                <div class="page-title">
                    <h3>Create Portfolio</h3>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('portfolios.index') }}">Portfolios</a></li>
                        <li>Create</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add New Portfolio</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select id="category_id" name="category_id" class="form-control" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="aktif">Aktif</option>
                                        <option value="tidak aktif">Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="picture">Picture</label>
                                    <input type="file" id="picture" name="picture" class="form-control-file">
                                </div><br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
   </div>
@endsection

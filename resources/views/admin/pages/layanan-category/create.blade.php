@extends('admin.layouts.app')

@section('title', 'Create Services Category')

@section('content')
    <div class="container">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Create Services Category</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('layanans_categories.index') }}">Services
                                            Categories</a>
                                    </li>
                                    <li class="breadcrumb-item active">Create
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Form basic layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create New Services Category</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="POST"
                                            action="{{ route('layanans_categories.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" id="title" class="form-control"
                                                        placeholder="Title" name="title" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea id="description" class="form-control" name="description" placeholder="Description"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select id="status" class="form-control" name="status" required>
                                                        <option value="aktif">Aktif</option>
                                                        <option value="tidak aktif">Tidak Aktif</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="picture">Picture</label>
                                                    <input type="file" id="picture" class="form-control-file"
                                                        name="picture">
                                                </div>
                                            </div><br>

                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary">Create</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form basic layout section end -->
            </div>
        </div>
    </div>
@endsection

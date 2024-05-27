<!-- resources/views/admin/pages/footers/create.blade.php -->

@extends('admin.layouts.app')
@section('title', __('Create Footer'))
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
                                <h2 class="content-header-title float-left mb-0">Header | Footer</h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active">Create Header & Footer
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Create Footer</div>

                                <div class="card-body">
                                    <form action="{{ route('footers.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="title" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea name="address" id="address" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input name="country" id="country" class="form-control"></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" name="facebook" id="facebook" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" name="instagram" id="instagram" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">Twitter</label>
                                            <input type="text" name="twitter" id="twitter" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">Youtube</label>
                                            <input type="text" name="youtube" id="youtube" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">Github</label>
                                            <input type="text" name="github" id="github" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="logo">Logo</label>
                                            <input type="file" name="logo" id="logo" class="form-control-file"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="telp">Telp</label>
                                            <input type="number" name="telp" id="telp" class="form-control" required maxlength="13">
                                        </div>
                                        <div class="form-group">
                                            <label for="whatsapp">Whatsapp</label>
                                            <input type="number" name="whatsapp" id="whatsapp" class="form-control" required maxlength="13">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="open_hours_start">Opening Hours Start</label>
                                            <input type="time" name="open_hours_start" id="open_hours_start" class="form-control" value="08:00" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="open_hours_end">Opening Hours End</label>
                                            <input type="time" name="open_hours_end" id="open_hours_end" class="form-control" value="17:00" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="open_days">Open Days</label>
                                            <input type="text" name="open_days" id="open_days" class="form-control" placeholder="e.g., Monday - Friday" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Create Footer</button>
                                        <a href="{{ route('footers.index') }}" class="btn btn-secondary ml-2">Back</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

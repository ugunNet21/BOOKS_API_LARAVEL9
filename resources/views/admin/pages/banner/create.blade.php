@extends('admin.layouts.app')
@section('title', 'Create Banner')
@section('content')
    <div class="container">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Page / Create Banner</h3>
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Create New Banner</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="title"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text"
                                                class="form-control @error('title') is-invalid @enderror" name="title"
                                                value="{{ old('title') }}" required autofocus>

                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                        <div class="col-md-6">
                                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                                                rows="4">{{ old('description') }}</textarea>

                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                        <div class="col-md-6">
                                            <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address"
                                                rows="4">{{ old('address') }}</textarea>

                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="banner_category_id"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                                        <div class="col-md-6">
                                            <select id="banner_category_id"
                                                class="form-control @error('banner_category_id') is-invalid @enderror"
                                                name="banner_category_id" required>
                                                @foreach ($bannerCategories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>

                                            @error('banner_category_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                        <div class="col-md-6">
                                            <select id="status"
                                                class="form-control @error('status') is-invalid @enderror" name="status"
                                                required>
                                                <option value="aktif">Aktif</option>
                                                <option value="tidak aktif">Tidak Aktif</option>
                                            </select>

                                            @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="picture"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                                        <div class="col-md-6">
                                            <input id="picture" type="file"
                                                class="form-control-file @error('picture') is-invalid @enderror"
                                                name="picture">

                                            @error('picture')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Create') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

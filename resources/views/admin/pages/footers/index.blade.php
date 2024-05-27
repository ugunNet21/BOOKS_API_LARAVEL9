@extends('admin.layouts.app')

@section('title', __("View Footer"))

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
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                        <li class="breadcrumb-item active">Daftar Header & Footer</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Header & Footer</div>
                                <div class="card-body">
                                    @if ($footers->isEmpty())
                                        <a href="{{ route('footers.create') }}" class="btn btn-primary mb-2">
                                            <i class="feather icon-plus"></i> Add
                                        </a>
                                    @else
                                        <a href="{{ route('footers.edit', $footers->first()->id) }}" class="btn btn-primary mb-2">
                                            <i class="feather icon-edit"></i> Update
                                        </a>
                                    @endif
                                    <div class="row">
                                        @foreach ($footers as $footer)
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $footer->title }}</h5>
                                                        <p class="card-text">{{ $footer->description }}</p>
                                                        <p class="card-text">{{ $footer->address }}</p>
                                                        <p class="card-text">{{ $footer->country }}</p>
                                                        <ul class="list-unstyled">
                                                            <li><strong>Facebook:</strong> <a href="https://www.facebook.com/{{ $footer->facebook }}">{{ $footer->facebook }}</a></li>
                                                            <li><strong>Instagram:</strong> <a href="https://www.instagram.com/{{ $footer->instagram }}">{{ $footer->instagram }}</a></li>
                                                            <li><strong>Twitter:</strong> <a href="https://www.twitter.com/{{ $footer->twitter }}">{{ $footer->twitter }}</a></li>
                                                            <li><strong>Youtube:</strong> <a href="https://www.youtube.com/{{ $footer->youtube }}">{{ $footer->youtube }}</a></li>
                                                            <li><strong>Github:</strong> <a href="https://www.github.com/{{ $footer->github }}">{{ $footer->github }}</a></li>
                                                            <li><strong>Telp:</strong> {{ $footer->telp }}</li>
                                                            <li><strong>Whatsapp:</strong> {{ $footer->whatsapp }}</li>
                                                            <li><strong>Email:</strong> {{ $footer->email }}</li>
                                                            <li><strong>Opening Hours Start</strong> {{ $footer->open_hours_start }}</li>
                                                            <li><strong>Opening Hours End:</strong> {{ $footer->open_hours_end }}</li>
                                                        </ul>
                                                        <div class="mt-3">
                                                            <a href="{{ route('footers.edit', $footer->id) }}" class="btn btn-sm btn-primary">
                                                                <i class="feather icon-edit"></i> Edit
                                                            </a>
                                                            <form action="{{ route('footers.destroy', $footer->id) }}" method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this footer?')">
                                                                    <i class="feather icon-trash"></i> Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

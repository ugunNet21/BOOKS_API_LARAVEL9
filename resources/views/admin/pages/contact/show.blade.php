<!-- resources/views/pages/contacts/show.blade.php -->

@extends('admin.layouts.app')
@section('title', 'Message')
@section('content')
    <div class="container">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Page / Contact</h3>
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Detail Message Contact</h1>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $contactUs->subject }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $contactUs->name }} - {{ $contactUs->email }}</h6>
                                <p class="card-text">{{ $contactUs->message }}</p>
                                <p class="card-text"><small class="text-muted">Received :
                                        {{ $contactUs->created_at->format('d M Y H:i:s') }}</small></p>
                            </div>
                        </div>
                        <a href="{{ route('contacts.index') }}" class="btn btn-primary mt-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

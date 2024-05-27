<!-- resources/views/pages/contacts/create.blade.php -->

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
                        <h1>Buat Pesan Kontak Baru</h1>
                        <form action="{{ route('contacts.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject:</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                    value="{{ old('subject') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

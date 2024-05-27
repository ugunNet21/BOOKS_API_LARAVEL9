<!-- resources/views/clients/edit.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Edit Client')

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
                                <h2 class="content-header-title float-left mb-0">Edit Client</h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clients</a></li>
                                        <li class="breadcrumb-item active">Edit Client</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Edit Client</div>

                                <div class="card-body">
                                    <form action="{{ route('clients.update', $client->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $client->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ $client->email }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone:</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                value="{{ $client->phone }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                value="{{ $client->address }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City:</label>
                                            <input type="text" class="form-control" id="city" name="city"
                                                value="{{ $client->city }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country:</label>
                                            <input type="text" class="form-control" id="country" name="country"
                                                value="{{ $client->country }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="postal_code">Postal Code:</label>
                                            <input type="text" class="form-control" id="postal_code" name="postal_code"
                                                value="{{ $client->postal_code }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="date_joined">Date Joined:</label>
                                            <input type="date" class="form-control" id="date_joined" name="date_joined"
                                                value="{{ $client->date_joined }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="last_login">Last Login:</label>
                                            <input type="datetime-local" class="form-control" id="last_login" name="last_login"
                                                value="{{ $client->last_login }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="is_active">Active:</label>
                                            <select class="form-control" id="is_active" name="is_active">
                                                <option value="1" {{ $client->is_active ? 'selected' : '' }}>Yes</option>
                                                <option value="0" {{ !$client->is_active ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="picture">Picture:</label>
                                            <input type="file" class="form-control" id="picture" name="picture">
                                            @if ($client->picture)
                                                <img src="{{ asset('storage/client_pictures/' . $client->picture) }}"
                                                    alt="Client Picture" class="img-fluid mt-2" style="max-width: 200px;">
                                            @endif
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update Client</button>
                                        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Cancel</a>

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

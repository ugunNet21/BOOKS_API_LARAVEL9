<!-- resources/views/clients/show.blade.php -->

@extends('admin.layouts.app')

@section('title', 'Client')

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
                            <h2 class="content-header-title float-left mb-0">Clients</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Clients
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Client Details</div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <p>{{ $client->name }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <p>{{ $client->email }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <p>{{ $client->phone }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <p>{{ $client->address }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <p>{{ $client->city }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <p>{{ $client->country }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="postal_code">Postal Code:</label>
                                    <p>{{ $client->postal_code }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="date_joined">Date Joined:</label>
                                    <p>{{ $client->date_joined }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="last_login">Last Login:</label>
                                    <p>{{ $client->last_login }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="is_active">Active:</label>
                                    <p>{{ $client->is_active ? 'Yes' : 'No' }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="picture">Picture:</label>
                                    @if ($client->picture)
                                        <img src="{{ asset('storage/client_pictures/' . $client->picture) }}"
                                            alt="Client Picture" class="img-fluid" style="max-width: 200px;">
                                    @else
                                        <p>No picture available</p>
                                    @endif
                                </div>
                                <!-- Add more form fields for other client attributes as needed -->

                                <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection

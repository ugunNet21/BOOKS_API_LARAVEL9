<!-- resources/views/clients/index.blade.php -->

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
                    <div class="content-header-right col-md-3 col-12">
                        <div class="btn-group float-md-right">
                            <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm"><i
                                    class="feather icon-plus"></i> Add New</a>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <!-- DataTables example -->
                    <section id="data-list-view" class="data-list-view-header">
                        <div class="table-responsive">
                            <table class="table data-list-view">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Date Joined</th>
                                        <th>Last Login</th>
                                        <th>Active</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $client->name }}</td>
                                            <td>{{ $client->phone }}</td>
                                            <td>{{ $client->address }}</td>
                                            <td>{{ $client->date_joined }}</td>
                                            <td>{{ $client->last_login }}</td>
                                            <td>{{ $client->is_active ? 'Yes' : 'No' }}</td>
                                            <td>
                                                <a href="{{ route('clients.show', $client->id) }}"
                                                    class="btn btn-primary btn-sm">View</a>
                                                <a href="{{ route('clients.edit', $client->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- resources/views/pages/contact/index.blade.php -->

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
                        <h1>Daftar Pesan Kontak</h1>
                        <a href="{{ route('contacts.create') }}" class="btn btn-success">Create messages</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->created_at->format('d M Y H:i:s') }}</td>
                                        <td>
                                            <a href="{{ route('contacts.show', $message->id) }}"
                                                class="btn btn-primary btn-sm">Detail</a>
                                            <form action="{{ route('contacts.destroy', $message->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                {{-- pagination --}}
                <div class="row justify-content-center mt-5">
                    {!! $messages->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

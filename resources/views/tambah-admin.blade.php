@extends('layouts.tambah-data')
@section('tambah-admin')
    <div class="sidebar">
        <a href="/">
            <img src="/source/img/logo.png" class="logo" alt="">
        </a>
        <a class="text-white" href="/dashboard"><i class="bi bi-house-door-fill"></i> Dashboard</a>
        <a class="text-white" href="{{ route('logout') }}"><i class="bi bi-door-open-fill"></i> Logout</a>
    </div>
    <div class="content pt-4">
        <div class="card mx-auto">
            <h4 class="mb-3">Data Admin</h4>
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nip" class="form-label">Username</label>
                    <input type="text" class="form-control" id="nip" name="username" value="{{ old('username') }}">
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/dashboard">Kembali</a>
            </form>
        </div>
    </div>
@endsection

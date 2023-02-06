@extends('layouts.tambah-data')
@section('tambah-event')
    <div class="sidebar">
        <a href="/">
            <img src="/source/img/logo-baru1.png" class="logo" alt="">
        </a>
        <a class="text-white" href="/dashboard"><i class="bi bi-house-door-fill"></i> Dashboard</a>
        <a class="text-white" href="{{ route('logout') }}"><i class="bi bi-door-open-fill"></i> Logout</a>
    </div>
    <div class="content pt-4">
        <div class="card mx-auto">
            <h4 class="mb-3">Data Event</h4>
            <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="namaAcara" class="form-label">Nama Acara</label>
                    <input type="text" class="form-control" id="namaAcara" name="name_event"
                        value="{{ old('name_event') }}">
                    @error('name_event')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Acara</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal_event"
                        value="{{ old('tanggal_event') }}">
                    @error('tanggal_event')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                        value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" value="{{ old('foto') }}">
                    @error('foto')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/dashboard">Kembali</a>
            </form>
        </div>
    </div>
@endsection

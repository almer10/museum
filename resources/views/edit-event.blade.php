@extends('layouts.tambah-data')
@section('edit-event')
    <div class="containter p-5">
        <div class="card mx-auto">
            <h4 class="mb-3">Data Event</h4>
            <form action="{{ route('event.update', ['event' => $event->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="namaAcara" class="form-label">Nama Acara</label>
                    <input type="text" class="form-control" id="namaAcara" name="name_event" value="{{ $event->name_event }}">
                    @error('name_event')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Acara</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal_event" value="{{ $event->tanggal_event->format('Y-m-d') }}">
                    @error('tanggal_event')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $event->deskripsi }}">
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" value="{{ $event->foto }}">
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

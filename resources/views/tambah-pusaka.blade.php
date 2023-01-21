@extends('layouts.tambah-data')
@section('tambah-data')
    <div class="sidebar">
        <a href="/">
            <img src="/source/img/logo.png" class="logo" alt="">
        </a>
        <a class="text-white" href="/dashboard"><i class="bi bi-house-door-fill"></i> Dashboard</a>
        <a class="text-white" href="{{ route('logout') }}"><i class="bi bi-door-open-fill"></i> Logout</a>
    </div>
    <div class="content pt-4">
        <div class="card mx-auto">
            <h4 class="mb-3">Data Benda Pusaka</h4>
            <form method="post" action="{{ route('pusaka.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="namaBenda" class="form-label">Nama Benda</label>
                    <input type="text" class="form-control" id="namaBenda" name="nama_benda"
                        value="{{ old('nama_benda') }}">
                    @error('nama_benda')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" value="{{ old('kategori') }}">
                        @foreach ($category as $cat)
                            <option value="{{ $cat }}">{{ ucwords($cat) }}</option>
                        @endforeach
                    </select>
                    @error('kategori')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah') }}">
                    @error('jumlah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keadaanDahulu" class="form-label">Keadaan Dahulu</label>
                    <input type="text" class="form-control" id="keadaanDahulu" name="kondisi_dahulu"
                        value="{{ old('kondisi_dahulu') }}">
                    @error('kondisi_dahulu')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keadaanSekarang" class="form-label">Keadaan Sekarang</label>
                    <input type="text" class="form-control" id="keadaanSekarang" name="kondisi_sekarang"
                        value="{{ old('kondisi_sekarang') }}">
                    @error('kondisi_sekarang')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="asalPerolehan" class="form-label">Asal Perolehan</label>
                    <input type="text" class="form-control" id="asalPerolehan" name="asal_perolehan"
                        value="{{ old('asal_perolehan') }}">
                    @error('asal_perolehan')
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
                    <label for="tanggalPerolehan" class="form-label">Tanggal Perolehan</label>
                    <input type="date" class="form-control" id="tanggalPerolehan" name="tanggal_perolehan"
                        value="{{ old('tanggal_perolehan') }}">
                    @error('tanggal_perolehan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tempatPeyimpanan" class="form-label">Tempat Penyimpanan</label>
                    <input type="text" class="form-control" id="tempatPeyimpanan" name="tempat_penyimpanan"
                        value="{{ old('tempat_penyimpanan') }}">
                    @error('tempat_penyimpanan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
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

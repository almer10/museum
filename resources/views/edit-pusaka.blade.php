@extends('layouts.tambah-data')
@section('edit-data')
    <div class="containter p-5">
        <div class="card mx-auto">
            <h4 class="mb-3">Data Benda Pusaka</h4>
            <form method="post" action="{{ route('pusaka.update', ['bendaPusaka' => $bendaPusaka->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="namaBenda" class="form-label">Nama Benda</label>
                    <input type="text" class="form-control" id="namaBenda" name="nama_benda" value="{{ $bendaPusaka->nama_benda }}">
                    @error('nama_benda')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                        @foreach ($category as $cat)
                            <option value="{{ $cat }}" {{ $bendaPusaka->kategori == $cat ? 'selected' : '' }}>{{ ucwords($cat) }}</option>
                        @endforeach
                    </select>
                    @error('kategori')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $bendaPusaka->jumlah }}">
                    @error('jumlah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keadaanDahulu" class="form-label">Keadaan Dahulu</label>
                    <input type="text" class="form-control" id="keadaanDahulu" name="kondisi_dahulu" value="{{ $bendaPusaka->kondisi_dahulu }}">
                    @error('kondisi_dahulu')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keadaanSekarang" class="form-label">Keadaan Sekarang</label>
                    <input type="text" class="form-control" id="keadaanSekarang" name="kondisi_sekarang" value="{{ $bendaPusaka->kondisi_sekarang }}">
                    @error('kondisi_sekarang')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="asalPerolehan" class="form-label">Asal Perolehan</label>
                    <input type="text" class="form-control" id="asalPerolehan" name="asal_perolehan" value="{{ $bendaPusaka->asal_perolehan }}">
                    @error('asal_perolehan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $bendaPusaka->deskripsi }}">
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggalPerolehan" class="form-label">Tanggal Perolehan</label>
                    <input type="date" class="form-control" id="tanggalPerolehan" name="tanggal_perolehan" value="{{ $bendaPusaka->tanggal_perolehan->format('Y-m-d') }}">
                    @error('tanggal_perolehan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tempatPeyimpanan" class="form-label">Tempat Penyimpanan</label>
                    <input type="text" class="form-control" id="tempatPeyimpanan" name="tempat_penyimpanan" value="{{ $bendaPusaka->tempat_penyimpanan }}">
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

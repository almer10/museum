@extends('layouts.tambah-data')
@section('edit-pnj')
    <div class="containter p-5">
        <div class="card mx-auto">
            <h4 class="mb-3">Data Admin</h4>
            <form action="{{ route('admin.update', ['admin' => $admin->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama"
                        value="{{ $penanggung_jawab->nama }}">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_ktp" class="form-label">No KTP</label>
                    <input type="number" class="form-control" id="no_ktp" name="no_ktp"
                        value="{{ $penanggung_jawab->no_ktp }}">
                    @error('no_ktp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat"
                        value="{{ $penanggung_jawab->alamat }}">
                    @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                        value="{{ $penanggung_jawab->tanggal_lahir->format('Y-m-d') }}">
                    @error('tanggal_lahir')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="Belum Menikah" {{ $penanggung_jawab->status == 'Belum Menikah' ? 'selected' : '' }}>
                            Belum Menikah
                        </option>
                        <option value="Menikah" {{ $penanggung_jawab->status == 'Menikah' ? 'selected' : '' }}>Menikah
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                        value="{{ $penanggung_jawab->pekerjaan }}">
                    @error('pekerjaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keterangan_pnj" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan_pnj" name="keterangan_pnj"
                        value="{{ $penanggung_jawab->keterangan_pnj }}">
                    @error('keterangan_pnj')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/dashboard">Kembali</a>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.tambah-data')
@section('tambah-admin')
    <div class="sidebar">
        <a href="/">
            <img src="/source/img/logo-baru1.png" class="logo" alt="">
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
                <div class="mb-3">
                    <label for="no_ktp" class="form-label">No KTP</label>
                    <input type="number" class="form-control" id="no_ktp" name="no_ktp"
                        onkeypress="if(this.value.length==16) return false;" value="{{ old('no_ktp') }}">
                    @error('no_ktp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                        value="{{ old('tanggal_lahir') }}">
                    @error('tanggal_lahir')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai Jadi Admin</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                        value="{{ old('tanggal_mulai') }}">
                    @error('tanggal_mulai')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggal_akhir" class="form-label">Tanggal Akhir Jadi Admin</label>
                    <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir"
                        value="{{ old('tanggal_akhir') }}">
                    @error('tanggal_akhir')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="0">Belum Menikah</option>
                        <option value="1">Menikah</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                        value="{{ old('pekerjaan') }}">
                    @error('pekerjaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan"
                        value="{{ old('keterangan') }}">
                    @error('keterangan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="aktif" class="form-label">Aktif</label>
                    <select class="form-control" name="aktif" id="aktif">
                        <option value="0">Aktif</option>
                        <option value="1">Non-Aktif</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="/dashboard">Kembali</a>
                <div class="mb-3"></div>
            </form>
        </div>
    </div>
@endsection

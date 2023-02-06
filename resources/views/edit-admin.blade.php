@extends('layouts.tambah-data')
@section('edit-admin')
    <div class="containter p-5">
        <div class="card mx-auto">
            <h4 class="mb-3">Data Admin</h4>
            <form action="{{ route('admin.update', ['admin' => $admin->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nip" class="form-label">Username</label>
                    <input type="text" class="form-control" id="nip" name="username" value="{{ $admin->username }}">
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
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $admin->nama }}">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_ktp" class="form-label">No KTP</label>
                    <input type="number" class="form-control" id="no_ktp" name="no_ktp" value="{{ $admin->no_ktp }}">
                    @error('no_ktp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $admin->alamat }}">
                    @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="Belum Menikah" {{ $admin->status == 'Belum Menikah' ? 'selected' : '' }}>
                            Belum Menikah
                        </option>
                        <option value="Menikah" {{ $admin->status == 'Menikah' ? 'selected' : '' }}>Menikah
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                        value="{{ $admin->tanggal_lahir->format('Y-m-d') }}">
                    @error('tanggal_lahir')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                        value="{{ $admin->pekerjaan }}">
                    @error('pekerjaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai Jadi Admin</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                        value="{{ $admin->tanggal_mulai->format('Y-m-d') }}">
                    @error('tanggal_mulai')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggal_akhir" class="form-label">Tanggal Akhir Jadi Admin</label>
                    <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir"
                        value="{{ $admin->tanggal_akhir->format('Y-m-d') }}">
                    @error('tanggal_akhir')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan"
                        value="{{ $admin->keterangan }}">
                    @error('keterangan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="aktif" class="form-label">Status Keaktifan</label>
                    <select onchange="fungsiSaya()" class="form-control" name="aktif" id="aktif">
                        <option value="0" {{ $admin->aktif == '0' ? 'selected' : '' }}>Aktif</option>
                        <option value="1" {{ $admin->aktif == '1' ? 'selected' : '' }}>
                            Non-Aktif
                        </option>
                    </select>
                </div>
                <div id="target" class="mb-3 {{ $admin->aktif == '1' ? '' : 'd-none' }}">
                    <label for="keterangan_non_aktif" class="form-label">Keterangan Non-Aktif</label>
                    <input type="text" class="form-control" id="keterangan_non_aktif" name="keterangan_non_aktif"
                        value="{{ $admin->keterangan_non_aktif }}">
                    @error('keterangan_non_aktif')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/dashboard">Kembali</a>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        function fungsiSaya() {
            const value = document.getElementById("aktif").value
            if (value == 0) {
                document.getElementById("target").classList.add("d-none")
            } else {
                document.getElementById("target").classList.remove("d-none")
            }
            console.log(value)
        }
    </script>
@endsection

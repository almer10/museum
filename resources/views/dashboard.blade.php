@extends('layouts.dashboard')
@section('dashboard')
    <div class="sidebar">
        <a href="/">
            <img src="/source/img/logo.png" class="logo" alt="">
        </a>
        <a class="active" href="/dashboard">Dashboard</a>
        <a href="{{ route('logout') }}">Logout</a>
    </div>

    <div class="content">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="benda-tab" data-bs-toggle="tab" data-bs-target="#benda" type="button"
                    role="tab" aria-controls="benda" aria-selected="true">Benda Pusaka</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin" type="button"
                    role="tab" aria-controls="admin" aria-selected="false">Data Admin</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="event-tab" data-bs-toggle="tab" data-bs-target="#event" type="button"
                    role="tab" aria-controls="event" aria-selected="false">Event</button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="benda" role="tabpanel" aria-labelledby="benda-tab" tabindex="0">
                <a href="{{ route('pusaka.create') }}">
                    <button class="btn btn-success my-3">Tambah Data</button>
                </a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th>No</th>
                                <th>Nama Benda</th>
                                <th>Jumlah</th>
                                <th>Keadaan Dahulu</th>
                                <th>Kondisi Sekarang</th>
                                <th>Asal Perolehan</th>
                                <th>Tanggal Perolehan</th>
                                <th>Tempat Penyimpanan</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bendaPusaka as $bP)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $bP->nama_benda }}</td>
                                    <td>{{ $bP->jumlah }}</td>
                                    <td>{{ $bP->kondisi_dahulu }}</td>
                                    <td>{{ $bP->kondisi_sekarang }}</td>
                                    <td>{{ $bP->asal_perolehan }}</td>
                                    <td>{{ $bP->tanggal_perolehan->format('d M Y') }}</td>
                                    <td>{{ $bP->tempat_penyimpanan }}</td>
                                    <td>
                                        <a href="#pusaka-{{ $loop->iteration }}">
                                            Lihat Gambar
                                        </a>
                                        <div class="overlay" id="pusaka-{{ $loop->iteration }}">
                                            <a href="#" class="close">
                                                <svg style="width:47px;height:47px" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M14.59,8L12,10.59L9.41,8L8,9.41L10.59,12L8,14.59L9.41,16L12,13.41L14.59,16L16,14.59L13.41,12L16,9.41L14.59,8Z" />
                                                </svg>
                                            </a>
                                            <img src="{{ asset("storage/$bP->foto") }}" alt="{{ $bP->nama_benda }}">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <a href="{{ route('pusaka.edit', ['bendaPusaka' => $bP->id]) }}">
                                                    <button class="btn btn-warning">Edit</button>
                                                </a>
                                            </div>
                                            <div class="col-lg-5">
                                                <form method="post"
                                                    action="{{ route('pusaka.delete', ['bendaPusaka' => $bP->id]) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane" id="admin" role="tabpanel" aria-labelledby="admin-tab" tabindex="0">
                <a href="{{ route('admin.create') }}"><button class="btn btn-success my-3">Tambah Data</button></a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th>No</th>
                                <th>NIP</th>
                                <th>Password</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $admin->username }}</td>
                                    <td>{{ $admin->password }}</td>
                                    <td>{{ $admin->nama }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <a href="{{ route('admin.edit', ['admin' => $admin->id]) }}"><button
                                                        class="btn btn-warning">Edit</button></a>
                                            </div>
                                            <div class="col-lg-5">
                                                <form method="post"
                                                    action="{{ route('admin.delete', ['admin' => $admin->id]) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane" id="event" role="tabpanel" aria-labelledby="event-tab" tabindex="0">
                <a href="{{ route('event.create') }}"><button class="btn btn-success my-3">Tambah Data</button></a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th>No</th>
                                <th>Nama Acara</th>
                                <th>Deskripsi</th>
                                <th>Tanggal Acara</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $event->name_event }}</td>
                                    <td>{{ $event->deskripsi }}</td>
                                    <td>{{ $event->tanggal_event->format('d M Y') }}</td>
                                    <td>
                                        <a href="#event-{{ $loop->iteration }}">
                                            Lihat Gambar
                                        </a>
                                        <div class="overlay" id="event-{{ $loop->iteration }}">
                                            <a href="#" class="close">
                                                <svg style="width:47px;height:47px" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M14.59,8L12,10.59L9.41,8L8,9.41L10.59,12L8,14.59L9.41,16L12,13.41L14.59,16L16,14.59L13.41,12L16,9.41L14.59,8Z" />
                                                </svg>
                                            </a>
                                            <img src="{{ asset("storage/$event->foto") }}"
                                                alt="{{ $event->name_event }}">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <a href="{{ route('event.edit', ['event' => $event->id]) }}"><button
                                                        class="btn btn-warning">Edit</button></a>
                                            </div>
                                            <div class="col-lg-5">
                                                <form method="post"
                                                    action="{{ route('event.delete', ['event' => $event->id]) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

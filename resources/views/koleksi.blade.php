@extends('layouts.koleksi')
@section('koleksi')
    <div id="koleksi" class="container p-5">
        <h3 class="text-center">Koleksi</h3>
        <p class="sub-tittle fs-4">Berikut barang koleksi yang berada di museum prabu geusan ulun</p>
        <div class="dropdown mb-3" style="text-align: end">
            <button class="btn btn-success dropdown-toggle text-white" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Kategori
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach ($cats as $cat)
                    <li><a class="dropdown-item" href="{{ route('koleksi', ['category' => $cat]) }}">{{ ucwords($cat) }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="row justify-content-center">
            @foreach ($bendaPusaka as $bP)
                <div class="col-lg-3">
                    <a href="{{ route('pusaka.show', ['bendaPusaka' => $bP->id]) }}" class="link-detail">
                        <div class="card p-0 mb-3" style="width: 18rem;">
                            <div class="photo">
                                <img src="{{ asset("storage/$bP->foto") }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $bP->nama_benda }}</h5>
                                <p class="card-text">
                                    {{ strlen($bP->deskripsi) > 60 ? substr($bP->deskripsi, 0, 60) . '...' : $bP->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

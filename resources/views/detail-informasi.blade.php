@extends('layouts.detail-informasi')
@section('detail-informasi')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <h4 class="fw-bold">{{ $nama }}</h4>
                <p class="deskripsi">
                    {{ $deskripsi }}
                </p>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset("storage/$foto") }}" class="foto-detail">
            </div>
        </div>
        <button class="btn btn-kuning" onclick="goBack()">Kembali</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection

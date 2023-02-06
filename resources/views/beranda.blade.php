@extends('layouts.beranda')
@section('beranda')
    <div class="container-fluid px-0 mb-5">
        {{-- Section 1 --}}
        <section class="section1">
            <div class="content1">
                <h1>MUSEUM PRABU GEUSAN ULUN</h1>
                <h6 class="fw-normal">Jl. Prabu Geusan Ulun No.408, Regol Wetan, Kec. Sumedang</h6>
                <h6 class="fw-normal">Sel., Kabupaten Sumedang, Jawa Barat 45311</h6>
            </div>
        </section>
        {{-- Section 1 --}}

        {{-- Section 2 --}}
        <div id="section2" class="container mt-3">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-4">
                    <h4 class="fw-bold mb-3">Koleksi Terbaru</h4>
                </div>
                <div class="col-lg-4 col-md-4 text-end">
                    <a href="/koleksi" style="color: black; text-decoration:none">Lihat Selengkapnya <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($bendaPusaka as $bP)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="{{ route('pusaka.show', ['bendaPusaka' => $bP->id]) }}" class="link-detail">
                            <div class="card p-0 mx-auto mb-3 h-100">
                                <div class="photo">
                                    <img src="{{ asset("storage/$bP->foto") }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $bP->nama_benda }}</h5>
                                    <p class="card-text">
                                        {{ strlen($bP->deskripsi) > 40 ? substr($bP->deskripsi, 0, 40) . '...' : $bP->deskripsi }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Section 2 --}}

        {{-- Section 3 --}}
        <section class="section3 mt-5">
            <div class="container section3 p-3">
                <h4 class="fw-bold mb-3">Acara</h4>
                <div class="row justify-content-center">
                    @foreach ($events as $event)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="{{ route('event.show', ['event' => $event->id]) }}" class="link-detail">
                                <div class="card p-0 h-100">
                                    <div class="photo">
                                        <img src="{{ asset("storage/$event->foto") }}" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $event->name_event }}</h5>
                                        <p class="card-text">
                                            {{ strlen($event->deskripsi) > 60 ? substr($event->deskripsi, 0, 60) . '...' : $event->deskripsi }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="swiper mySwiper ">
                    <div class="swiper-wrapper">
                        @foreach ($events as $event)
                            <div class="swiper-slide">
                                <a href="{{ route('event.show', ['event' => $event->id]) }}" class="link-detail">
                                    <div class="card p-0">
                                        <img src="{{ asset("storage/$event->foto") }}" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $event->name_event }}</h5>
                                            <p class="card-text">
                                                {{ strlen($event->deskripsi) > 60 ? substr($event->deskripsi, 0, 60) . '...' : $event->deskripsi }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
            </div>
        </section>
        {{-- Section 3 --}}

        {{-- Section 4 --}}
        <div id="section4" class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="/source/img/tentang-kami.png" class="foto-tentang-kami mt-4" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <p class="content-sejarah mt-4" style="text-align:  justify">
                        Museum Prabu Geusan Ulun atau yang dulunya bernama Keraton Sumedang Larang
                        adalah sebuah museum yang dibangun di bekas kediaman Prabu Geusan Ulun yang berada di Kabupaten
                        Sumedang, Jawa Barat, Indonesia
                    </p>
                    <p class="content-sejarah" style="text-align: justify">
                        Museum Prabu Geusan Ulun terletak di tengah kota Sumedang, 50 meter dari Alun-alun ke sebelah
                        selatan, berdampingan dengan Gedung Bengkok atau Gedung Negara dan berhadapan dengan
                        Gedung-gedung Pemerintah. Jarak dari Bandung 45 kilometer, sedangkan jarak dari Cirebon 85
                        kilometer, jarak tempuh dari Bandung 1 jam, sedangkan dari Cirebon 2 jam.
                    </p>
                    <a href="/tentang-kami">Lihat Informasi Museum</a>
                </div>
            </div>
        </div>
        {{-- Section 4 --}}
    </div>

    {{-- <script type="module">
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 30,
            grabCursor: true,
            mousewheel: true,
            keyboard: true,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                375: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                425: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            },
        });
    </script> --}}
@endsection

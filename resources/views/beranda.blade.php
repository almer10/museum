@extends('layouts.beranda')
@section('beranda')
    <div class="container-fluid px-0 mb-5">
        {{-- Section 1 --}}
        <section class="section1">
            <div class="content1">
                <h1 class="fs-1">MUSEUM PRABU GEUSAN ULUN</h1>
                <h6 class="fs-4 fw-normal">Jl. Prabu Geusan Ulun No.408, Regol Wetan, Kec. Sumedang</h6>
                <h6 class="fs-4 fw-normal">Sel., Kabupaten Sumedang, Jawa Barat 45311</h6>
            </div>
        </section>
        {{-- Section 1 --}}

        {{-- Section 2 --}}
        <div class="container mt-3">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <h4 class="fw-bold mb-3">Koleksi Terbaru</h4>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="/koleksi" style="color: black; text-decoration:none">Lihat Selengkapnya <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($bendaPusaka as $bP)
                    <div class="col-lg-3 ">
                        <a href="{{ route('pusaka.show', ['bendaPusaka' => $bP->id]) }}" class="link-detail">
                            <div class="card p-0 mx-auto" style="width: 18rem;">
                                <img src="{{ asset("storage/$bP->foto") }}" class="card-img-top" alt="...">
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
        {{-- Section 2 --}}

        {{-- Section 3 --}}
        <section class="section3 mt-5">
            <div class="container p-3">
                <h4 class="fw-bold mb-3">Acara</h4>
                <div class="swiper mySwiper ">
                    <div class="swiper-wrapper">
                        @foreach ($events as $event)
                            <div class="swiper-slide">
                                <a href="{{ route('event.show', ['event' => $event->id]) }}" class="link-detail">
                                    <div class="card p-0" style="width: 18rem; ">
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
                </div>
            </div>
        </section>
    </div>

    <script type="module">
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 30,
            grabCursor: true,
            mousewheel: true,
            keyboard: true,
            breakpoints: {
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
          </script>
@endsection

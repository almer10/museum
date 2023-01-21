@extends('layouts.bantuan')
@section('bantuan')
    <div class="container">
        <div>
            <div style="text-align:center; margin-bottom: 20px; margin-top: 89px;">
                <div class="col-sm-12">
                    <h1 style="color:  #a977b2;">Pertanyaan Umum</h1>
                </div>
            </div>
        </div>

        <div>
            <div style="text-align:center;">
                <div class="col-sm-12">
                    <h3 style="color:  #bfbfbf;">
                        Pertanyaan umum yang dapat membantu informasi yang ada pada Museum Prabu Geusan Ulun.
                    </h3>
                </div>
            </div>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Sejarah Museum Prabu Geusan Ulun?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Museum Prabu Geusan Ulun atau yang dulunya bernama Keraton Sumedang Larang adalah sebuah museum yang
                        dibangun di bekas kediaman Prabu Geusan.
                        Untuk info lebih lengkapnya <a href="http://museumprabugeusanulun.masuk.web.id/tentang-kami">
                            http://museumprabugeusanulun.masuk
                            .web.id/tentang-kami</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Koleksi apa saja ada pada website ini?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        ada 12 macam kategori benda Museum Prabu Geusan Ulun. Untuk info lebih lengkapnya
                        <a href="http://museumprabugeusanulun.masuk.web.id/koleksi">
                            http://museumprabugeusanulun.masuk
                            .web.id/koleksi</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Biasanya event apa saja yang diadakan Museum Prabu Geusan Ulun?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Event pencucian benda pusaka, event ulang tahun kabupaten sumedang dan masih banyak yang lainnya.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Apakah ada jadwal tertentu untuk mengunjungi Museum Prabu Geusan Ulun?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Ada, Setiap hari kerja (Senin-Jumat) Jam 09.00-15.00 WIB. Hari libur tutup
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

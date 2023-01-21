@extends('layouts.tentang-kami')
@section('tentang-kami')
    {{-- Section 1 --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <img src="/source/img/tentang-kami.png" class="foto-tentang-kami mt-4" alt="">
            </div>
            <div class="col-lg-7 pe-0">
                <div class="card"
                    style="background: linear-gradient(100.87deg, #FF8E00 20.63%, #CE0E0C 95.98%); width: 100%">
                    <div class="card-body">
                        <p class="mt-4 mb-3 text-section1" style="text-align:  justify">
                            Museum Prabu Geusan Ulun atau yang dulunya bernama Keraton Sumedang Larang
                            adalah sebuah museum yang dibangun di bekas kediaman Prabu Geusan Ulun yang berada di Kabupaten
                            Sumedang, Jawa Barat, Indonesia
                        </p>
                        <p class="text-section1" style="margin-top: 50px; margin-bottom: 30px; text-align: justify">
                            Museum Prabu Geusan Ulun terletak di tengah kota Sumedang, 50 meter dari Alun-alun ke sebelah
                            selatan, berdampingan dengan Gedung Bengkok atau Gedung Negara dan berhadapan dengan
                            Gedung-gedung Pemerintah. Jarak dari Bandung 45 kilometer, sedangkan jarak dari Cirebon 85
                            kilometer, jarak tempuh dari Bandung 1 jam, sedangkan dari Cirebon 2 jam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Section 1 --}}

    {{-- Section 2 --}}
    <section class="section-2">
        <div class="container py-3">
            <h3 class="mb-3">Sejarah Museum Prabu Geusan Ulun</h3>
            <p id="text-sejarah" class="text-section2"></p>
            <a id="viewmore" href="javascript:void(0)" onclick="viewmore()">Lihat Selengkapnya</a>
            <a id="viewless" href="javascript:void(0)" onclick="viewless()" class="d-none">Lihat Sedikit</a>
        </div>
    </section>
    {{-- Section 2 --}}

    {{-- Section 3 --}}
    <div class="container">
        <h4 class="text-center">Tata Bangunan</h4>
        <p class="text-center" style="color: #929292">
            Museum Prabu Geusan Ulun dikelilingi tembok/ dinding yang tingginya 2,5 meter, dibuat pada tanggal 16 Agustus
            1797. Luas halaman Museum seluas 1,88 ha, dengan dihiasi taman-taman dan ditanami pohon-pohon langka. Gedung
            yang berada di sekitarnya terdiri dari:
        </p>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="/source/img/gedung-gendeng.png" class="gambar-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gedung Gendeng</h5>
                        <div class="card-text mb-3">
                            Gedung gendeng merupakan gedung pertama yang didirikan pada tahun 1850, pada masa pemerintahan
                            Pangeran Soeria Koesoemah Adinata atau Pangeran Sugih. Gedung ini digunakan untuk menyimpan
                            pusaka peninggalan leluhur Sumedang dan senjata lainnya.Bangunannya dibuat dari kayu dan
                            berdinding gedeg serta berlantai batu merah.Gedung Gendeng juga, merupakan tempat menyimpan
                            Gamelan Pusaka.Gedung Gendeng mengalami beberapa kali pemugaran, yaitu tahun 1950, 1955, dan
                            1993.
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#gedungGendeng">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="/source/img/gedung-gamelan.png" class="gambar-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gedung Gamelan</h5>
                        <div class="card-text mb-3">
                            Gedung Gamelan yang
                            dibangun pada tahun 1973 sumbangan dari
                            Bapak Ali Sadikin, Gubernur DKI pada
                            saat itu.Sesuai dengan namanya, Gedung
                            Gamelan difungsikan sebagai tempat khusus menyimpan gamelan pusaka peninggalan leluhur Sumedang
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#gedungGamelan">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="/source/img/gedung-kaler.png" class="gambar-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gedung Bumi Kaler</h5>
                        <div class="card-text mb-3">
                            Gedung Bumi Kaler merupakan bangunan berbentuk rumah panggung dan sudah beberapa kali mengalami
                            rehabilitasi, yaitu pada tahun 1982, 1993, dan 2006, namun tidak berubah dari bentuk aslinya.
                            Sebelum digunakan sebagai gedung Museum pada tahun 1982, Bumi Kaler digunakan sebagai tempat
                            tinggal keluarga keturunan leluhur Sumedang. Gedung Bumi Kaler dibangun pada tahun
                            1850, pada masa pemerintahan Bupati Pangeran Soeria Koesoemah Adinata (Pangeran Sugih) yang
                            memerintah Sumedang tahun 1836–1882. Gedung Bumi Kaler sama halnya dengan Gedung Srimaganti,
                            Bumi Kaler sudah terdaftar dalam Monumenter Ordonantie 1931 karena termasuk bangunan yang
                            dilindungi oleh pemerintah sebagai Benda Cagar Budaya. Pada tahun 1997 dibangun gedung baru yang
                            bernama Gedung Pusaka karena Gedung Gendeng waktu itu sebagai tempat menyimpan pusaka-pusaka
                            peninggalan leluhur Sumedang sudah tidak memadai. Gedung Pusaka adalah gedung museum yang kelima
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gedungKaler">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="/source/img/gedung-kereta.png" class="gambar-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gedung Kereta</h5>
                        <div class="card-text mb-3">
                            Gedung Kereta merupakan bangunan berbentuk garasi untuk menyimpan kendaraan-kendaraan kerajaan
                            berupa kereta kuda. Kereta-kereta yang ada pada gedung tersebut merupakan replika dari aslinya.
                            Kereta yang ada pada garasi masih bisa digunakan untuk acara-acara tertentu seperti ulang tahun
                            sumedang, festival nusantara, dan lain-lain.
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#gedungKereta">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="/source/img/gedung-pusaka.png" class="gambar-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gedung Pusaka</h5>
                        <div class="card-text mb-3">
                            Gedung Pusaka merupakan gedung untuk menyimpan seluruh benda pusaka. Gedung ini didirikan dengan
                            alasan gedung gendeng yang menjadi tempat menaruh benda-benda pusaka sudah penuh dan terlalu
                            sempit, jadinya terbuatlah gedung benda pusaka.
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#gedungPusaka">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="/source/img/item1.jpg" class="gambar-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gedung Srimaganti</h5>
                        <div class="card-text mb-3">
                            Gedung Srimaganti didirikan pada tahun 1706 pada masa pemerintahan Dalem Adipati Tanoemadja.
                            Arsitektur Gedung Srimaganti bergaya kolonial. Kata Srimaganti mempunyai arti tempat
                            menanti-nanti tamu kehormatan. Dahulu Gedung Srimaganti dikenal sebagai rumah “Land Huizen”
                            (Rumah Negara). Fungsi Gedung Srimaganti pada masa itu adalah tempat tinggal buat bupati serta
                            keluarganya.Pada tahun 1982 dan 1993 Gedung Srimaganti direnovasi. Bupati dan keluarga yang
                            pernah menempati Gedung Srimaganti, antara lain: Pangeran Kornel, Pangeran Sugih, Pangeran
                            Mekah, dan Dalem Bintang. Pada tahun 1942 Srimaganti tidak lagi digunakan sebagai rumah tinggal
                            bupati. Sejak pemerintahan Dalem Aria Soemantri (1973–1946) gedung ini dijadikan kantor
                            kabupaten / PEMDA Sumedang sampai tahun 1982, sedangkan Bupati serta keluarga tinggal di Gedung
                            Bengkok/Gedung Negara sampai sekarang. Gedung Srimaganti terdaftar pula dalam Monumenter
                            ordonantie 1931 sebagai bangunan Cagar Budaya yang dilindungi oleh pemerintah. Gedung Srimaganti
                            merupakan bangunan ketiga Museum dan sekarang digunakan sebagai bangunan utama Museum Prabu
                            Geusan Ulun dan sebagai pintu masuk ke Museum.
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#gedungSrimaganti">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Section 3 --}}

        <!-- Modal Gedung Gendeng-->
        <div class="modal fade" id="gedungGendeng" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Gedung Gendeng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <img src="/source/img/gedung-gendeng.png" class="gambar-modal" alt="">
                    <div class="modal-body">
                        Gedung gendeng merupakan gedung pertama yang didirikan pada tahun 1850, pada masa pemerintahan
                        Pangeran Soeria Koesoemah Adinata atau Pangeran Sugih. Gedung ini digunakan untuk menyimpan
                        pusaka peninggalan leluhur Sumedang dan senjata lainnya.Bangunannya dibuat dari kayu dan
                        berdinding gedeg serta berlantai batu merah.Gedung Gendeng juga, merupakan tempat menyimpan
                        Gamelan Pusaka.Gedung Gendeng mengalami beberapa kali pemugaran, yaitu tahun 1950, 1955, dan
                        1993.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Gedung Gamelan-->
        <div class="modal fade" id="gedungGamelan" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Gedung Gendeng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <img src="/source/img/gedung-gamelan.png" class="gambar-modal" alt="">
                    <div class="modal-body">
                        Gedung gamelan didirakan pada tahun 1973 oleh pemda Sumedang atas sumbangan dari gubernur DKI
                        Jakarta Bapak Ali Sadikin. Fungsi gedung ini sebagai tempat khusus menyimpan gamelan-gamelan pusaka.
                        Gedung gamelan mengalami renovasi pada tahun 1993. Selain sebagai tempat menyimpan gamelan, gedung
                        gamelan dipakai juga sebagai tempat latihan tari klasik setiap hari minggu. Setiap satu tahun sekali
                        pada bulan maulud semua gamelan pusaka dicuci dan tidak dibunyikan, latihan tari pun diliburkan.
                        Gedung gamelan merupakan gedung museum yayasan pangeran sumedang yang pertama.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Gedung Kaler-->
        <div class="modal fade" id="gedungKaler" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Gedung Gendeng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <img src="/source/img/gedung-kaler.png" class="gambar-modal" alt="">
                    <div class="modal-body">
                        Gedung Bumi Kaler merupakan bangunan berbentuk rumah panggung dan sudah beberapa kali mengalami
                        rehabilitasi, yaitu pada tahun 1982, 1993, dan 2006, namun tidak berubah dari bentuk aslinya.
                        Sebelum digunakan sebagai gedung Museum pada tahun 1982, Bumi Kaler digunakan sebagai tempat
                        tinggal keluarga keturunan leluhur Sumedang. Gedung Bumi Kaler dibangun pada tahun
                        1850, pada masa pemerintahan Bupati Pangeran Soeria Koesoemah Adinata (Pangeran Sugih) yang
                        memerintah Sumedang tahun 1836–1882. Gedung Bumi Kaler sama halnya dengan Gedung Srimaganti,
                        Bumi Kaler sudah terdaftar dalam Monumenter Ordonantie 1931 karena termasuk bangunan yang
                        dilindungi oleh pemerintah sebagai Benda Cagar Budaya. Pada tahun 1997 dibangun gedung baru yang
                        bernama Gedung Pusaka karena Gedung Gendeng waktu itu sebagai tempat menyimpan pusaka-pusaka
                        peninggalan leluhur Sumedang sudah tidak memadai. Gedung Pusaka adalah gedung museum yang kelima
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Gedung Kereta-->
        <div class="modal fade" id="gedungKereta" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Gedung Kereta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <img src="/source/img/gedung-kereta.png" class="gambar-modal" alt="">
                    <div class="modal-body">
                        Gedung Kereta merupakan bangunan berbentuk garasi untuk menyimpan kendaraan-kendaraan kerajaan
                        berupa kereta kuda. Kereta-kereta yang ada pada gedung tersebut merupakan replika dari aslinya.
                        Kereta yang ada pada garasi masih bisa digunakan untuk acara-acara tertentu seperti ulang tahun
                        sumedang, festival nusantara, dan lain-lain.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Gedung Pusaka-->
        <div class="modal fade" id="gedungPusaka" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Gedung Pusaka</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <img src="/source/img/gedung-pusaka.png" class="gambar-modal" alt="">
                    <div class="modal-body">
                        Gedung Kereta merupakan bangunan berbentuk garasi untuk menyimpan kendaraan-kendaraan kerajaan
                        berupa kereta kuda. Kereta-kereta yang ada pada gedung tersebut merupakan replika dari aslinya.
                        Kereta yang ada pada garasi masih bisa digunakan untuk acara-acara tertentu seperti ulang tahun
                        sumedang, festival nusantara, dan lain-lain.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Gedung Srimaganti-->
        <div class="modal fade" id="gedungSrimaganti" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Gedung Srimaganti</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <img src="/source/img/gedung-item1.jpg" class="gambar-modal" alt="">
                    <div class="modal-body">
                        Gedung Kereta merupakan bangunan berbentuk garasi untuk menyimpan kendaraan-kendaraan kerajaan
                        berupa kereta kuda. Kereta-kereta yang ada pada gedung tersebut merupakan replika dari aslinya.
                        Kereta yang ada pada garasi masih bisa digunakan untuk acara-acara tertentu seperti ulang tahun
                        sumedang, festival nusantara, dan lain-lain.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-tentang-kami')
    <script>
        $(function() {
            loadContentTentangKami()
        })

        function loadContentTentangKami() {
            $("#text-sejarah").html(`Peninggalan benda-benda bersejarah dan barang-barang pusaka Leluhur Sumedang, sejak Raja-raja Kerajaan
            Sumedang Larang dan Bupati-bupati yang memerintah Kabupaten Sumedang dahulu, merupakan koleksi yang membanggakan dan besar artinya bagi kita semua, 
            terlebih bagi keluarga Sumedang. Kumpulan benda-benda tersebut disimpan di Yayasan Pangeran Sumedang sejak tahun 1955. Timbullah suatu gagasan, ingin
            memperlihatkan kepada masyarakat Sumedang khususnya dan masyarakat di luar Sumedang pada ...`)
        }

        function viewmore() {
            $("#text-sejarah").html(`Peninggalan benda-benda bersejarah dan barang-barang pusaka Leluhur Sumedang, sejak Raja-raja Kerajaan
            Sumedang Larang dan Bupati-bupati yang memerintah Kabupaten Sumedang dahulu, merupakan koleksi yang membanggakan dan besar artinya bagi kita semua, 
            terlebih bagi keluarga Sumedang. Kumpulan benda-benda tersebut disimpan di Yayasan Pangeran Sumedang sejak tahun 1955. Timbullah suatu gagasan, ingin
            memperlihatkan kepada masyarakat Sumedang khususnya dan masyarakat di luar Sumedang pada umumnya, bahwa di Sumedang dahulu terdapat kerajaan besar 
            yaitu Kerajaan Sumedang Larang, dengan melihat benda-benda peninggalan Raja-raja tersebut dan sebagainya. Gagasan tersebut ditanggapi dengan penuh 
            keyakinan oleh keluarga, maka direncanakan membuat museum. Setelah diadakan persiapan-persiapan yang matang dan terencana,
            lima tahun setelah tahun 1968 baru terlaksana, tepatnya tanggal 11 Nopember 1973 Museum Keluarga berdiri.
            Museum tersebut diberi nama Museum Yayasan Pangeran Sumedang, dan dikelola langsung oleh Yayasan Pangeran
            Sumedang. Pada tahun 1974, di Sumedang diadakan Seminar Sejarah oleh ahli-ahli sejarah se-Jawa Barat dan
            diikuti ahli sejarah dari Yayasan Pangeran Sumedang, dalam seminar tersebut dibahas nama museum Sumedang.
            Diusulkan nama museum adalah seorang tokoh dalam Sejarah Sumedang, ternyata yang disepakati nama Raja
            Sumedang Larang terakhir yang memerintah Kerajaan Sumedang Larang dari tahun 1578 - 1601, yaitu Prabu Geusan
            Oeloen. Kemudian nama museum menjadi Museum Prabu Geusan Ulun dengan ejaan baru untuk memudahkan generasi
            baru membacanya. Gedung yang dipergunakan untuk museum yaitu Gedung Srimanganti, Bumi Kaler, Gedung Gendeng
            dan Gedung Gamelan. Pada tahun 1980, Pemerintah melalui Dinas Jawatan Permuseuman dan Kepurbakalaan
            Kebudayaan Jawa Barat, mengulurkan tangan dan memugar Gedung Srimanganti dan Bumi Kaler. Pada hari Rabu
            tanggal 21 April 1982, Direktur Jenderal Kebudayaan Departemen Pendidikan dan Kebudayaan, Prof. DR. Haryati
            Soebadio, meresmikan dan menyerahkan kedua bangunan yang selesai dipugar kepada Yayasan Pangeran Sumedang
            dan bernaung di bawah Momenten Ordonnatie Nomor 19 Tahun 1931 (Staatsblad Tahun 1931 Nomor 238).`)
            $("#viewmore").attr('class', 'd-none')
            $("#viewless").removeAttr('class')
        }

        function viewless() {
            loadContentTentangKami()
            $("#viewless").attr('class', 'd-none')
            $("#viewmore").removeAttr('class')
        }
    </script>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}?v={{ time() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="nav">
        <div class="nav__container">
            <div class="nav__logo">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <div class="nav__hamburger" id="hamburgerMenu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="nav__menu" id="navMenu">
                <ul class="nav__list">
                    <li> <a href="/">Home</a> </li>
                    <li> <a href="/bansos">Bantuan Sosial</a> </li>
                    <li> <a href="">Layanan</a> </li>
                    <li> <a href="">Berita & Agenda</a> </li>
                    <li> <a href="">Dana Desa</a> </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Landing --}}
    <main class="landing">
        <div class="landing__container">
            <h1>Website Resmi Desa Kersik</h1>
            <h2>Sumber informasi terbaru tentang pemerintahan di Desa Kresik</h2>
        </div>
    </main>

    {{-- Jelajah --}}
    <section class="jelajah">
        <div class="jelajah__container">
            <div class="jelajah__description">
                <h1>JELAJAHI DESA</h1>
                <p>Melalui website ini Anda dapat menjelajahi segala hal yang terkait dengan Desa. Aspek pemerintahan, penduduk, demografi, potensi Desa, dan juga berita tentang Desa.</p>
            </div>
            <div class="jelajah__content">
                <img src="{{ asset('img/Group 2.png') }}" alt="">
                <img src="{{ asset('img/Group 7.png') }}" alt="">
                <img src="{{ asset('img/Group 5.png') }}" alt="">
                <img src="{{ asset('img/Group 6.png') }}" alt="">
            </div>
        </div>
    </section>

    {{-- Sambutan --}}
    <section class="sambutan">
        <div class="sambutan__container">
            <img src="{{ asset('img/Group 11.png') }}" alt="">
            <div class="sambutan__content">
                <h1>SAMBUTAN KEPALA DESA</h1>
                <h3>JUMADI</h3>
                <p>Kepala Desa Kresik</p>
                <p style="font-weight: 600">Assalamu'alaikum Warohmatullahi Wabarakatuh.</p>
                <p>Website ini hadir sebagai wujud transformasi desa Kersik menjadi desa yang mampu memanfaatkan teknologi informasi dan komunikasi, terintegrasi kedalam sistem online. Keterbukaan informasi publik, pelayanan publik dan kegiatan perekonomian di desa, guna mewujudkan desa Kersik sebagai desa wisata yang berkelanjutan, adaptasi dan mitigasi terhadap perubahan iklim serta menjadi desa yang mandiri.</p>
                <a href="" class="sambutan__button">Selengkapnya</a>
            </div>
        </div>
    </section>
    
    {{-- Peta --}}
    <section class="peta">
        <div class="peta__container">
            <h1>PETA DESA</h1>
            <p>Menampilkan Peta Desa Dengan Interest Point Desa Kersik</p>
            <img src="{{ asset('img/peta.png') }}" alt="">
        </div>
    </section>

    {{-- Struktur Organisasi --}}
    <section class="struktur">
        <div class="struktur__container">
            <h1>SOTK</h1>
            <p>Struktur Organisasi dan Tata Kerja Desa Kersik</p>
            <div class="struktur__card__container">
                <div class="struktur__card">
                    <img src="{{ asset('img/contoh-2.jpg') }}" alt="">
                    <div>
                        <h3>Alma Khusnia</h3>
                        <p>Bendahara</p>
                    </div>
                </div>
                <div class="struktur__card">
                    <img src="{{ asset('img/contoh.jpg') }}" alt="">
                    <div>
                        <h3>Alma Khusnia</h3>
                        <p>Bendahara</p>
                    </div>
                </div>
                <div class="struktur__card">
                    <img src="{{ asset('img/profile.png') }}" alt="">
                    <div>
                        <h3>Alma Khusnia</h3>
                        <p>Bendahara</p>
                    </div>
                </div>
                <div class="struktur__card">
                    <img src="{{ asset('img/profile.png') }}" alt="">
                    <div>
                        <h3>Alma Khusnia</h3>
                        <p>Bendahara</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Administrasi Penduduk --}}
    <section class="administrasi">
        <div class="administrasi__container">
            <h1>ADMINISTRASI PENDUDUK</h1>
            <p>Sistem digital yang berfungsi mempermudah pengelolaan data dan informasi terkait dengan kependudukan dan pendayagunaannya untuk pelayanan publik yang efektif dan efisien</p>
            <div class="administrasi__detail__container">
                <div class="administrasi__detail">
                    <div>{{ $statistics->jumlah_warga }}</div>
                    <h3>Penduduk</h3>
                </div>
                <div class="administrasi__detail">
                    <div>{{ $statistics->jumlah_warga_laki_laki }}</div>
                    <h3>Laki-Laki</h3>
                </div>
                <div class="administrasi__detail">
                    <div>{{ $statistics->jumlah_kepala_keluarga }}</div>
                    <h3>Kepala Keluarga</h3>
                </div>
                <div class="administrasi__detail">
                    <div>{{ $statistics->jumlah_warga_perempuan }}</div>
                    <h3>Perempuan</h3>
                </div>
                <div class="administrasi__detail">
                    <div>{{ $statistics->penerima_bansos }}</div>
                    <h3>Penerima Bansos</h3>
                </div>
                <div class="administrasi__detail">
                    <div>{{ $statistics->rata_rata_umur }}</div>
                    <h3>Rata-Rata Umur</h3>
                </div>
            </div>
        </div>
    </section>

    {{-- APB Desa --}}
    <section class="apb">
        <div class="apb__container">
            <img src="{{ asset('img/apb.png') }}" alt="">
            <div class="apb__description">
                <h1>APB Desa 2024</h1>
                <p>Akses cepat dan transparan terhadap APB Desa serta proyek pembangunan</p>
                <div>
                    <p class="apb__description__keterangan">Pendapatan Desa</p>
                    <p class="apb__description__nominal">Rp. 1.234.567.890</p>
                </div>
                <div>
                    <p class="apb__description__keterangan">Belanja Desa</p>
                    <p class="apb__description__nominal">Rp. 1.234.567.890</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Berita Desa --}}
    <section class="berita">
        <div class="berita__container">
            <h1>BERITA DESA</h1>
            <p>Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Kersik</p>
            <div class="berita__card__container">
                <div class="berita__card">
                    <img src="{{ asset('img/poster.png') }}" alt="">
                    <div class="berita__card__content">
                        <h3 class="berita__card__title">Karnaval Desa Kuy Skuyy Gasss</h3>
                        <p class="berita__card__deskripsi">mari rayakan hari penuh kebahagiaan dan kreativitas di KARNAVAL TERBESAR TAHUN INI!
                            Saksikan parade spektakuler dengan kostum-kostum megah dan kendaraan hias yang menawan!</p>
                        <p class="berita__card__tanggal">05 Januari 2023</p>
                    </div>
                </div>
                <div class="berita__card">
                    <img src="{{ asset('img/poster.png') }}" alt="">
                    <div class="berita__card__content">
                        <h3 class="berita__card__title">Karnaval Desa Kuy Skuyy Gasss</h3>
                        <p class="berita__card__deskripsi">mari rayakan hari penuh kebahagiaan dan kreativitas di KARNAVAL TERBESAR TAHUN INI!
                            Saksikan parade spektakuler dengan kostum-kostum megah dan kendaraan hias yang menawan!</p>
                        <p class="berita__card__tanggal">05 Januari 2023</p>
                    </div>
                </div>
                <div class="berita__card">
                    <img src="{{ asset('img/poster.png') }}" alt="">
                    <div class="berita__card__content">
                        <h3 class="berita__card__title">Karnaval Desa Kuy Skuyy Gasss</h3>
                        <p class="berita__card__deskripsi">mari rayakan hari penuh kebahagiaan dan kreativitas di KARNAVAL TERBESAR TAHUN INI!
                            Saksikan parade spektakuler dengan kostum-kostum megah dan kendaraan hias yang menawan!</p>
                        <p class="berita__card__tanggal">05 Januari 2023</p>
                    </div>
                </div>
                <div class="berita__card">
                    <img src="{{ asset('img/poster.png') }}" alt="">
                    <div class="berita__card__content">
                        <h3 class="berita__card__title">Karnaval Desa Kuy Skuyy Gasss</h3>
                        <p class="berita__card__deskripsi">mari rayakan hari penuh kebahagiaan dan kreativitas di KARNAVAL TERBESAR TAHUN INI!
                            Saksikan parade spektakuler dengan kostum-kostum megah dan kendaraan hias yang menawan!</p>
                        <p class="berita__card__tanggal">05 Januari 2023</p>
                    </div>
                </div>
                <div class="berita__card">
                    <img src="{{ asset('img/poster.png') }}" alt="">
                    <div class="berita__card__content">
                        <h3 class="berita__card__title">Karnaval Desa Kuy Skuyy Gasss</h3>
                        <p class="berita__card__deskripsi">mari rayakan hari penuh kebahagiaan dan kreativitas di KARNAVAL TERBESAR TAHUN INI!
                            Saksikan parade spektakuler dengan kostum-kostum megah dan kendaraan hias yang menawan!</p>
                        <p class="berita__card__tanggal">05 Januari 2023</p>
                    </div>
                </div>
                <div class="berita__card">
                    <img src="{{ asset('img/poster.png') }}" alt="">
                    <div class="berita__card__content">
                        <h3 class="berita__card__title">Karnaval Desa Kuy Skuyy Gasss</h3>
                        <p class="berita__card__deskripsi">mari rayakan hari penuh kebahagiaan dan kreativitas di KARNAVAL TERBESAR TAHUN INI!
                            Saksikan parade spektakuler dengan kostum-kostum megah dan kendaraan hias yang menawan!</p>
                        <p class="berita__card__tanggal">05 Januari 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Potensi Desa --}}
    <section class="potensi">
        <div class="potensi__container">
            <h1>POTENSI DESA</h1>
            <p>Informasi tentang potensi dan kemajuan Desa di berbagai bidang seperti ekonomi, pariwisata, pertanian, industri kreatif, dan kelestarian lingkungan</p>
            <div class="potensi_card_container">
                <div class="potensi__card">
                    <img src="{{ asset('img/Image 4.png') }}" alt="gambar">
                    <h4>PARIWISATA</h4>
                </div>
                <div class="potensi__card">
                    <img src="{{ asset('img/Image 4.png') }}" alt="gambar">
                    <h4>POTENSI PERIKANAN</h4>
                </div>
                <div class="potensi__card">
                    <img src="{{ asset('img/Image 4.png') }}" alt="gambar">
                    <h4>POTENSI PERTANIAN</h4>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer>
        <div class="footer__container">
            <div class="footer__logo">
                <img src="{{ asset('img/Group 11.png') }}" alt="">
                <h1>Media Sosial</h1>
                <div class="medsos__container">
                    <a href=""> <img src="{{ asset('icons/facebook.svg') }}" alt=""> </a>
                    <a href=""> <img src="{{ asset('icons/instagram.svg') }}" alt=""> </a>
                    <a href=""> <img src="{{ asset('icons/twitter.svg') }}" alt=""> </a>
                    <a href=""> <img src="{{ asset('icons/tiktok.svg') }}" alt=""> </a>
                </div>
            </div>
            <div class="footer__contact">
                <h3>Kontak Desa</h3>
                <div class="contact__container">
                    <div class="contact__card">
                        <img src="{{ asset('img/phone-icon.png') }}" alt="">
                        <h5>081250208644</h5>
                    </div>
                    <div class="contact__card">
                        <img src="{{ asset('img/mail-icon.png') }}" alt="">
                        <h5>kersik.marangkayu@kurkab.go</h5>
                    </div>
                    <div class="contact__card">
                        <img src="{{ asset('img/clock-icon.png') }}" alt="">
                        <h5>Senin - Kamis (08.00 - 15.00) & Jum'at (08.00 - 11.00)</h5>
                    </div>
                    <div class="contact__card">
                        <img src="{{ asset('img/home-icon.png') }}" alt="">
                        <h5>Jalan Langaseng Dusung Empang RT.003</h5>
                    </div>
                </div>
            </div>
            <div class="footer__cp">
                <h3>Nomor Telepon Penting</h3>
                <h4>Jumadi/Kades Kersik</h4>
                <h4>081242368478</h4>
                <h4>Yayasan/Ambulan Kersik</h4>
                <h4>085392095123</h4>
            </div>
        </div>
        <div class="footer__copyright">
            © 2024 Powered by PT Digital Desa Indonesia
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bansos.css') }}?v={{ time() }}">
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

    <main>
        <div class="main__container">
            <h1>BANTUAN SOSIAL</h1>
            <div class="main__header">
                <div class="main__search">
                    <form action="{{ route('search.nik') }}" method="GET">
                        <button type="submit">
                            <img src="{{ asset('img/Search.png') }}" alt="">
                        </button>
                        <input type="text" name="nik" placeholder="Masukkan NIK penerima bansos">
                    </form>
                </div>
                <div class="main__sorting__container">
                    <div class="main__sorting">
                        <div class="main__sorting__ket" id="sortByToggle">
                            <p>Sort by</p>
                            <img src="{{ asset('img/ArrowDown.png') }}" class="arrow__down" alt="" style="display: block;">
                            <img src="{{ asset('img/ArrowUp.png') }}" class="arrow__up" alt="" style="display: none;">
                        </div>
                    </div>
                    <div class="main__sorting__list" id="sortingList">
                        <p>Nama</p>
                        <p>Usia</p>
                        <p>Tanggal</p>
                        <p>Status</p>
                    </div>
                </div>
            </div>
            <div class="main__content">
                <table id="data-table">
                    <thead>
                        <tr>
                            <th>NAMA</th>
                            <th>UMUR</th>
                            <th>KET BANTUAN</th>
                            <th>TGL DITETAPKAN</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($penerima_bansos))
                            @foreach ($penerima_bansos as $penerima)
                                <tr>
                                    <td>{{ $penerima->warga->nama }}</td>
                                    <td>{{ $penerima->warga->umur }}</td>
                                    <td>{{ $penerima->nama_bansos }}</td>
                                    <td>{{ $penerima->tanggal }}</td>
                                    <td>
                                        @if ($penerima->is_active == 0)
                                            NONAKTIF
                                        @else
                                            AKTIF
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @elseif (isset($penerima_bansos_by_nik))
                            @foreach ($penerima_bansos_by_nik as $penerima)
                            <tr>
                                <td>{{ $penerima->warga->nama }}</td>
                                <td>{{ $penerima->warga->umur }}</td>
                                <td>{{ $penerima->nama_bansos }}</td>
                                <td>{{ $penerima->tanggal }}</td>
                                <td>
                                    @if ($penerima->is_active == 0)
                                        NONAKTIF
                                    @else
                                        AKTIF
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <div id="pagination"></div>
        </div>
    </main>

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
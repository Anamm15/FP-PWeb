<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
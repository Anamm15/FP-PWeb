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
</body>
</html>
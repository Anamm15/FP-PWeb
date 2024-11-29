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
    @include('components.navbar')

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

    @include('components.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
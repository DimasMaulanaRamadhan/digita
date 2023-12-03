<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .container-hasil {
            border: 3px;
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            padding: 8px 12px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-back i {
            margin-right: 8px;
        }
    </style>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    @extends('layout.master')
    @section('hasil', 'active')
    @section('content')
        @parent
        <main role="main" class="flex-shrink-0">
            @if ($errors->any())
            @endif
            <div class="container mt-5 data">
                <form method="POST" action="">
                    <h2 align="center">Pakaian Adat Sumatera Selatan</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Aesan Gede
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/aesan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Aesan berarti hiasan dan gede berarti pembesar. Jadi, aesan gede adalah pakaian hiasan
                                    pembesar Palembang. <br><br>

                                    Pakaian adat Sumatera Selatan aesan gede didominasi warna merah dengan benang emas dari
                                    tenunan kain songket. <br><br>

                                    Unsur keemasan dan gemerlap ini sesuai dengan citra Sumatera di masa lalu yang dikenal
                                    sebagai swarnadipa atau pulau emas. <br><br>

                                    Busana aesan gede untuk pengantin wanita berupa baju kurung warna merah. <br><br>

                                    Baju kurung ini berhiaskan motif bertabur bunga bintang keemasan yang dipadukan dengan
                                    kain songket lepus bersulam emas. <br><br>

                                    Busana ini dilengkapi dengan penutup dada, perhiasan dan mahkota dengan untaian bunga. <br><br>

                                    Sedangkan busana pria berupa jubah bertabur bunga emas, celana, dan kain songket serta
                                    songkok emas sebagai penghias kepala.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Pak Sangkong
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/sangkong.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Sumatera Selatan pak sangkong berasal dari 2 kata yaitu pak dan sangkong. <br><br>

                                    Pak berarti 8, dan sangkong berarti dewa, sehingga pak sangkong diartikan sebagai
                                    pakaian 8 dewa. <br><br>

                                    Atribut pada busana aesan gede dan pak sangkong memiliki kemiripan. Kalau aesan gede
                                    identik dengan kemewahan, pak sangkong tampak anggun. <br><br>

                                    Pengantin pria mengenakan songket lepus sulam emas yang dipadukan dengan jubah motif
                                    bunga emas, selempang dan celana. Hiasan kepala memakai songkok emas. <br><br>

                                    Sementara itu, pengantin perempuan memakai baju kurung atau dodot berwarna merah
                                    bermotif taburan bintang emas. <br><br>

                                    Hiasan kepala berupa mahkota pak sangkong, teratai penutup dada, serta kain songket
                                    bersulam emas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('sumsel') }}" class="btn-back">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                    </div>
                </form>
            </div>
        </main>
        @parent
    @endsection
</body>

</html>

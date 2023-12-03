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
                    <h2 align="center">Tari Daerah Sumatera Barat</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Alang Babega
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/alang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian Alang Babega tidak membutuhkan banyak penari, tetapi sering dibawakan oleh dua
                                    hingga enam orang. Penari bisa laki-laki atau perempuan atau bahkan dimungkinkan juga
                                    untuk beroperasi dalam pasangan pria-wanita. <br><br>

                                    Meskipun tarian ini sangat sederhana, tarian Alang Babega dikenal hingga di luar negeri
                                    sebagai acara budaya. Inspirasi tarian ini berasal dari seekor elang yang mencari
                                    mangsa, dan terciptalah tarian Alang Babega ini. Gerakan tarian ini sangat sederhana dan
                                    dinamis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Randai
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/randai.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Randai berdasarkan pendapat Yoyok RM dan Siswandi memiliki beberapa sejarah. Ada
                                    yang berpendapat bahwa tarian ini berasal dari bahasa Arab Rayan-li-da'i (dari kata
                                    da'i), nama seorang da'i dalam tradisi Naqsabandiyah. <br><br>

                                    Ada juga yang mengatakan bahwa berasal dari kata handai yang berarti kedekatan,
                                    keintiman, dan keramahan. Randai adalah hasil perpaduan Kaba dan Silek dengan gerakan
                                    dan puisi gurindam yang sangat indah.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Tempurung
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tempurung.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Secara umum, tari Tempurung dimaksudkan sebagai sarana hiburan dan komunikasi bagi
                                    masyarakat Batu Manjulur. Penarinya memakai kostum Minangkabau dan tarian ini dilakukan
                                    dengan membawa tempurung sebagai harta benda. <br><br>

                                    Tari tradisional Sumatera Barat ini diperkenalkan oleh Ali Muhammad sekitar tahun 1952.
                                    Tarian ini semakin populer pada tahun 1970-an dan 1980-an sampai populer di Nagari Ayei
                                    Dingin Padang Sibusuk.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Lilin
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/lilin.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Asal usul tari lilin sama dengan cerita rakyat Minang. Tari lilin adalah tarian di mana
                                    penari memegang lilin dan menari mengikuti alunan musik pemusik. <br><br>

                                    Cerita rakyat ini menceritakan tentang seorang gadis yang berada dalam kesulitan ketika
                                    kekasihnya meninggalkannya. <br><br>

                                    Dia kehilangan cincin pertunangannya, kemudian gadis itu membawa lilin di piring untuk
                                    menemukan cincin itu. <br><br>

                                    Penampilan menari dengan anggun dan indah sambil mencari cincin menjadi asal mula tarian
                                    lilin ini.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Payung
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/payung.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian tradisional Sumatera Barat yang kesepuluh adalah tari payung yang dibawakan
                                    secara berpasangan. Dalam tarian ini, laki-laki menggunakan payung sebagai harta benda
                                    dan perempuan menggunakan selendang. Arti dari tarian ini adalah cinta kepada pasangan.
                                    <br><br>

                                    Payung yang dikenakan para penari melambangkan perlindungan perempuan. Ini juga
                                    menunjukkan bagaimana laki-laki harus bertanggung jawab untuk melindungi perempuan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Piring
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/piring.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Piring atau Tari Piriang adalah salah satu tarian tradisional Sumatera Barat dan
                                    berasal dari kota Sorok. Mengapa tarian ini disebut tari piring? Hal ini dikarenakan
                                    tarian ini dibawakan dengan menggunakan piring yang merupakan media properti utamanya.
                                    <br><br>

                                    Kemudian, piring yang dibawanya diguncang dengan gerakan yang cepat dan merata agar
                                    piring itu tidak terlepas dari tangannya. Tarian ini merupakan simbol dari Minangkabau.
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Pasambahan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/pasamban.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian tradisional Sumatera Barat lainnya adalah tari Pasambahan atau sesaji. Seperti
                                    namanya, ini adalah tarian yang dibawakan saat menyapa selebriti dan tamu negara sebagai
                                    bentuk penghormatan. <br><br>

                                    Saat tarian dilakukan, para tamu berada di bawah payung dengan jalan setapak menuju
                                    tempat duduk. <br><br>

                                    Tari Pasambahan bukan hanya tarian penyambutan tamu, tetapi juga ditarikan pada berbagai
                                    acara adat seperti penyambutan mempelai pria di rumah istri dan hiburan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Indang Badindin
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/indang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Indang Badindin, juga dikenal sebagai Indang Minangkabau, diyakini telah ada sejak
                                    abad ke-14 ketika Islam menyebar ke Sumatera Barat. Gerakan para penari dalam tarian
                                    tradisional Sumatera Barat ini terdiri dari berlutut dan membungkuk. <br><br>

                                    Tarian ini dilakukan sebagai penghormatan kepada Allah. Indang Badinding adalah tarian
                                    yang terkenal di kabupaten Padang Pariaman. Pengiring tarian ini adalah alat musik
                                    rebana. Tarian Indang sangat singkat, sekitar 30 menit yang biasanya dilakukan oleh 14
                                    orang.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Rantak
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/rantak.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Rantak adalah tarian tradisional Sumatera Barat yang berasal dari daerah
                                    Minangkabau. Rantak adalah jenis tarian yang gerakannya sangat dinamis. Gerakan tari ini
                                    terinspirasi dari pencak silat. Tarian ini menekankan pada ketajaman gerakan penari.
                                    <br><br>

                                    Keindahan tari Rantak tidak hanya pada gerakannya saja, tetapi juga pada kehalusan para
                                    penarinya. Suara hentakan kaki penari diimbangi dengan ketegasan gerakannya. Tari Rantak
                                    ini biasanya dibawakan oleh beberapa penari pria dan wanita.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Galombang
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/galombang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Galombang atau tari gelombang adalah tarian tradisional Sumatera Barat yang merupakan
                                    salah satu kesenian yang memicu lahirnya Randy Arts pada tahun 1932. Pertunjukan tari
                                    Galombang terutama dipentaskan pada acara pernikahan adat Minang. <br><br>

                                    Meski asal usul hubungan perkawinan tidak diketahui pasti, tari Galombang masih
                                    dipentaskan di berbagai daerah di Minang. Galombang ditampilkan pada acara tersebut
                                    untuk menyambut kedua mempelai saat mereka dipandu melewati pelaminan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('sumbar') }}" class="btn-back">
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

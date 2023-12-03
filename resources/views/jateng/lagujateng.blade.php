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
                    <h1 align="center">Lagu Daerah Jawa Tengah</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Suwe Ora Jamu
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Suwe ora jamu jamu godong telo <br><br>
                                    Suwe ora ketemu ketemu pisan gawe gelo <br><br>
                                    Suwe ora jamu jamu godhong telo <br><br>
                                    Suwe ora ketemu ketemu pisan gawe gelo <br><br>
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Mengutip buku Keanekaragaman Keroncong di Indonesia (2022) oleh Museum Musik Indonesia,
                                    lagu suwe ora jamu bermakna tentang kedua insan yang lama tidak bertemu, namun di saat
                                    bertemu yang timbul justru kekecewaan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Gundul Gundul Pacul
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Gundul gundul pacul cul gembelengan <br><br>
                                    Nyunggi nyunggi wakul kul gembelengan <br><br>
                                    Wakul ngglimpang segane dadi sak ratan <br><br>
                                    Wakul ngglimpang segane dadi sak ratan
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Menurut buku Indonesia Pusaka (2020) oleh Sopan Adrianto, lagu gundul-gundul pacul
                                    bermakna tentang situasi jika seorang pemimpin kehilangan mahkotanya, maka ia juga
                                    kehilangan kehormatannya sebagai pemimpin.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Gambang Suling
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Gambang suling ngumandang swarane <br><br>
                                    Tulat tulit kepenak unine <br><br>
                                    Unine mung nrenyuhake <br><br>
                                    Barengan kentrung <br><br>
                                    Ketipung suling sigrak kendangane
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Menurut buku Siswa Seni Budaya SMP/MTs Kelas 8 (2021) oleh Sri Sudaryati dan Boiman,
                                    lagu gambang suling bermakna tentang keharmonisan dan ketentraman. Hal ini disimbolkan
                                    dengan bunyi seruling yang mengeluarkan bunyi yang sangat merdu didengar.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Dondong Opo Salak
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Dondong opo salak <br>
                                    Duku cilik-cilik <br>
                                    Gendong opo mbecak <br>
                                    Mlaku timik timik <br><br>
                                    Adik ndherek Ibu tindak menyang pasar <br>
                                    Ora pareng rewel <br>
                                    Ora pareng nakal <br>
                                    Ibu mengko mesti mbeto oleh oleh kacang karo roti <br>
                                    Adik diparingi
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Menurut buku Kumpulan Lagu Wajib Nasional, Tradisional, & Anak Populer (2017) oleh Hani
                                    Widiatmoko dan Dicky Maulana, lagu dondong opo salak bermakna tentang sifat seseorang
                                    yang mirip seperti salak, baik dan lembut di dalam namun kasar di luar. Juga mirip
                                    seperti kedondong, baik dan lembut di luar namun kasar di dalam. <br><br>

                                    Selain itu, lirik gendong opo mbecak memiliki makna tersendiri yaitu tentang upaya
                                    seseorang untuk meraih kebaikan, apakah berusaha sendiri dengan maksimal atau memerlukan
                                    orang lain.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Cublak Cublak Suweng
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Cublak-cublak suweng <br><br>
                                    Suwenge ting gelenter <br><br>
                                    Mambu ketundhung gudel <br><br>
                                    Pak gempong lera lere <br><br>
                                    Sopo ngguyu ndhelikake <br><br>
                                    Sir-sir pong dele gosong <br><br>
                                    Sir-sir pong dele gosong
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Masih mengutip buku karya Hani Widiatmoko dan Dicky Maulana, lagu cublak-cublak suweng
                                    memiliki makna tentang kebenaran yang harus ditelusuri lebih dalam. Seseorang harus
                                    memvalidasi informasi yang mereka terima dan menilai apakah informasi tersebut baik atau
                                    buruk.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('jateng') }}" class="btn-back">
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

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
                    <h2 align="center">Rumah Adat Jawa Timur</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Joglo
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/joglo.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah joglo menjadi salah satu ikon yang ada di Jawa, khususnya Jawa Timur. Desain rumah
                                    joglo juga sangat khas dengan bentuk limas dan bangunannya berasal dari kayu jati.
                                    Bangunan dan pondasi rumah joglo sangat erat kaitannya dengan kepercayaan kejawen yang
                                    dianut masyarakat Jawa.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Osing
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/osing.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Osing berasal dari timur Pulau Jawa, lebih tepatnya di Banyuwangi yang
                                    berbatasan langsung dengan Selat Bali. Rumah adat Osing ini terbagi menjadi tiga bagian
                                    di setiap bangunannya, seperti Tikel Balung, Baresan, dan Crocogan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Suku Tengger
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tengger.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat suku Tengger memiliki keunikan pada atapnya. Rumah adat suku Tengger ini
                                    memiliki atap yang tinggi, bertumpuk, dan meruncing. Di bagian depan rumah terdapat
                                    tempat duduk yang disebut bale-bale. Rumah adat suku Tengger berkonsep tidak teratur dan
                                    dibangun secara gerombolan, berdekatan antara satu sama lain. Masyarakat suku Tengger
                                    percaya, dengan menggunakan pola ini maka angin tidak akan menerjang rumah karena
                                    terhalang oleh rumah lain yang dibangun berdekatan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('jatim') }}" class="btn-back">
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

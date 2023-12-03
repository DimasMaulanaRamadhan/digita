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
                    <h2 align="center">Bali</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/baturlogo.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Cerita rakyat</h5>
                                        <a href="{{ route('ceritabali') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/tombaklogo.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Senjata Tradisional</h5>
                                        <a href="{{ route('senjatabali') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/legong.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Tarian Daerah</h5>
                                        <a href="{{ route('taribali') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/lagu.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Lagu Daerah</h5>
                                        <a href="{{ route('lagubali') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/agung.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Pakaian Adat</h5>
                                        <a href="{{ route('pakaianbali') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/lumbunglogo.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Rumah Adat</h5>
                                        <a href="{{ route('rumahbali') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('isi') }}" class="btn-back">
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

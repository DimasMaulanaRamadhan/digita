<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
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

        .tombol {
            padding-bottom: 50px;
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
    @section('isi', 'active')
    @section('content')

        <main role="main" class="flex-shrink-0">
            @if ($errors->any())
            @endif
            <div class="container mt-5 data">
                <form method="POST" action="">
                    <h2 align="center">Kategori Buku</h2>
                    <h4 class="mt-5" align="left">Pulau Jawa</h4>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/jatim.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Jawa Timur</h5>
                                        <a href="{{ route('jatim') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/jateng.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Jawa Tengah</h5>
                                        <a href="{{ url('/jateng') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/jabar.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Jawa Barat</h5>
                                        <a href="{{ url('/jabar') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="mt-5" align="left">Pulau Sumatera</h4>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/sumut.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Sumatera Utara</h5>
                                        <a href="{{ url('/sumut') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/sumsel.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Sumatera Selatan</h5>
                                        <a href="{{ url('/sumsel') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                                    <div
                                        class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/sumbar.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Sumatera Barat</h5>
                                        <a href="{{ url('/sumbar') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="mt-5" align="left">Bali dan Aceh</h4>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                    <div
                                        class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/bali.jpg"
                                                alt="">
                                        </div>
                                        <h5 class="mb-3">Bali</h5>
                                        <a href="{{ url('/bali') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                                    <div
                                        class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon flex-shrink-0">
                                            <img class="img-fluid rounded w-100" src="img/aceh.jpg" alt="">
                                        </div>
                                        <h5 class="mb-3">Aceh</h5>
                                        <a href="{{ url('/aceh') }}"
                                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>

        @parent
    @endsection
</body>

</html>

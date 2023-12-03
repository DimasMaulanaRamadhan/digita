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
                    <h2 align="center">Rumah Adat Jawa Tengah</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Limasan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/limasan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Limasan ini memiliki atap berbentuk limas. Atap rumah adat ini memiliki 4
                                    sisi dan sekilas mirip dengan rumah adat Sumatra Selatan. <br><br>

                                    Rumah adat ini biasanya terbuat dari material bata yang kokoh. Uniknya, meski rumah adat
                                    Limasan ini tidak dicat atau dibalut lapisan lainnya, tetapi tetap terlihat indah dan
                                    sederhana.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Tajug
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tajug.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Berbeda dengan konsep rumah lainnya, rumah adat Tajug dibuat bukan sebagai tempat
                                    tinggal, melainkan untuk melaksanakan ibadah.

                                    Jadinya, rumah adat ini tidak boleh dibangun sembarangan. Salah satu contoh rumah adat
                                    Tajug yang sangat populer di Indonesia ialah Masjid Agung Demak. <br><br>

                                    Rumah adat Tajug juga terdapat beberapa macam, yaitu Lambang Sari, Mangkurat, Semar
                                    Tinandhu, dan Semar Sinongsong.

                                    Sedangkan bagian atap rumah adat ini memiliki bentuk yang hampir mirip dengan atap rumah
                                    adat Joglo. Ujung atap rumah adat Tajug juga berbentuk segitiga, yang melambangkan
                                    keabadian dan keesaan Tuhan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Panggang Pe
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/panggang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Dibandingkan dengan rumah adat lain, rumah yang satu ini termasuk paling sederhana.
                                    Rumah adat Panggang Pe memiliki bentuk dasar dari berbagai bangunan rumah adat yang
                                    lain. <br><br>

                                    Memiliki tiang penyangga berjumlah 4 atau 6 yang sederhana. Biasanya, rumah adat ini
                                    hanya berfungsi sebagai warung untuk berjualan dan pos penjaga.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Kampung
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kampung.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Kampung berfungsi sebagai tempat tinggal seperti rumah adat Joglo. Namun,
                                    rumah adat Kampung biasanya hanya ditinggali oleh rakyat biasa atau kalangan sosial
                                    menengah kebawah, seperti petani, pekerja pasar, dan peternak. <br><br>

                                    Ciri khusus rumah kampung adalah jumlah tiang yang berkelipatan empat. Sedangkan
                                    bangunan rumahnya, berbentuk persegi panjangd an memiliki 2 lapis tiang untuk menyangga
                                    atap rumah.

                                    Tiang penyangganya sendiri terbuat dari usuk, balok, dan kayu reng yang sifatnya kuat.
                                    Biasanya, rumah ini memiliki teras di depan dan belakang rumah.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Joglo
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/joglo.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pada dasarnya, orang Jawa Tengah dahulu membangun rumah berlandaskan fungsi dan status
                                    sosial.

                                    Rumah adat Joglo ini dikenal sebagai rumah untuk para bangsawan atau orang kaya. Tidak
                                    heran bila rumah ini berbahan utama kayu yang mahal dan berkualitas. <br><br>

                                    Rumah ini memiliki ciri-ciri, yaitu terdapat empat tiang utama pada depan rumah. Di
                                    dalam ruangan juga terdapat 2 bagian.

                                    Pada bagian rumah induk terdapat, seperti Pendopo, Emperan, pringgitan, Senthong Tengah,
                                    Senthong Kiwa, Senthong engen. Sedangkan bagian rumah tambahan, terdapat ruangan
                                    Gandhok.
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

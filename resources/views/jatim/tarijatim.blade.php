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
                    <h2 align="center">Tari Daerah Jawa Timur</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Reog Ponorogo
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/reog.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian yang satu ini berasal dari Ponorogo. Tarian Reog Ponorogo identik dengan topeng
                                    kepala singa yang terbuat dari rangkaian bulu merak. Uniknya, topeng berbobot hingga 50
                                    kg itu hanya dikendalikan oleh mulut penarinya. <br> <br>
                                    Tarian Reog Ponorogo biasanya dipertontonkan pada malam satu suro dan malam purnama.
                                    Namun, tarian ini juga sering ditampilkan pada acara adat dan pesta pernikahan. Jumlah
                                    penarinya sekitar 10-17 orang. <br><br>
                                    Ada yang meyakini bahwa Tarian Reog Ponorogo merupakan kisah peperangan yang terjadi
                                    antara Raden Katong dan Ki Ageng Kutu. Namun, tidak sedikit yang percaya bahwa tarian
                                    ini merupakan kisah legenda Singa Barong.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Jejer Gandrung
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/jejer.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian yang berasal dari Banyuwangi ini sering dipertunjukkan dalam berbagai acara yang
                                    diadakan oleh masyarakat. Makna Tari Jejer Gandrung secara umum adalah wujud rasa syukur
                                    setelah melewati masa panen. <br> <br>
                                    Kamu bisa menikmati Tari Jejer Gandrung pada acara adat perkawinan, pethik laut,
                                    khitanan, bahkan acara tujuh belasan. Busana penari adalah baju dari beludru hitam
                                    dengan ornamen keemasan. Penari juga menggunakan selendang dan membawa kipas. <br> <br>
                                    Penampilan Tari Jejer Gandrung juga dapat bermakna penyambutan terhadap tamu. Karena
                                    itu, tarian ini sering dilakukan dalam acara resmi maupun tidak resmi. Tarian diiringi
                                    dengan musik dari gong, gedhang, biola, dan kluncing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Thengul
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/thengul.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Thengul adalah tarian dari daerah Bojonegoro. Kesenian tradisional ini sudah
                                    terkenal hingga ke dunia internasional. Tarian ini juga cukup populer di kalangan muda.
                                    Banyak pelajar sekolah yang belajar menarikannya. <br> <br>
                                    Tari Thengul identik dengan Wayang Thengul. Karya seni tari ini baru diciptakan pada
                                    1991 menjelang acara penyelenggaraan Festival Tari Daerah di Provinsi Jawa Timur.
                                    Penciptanya adalah Joko Santoso dan Ibnu Sutawa. <br> <br>
                                    Tarian ini ditetapkan sebagai warisan budaya di Kabupaten Bojonegoro. Dilakukan secara
                                    berkelompok, Tari Thengul punya karakter komedi. Para penarinya pun identik dengan
                                    ekspresi senyum yang merupakan simbol keakraban.
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

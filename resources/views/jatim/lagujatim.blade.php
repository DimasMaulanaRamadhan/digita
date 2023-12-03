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
                    <h1 align="center">Lagu Daerah Jawa Timur</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Rek Ayo Rek
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Rek ayo rek mlaku mlaku nang Tunjungan <br>
                                    Rek ayo rek rame rame bebarengan <br>
                                    Cak ayo cak sopo gelem melu aku <br>
                                    Cak ayo cak nggolek kenalan cah ayu <br> <br>
                                    Ngalor ngidul liwat toko ngumbah moto <br>
                                    Masio mung senggal senggol ati lego <br>
                                    Sopo ngerti nasib awak lagi mujur <br>
                                    Kenal anake sing dodol rujak cingur <br> <br>
                                    Jok dipikir kon podho gak duwe sangu <br>
                                    Jok dipikir angger podho gelem mlaku <br>
                                    Mangan tahu jok dicampur nganggo timun <br>
                                    Malam minggu gak apik digawa nglamun <br>
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu daerah Jawa Timur pertama yang akan kita bahas adalah ‘Rek Ayo Rek’. Lagu ini
                                    merupakan salah satu lagu yang paling populer. Liriknya mudah diingat, sehingga mudah
                                    juga untuk dinyanyikan. <br> <br>
                                    Lagu ‘Rek Ayo Rek’ sendiri merupakan lagu yang menceritakan tentang kebahagiaan anak
                                    muda atau remaja ketika malam Minggu tiba. Seperti yang kita tahu, malam Minggu adalah
                                    malamnya anak-anak muda. <br><br>
                                    Kalau kamu keluar di malam itu, kamu pasti akan menemukan banyak anak muda berkumpul di
                                    alun-alun, pusat kota, kafe atau tempat hiburan lainnya. Entah itu berdua dengan
                                    pacarnya atau bisa juga berkumpul dengan teman-temannya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Gai Bintang
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Gai bintang alek gagar bulan <br>
                                    Pagaina janor koneng <br>
                                    Kaka elang alek sajan jau <br>
                                    Pajauna gan lon alon <br>
                                    Leya letes kembang kates tokca tokcer
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu ‘Gai Bintang’ atau yang juga populer dengan nama ‘Gei Bintang’ merupakan lagu
                                    daerah dari Jawa Timur lainnya yang populer. Berbeda dengan lagu sebelumnya dan
                                    kebanyakan lagu daerah Jawa Timur lainnya yang menggunakan Bahasa Jawa, lagu ‘Gai
                                    Bintang’ menggunakan bahasa Madura. <br><br>
                                    Lagu ini juga sangat pendek karena hanya terdiri dari empat baris dan tiga bait. Lagu
                                    ‘Gai Bintang’ sendiri bercerita tentang orang yang ingin menggapai bintang dengan
                                    menggunakan galah dari janur kuning. Namun, alih-alih mendapatkan bintang, dia justru
                                    mendapatkan bulan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Lindri
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Lindri adang telung kati lawuhe semayi <br>
                                    Adhitutul a mak telep lep <br>
                                    A dhiemplok plok a mak telep <br>
                                    Pacak gulu cingkring adhuh yayi sendal pancing <br>
                                    Adhuh dhangkrek krek adhuh dhangkrek krek
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu daerah selanjutnya dari Jawa Timur berjudul ‘Lindri’. Lagu yang satu ini juga
                                    jarang didengar oleh orang-orang dari daerah lain di luar wilayah Jawa Timur. Namun,
                                    kalau kamu orang asli Jawa Timur, pasti pernah mendengar lagu ini setidaknya sekali
                                    seumur hidupmu, atau jangan-jangan kamu justru hafal liriknya? <br><br>
                                    Lagu ‘Lindri’ sendiri menggunakan bahasa Jawa dan memiliki makna untuk selalu mensyukuri
                                    apa yang diberikan Tuhan kepada kita, hambanya. Meski apa yang kita dapatkan tidak
                                    selalu sesuai dengan apa yang kita harapkan, tetapi kita selalu mendapatkan apa yang
                                    benar-benar kita butuhkan.
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

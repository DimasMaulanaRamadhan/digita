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
                    <h1 align="center">Senjata Jawa Tengah</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Keris
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kerisjateng.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Keris, senjata tradisional khas Jawa Tengah, adalah warisan berharga yang dihargai oleh
                                    masyarakat setempat dan dikenal di seluruh dunia karena nilai seninya yang tinggi.

                                    Keris dapat dibuat dari berbagai jenis bahan, dan setiap daerah memiliki ciri khasnya
                                    sendiri dalam hal bahan dan desain Keris. <br><br>

                                    Saat ini, keris Jawa Tengah lebih sering digunakan sebagai aksesori pakaian adat yang
                                    indah atau sebagai kenang-kenangan yang dicari oleh para kolektor.
                                    Keris memiliki beragam bentuk, tetapi umumnya dikenal dengan kelokan yang khas,
                                    seringkali berjumlah ganjil. Ada juga keris yang memiliki bentuk lurus. <br><br>

                                    Proses pembuatan Keris ini melibatkan seorang ahli yang disebut "empu," dan keris
                                    terdiri dari tiga bagian utama: wilah, warangka, dan pegangan Keris.

                                    Keris bukan hanya senjata tradisional, tetapi juga memiliki nilai simbolis yang mendalam
                                    dalam budaya Jawa Tengah.

                                    Pada masa lalu, Keris digunakan sebagai tanda identitas sosial, keluarga, atau kelompok.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Wedhung
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/wedhung.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Wedhung biasanya digunakan oleh penduduk setempat sebagai senjata tusuk, bentuknya
                                    menyerupai pisau dengan mata bilah yang tajam. Wedhung lengkap dengan rangka dari kayu
                                    jati. <br><br>
                                    Senjata ini tidak seterkenal jika dibandingkan dengan keris ataupun senjata
                                    lainnya. Namun di zaman dahulu masyarakat menggunakan senjata wedhung untuk beberapa
                                    keperluan hingga untuk berperang.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Kudi
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kudi.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Kudi merupakan senjata tradisional Jawa Tengah yang kerap kali digunakan oleh masyarakat
                                    Banyumas. Dikutip dari KBBI Kudi memiliki bentuk menyerupai dengan kujang, matanya
                                    berlekuk 3, memiliki perut depan yang khas, bertangkai pendek sekitar 65-80 cm. <br><br>
                                    Senjata ini berfungsi sebagai alat yang digunakan untuk memotong benda
                                    keras. Berdasarkan bermacam fungsi yang tidak dimiliki alat tajam lain, alat ini juga
                                    secara tidak langsung mencerminkan masyarakat Banyumas yang simpel dan fleksibel dalam
                                    mengerjakan sesuatu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tombak
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tombakjateng.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Menurut KBBI, tombak adalah senjata tajam dan runcing, bermata dua, bertangkai panjang,
                                    untuk menusuk dari jarak dekat atau jauh (dengan cara melemparkannya). Tombak adalah
                                    senjata tradisional Jawa Tengah yang telah digunakan sejak zaman dahulu. <br><br>Tombak
                                    memiliki
                                    beragam bentuk dan ukiran yang indah, membuatnya menjadi senjata yang anggun dan
                                    mempesona. Kekuatan dan ketepatan tombak membuatnya menjadi senjata yang efektif dalam
                                    pertempuran jarak dekat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Condroso
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/condroso.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata tradisional ini pada zaman dahulu digunakan oleh perempuan sebagai alat
                                    perlindungan diri dari hal-hal yang tidak diinginkan. Senjata ini memiliki ukuran yang
                                    cukup kecil dan seperti tusuk konde. <br><br>Dahulu
                                    lazimnya senjata ini digunakan untuk perempuan yang sedang ditugaskan menjadi telik
                                    sandi atau mata-mata. Terbuat dari besi dengan ujung yang tajam senjata ini bisa
                                    digunakan untuk mematikan. Condroso biasanya hanya digunakan saat situasi darurat saja
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Plintheng
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/plintheng.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Plintheng, sebuah kayu yang dibentuk huruf Y dan diikat dengan karet di ujung kanan dan
                                    kiri ditambah selembar kulit hewan ditengah karet. Di zaman dahulu plintheng digunakan
                                    sebagai senjata. <br><br> Senjata ini digunakan dengan cara meletakan kerikil
                                    sebagai peluru yang kemudian ditarik untuk menciptakan gaya pegas yang kuat. Namun di
                                    masa silam, plintheng selain digunakan sebagai senjata juga digunakan sebagai sarana
                                    hiburan anak-anak Jawa bermain.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Golok
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/golok.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Golok adalah senjata tradisional Jawa Tengah yang memiliki bentuk seperti sebilah parang
                                    pendek. Terbuat dari baja atau besi berkualitas tinggi, golok adalah senjata yang kuat
                                    dan tajam. <br><br> Selain digunakan dalam pertempuran, golok juga merupakan alat serba guna yang
                                    digunakan dalam kegiatan sehari-hari seperti memotong kayu dan membersihkan tanaman.
                                    Keunikan golok Jawa Tengah terletak pada hiasan dan ukiran yang terdapat pada gagang dan
                                    sarungnya.
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

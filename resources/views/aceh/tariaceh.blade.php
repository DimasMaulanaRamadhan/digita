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
                    <h2 align="center">Tari Daerah Aceh</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari saman
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/saman.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Saman yang merupakan tarian tradisional Aceh ini memang sudah dikenal seluruh
                                    dunia. Pada 24 November 2011, tarian tersebut resmi ditetapkan dalam Daftar
                                    Representatif Budaya Takbenda Warisan Manusia oleh UNESCO di Bali. Tari saman merupakan
                                    salah satu tarian tradisional Aceh berasal dari suku Gayo yang dibawakan oleh Syekh
                                    Saman, seorang penyebar agama Islam di Aceh. <br><br>
                                    Penari tari saman akan mengenakan pakaian khusus berwarna-warni. Selama tari saman
                                    dipentaskan, penari akan membentuk format pola lantai yang khas. Dalam melakukan tarian,
                                    penari harus berbaris membentuk garis lurus ke samping. Makna dari tarian ini adalah
                                    manusia merupakan makhluk sosial sehingga membutuhkan manusia lain.
                                    Pola duduk dengan kaki yang bertumpu seperti duduk di antara dua sujud juga melambangkan
                                    umat Islam yang sedang membentuk syaff ketika sedang melakukan salat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari seudati
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/seudati.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian tradisional Aceh ini memiliki suatu keunikan, yaitu dibawakan tanpa iringan alat
                                    musik apa pun. Sebagai pengiring, ada lantunan syair dari aneuk syahi. Tari Seudati
                                    berasal dari bahasa Arab 'Syahadat', yang artinya bersaksi atau pengakuan terhadap tiada
                                    Tuhan selain Allah dan Nabi Muhammad utusan Allah dalam Islam. <br><br>
                                    Ada juga yang mengatakan bahwa Seudati berasal dari kata 'Seurasi' yang berarti harmonis
                                    atau kompak. Berdasarkan sejarahnya, tarian ini mengisahkan berbagai macam masalah yang
                                    terjadi agar masyarakat Aceh tahu cara menyelesaikannya bersama-sama. Awalnya, tarian
                                    Seudati dikenal sebagai tarian pesisir yang disebut Ratoh atau Ratoih. Artinya,
                                    menceritakan untuk mengawali permainan atau diperagakan untuk bersuka ria saat musim
                                    panen atau malam bulan purnama. Saat pentas, penari Seudati memakai baju berwarna putih
                                    dipadu dengan celana panjang. Sedangkan aksesorisnya terdiri dari kain songket di
                                    pinggang hingga paha. Penari juga dilengkapi rencong di bagian pinggang dan Tangkulok
                                    (ikat kepala) berwarna merah yang menjadi ciri khas tari Seudati.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari tarek pukat
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/pukat.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Tarek Pukat terinspirasi dari tradisi menarek pukat atau menarik jala yang
                                    dilakukan masyarakat Aceh, khususnya di daerah pesisir. Tarian tradisional Aceh ini
                                    menggambarkan tentang aktivitas para nelayan Aceh saat menangkap ikan di laut. <br><br>
                                    Umumnya, tari Tarek Pukat ditampilkan dalam berbagai acara, seperti:
                                </p>
                                <ul class="mt-2 mb-2" style="padding-left: 2cm">
                                    <li>Upacara penyambutan</li>
                                    <li>Acara adat</li>
                                    <li>Acara budaya</li>
                                </ul>
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Dalam pertunjukannya, penari menggunakan busana tradisional serta dihias dengan hiasan
                                    dan tata rias yang membuatnya terlihat cantik. Dengan diiringi kelompok pengiring,
                                    penari menari dengan gerakannya yang khas dan menggunakan tali sebagai atributnya.
                                    Kostum yang digunakan para penari dalam pertunjukan tari ini biasanya merupakan busana
                                    tradisional. Para penari biasanya menggunakan pakaian seperti baju lengan panjang,
                                    celana panjang, dan kerudung pada bagian kepala. Selain itu, penari juga menggunakan
                                    kain songket dan sabuk pada bagian pinggang serta hiasan kerudung sebagai pemanisnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Likok pulo
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/pulo.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Likok Pulo diciptakan sekitar tahun 1849 oleh seorang pedagang sekaligus ulama asal
                                    Arab bernama Syekh Ahmad Badron. Secara bahasa, tarian tradisional Aceh ini berasal dari
                                    2 kata yakni ‘likok’ yang bermakna ‘gerak tari’ dan ‘pulo’ yang berarti ‘pulau’.
                                    <br><br>
                                    Pulau yang dimaksudkan adalah sebuah pulau kecil yang terdapat di ujung pelosok utara
                                    pulau Sumatera yang kerap disebut sebagai Pulau Beras (Breuh). Secara historis, tari
                                    tersebut biasanya digelar sesudah menanam padi atau masa menjelang panen tiba. Tarian
                                    ini juga disertai dengan pemukulan rapa'i atau alat musik untuk mengatur gerakan tari.
                                    Para penari juga dilengkapi dengan properti bambu (Boh Likok).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Laweut
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/laweut.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Laweut berasal dari kata selawat, yaitu berupa sanjungan yang ditujukan kepada
                                    junjungan Nabi Muhammad SAW. Syair-syair yang mengiringi tarian ini memang banyak
                                    berselawat atas Nabi. Fungsi utama tarian ini, yaitu sebagai media dakwah yang
                                    memberikan pengetahuan tentang agama Islam. <br><br>
                                    Tari Laweut ini diiringi dengan suara yang berasal dari badan penari itu sendiri,
                                    seperti:
                                </p>
                                <ul class="mt-2 mb-2" style="padding-left: 2cm">
                                    <li>Tepukan dada</li>
                                    <li>Norma dan sopan santun jari</li>
                                    <li>Tepukan tangan</li>
                                    <li>Hentakan kaki</li>
                                    <li>Vokal syahi yang menyanyikan syair</li>
                                </ul>
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Syair-syair tersebut mengandung pesan-pesan tersendiri mengenai keimanan, pembangunan,
                                    kemasyarakatan, dan lain-lain.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Ratoh Duek
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/duek.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Ratoh Duek merupakan tari tradisional dari Provinsi Aceh. Kata ratoh berasal dari
                                    Bahasa Arab rateeb, yang artinya kegiatan berdoa atau berzikir. Tarian tradisional Aceh
                                    ini menggambarkan semangat dan kebersamaan masyarakat Aceh. <br><br>
                                    Harmoni antara syair dan tepukan berirama para penari mengungkapkan kekompakkan
                                    masyarakat Aceh dalam kegiatan sehari-hari. Tari Ratoh Duek tidak mengenakan properti
                                    tari apa pun. Kostum yang digunakan adalah baju khas Aceh yang telah dimodifikasi, yaitu
                                    pakaian polos yang dipadukan dengan kain songket Aceh, serta hiasan kepala dan ikat
                                    pinggang.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Guel
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/guel.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian tradisional Aceh ini merupakan salah satu tarian tradisional yang berasal dari
                                    budaya masyarakat Gayo di Aceh. Tari Guel memiliki gerakan yang sangat khas dan penuh
                                    makna, bahkan terkesan bernuansa mistis. Tarian ini awalnya lebih difungsikan sebagai
                                    tarian upacara adat tertentu di kalangan masyarakat Gayo, baik secara ritual adat maupun
                                    perayaan adat. Bagi masyarakat Gayo, tarian ini bukan sekadar tarian biasa. Tetapi,
                                    memiliki nilai dan filosofi kebudayaan mereka. <br><br>
                                    Setiap gerakan tarian mengandung pesan dan nilai-nilai di dalamnya. Gerakan Tari Guel
                                    ini sangat unik dan gerakan disesuaikan dengan suara musik pengiring. Menariknya,
                                    gerakan penari pria dan wanita cenderung berbeda. Biasanya gerakan penari pria lebih
                                    mendominasi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Rapai Geleng
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/geleng.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian Rapai Geleng berasal dari daerah Manggeng di Aceh Barat Daya. Tarian tradisional
                                    Aceh ini bertujuan untuk menanamkan nilai-nilai moral untuk masyarakat. Syair yang
                                    digunakan merupakan lagu-lagu keagamaan. Nama geleng sendiri diambil dari gerakan
                                    penarinya yang menggeleng-gelengkan kepala ke kanan dan kiri dengan berirama dan sangat
                                    kompak. Sedangkan, kata rapai diambil dari nama alat musik yang menyerupai gendang yang
                                    dimainkan oleh penari. Saat ini alat musik rapai lebih dikenal dengan nama rebana.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Didong
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/didong.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Didong merupakan sebuah kesenian rakyat Gayo perpaduan unsur tari, vokal, dan
                                    sastra. Pada sejarahnya, tarian ini dipakai sebagai sarana hiburan bagi tentara Jepang
                                    yang menduduki tanah Gayo. Hal ini merupakan ide bagi masyarakat Gayo untuk menyebarkan
                                    didong yang syairnya tidak hanya terpaku kepada hal-hal religius dan adat-istiadat.
                                    <br><br>
                                    Namun, juga permasalahan sosial yang bernada protes terhadap kekuasaan penjajah Jepang.
                                    Dulunya seragam penari Didong dibedakan melalui warna dan mempunyai arti yang
                                    berbeda-beda, seperti:
                                </p>
                                <ul class="mt-2 mb-2" style="padding-left: 2cm">
                                    <li>Warna kuning berarti “Raja”</li>
                                    <li>Warna hitam “Rakyat”</li>
                                    <li>Warna merah “ Petuah”</li>
                                    <li>Warna putih “Imam”</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari bines
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/bines.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Bines bermula dari kesenian tradisi yang disebut “piasan” yang dikemudian hari
                                    dijadikan salah satu sarana dakwah Islam. Sebagai kesenian yang lahir dalam kehidupan
                                    masyarakat tradisional, awalnya tari ini bersifat sakral dan hanya ditampilkan dalam
                                    upacara adat saja. <br><br>
                                    Dahulu perempuan di Gayo Lues tidak diizinkan menarikan tari Saman karena sifatnya
                                    terlampau keras, kencang disertai dengan gerakan memukul-mukul dada. Oleh karena itu,
                                    para leluhur menciptakan jenis tarian lain yang dianggap layak untuk ditarikan oleh para
                                    perempuan. Hal yang menarik lainnya adalah najuk atau pemberian uang kertas yang dijepit
                                    menggunakan lidi dan diselipkan di sempol atau sanggul para penari. Tradisi tradisional
                                    Aceh ini adalah bentuk penghargaan atau apresiasi penonton kepada penari Bines.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('aceh') }}" class="btn-back">
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

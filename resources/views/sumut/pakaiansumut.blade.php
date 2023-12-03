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
                    <h2 align="center">Pakaian Adat Sumatera Utara</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Batak Toba
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/toba.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Sumatera Utara khas Batak Toba terbuat dari kain ulos atau kain tenun
                                    tradisional, mulai dari bagian atas sampai bawah. <br><br>
                                    Pakaian adat pria bagian atas disebut ampe-ampe dan bagian bawah disebut singkot.

                                    Sementara untuk perempuan, bagian atas berupa hoba-hoba dan bagian bawah adalah haen.
                                    <br><br>

                                    Mengenakan busana ini juga dilengkapi dengan aksesoris berupa penutup kepala pada
                                    laki-laki yang disebut bulang-bulang.

                                    Mereka juga mengenakan pengikat kepala atau tali-tali pada perempuan, serta memakai
                                    selendang ulos. <br><br>

                                    Bagi orang-orang Batak Toba, ulos memiliki arti khusus. Jenisnya pun ada banyak, sesuai
                                    dengan maknanya masing-masing.

                                    Misalnya saja, ulos ragi hotang digunakan untuk pesta sukacita, ulos simbolang dikenakan
                                    saat berduka, dan banyak jenis lainnya.

                                    Selain upacara adat, pakaian adat Batak Toba digunakan untuk acara tertentu seperti
                                    pernikahan dan pesta syukuran.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Batak Karo
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/karo.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Sumatera Utara khas Batak Karo tampak serupa dengan Batak Toba.

                                    Perbedaan yang paling menonjol adalah penggunaan kain tenun yang disebut uis gara.
                                    <br><br>

                                    Dalam bahasa Karo, uis berarti kain, dan gara berarti merah.

                                    Disebut "kain merah" karena uis gara didominasi dengan warna merah, atau kadang
                                    dipadukan dengan warna lain seperti hitam dan putih.

                                    Kemudian dihiasi dengan tenunan benang berwarna emas dan perak yang membuatnya terlihat
                                    mahal dan elegan. <br><br>

                                    Dulunya, uis gara dipakai sebagai pakaian sehari-hari untuk para perempuan Karo.

                                    Namun, sekarang hanya dikenakan saat upacara adat dan pesta pernikahan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Batak Mandailing
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/mandailing.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Batak Mandailing juga hampir serupa dengan Batak Toba yaitu menggunakan
                                    kain ulos. <br><br>

                                    Perbedaan yang paling terlihat ada pada kain ulos yang dililitkan pada bagian tengah
                                    badan, juga pada hiasan kepala pada pria dan wanita.

                                    Hiasan kepala pria Batak Mandailing memiliki bentuk khas dan berwarna hitam yang disebut
                                    ampu.

                                    Sementara untuk wanita hiasan kepala disebut bulang yang diikatkan ke kening. <br><br>

                                    Bulang tersebut terbuat dari emas, tetapi sekarang sudah banyak yang terbuat dari logam
                                    dengan sepuhan emas.

                                    Bulang mengandung makna sebagai lambang kebesaran atau kemuliaan sekaligus sebagai
                                    simbol dari struktur masyarakat.
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Batak Simalungun
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/simalungun.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Orang Batak Simalungun juga menggunakan kain ulos untuk pakaian adat mereka. Hanya saja
                                    penyebutannya berbeda.

                                    Mereka menyebut pakaian adat Sumatera Utara ini yakni kain hiou. <br><br>

                                    Bentuk dari pakaian adat Batak Simalungun hampir menyerupai Batak Toba, namun hiasan
                                    kepala pada kaum pria lebih tinggi dan lancip. <br><br>

                                    Selain itu, warnanya didominasi merah dan kuning emas, yang memberikan kesan kemewahan
                                    dan keberanian yang mendalam pada pakaian adat tersebut.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Batak Pakpak
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/pakpak.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Sumatera Utara ini Batak Pakpak, disebut baju merapi-api, dengan didominasi
                                    warna hitam.

                                    Berbahan dasar katun, dan dikenakan dengan oles atau tenunan khas Pakpak. <br><br>

                                    Pada laki-laki Batak Pakpak, baju merapi-api menyerupai pakaian model Melayu dengan
                                    leher bulat dan dihiasi dengan manik-manik atau api-api.

                                    Sementara untuk bagian bawah, berupa celana hitam yang dibalut dengan sarung yang
                                    disebut oles sidosdos, dengan ujung terbuka di depan. <br><br>

                                    Baju merapi-rapi pada perempuan juga berwarna hitam dengan model leher segitiga dan
                                    dihiasi dengan api-api.

                                    Bagian bawah berupa sarung atau oles perdabaitak yang dililit pada pinggang secara
                                    melingkar.

                                    Ketika mengenakan pakaian adat Pakpak, pria dan wanita juga memakai aksesoris tambahan,
                                    berupa penutup kepala, kalung dan aksesoris lainnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Batak Angkola
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/angkola.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Batak Angkola hampir serupa dengan busana adat Batak Mandailing. <br><br>

                                    Pakaian adat Sumatara utara ini pada wanita didominasi dengan warna merah dan dikenakan
                                    dengan selendang yang disalempangkan pada badan.

                                    Hiasan kepalanya mirip dengan Batak Mandailing. Untuk pria memakai penutup kepala
                                    disebut ampu. <br><br>

                                    Ampu memiliki bentuk khas, dan merupakan mahkota yang biasanya digunakan raja-raja di
                                    Mandailing dan Angkola pada masa lalu.

                                    Warna hitam ampu mengandung fungsi magis, sedangkan warna emas mengandung lambang
                                    kebesaran.

                                    Sementara untuk pakaian adat Sumatera Utara wanita, memakai hiasan kepala berupa bulang
                                    berwarna emas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Nias
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/nias.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Karena letaknya terpisah, suku Nias memiliki budaya dan adat istiadat yang berbeda
                                    dengan suku Batak.

                                    Begitu pula dengan pakaian adat Sumatera Utara satu ini yang juga berbeda. <br><br>

                                    Pakaian adat Sumatera Utara khas Nias disebut baru oholu untuk pakaian pria, dan baru
                                    ladari untuk pakaian wanita.

                                    Mengutip laman Museum Nias, dulunya orang-orang Nias membuat pakaian dari kulit pohon
                                    atau menenun serat-serat dari kulit pohon atau rumput.

                                    Pakaian laki-laki berupa rompi berwarna cokelat atau hitam, dan dihiasi ornamen kuning,
                                    merah dan hitam.

                                    Sementara pakaian wanita berupa selembar kain yang melilit pinggang dan tanpa baju.
                                    <br><br>

                                    Saat akses mendapatkan kain semakin mudah, orang-orang Nias pun membuat baju dengan
                                    bahan-bahan baru, dengan didominasi oleh warna merah dan kuning.

                                    Sebagai pelengkap, digunakan aksesoris seperti anting dan mahkota seperti ikat kepala.
                                    <br><br>

                                    Khusus untuk pengantin perempuan, busananya berbentuk jubah hitam yang berhiaskan motif
                                    binatang dan terbuat dari beludru merah.

                                    Sementara pengantin pria mengenakan celana hitam selutut, baju kuning berpotongan serong
                                    dari beludru yang diberi ornamen berwarna merah, kuning di bagian depan, separuh leher
                                    dan lengan.

                                    Selendang warna kuning dililitkan di pinggang.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Batak Sibolga
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/sibolga.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Sumatera Utara selanjutnya adalah dari suku Batak Sibolga yang umumnya
                                    berasal dari suku Batak Toba. <br><br>

                                    Memiliki busana yang sedikit berbeda, pakaian adat yang satu ini memiliki campuran dari
                                    Minangkabau, tepatnya dari pesisir timur.

                                    Salah satu ciri khas pakaian adat Batak Sibolga adalah perpaduan warna busana yang
                                    gelap, seperti biru. <br><br>

                                    Selain itu, pakaian adat yang satu ini juga selalu dilengkapi dengan aksesoris kepala
                                    atau mahkota tinggi untuk perempuan dan penutup kepala pada laki-laki.

                                    Kemudian baik laki-laki maupun perempuan juga dilengkapi dengan kalung emas besar untuk
                                    tampilan lebih mewah.
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Suku Melayu
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/melayu.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Suku Melayu banyak tersebar di daerah Sumatera Utara dan memiliki pakaian adatnya
                                    sendiri. <br><br>

                                    Pakaian adat suku Melayu untuk wanita berupa baju kurung atau kebaya panjang dipadukan
                                    dengan songket.

                                    Baju kurung terbuat dari brokat atau sutra yang dihiasi dengan detail-detail berwarna
                                    emas. <br><br>

                                    Sementara pria Melayu memakai pakaian adat yang disebut teluk belanga, yang terdiri atas
                                    baju berkrah kocak musang, dan dipadukan dengan celana bermotif sama.

                                    Kemudian dilengkapi atribut berupa tengkulok atau penutup kepala dari kain songket. <br>

                                    Tengkulok merupakan lambang kebesaran dan kegagahan seorang pria Melayu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('sumut') }}" class="btn-back">
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

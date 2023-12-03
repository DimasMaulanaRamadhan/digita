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
                    <h2 align="center">Pakaian Adat Sumatera Barat</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Baju Batusangkar
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/batusangkar.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Sumatera Barat pertama adalah Batusangkar. Ini diambil dari salah satu kota
                                    di Sumatera Barat.<br><br>

                                    Pada wanita, memakai tutup kepala yang dipasang di kepala.<br><br>

                                    Dipadankan dengan baju kurung dan songket. Baju yang dikenakannya terdapat ornamen
                                    berupa sulaman emas di bagian tangan dan leher.<br><br>

                                    Dalam kostum ini para pria juga memakai celana panjang dan kain songket yang ditenun di
                                    sekeliling tubuhnya.<br><br>

                                    Pakaian yang dikenakan di bagian tangan berbordir emas dan kerah.<br><br>

                                    Serta dilengkapi bagian kepalanya memakai penutup kepala bernama saluak.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Baju Batabue
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/batabue.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Jika pakaian adat Sumatera Barat sebelumnya identik dengan warna mencolok, berbeda
                                    halnya dengan ini.<br><br>

                                    Warna yang paling sering digunakan dalam Batabue adalah warna merah, biru, lembayung,
                                    dan hitam.<br><br>

                                    Biasanya mengenakan busana berwarna gelap dengan taburan benang emas yang membuatnya
                                    semakin terlihat berkilauan.<br><br>

                                    Taburan benang emas dalam pakaian adat Sumatera Barat ini memiliki makna filosofis yang
                                    cukup unik, yakni menandakan tentang betapa luasnya kekayaan alam Minangkabau.<br><br>

                                    Baju batabue ini terdiri atas baju kurung serta pernak pernik di sekujur busana. Corak
                                    dan motifnya tentu bermacam-macam dan disesuaikan dengan selera pemakainya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Limpapeh Rumah Nan Gadang atau Bundo Kanduang
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/bundo.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Sumatera Barat berikutnya biasa dipakai oleh kaum wanita Minangkabau.<br><br>

                                    Limpapeh rumah nan gadang atau bundo kanduang ini memiliki ciri khas yaitu bagian
                                    kepalanya yang memiliki bentuk seperti atap rumah Gadang Sumatera Barat.<br><br>

                                    Secara umum, pakaian ini memiliki desain yang berbeda-beda namun bentuknya menyerupai
                                    satu sama lain.<br><br>

                                    Makna dan keunikan pakaian tradisional ini adalah melambangkan kebesaran, lho!<br><br>

                                    Makna kebesaran bagi perempuan terlebih para istri, yakni tiang tengah dari bangunan
                                    rumah.<br><br>

                                    Peran istri atau ibu dalam rumah tangga yakni sebagai pengimbang serta memperkokoh
                                    hubungan keluarga.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Penghulu
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/penghulu.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Sesuai dengan namanya, pakaian adat Sumatera Barat ini hanya bisa dipakai oleh pemangku
                                    adat.<br><br>

                                    Pakaian ini terdiri atas celana panjang dan atasan berupa Teluk Belanga.<br><br>

                                    Berbahan dasar kain beludru, halus dan disertai penutup kepala yang disebut sebagai
                                    deta.<br><br>

                                    Pada umumnya, kain yang dipakai untuk membuat penghulu didominasi oleh warna hitam.<br><br>

                                    Hal ini karena warna hitam memiliki makna filosofis yang mendalam, yakni sebagai lambang
                                    kepemimpinan suatu kelompok dan yang dihormati.<br><br>

                                    Tak jarang, banyak orang memakainya dengan tongkat ataupun sesamping.<br><br>

                                    Pakaian adat ini juga banyak digunakan mempelai pria pada saat upacara pernikahan.
                                    Bahkan sering pula digunakan pada kegiatan yang lain.
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Busana Pernikahan Adat Sumatera Barat
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/nikahsumbar.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Nah, untuk adat pernikahan, terdapat pakaian khusus pernikahan yang digunakan oleh
                                    masyarakat Sumatera Barat.<br><br>

                                    Ini merupakan pakaian adat Sumatera Barat yang identik dengan warna merah dengan
                                    aksesori lengkap serta penutup kepala.<br><br>

                                    Aksesorinya cukup banyak, khususnya calon pengantin wanita. Seperti, selendang, mahkota
                                    atau penutup kepala, gelang, kalung dan banyak lagi.<br><br>

                                    Jenis pakaian ini terinspirasi dari percampuran budaya Tionghoa dan Eropa. Tentunya
                                    hanya digunakan saat upacara pernikahan saja.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('sumbar') }}" class="btn-back">
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

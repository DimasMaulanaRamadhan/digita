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
                    <h2 align="center">Pakaian Adat Bali</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Payas Agung
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/agung.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Baju adat Bali yang lengkap dan terlihat mewah adalah Payas Agung. Dahulunya, pakaian
                                    ini digunakan untuk kalangan brahmana, ksatriya, dan waisya. Baju ini sekarang digunakan
                                    oleh pengantin dalam upacara pernikahan. Payas Agung menggambarkan keindahan, warnanya
                                    juga cerah sehingga mencirikan kebahagiaan dan kegembiraan. <br><br>
                                    Tiap daerah memiliki kekhasan, namun masih tetap sesuai pakem. Contohnya Payas Agung
                                    adat Medeeng Singaraja (Buleleng) yang berbeda dengan Payas Agung adat Asak Karangasem.
                                    Pengantin wanita mengenakan tapih atau sinjang prada selain warna kuning dan putih,
                                    kamen prada, sabuk prada, sabuk toros, dan selendang prada warna kuning. Sedangkan,
                                    pengantin pria mengenakan aksesoris berupa gelung agung dan mengenakan rumbing di
                                    telinga, memakai badong, gelang nagasatru dan gelang kana, serta cincin bermata merah.
                                    Baju yang dipakai adalah kain kancut prada, kampuh prada, dan umpal prada. Payas Agung
                                    juga digunakan oleh manggala/pangarep yang diupacarakan dalam upacara manusa yadnya dan
                                    sebagai yajamana pada upacara yang lain.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Payas madya
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/madya.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian Payas Madya adalah pakaian adat tingkat menengah. Biasanya dipakai dalam upacara
                                    potong gigi dan ngidih. Upacara potong gigi adalah penyucian diri ketika sudah dewasa
                                    dan akan memasuki jenjang pernikahan. Sedangkan ngidih yaitu ketika laki-laki meminang
                                    dan datang ke rumah calon pasangan. <br><br>
                                    Untuk upacara ini, payas madya memiliki ciri penataan rambut menggunakan gelung moding.
                                    Selain itu, juga menggunakan semi dari malem, dan memakai aksesoris rambut berupa bunga
                                    kompyong, 7 sasak lepas, dan 21 bunga sandat emas. Busananya menggunakan kamen songket
                                    asli tenun bali, lengkap dengan sabuk prada belah ketupat 4 warna. <br><br>
                                    Para wisatawan yang mau memasuki kawasan suci, seperti pura, situs peninggalan kerajaan
                                    tertentu dan lain-lain, juga harus memakai pakaian madya untuk menghormati dan menjaga
                                    kesucian tempat tersebut.Secara sederhana, ini hanya terdiri dari tiga bagian pokok.
                                    Pertama adalah kamben, yaitu selembar kain yang dililitkan pada tubuh bagian bawah.Kedua
                                    adalah kancrik, yaitu selendang untuk ikat pinggang. Ketiga adalah udeng, yaitu kain
                                    ikat kepala. Sedangkan bajunya bebas, asal rapi dan sopan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pakaian Adat Payas alit
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/alit.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Baju Adat payas alit merupakan salah satu jenis baju adat bali yang sering dipakai oleh
                                    masyarakat ketika ada rapat adat atau kegiatan di pura. Baju payas alit untuk perempuan
                                    berupa kebaya yang dilengkapi dengan kamen dan selendang. Sedangkan payas alit untuk
                                    pria berupa baju safari yang dilengkapi dengan kamen dan udeng.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('bali') }}" class="btn-back">
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

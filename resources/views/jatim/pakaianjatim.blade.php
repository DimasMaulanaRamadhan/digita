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
                    <h2 align="center">Pakaian Adat Jawa Timur</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Baju Gothil
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/gothil.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Jawa Timur ini merupakan ciri khas yang dipakai oleh para pria. Baju gothil
                                    juga disebut pakaian warok ponorogo. Warna pakaian tradisional ini juga khas yakni hitam
                                    polos dengan ukuran longgar serta lengan panjang. Kalau Anda sering menonton pertunjukan
                                    Reog Ponorogo, Anda pasti mengetahui pakaian adat yang satu ini. <br> <br>
                                    Baju adat ini memiliki pasangannya, yakni Celana Komprang. Ukurannya yang besar dan
                                    longgar saat dipakai seolah memberi ruang pada penggunanya untuk menikmati ruang gerak.
                                    Bentuk celana ini cukup unik, ditambah lagi celana ini dijahit dengan teknik khusus.Di
                                    bagian pinggang, celana diberi kolor yang terbuat dari bahan lawe dengan ujungnya yang
                                    menjuntai ke bawah. Bentuk ini dapat menambah kesan gagah dan sangar bagi pemakainya
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Kebaya Rancongan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/rancongan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Jawa Timur yang satu ini memang kental oleh pengaruh Suku Madura, yaitu
                                    Kebaya Rancongan. Kebaya rancongan memang sering dikenakan oleh wanita Madura. Motifnya
                                    sederhana, biasanya terbuat dari kain tipis dan menerawang, seperti brokat. Agar kebaya
                                    ini nampak serasi dengan bawahannya, wanita Madura mengenakan kain batik yang dikenakan
                                    seperti rok panjang. <br> <br>
                                    Motifnya bisa beragam, contohnya Lasem, Strojan, dan Tabiruan. Sebagai pelengkap
                                    mengenakan Kebaya Rancongan, ada beberapa perhiasan yang mereka kenakan adalah giwang
                                    emas, kalung emas yang berbentuk biji jagung, dan sisir emas yang dinamakan Sisir Dinar
                                    atau Sisir Cucuk.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Baju Mantenan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/mantenan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Dalam bahasa Jawa, manten memiliki arti pengantin. Sesuai namanya, baju ini digunakan
                                    oleh pasangan pengantin laki-laki dan perempuan. Model pakaian ini dulunya sering
                                    dipakai oleh para raja Jawa kuno. Lebih jelasnya, baju mantenan untuk pria terbuat dari
                                    kain beludru hitam dan berupa beskap (jas resmi dalam tradisi Jawa Mataraman) yang
                                    bagian depan dan belakangnya tidak sama panjangnya. <br> <br>
                                    Beskap tersebut didominasi oleh motif berwarna emas yang terbuat dari kawat. Konon,
                                    dulunya kawat tersebut terbuat dari emas, namun seiring dengan waktu dan mengingat harga
                                    emas yang tinggi, bahan kawat bisa dimodifikasi. <br> <br>
                                    Pada wanita, kemben merupakan pakaian yang pertama kali digunakan. Kemben sendiri
                                    merupakan kain yang digunakan untuk melilit tubuh wanita bagian dada dan perut. Setelah
                                    kemben, baru pakaian manten dikenakan untuk menutupi bagian tubuh yang masih terbuka.
                                    Baju Manten berbahan sama dengan pakaian pria namun motif yang dipilih terkesan lebih
                                    feminim. <br> <br>
                                    Untuk bawahan baju manten, baik pria maupun wanita, menggunakan jarik bermotif batik.
                                    Motif batik yang dipilih seragam untuk menguatkan kesamaan sebagai pasangan. Sementara
                                    pengantin pria mengenakan kalung yang terbuat dari bunga melati. Sementara mempelai
                                    wanita menggunakan rantai melati yang diikat di belakang kepala dan dibiarkan menjuntai
                                    ke depan pundak sampai ke perut. <br> <br>
                                    Untuk penutup kepala sendiri bermacam-macam. Ada yang mengenakan blangkon, odheng, peci,
                                    dan topi sultan. Sementara untuk wanitanya menggunakan mahkota yang diberi melati.
                                    Selain penutup kepala, dapat ditemui beberapa aksesoris lain seperti senjata, sepatu,
                                    dan lain-lain sesuai dengan kesepakatan antara kedua belah pihak mempelai. Dengan satu
                                    set pakaian tersebut, mempelai pria dan wanita diharapkan memiliki aura raja dan ratu.
                                    Cantik dan tampan, mempesona, dan berwibawa.
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

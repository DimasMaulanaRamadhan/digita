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
                    <h2 align="center">Rumah Adat Aceh</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Krong Bade
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/bade.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat pertama yang perlu Anda kenali adalah Rumah Krong Bade. Konsep bangunannya
                                    memakai rumah panggung, yang tingginya mencapai 2 sampai 3 meter. Lalu hampir seluruh
                                    material bangunannya memakai bahan alami, yaitu berbagai jenis kayu. <br><br>
                                    Lalu untuk atapnya banyak memakai daun rumbia. Pada kolong rumah panggung, pemilik rumah
                                    biasa menyimpan bahan makanan di sana. Lalu kegiatan masyarakat terutama ibu-ibu di sana
                                    juga banyak dilakukan di bawah rumah panggung, seperti saat menenun. <br><br>
                                    Ketika hendak masuk ke rumoh Aceh, akan ada tangga. Adapun jumlah tangganya sesuai
                                    dengan aturan pembuatannya, harus berjumlah ganjil. Setelah Anda menaiki tangga,
                                    nantinya akan ada beberapa hiasan seperti lukisan yang dipasang di dinding. <br><br>
                                    Jumlahnya bisa satu atau lebih. Jumlah hiasan di dinding inilah yang menunjukkan status
                                    sosial pemilik rumah Krong Bade ini. Semakin banyak hiasan atau lukisan yang dipajang,
                                    artinya semakin tinggi pula golongan pemilik Krong Bade tersebut. Begitu juga
                                    sebaliknya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Santeut
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/santeut.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Aceh yang kedua yaitu Rumah Santeut. Rumah ini juga biasa disebut dengan
                                    Tampong Limong. Bentuknya cukup sederhana, sebab masyarakat juga banyak memakai desain
                                    rumah jenis ini. Tiang pada bangunannya juga dibuat sama, yaitu sekitar 1,5 meter. <br><br>
                                    Lalu untuk material bangunan pada Tampong Limong ini juga jauh lebih murah dibanding
                                    dengan Krong Bade. Atap rumahnya memakai daun rumbia, sementara untuk lantai digunakan
                                    belahan bambu yang ditata atau di jajar rapat. <br><br>
                                    Selain sebagai lantai, belahan bambu ini dipakai juga karena sirkulasi udara di dalam
                                    ruangan yang dihasilkan dengan memakai bahan tersebut jauh lebih bagus. Dengan begitu,
                                    lantai dan ruangan tidak akan terasa lembab, namun lebih sejuk. <br><br>
                                    Rumah Santeut ini biasanya memang tidaklah terlalu luas. Maka dari itu, di bagian kolong
                                    biasanya akan dipakai untuk tempat mengadakan acara rumahan tertentu atau untuk menerima
                                    tamu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Rangkang
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/rangkang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Aceh yang terakhir yaitu rumah Rangkang. Rumah ini bukanlah rumah tinggal
                                    seperti sebelumnya, melainkan tempat untuk beristirahat bagi masyarakat atau disebut
                                    tempat singgah. Rumah ini memang dibuat untuk orang-orang yang ingin bersinggah. Seperti
                                    mereka yang ingin beristirahat saat sedang dalam perjalanan jauh. <br><br>
                                    Bentuk rumahnya adalah rumah berkonsep panggung. Karena hanya sebagai tempat singgah,
                                    maka biaya pembuatannya juga cukup murah. Bahan yang dipakai biasanya berupa kayu biasa
                                    ditambah dengan daun rumbia sebagai atapnya. Meski sederhana, namun rumah ini amat
                                    berguna bagi masyarakat Aceh. Sebab saat lelah, mereka dapat memakai tempat ini untuk
                                    istirahat sejenak.
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

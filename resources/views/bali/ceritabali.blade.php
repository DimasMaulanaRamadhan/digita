<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori Buku</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap">

    <!-- Custom Styles -->
    <style>
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
                    <h1 align="center">Legenda Danau Batur</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <img class="img-fluid rounded w-100" src="{{ asset('img/batur.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Cerita rakyat Bali ini bermula tentang kisah sepasang suami istri yang sudah berumah
                                    tangga cukup lama namun tak kunjung dikaruniai anak. Agar segera diberi momongan, ia
                                    berdoa setiap harinya. <br><br>
                                    Kemudian doa mereka pun dikabulkan. Sang istri mengandung dan setelah itu melahirkan
                                    seorang bayi laki – laki. Hanya saja sayangnya, setelah melahirkan sang istri meninggal
                                    dan tak lama kemudian sang suami pun ikut meninggal.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/batur1.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Sang bayi pun tinggal sebatang kara. Hanya saja, penduduk setempat memperhatikannya.
                                    Setiap hari penduduk bergantian memberi makan bayi tersebut. Bayi tersebut makannya
                                    sangat banyak dan bahkan sekali makan setara dengan 10 piring orang dewasa. Alhasil,
                                    badannya pun besar. Akhirnya, masyarakat setempat memberi nama bayi tersebut dengan nama
                                    Kebo Iwa.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/batur2.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Setelah dewasa, Kebo Iwa menjadi pemarah. Penduduk desa takut dengannya. Walaupun
                                    begitu, ia juga bersedia membantu penduduk desa yang membutuhkan tenaganya. Namun
                                    lama-kelamaan, para penduduk desa kewalahan untuk menyediakan makan Kebo Iwa. <br><br>
                                    Karena itu, warga berkumpul untuk membahas Kebo Iwa. Hasilnya, warga desa berencana
                                    untuk membuat sebuah kolam persediaan air guna mengatasi kekeringan di desa tersebut.
                                    Jika rencana tersebut berhasil, tentu warga tidak akan kesusahan lagi mencari air untuk
                                    mengairi sawah mereka.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/batur3.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Kemudian, salah seorang warga menemui Kebo Iwa. Orang itu lantas menjelaskan hasil
                                    diskusi warga. “Asal diketahui sebenarnya air di dalam tanah wilayah kita itu melimpah.
                                    Oleh karena itu, kami meminta bantuanmu untuk membuatkan sumur yang sangat besar! Jika
                                    hasil panen bisa seperti dulu, tentu kami tidak kesulitan untuk memberimu makanan.
                                    Berapa pun juga jumlah makanan yang engkau butuhkan, kami pasti sanggup untuk
                                    memenuhinya.” <br><br>
                                    Ganti hari, Kebo Iwa memulai pekerjaannya. Kebo Iwa menggali tanah di tempat yang
                                    ditentukan Kepala Desa. Lokasi tanah tersebut dipenuhi batu kapur, sehingga sangat susah
                                    digali. Namun bagi Kebo Iwa, hal itu tidak masalah. <br><br>
                                    Ia mendongkeli batu-batu kapur lalu dilemparkan pinggir lubang. Tanpa terasa, lubang
                                    yang dibuat sudah banyak, begitu pula batu kapur yang dilemparkan Kebo Iwa.
                                    Berhari-hari ia bekerja keras. Hingga akhirnya, air mulai memancar keluar. <br><br>
                                    Saat itu, para warga bersorak gembira. Kebo Iwa pun beristirahat di dalam sambil
                                    menyantap makanan yang dibawakan warga. Karena kekenyangan, ia ketiduran di kolam
                                    tersebut. <br><br>
                                    Tanpa terasa, air yang memancar semakin banyak, membuat tanah di sekitar kolam licin.
                                    Sebentar kemudian, bebatuan di pinggir kolam luruh ke bawah. Kebo Iwa tidak bisa berbuat
                                    apa-apa. <br><br>
                                    Air terus keluar hingga membanjiri desa tempat tinggal Kebo Iwa. Hingga akhirnya
                                    tercipta sebuah danau.
                                    Danau itu disebut Danau Batur, sedangkan timbunan tanah yang di sekitar danau berubah
                                    menjadi gunung dan disebut Gunung Batur.
                                </p>
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

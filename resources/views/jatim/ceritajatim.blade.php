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
                    <h1 align="center">Cindelaras</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <h5 style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Cindelaras menceritakan tentang seorang anak laki-laki yang lahir di hutan dan mempunyai
                                    seekor ayam jantan dengan kekuatan yang tidak terkalahkan.
                                </h5>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/cindelaras.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Di Kerajaan Jenggala, hiduplah seorang Raja, Ratu, dan selirnya. Raja tersebut bernama
                                    Raden Putra. Meski keduanya berparas rupawan, akan tetapi Ratu dan Selir memiliki
                                    kepribadian yang berlawanan. Sifat Sang Ratu baik hati, pintar dan bijaksana, sedangkan
                                    Si Selir selalu menyimpan kecemburuan setiap kali melihat kemesraan yang terjadi antara
                                    Raja dan Ratu. Suatu hari, Selir menyusun rencana jahatnya bersama seorang tabib dengan
                                    mengatakan
                                    kebohongannya kepada Raja bahwa Sang Ratu berniat meracuninya. Akibatnya, Sang Ratu
                                    diusir dari istana.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/cindelaras3.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Setelah beberapa bulan menetap di hutan belantara, Ratu dikaruniai
                                    seorang putra yang tampan dan sehat yang diberi nama Cindelaras. Cindelaras tumbuh
                                    menjadi seorang laki-laki tampan dan gagah perkasa.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/cindelaras4.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Suatu hari dia menemukan sebutir telur, dan seekor ayam jago ajaib menetas dari
                                    dalamnya. Berkat kemampuan gaib ayam tersebut, ayam jago itu selalu memenangkan
                                    pertarungan, dan nama Cindelaras semakin dikenal.
                                    Kabar mengenai Cindelaras dengan ayam jagonya terdengar sampai ke telinga Raja. Ia pun
                                    mengadakan taruhan. Apabila kemenangan ada di pihaknya, maka Cindelaras akan dipenjara.
                                    Dan jika Cindelaras menang, maka Raja harus menyerahkan segala harta yang dimilikinya.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/cindelaras1.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Pertarungan dimenangi oleh Cindelaras bersamaan dengan hal itu Raja mengetahui kebenaran
                                    bahwa Cindelaras adalah darah dagingnya berkat kemampuan gaib yang dimiliki ayamnya.
                                    Kebohongan pun terbongkar, selir di penjara. Raja mendatangi Ratu yang tinggal di hutan
                                    untuk meminta maaf. Ratu pun kembali ke singgasananya bersama Raja, dan Cindelaras
                                    menjadi seorang putra mahkota.
                                </p>
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

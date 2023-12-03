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
                    <h1 align="center">Lagu Daerah Jawa Barat</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Manuk Dadali
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Mesat ngapung luhur jauh di awang-awang <br>
                                    Meberkeun jangjangna bangun taya karingrang <br>
                                    Sukuna ranggaos reujeung pamatukna ngeluk <br>
                                    Ngapak mega bari hiberna tarik nyuruwuk <br><br>
                                    Saha anu bisa nyusul kana tandangna <br>
                                    Gandang jeung pertentang taya bandingannana <br>
                                    Dipikagimir dipikaserab ku sasama <br>
                                    Taya karempan kasieun <br><br>
                                    Manuk Dadali manuk panggagahna <br>
                                    Perlambang sakti Indonesia Jaya <br>
                                    Manuk Dadali pangkakon carana <br>
                                    Resep ngahiji rukun sakabehna <br><br>
                                    Hirup sauyunan tara pahiri-hiri <br>
                                    Silih pikanyaah teu inggis bela pati <br>
                                    Manuk dadali ngandung siloka sinatria <br>
                                    Keur sakumna Bangsa di Nagara Indonesia
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Arti kata manuk dadali adalah burung garuda. Seperti judulnya lagu daerah jawa barat ini
                                    menggambarkan sosok burung garuda yang merupakan lambang negara sebagai seekor burung
                                    gagah dan berkharisma yang dapat terbang tinggi di langit dengan bebas sebagai simbol
                                    kejayaan Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Bubuy Bulan
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Bubuy bulan-bubuy bulan sangrai bentang <br>
                                    panon poe-panon poe disasate <br>
                                    unggal bulan-unggal bulan abdi teang <br>
                                    unggal poe-unggal poe oge hade <br><br>
                                    situ ciburuy laukna hese dipancing <br>
                                    nyeredet hate ningali ngeplak caina <br>
                                    tuh, itu saha nu ngalangkung unggal enjing <br>
                                    nyeredet hate ningali sorot socana <br><br>
                                    unggal bulan-unggal bulan abdi teang <br>
                                    unggal poe-unggal poe oge hade <br><br>
                                    situ ciburuy laukna hese dipancing <br>
                                    nyeredet hate ningali ngeplak caina <br>
                                    tuh, itu saha nu ngalangkung unggal enjing <br>
                                    nyeredet hate ningali sorot socana
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Sama seperti lagu Es Lilin, Bubuy Bulan bercerita tentang kesedihan seorang gadis yang
                                    ditinggal oleh kekasihnya. Suatu hari ia melihat seorang lelaki dengan sorot mata serupa
                                    kekasihnya yang telah pergi tersebut.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Tokecang
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Tokecang tokecang bala gendir tosblong <br>
                                    Angeun kacang sapependil kosong <br>
                                    Aya listrik di masigit meuni caang katingalna <br>
                                    Aya istri jangkung alit karangan dina pipina <br>
                                    Tokecang tokecang bala gendir tosblong <br>
                                    Angeun kacang angeun kacang sapependil kosong
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Tokecang merupakan kepanjangan dari tokek makan kacang yang melambangkan manusia rakus
                                    dan tamak. Lagu ini mengingatkan kita agar tidak bersikap serakah dan selalu berbagi
                                    dengan sesama.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Cing Cangkeling
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Kleung dengklek buah kopi rarang geuyan <br>
                                    Keun anu dewek ulah pati diheureuyan <br>
                                    Cing cangkeling manuk cingkleung cindeten <br>
                                    Plos kakolong bapak satar buleneng <br><br>
                                    Pat lapat pat lapat katingalan masih tebih kene pisan <br>
                                    Layarna bodas jeung celak kasurung kaombak ombak
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Cing cangkeling merupakan salah satu lagu daerah jawa barat yang populer dikalangan
                                    masyarakat. Lagu ini sendiri menggambarkan hati manusia yang selalu berubah-ubah dan
                                    mudah goyah seperti ombak.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Panon Hideung
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Panon hideung pipi koneng <br>
                                    Irung mancung putri Bandung <br>
                                    Putri saha di mana bumina <br>
                                    Abdi reuseup ka anjeunna <br>
                                    Siang wengi ka impi-impi <br>
                                    Hate abdi sara sedih <br>
                                    Teu emut dahar teu emut nginum <br>
                                    Emut kanu geulis panon hideung
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Panon Hideung merupakan lagu berbahasa sunda yang artinya mata hitam. Ini menceritakan
                                    tentang seorang pria yang sedang jatuh cinta dengan seorang gadis cantik dengan gambaran
                                    mata berwarna hitam, pipi kuning dan hidung mancung.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('jabar') }}" class="btn-back">
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

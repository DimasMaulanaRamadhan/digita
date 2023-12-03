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
                    <h1 align="center">Lagu Daerah Bali</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Meyang meyong
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Meyang meyong <br>
                                    Alih je bikule <br>
                                    Bikul gede gede <br>
                                    Buin mokoh-mokoh <br>
                                    Kereng pesan ngerusuhin
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu ini mengisahkan tentang seekor kucing yang sedang mencari tikus. Lagu Meyang-meyong
                                    sangat cocok untuk anak-anak karena liriknya yang sederhana dan sesuai dengan pemahaman
                                    mereka.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Macepet-cepetan
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Jani m’lati macepet-cepetan <br>
                                    Nanging limane tusing dadi matiang <br>
                                    Sejaba ento mekajang dadi <br>
                                    Nyenje kalah lakar gedhing
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu daerah Bali yang berjudul Mecepet-cepetan memiliki makna yang menceritakan kalau
                                    masyarakat Bali adalah orang-orang yang cepat, sigap, dan tanggap dalam setiap
                                    pengambilan tindakan. Saat dinyanyikan, lagu daerah Bali ini diiringi dengan alat musik
                                    tradisional yang menghentak dan bersemangat. Lagu daerah Bali ini juga bisa menjadi lagu
                                    penyemangat dalam melakukan kegiatan sehari-hari oleh masyarakat Bali.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Mejangeran
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Jangi Janger <br>
                                    Sengsengin sengseng janger <br>
                                    Sengsengin sengseng janger <br>
                                    Serere nyomane nyore <br>
                                    Kelap kelap ngalap bunga <br>
                                    Langsing lanjar pamulune nyandat gading <br>
                                    Ngiring mangkin mejangeran <br>
                                    Arasijang jangi janger, <br>
                                    Arasijang jangi janger, <br>
                                    Arasijang jangi janger,
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu Mejangeran, juga dikenal sebagai Jangi Janger, merupakan lagu daerah yang mengajak
                                    orang untuk menari untuk melepas kesedihan, karena menari dianggap sebagai hiburan untuk
                                    melepas lelah dan kesedihan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Putri cening ayu
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Putri cening ayu ngijeng cening jumah, <br>
                                    Meme luas malu kapeken meblanja, <br>
                                    Apang ada darang nasi <br><br>
                                    Putri cening ayu ngijeng cening jumah, <br>
                                    Meme luas malu kapeken meblanja, <br>
                                    Apang ada darang nasi <br><br>
                                    Meme tiang ngiring nongos ngijeng jumah, <br>
                                    Sambilan mangempu ajak titiang dadua, <br>
                                    Ditekane nyen gapgapin <br><br>
                                    Meme tiang ngiring nongos ngijeng jumah, <br>
                                    Sambilan mangempu ajak titiang dadua, <br>
                                    Ditekane nyen gapgapin <br><br>
                                    Putri cening ayu ngijeng cening jumah, <br>
                                    Meme luas malu kapeken meblanja, <br>
                                    Apang ada darang nasi <br><br>
                                    Putri cening ayu ngijeng cening jumah, <br>
                                    Putri cening ayu ngijeng cening jumah
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Makna dari lagu daerah Bali yang berjudul Putri Cening Ayu adalah menceritakan tentang
                                    seorang ibu dengan anaknya. Di mana si ibu meminta anaknya untuk menunggu saja di rumah
                                    selama si ibu pergi ke pasar untuk berbelanja. Makna lain dari lagu ini adalah sebagai
                                    seorang orang tua, kita perlu memberikan kebebasan kepada anak supaya mereka bisa
                                    menemukan jati dirinya mereka sendiri.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Ratu anom
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Ratu anom metangi meilen-ilen <br>
                                    Ratu anom metangi meilen-ilen <br>
                                    Dong pirengang munyin sulinge di jaba <br>
                                    Dong pirengang munyin sulinge di jaba <br><br>
                                    Enyen ento menyuling di jaba tengah <br>
                                    Enyen ento menyuling di jaba tengah <br><br>
                                    Gusti Ngurah Alit Jambe Pemecutan <br>
                                    Gusti Ngurah Alit Jambe Pemecutan
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu daerah Bali yang berjudul Ratu Anom memiliki makna agar kita sebagai manusia untuk
                                    selalu percaya diri. Terlebih, dalam menjalani kehidupan ini. Lagu ini pada umumnya,
                                    dinyanyikan oleh anak-anak dengan tujuan untuk menyemangati berbagai macam aktivitas
                                    agar tidak menjadi orang yang malas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Bunga sandat
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Yen gumanti bajang tanbinaya pucuk nedeng kembang, <br>
                                    Disubaye layu tan ade ngarungwang ngemasin mekutang, <br>
                                    Becik melaksana de gumanti dadi kembang bintang, <br>
                                    Mentik dirurunge makejang mengempok raris kaentungang… <br><br>
                                    To I bungan sandat selayu layu layune miik, <br>
                                    Toya nyandang tulang sauripe melaksana becik, <br>
                                    Para truna truni mangda saling asah asih asoh, <br>
                                    Menyama beraya to kukuhin rahayu kepanggih… <br><br>
                                    Becik melaksana de gumanti dadi kembang bintang, <br>
                                    Mentik dirurunge makejang mengempok raris keentungang… <br><br>
                                    To I bungan sandat Selayulayulayune miik, <br>
                                    Toya nyandang tulang sauripe melaksana becik, <br>
                                    Para truna truni mangda saling asah asih asoh, <br>
                                    Menyama beraya to kukuhin rahayu kepanggih…
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu daerah Bali yang satu ini dilantunkan oleh AA Made Cakra yang menjadi lagu populer
                                    di Bali. Penyanyinya juga merupakan seorang penyanyi yang fenomenal di Bali. Bunga
                                    Sandat memiliki arti bunga kenanga, yang sering disertakan dalam beberapa upacara adat
                                    di Bali dan juga dijadikan sebagai tanaman hias.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Dadong dauh
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Dadong dauh ngelah siap putih <br>
                                    Suba metaluh reka <br>
                                    Minab ada limolas taluhne <br>
                                    Nanging lacur ada nak nepukin <br>
                                    Anak cerik-cerik, anak cerik-cerik <br>
                                    Kaliwat gudipipun <br>
                                    Cai ketut metetajen kangin <br>
                                    Papak punang botok <br>
                                    Tetajene kelangkung ramene <br>
                                    Cai ketut magelar a bangsit <br>
                                    Menang duang tali, menang duang tali <br>
                                    Tetajene suba suud
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu daerah Bali ini adalah lagu daerah yang termasuk ke dalam kategori lagu anak-anak.
                                    Lagu ini menceritakan tentang seorang nenek yang memelihara seekor ayam yang mempunyai
                                    banyak telur. Lalu, datanglah segerombolan anak-anak yang ingin mengambil telur-telur
                                    tersebut.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Juru pencar
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Juru pencar, juru pencar <br>
                                    Mai jalan mencar ngejuk ebe <br>
                                    Be gede-gede, be gede-gede <br>
                                    Disawani ajake liu <br>
                                    Be gede-gede, be gede-gede <br>
                                    Disawani ajake liu
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu daerah Bali yang satu ini salah satu lagu daerah yang sangat populer di kalangan
                                    masyarakat daerah pesisir. Di mana, lagu ini mengandung makna mengenai kehidupan pesisir
                                    yang kebanyakan orang-orangnya berprofesi sebagai nelayan.
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

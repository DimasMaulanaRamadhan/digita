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
                    <h1 align="center">Senjata Sumatera Selatan</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Keris Palembang
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/palembang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Dahulu sebelum berdirinya Indonesia, banyak berdiri kerajaan di nusantara. Dengan adanya
                                    kerajaan yang mendiami pada saat itu, sehingga tidak sedikit peninggalan sejarah berupa
                                    senjata keris bertebaran di Indonesia. <br><br>

                                    Salah satu keris populer adalah berasal dari Sumatera Selatan. Senjata bersejarah ini
                                    biasa dikenal dengan sebutan Keris Palembang. Meski penamaan senjata ini
                                    merepresentasikan wilayah Sumatera, tapi sejarah Keris Palembang berasal dari Pulau
                                    Jawa. <br><br>

                                    Meskipun keris banyak dijumpai di berbagai daerah, keris Palembang ini memiliki keunikan
                                    tersendiri. Keris Palembang dengan lekukan ganjil misalnya 7, 9 atau 13 lekukan.
                                    Pembuatan keris membutuhkan tiga unsur logam yakni besi, pamor dan baja. <br><br>

                                    Ciri khas lainnya yakni di dalam keris ini terdapat gagang keris dari kayu keras atau
                                    gading dengan bentuk yang menyerupai dengan kepala burung yang merupakan ciri khas
                                    Melayu. <br><br>

                                    Selain itu, sarung keris Palembang alias warangka keris dibentuk menyerupai perahu
                                    bidar. Bentuk perahu bidar ini merupakan simbol kedaulatan Kesultanan Palembang sebagai
                                    kerajaan maritim yang pernah berkuasa. <br><br>

                                    Pada zaman dahulu, keris ini juga merupakan simbol kebangsawanan dan menjadi salah satu
                                    ritual keagamaan dan bentuk legitimasi kekuasaan. Akan tetapi saat ini, keris beralih
                                    fungsi menjadi aksesoris melengkapi pakaian adat tradisional Sumatera Selatan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tombak Trisula
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tombaktrisula.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata tradisional khas Sumatera Selatan yang kental akan unsur sejarah dan mitologinya
                                    adalah senjata Trisula. Meski banyak didapati di berbagai daerah di nusantara, Trisula
                                    lebih dikenal di tanah Sumatera. <br><br>

                                    Senjata bersejarah ini memiliki mata tiga. Tombak ini memiliki ukuran panjang sekitar
                                    180 cm. Trisula dahulu digunakan oleh prajurit kerajaan Sriwijaya sebagai senjata utama.
                                    <br><br>

                                    Trisula diyakini senjata yang sudah ada sejak masuknya ajaran Hindu ke Sumatera Selatan
                                    pada masa kerajaan Sriwijaya. Karena trisula merupakan senjata pegangan Dewa Siwa.
                                    <br><br>

                                    Keunikan trisula Palembang yakni terdapat pada kedua sisinya. Di bagian mata tombak
                                    memiliki tiga ujung lancip dan sisi lainnya tumpul. Karena itu, tombak trisula ini
                                    sangat tajam. Banyak ditemukannya tombak trisula di Sumatera Selatan yang kemudian
                                    disimpan di Museum Balaputradewa.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Skin
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/skin.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata tradisional khas Sumatera Selatan berikutnya adalah Skin atau juga dikenal
                                    dengan sebutan Jembio, Taji Ayam, atau Ramai Ayam. Penamaan ini didasarkan pada
                                    bentuknya yang menyerupai ekor atau taji ayam jantan. <br><br>

                                    Skin merupakan senjata tusuk yang berbentuk menyerupai pisau genggam pendek dengan bilah
                                    runcing dan melengkung. Senjata ini dibuat oleh pandai besi dengan panjang sekitar 25-30
                                    cm dan 10-15 cm bentuk taji ayam. <br><br>

                                    Senjata Skin dibuat dari bahan baja yang berkualitas tinggi yang sekilas tampak seperti
                                    Kerambit khas Sumatera Barat dengan ukuran yang lebih kecil. <br><br>

                                    Pegangan Skin terbuat dari kayu dengan dilengkapi baut, atau direkatkan pada bilah yang
                                    kurang tajam. Di ujung pegangan lainnya terdapat lubang agar mudah dipegang dengan jari.
                                    <br><br>

                                    Keberadaan Skin disinyalir adanya akulturasi budaya antara budaya Tionghoa dan budaya
                                    Melayu. Masyarakat Sumatera Selatan meyakini bahwa Skin merupakan senjata keramat dan
                                    berdaya magis. <br><br>

                                    Sementara dari segi budaya, senjata ini mengandung banyak simbol kemanusiaan seperti
                                    kesabaran, ketelitian, ketekunan dan lain sebagainya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Kudhok
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kudhok.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Di daerah Pagar Alam, Hulu Sumatera Selatan, terdapat senjata tradisional yang akrab
                                    dikenal dengan nama Kudhok. Kudhok merupakan pisau kecil yang bentuknya mirip dengan
                                    badik Lampung. <br><br>

                                    Bilah Kudhok dibuat dari bahan logam berkualitas dengan gagang serta sarungnya dibuat
                                    dari kayu jati, kayu nangka atau bisa juga dibuat dari kayu ghumai. <br><br>

                                    Dahulu, Kudhok ini biasa dibawa para pria Besemah sebagai senjata perlindungan diri.
                                    Bahkan sampai saat ini, Kudhok masih sering dibawa oleh masyarakat Pagar Alam Hulu.
                                    <br><br>

                                    Kudhok memiliki beragam jenis lainnya, tapi jenis yang paling digemari masyarakat
                                    Sumatera Selatan adalah Kudhok jenis betelk, gerahang, luncu dan Kudhok berbentuk rambai
                                    ayam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Klewang Hembrug
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/klewang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata tradisional khas Sumatera Selatan terakhir adalah Klewang Hembrug. Sekilas
                                    senjata ini mirip menyerupai pedang bermata satu yang sangat tajam. Senjata ini memiliki
                                    ukuran yang ramping. Senjata Klewang ini merupakan senjata yang sudah sulit ditemukan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('sumsel') }}" class="btn-back">
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

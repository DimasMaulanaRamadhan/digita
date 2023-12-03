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
                    <h2 align="center">Pakaian Adat Jawa Barat</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Kebaya Sunda
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/sunda.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Jawa Barat yang satu ini identik dengan warna cerah, seperti merah, putih,
                                    ungu, dan kuning. Kalau dilihat secara sekilas, kebaya sunda mirip dengan kebaya Jawa
                                    Tengah dan Jawa Timur. Bedanya adalah bagian lehernya. <br><br>
                                    Ketika pakai kebaya sunda, biasanya disertai dengan aksesori yang cukup banyak. Kamu
                                    harus pakai giwang, kalung, gelang, dan cincin untuk membuatnya terlihat semakin elok.
                                    Tidak lupa membuat konde di rambut untuk tampil lebih cantik lagi. <br><br>
                                    Kebaya memiliki filosofi yang sangat dalam untuk perempuan pada saat itu. Pakaian Jawa
                                    Barat ini merupakan simbol dari kelembutan, kepatuhan, dan harga diri perempuan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pangsi
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/pangsi.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Baju adat Jawa Barat yang satu ini sangat identik dengan masyarakat Sunda. Biasanya
                                    pangsi berwarna serba hitam, mulai dari atasan hingga bawahannya. Atasannya berupa
                                    kemeja dengan kerah tegak yang biasa disebut salontreng. Bawahannya adalah celana
                                    panjang longgar yang panjangnya tidak melebihi mata kaki. <br><br>
                                    Pangsi biasa dipakai oleh masyarakat Jawa Barat yang berprofesi sebagai petani dan
                                    buruh. Pakaian ini biasa disandingkan dengan baju kaos berwarna putih di bagian
                                    dalamnya. Beberapa orang juga sering membawa sarung saat mengenakan pakaian pangsi ini. <br><br>
                                    Secara filosofis, pakaian adat Jawa Barat yaitu pangsi melambangkan perdamaian dan
                                    kesetiaan. Filosofi itu mengacu pada gaya hidup masyarakat Sunda yang rukun dan damai,
                                    serta menjunjung tinggi nilai kesetiaan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Bedahan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/bedahan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Para saudagar dari Jawa Barat biasanya memakai baju bedahan dalam kesehariannya. Pakaian
                                    ini juga digunakan oleh orang-orang di pemerintahan pada era modern ini. Tampilannya pun
                                    tampak lebih mewah dibandingkan dengan pangsi. <br><br>
                                    Baju bedahan juga memiliki pilihan warna cerah, seperti putih dan merah. Untuk
                                    bawahannya, biasanya menggunakan kain kebat batik dengan corak yang bagus. Tidak lupa
                                    pakai beberapa aksesori, seperti beubeur, sandal tarumpah, dan tutup kepala.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Menak
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/menak.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat yang satu ini biasanya milik para bangsawa dan orang-orang terpandang
                                    lainnya. Tampilannya memang lebih mencolok dan glamor karena dihiasi dengan benang emas.
                                    Warna dasar dari pakaian menak adalah hitam dengan atasan lengan panjang dan bawahan
                                    berupa celana panjang. <br><br>
                                    Baju adat Jawa Barat ini dilengkapi dengan sabuk emas dan selop berwarna hitam. Pakaian
                                    menak khusus perempuan juga akan berhias banyak aksesori, seperti peniti rantai, cincin,
                                    dan perhiasan emas lainnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Beskap
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/beskap.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat ini biasanya digunakan untuk acara resmi, seperti pernikahan, pertemuan
                                    skala nasional, atau upacara adat di Jawa Barat. Beskap punya warna hitam polos dan
                                    biasanya digunakan seragam oleh sebagian besar orang. <br><br>
                                    Baju ini biasanya tebal dengan kerah tinggi tanpa lipatan. Potongan bagian depan dan
                                    belakangnya pun berbeda dan tidak simetris. Hal ini untuk memudahkan pemakaian keris di
                                    bagian belakangnya. <br><br>
                                    Kancing beskap juga terbilang cukup unik karena dibuat menyamping. Beskap biasanya
                                    dipakai dengan kain jarik yang memiliki pola khas Jawa Barat. Ada pula alas kaki
                                    tertutup yang membuatnya jadi semakin terlihat formal.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Mojang Jajaka
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/mojang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian ini biasanya digunakan dalam acara-acara tertentu di Jawa Barat. Baju mojang
                                    jajaka ini dipakai oleh anak-anak muda untuk menampilkan kebudayaan Jawa Barat kepada
                                    masyarakat luas. Tampilannya pun sangat segar dan lebih luwes untuk ukuran pakaian adat. <br><br>
                                    Untuk pakaian perempuan, biasanya menggunakan kebaya warna polos dengan balutan kain
                                    kebat di bagian bawahnya. Disertakan juga selendang dan ikat pinggang beubeur sebagai
                                    aksesorisnya. Alas kaki yang digunakan pun biasanya senada dengan warna pakaiannya. <br><br>
                                    Di sisi lain, baju sang mojang menggunakan beskap atau jas tertutup dan celana panjang
                                    bahan. Pilihan warna mojang dan jajaka biasanya serupa untuk membuatnya serasi saat
                                    tampil di hadapan masyarakat. Pria juga biasanya menggunakan penutup kepala dan sepatu
                                    supaya tetap terlihat pantas tampil dalam acara formal.
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

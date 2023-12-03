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
                    <h1 align="center">Senjata Aceh</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rencong
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/rencong.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rencong, salah satu senjata tradisional Aceh yang paling terkenal, secara resmi diakui
                                    sebagai Warisan Budaya Tak Benda Indonesia. Meskipun telah lama tidak digunakan dalam
                                    konteks perang, rencong masih memancarkan makna keberanian dan ketangguhan yang
                                    mendalam. Terdiri dari empat jenis utama, yaitu rencong meupucok, rencong meucugek,
                                    rencong meukuree, dan rencong pudoi. <br><br>

                                    Senjata ini menghadirkan bentuk unik dengan bahan pembuatan dari kuningan atau besi
                                    putih, sedangkan sarungnya tradisionalnya terbuat dari tanduk kerbau. Rencong kini lebih
                                    sering ditemukan dalam upacara adat pernikahan Aceh dan tampil dalam pertunjukan Tari
                                    Seudati. Namun, pada masa lalu, rencong adalah simbol identitas, keberanian, dan
                                    ketangguhan masyarakat Aceh. Selama pemerintahan Kesultanan Aceh, senjata ini digunakan
                                    oleh sultan, prajurit, dan rakyat dalam pertahanan serta berburu hewan buas. Kemudian
                                    selama masa penjajahan Belanda, rencong menjadi simbol perjuangan. Semua warga Aceh,
                                    termasuk perempuan, selalu membawa rencong sebagai tanda kekuatan dan keberanian mereka.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Peudeung
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/Peudeung.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Peudeung adalah salah satu senjata tradisional Aceh selanjutnya yang populer. Senjata
                                    ini termasuk dalam kategori senjata jarak dekat yang digunakan dalam konteks
                                    pertempuran. Bentuknya memanjang seperti pedang dan lebih panjang dibandingkan dengan
                                    rencong. Pada masa lalu, para pejuang Aceh menggunakan peudeung bersamaan dengan rencong
                                    dalam pertempuran. <br><br>

                                    Rencong berfungsi untuk menikam musuh dalam jarak dekat, sementara peudeung digunakan
                                    untuk menebas musuh pada jarak dekat. Peudeung di Aceh memiliki berbagai jenis
                                    berdasarkan asalnya. Ada Peudeung Habsyah yang berasal dari Negara Abbesinia, Peudeung
                                    Portugis yang berasal dari Eropa Barat, dan Peudeung Turki yang berasal dari raja-raja
                                    Turki. Selain itu, Peudeung juga dapat dibagi berdasarkan mata pedangnya menjadi dua
                                    jenis, yaitu Peudeung on tubee dan Peudeung on jok.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Siwah
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/siwah.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Siwah adalah senjata tradisional Aceh dan memiliki kemiripan fisik dengan rencong.
                                    Secara umum, siwah memiliki bentuk ramping dengan ujung yang tajam. Namun, yang
                                    membedakan siwah dari rencong adalah orang yang menggunakannya pada masa lalu. Pada masa
                                    lalu, siwah biasanya hanya digunakan oleh para raja-raja. Sementara rencong dapat
                                    digunakan oleh orang biasa. Hal ini disebabkan adanya ornamen yang menghiasi siwah dan
                                    melambangkan kemewahan, seperti emas, batu permata, dan bahan-bahan berharga lainnya.
                                    Karena kemewahan inilah, siwah menjadi barang langka, terutama pada zaman sekarang, dan
                                    harganya sangat tinggi jika ada yang dijual. Secara fisik, siwah mirip dengan rencong,
                                    tetapi perbedaannya terletak pada penggunaannya yang terbatas pada para raja dan
                                    hiasan-hiasan mewah yang melengkapinya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Meucugek
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/Meucugek.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Meucugek, juga dikenal sebagai cugek, adalah senjata tradisional Aceh yang memiliki
                                    ukuran kecil dan bentuk ramping. Keahlian utama dari Meucugek adalah sebagai senjata
                                    tajam yang digunakan untuk melawan musuh. Senjata ini dapat terbuat dari dua jenis
                                    bahan, yaitu besi dan baja, dengan pegangan yang dirancang untuk memberikan genggaman
                                    yang kuat bagi penggunanya. Keunikan Meucugek adalah adanya perekat pada pegangan, yang
                                    berfungsi mempermudah pengguna saat menikam musuh atau lawan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Reuduh
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/Reuduh.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Reuduh adalah senjata tradisional Aceh yang memiliki kemiripan fisik dengan golok.
                                    Senjata ini dirancang untuk digunakan dalam perlawanan jarak dekat dan memiliki bentuk
                                    yang ramping dan ringan. Keunikan lain dari reuduh terletak pada gagangnya, yang dihiasi
                                    dengan ukiran yang indah. Gagang yang melengkung secara khusus dirancang untuk mencegah
                                    lepasnya senjata ini saat digunakan dalam pertempuran. Reuduh, sebagai salah satu
                                    senjata tradisional Aceh, memiliki desain yang menggabungkan fungsi dengan keindahan,
                                    mencerminkan kekayaan budaya dan warisan perjuangan masyarakat Aceh.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rencong meukuree
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/meukuree.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rencong Meukuree adalah salah satu senjata tradisional Aceh yang memiliki kesamaan
                                    dengan Rencong. Namun, terdapat perbedaan yang mencolok pada mata senjata yang dihiasi
                                    dengan ukiran-ukiran indah. Ukiran tersebut sering mengambil bentuk hewan berbisa
                                    seperti ular, lipan, dan lain-lain, menambahkan nilai seni yang tinggi pada senjata ini.
                                    Sama seperti senjata tradisional Aceh lainnya, rencong meukuree digunakan untuk
                                    pertempuran jarak dekat. Keunikan dari senjata ini terletak pada motif hiasan yang
                                    menghiasi mata senjata, yang mencerminkan kekayaan budaya dan seni tinggi dalam warisan
                                    Aceh.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Peudeung tumpang jingki
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/jingki.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Peudeung tumpang jingki adalah senjata tradisional Aceh yang memiliki ciri khas berupa
                                    gagang pedang yang terbuka. Senjata ini digunakan dalam pertempuran jarak dekat dan
                                    terbuat dari baja dengan warna hitam yang mencolok. Meskipun memiliki desain yang
                                    sederhana, kekuatannya menjadikannya senjata yang tak tertandingi oleh pedang jenis
                                    lainnya dalam pertempuran. Ukuran besar dan ketebalan pedang membuatnya sangat stabil
                                    dan tidak mudah terkalahkan saat berhadapan dengan pedang lain yang lebih tipis.
                                    Peudeung Tumpang Jingki merupakan turunan dari senjata tradisional Aceh yang lebih umum
                                    dikenal sebagai Peudeung.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Beladau
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/beladau.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Beladau adalah senjata tradisional yang berbentuk pisau belati tajam satu sisi. Panjang
                                    beladau hanya 24 cm dengan lengkungan di pangkal pegangannya agar lebih mudah untuk
                                    digunakan. Senjata ini biasanya digunakan untuk perlindungan diri dan serangan jarak
                                    dekat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pudoi
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/pudoi.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Sama seperti senjata-senjata sebelumnya, Pudoi digunakan sebagai senjata jarak dekat
                                    untuk berperang. Bentuk fisik dan ukuran Pudoi juga sangat mirip dengan rencong,
                                    perbedaannya terletak di ukuran gagang yang kecil dan lurus. Banyak orang yang
                                    mengatakan bahwa Pudoi adalah senjata rencong yang belum selesai.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Bambu runcing
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/bambu.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Bambu runcing cukup populer digunakan oleh para pejuang kemerdekaan bangsa Indonesia
                                    saat masa-masa melawan penjajah. Senjata ini merupakan salah satu senjata tradisional
                                    dari Aceh yang kehadirannya sudah ada sebelum rencong. Senjata ini dapat digunakan untuk
                                    peperangan jarak jauh maupun jarak dekat. Di aceh, senjata ini juga biasa digunakan
                                    untuk berbagai acara tradisional atau hiasan untuk sebuah event.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Peudeung ulee meu-apet
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/ulee.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Peudeung Ulee Meu-Apet yang cocok digunakan untuk menggertak lawan. Senjata ini memiliki
                                    bentuk yang panjang dengan ketajaman yang sangat menyakitkan. Biasanya, Prudent Ulee
                                    Meu-Apet digunakan untuk memotong atau menebas lawan. Apet memiliki arti mempertahankan
                                    pegangan agar tidak terlepas dari baja.
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

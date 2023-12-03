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
                    <h2 align="center">Rumah Adat Bali</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Angkul-angkul
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/angkul.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Angkul-angkul ini menjadi bagian dari rumah adat Bali yang menjadi pintu masuk rumah
                                    utama. Fungsinya sendiri hampir sama dengan Gapura Candi Bentar. Namun Angkul-angkul
                                    lebih berfungsi sebagai pintu masuk. Adapun pembeda antara angkul-angkul dengan Gapura
                                    Candi Bentar yaitu ada pada atap yang menghubungkan kedua bangunan yang letaknya
                                    sejajar.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Aling-aling
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/aling.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Bangunan kedua adalah aling-aling. Sesuai dengan namanya, bangunan ini menjadi pembatas
                                    antara angkul-angkul dengan halaman suci. Bangunan rumah adat Bali ini dipercaya
                                    memiliki aura yang positif, sehingga ada dinding pembatas yang disebut penyengker. Di
                                    dalam bangunan akan disediakan ruangan untuk beraktivitas para penghuninya. Beberapa
                                    orang bahkan juga menggunakan patung untuk menjadi aling-aling, atau penyengker.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pura keluarga
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/pura.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Bangunan ketiga adalah pura keluarga. Umumnya, bangunan ini difungsikan sebagai tempat
                                    berdoa dan beribadah. Setiap rumah adat Bali pasti memiliki bangunan ini. Selain disebut
                                    Pura Keluarga, bangunan ini juga disebut sebagai bangunan Pamerajan, atau Sanggah.
                                    Letaknya ada di sudut sebelah timur laut dari rumah hunian.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Bale manten
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/bale.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Bale Manten merupakan salah satu rumah adat Bali yang biasanya diperuntukkan untuk
                                    kepala keluarga atau anak perempuan yang belum menikah. Tujuan rumah adat ini dibangun
                                    sebagai bentuk perhatian keluarga kepada anak gadis agar kesuciannya tetap terjaga. Ciri
                                    khas dari rumah adat Bale Manten adalah memiliki bentuk bangunan persegi panjang yang
                                    terletak di sebelah utara bangunan utama. Selain itu, rumah adat ini memiliki dua
                                    ruangan yakni bale kanan dan bale kiri.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Bale dauh
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/dauh.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Bale Dauh yang digunakan oleh masyarakat Bali sebagai tempat khusus untuk menerima tamu.
                                    Ruangan ini juga difungsikan sebagai tempat tidur bagi anak remaja laki-laki. Bale Dauh
                                    bentuknya sama dengan Bale Manten, yaitu persegi panjang. Akan tetapi, letaknya berada
                                    di bagian dalam ruangan, tidak di sudut. Untuk posisinya sendiri di sisi barat dan
                                    lantainya harus lebih rendah dibanding Bale Manten. Lalu ciri khas lainnya, tiang
                                    penyangga di Bale Dauh ini jumlahnya berbeda antara satu rumah dengan rumah lainnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Bale sekapat
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/sekapat.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Bale Sekapat adalah bagian dalam rumah adat Bali yang berfungsi sebagai tempat santai
                                    keluarga. Keunikan dari rumah adat Bali ini yakni terdapat empat tiang yang berfungsi
                                    sebagai penyangga, lalu bagian atapnya berbentuk pelana. Bale Sekapat memiliki filosofi
                                    tersendiri, dengan adanya bangunan ini diharapkan sebuah keluarga memiliki hubungan yang
                                    harmonis serta lebih akrab antara satu sama lain.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Bale Gede
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/gede.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Selanjutnya ada Bale Gede, yang juga berbentuk persegi panjang dengan 12 tiang. Ruangan
                                    ini memiliki fungsi sebagai tempat upacara adat. Jadi, karena fungsinya cukup sakral,
                                    tempatnya harus lebih tinggi dari Bale Manten. Bagian rumah adat ini harus memiliki
                                    ukuran yang jauh lebih besar dibanding bangunan lainnya. Sebab selain untuk ritual adat,
                                    Bale Gede juga dipakai untuk berkumpul dan menyajikan makanan khas Bali, termasuk pula
                                    untuk membakar sesaji.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Jineng atau klumpu
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/jineng.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Jineng atau Klumpu memiliki ukuran sedang dan menggunakan material berupa kayu. Ciri
                                    khasnya ada pada posisinya yang lebih tinggi dan dirancang seperti goa. Lalu atapnya
                                    terbuat dari jerami kering. Akan tetapi, Jineng saat ini sudah cukup jarang ditemukan di
                                    rumah adat Bali dengan bahan tradisional. Jineng saat ini lebih banyak dibangun memakai
                                    material pasir, semen, dan batu bata. Atapnya pun tak lagi memakai jerami, melainkan
                                    genteng. <br><br>
                                    Bangunannya dibuat cukup tinggi, sebab difungsikan untuk menyimpan gabah yang sudah
                                    kering. Dengan adanya ruangan ini, gabah pun akan terhindar dari serangan burung dan
                                    juga jamur yang biasa muncul di tempat lembab. Lalu untuk bagian bawahnya biasa dipakai
                                    untuk menyimpan gabah yang belum sempat dijemur.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Pawaregen
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/pawaregen.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pawarengan merupakan rumah adat Bali yang berfungsi untuk menyimpan dan mengolah
                                    makanan, atau bisa disebut sebagai dapur. Rumah adat ini terletak di sebelah selatan
                                    atau barat laut rumah. Ciri khas dari Pawarengan adalah rumahnya dibagi menjadi dua,
                                    rumah yang pertama berfungsi untuk memasak sementara rumah yang kedua digunakan untuk
                                    menyimpan makanan, alat dapur, dan lain sebagainya. Untuk cara memasaknya pun masih
                                    tradisional, dengan memakai kayu bakar.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Lumbung
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/lumbung.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Lumbung yaitu sebuah bangunan kecil yang dibuat sebagai tempat untuk menyimpan makanan
                                    pokok. Makanan pokok yang biasanya disimpan untuk jangka waktu lama yaitu padi dan
                                    jagung.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services"Pura keluarga>
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Gapura Candi Bentar
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/bentar.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Gapura Candi Bentar adalah salah satu bangunan tradisional atau rumah adat yang ada di
                                    Bali. Bangunan ini memiliki keunikan arsitektur serta keindahan strukturnya yang mampu
                                    memikat turis baik itu lokal maupun mancanegara. Dalam kitab suci Weda pun telah diatur
                                    bagaimana rumah adatnya memiliki unsur alam semesta. Gapura Candi Bentar awalnya hanya
                                    dibangun untuk lingkungan Puri, Istana, dan Pura atau tempat suci agama Hindu. <br><br>
                                    Lambat laun, pembangunannya mulai diterapkan ke dalam bangunan milik masyarakat umum.
                                    Bangunan gapura terdiri dari dua buah Candi Bentar yang serupa di sisi kiri dan kanan
                                    sebagai pintu masuk ke dalam pekarangan rumah. Hal yang menarik adalah gapura ini tidak
                                    memiliki penghubung antar sisinya sehingga bagian atas dibiarkan terpisah.Dalam setiap
                                    pendirian rumah adat Bali ini, seorang undagi harus memahami filosofi Asta Kosala
                                    Kosali. Dimana cara masyarakat Bali dalam menjaga keseimbangan baik itu antara manusia
                                    dengan Tuhan, antar manusia, atau dengan lingkungan sekitar.
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

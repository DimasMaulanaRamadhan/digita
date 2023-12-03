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
                    <h2 align="center">Rumah Adat Sumatera Barat</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Gonjong Ampek Baanjuang
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/gonjing.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Ini adalah rumah adat Padang yang wajib didirikan di daerah Luhak Nan Tigo. Rumah adat
                                    Ampek Baanjuang adalah tanda adat bagi masyarakat setempat.<br><br>

                                    Sesuai namanya ‘ampek’ yang berarti empat, bangunan rumah adat ini memiliki 4 buah
                                    gojong di atas atap dan punya lebih dari tujuh ruangan yang fungsinya bermacam-macam.<br><br>

                                    Namun, salah satu ciri khas dari bangunan rumah adat ini adalah adanya tambahan anjung
                                    di sisi kiri dan kanan bangunan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Gadang Jenis Gajah Maharam
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/gadang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah gadang jenis Maharam adalah salah satu rumah adat Sumatera Barat yang termasuk
                                    kategori mewah.<br><br>

                                    Untuk membangun rumah adat ini tak bisa sembarangan.<br><br>

                                    Rumah ini harus dibangun dengan menghadap utara dengan dinding sisi timur, barat, dan
                                    selatan ditutupi sasak.<br><br>

                                    Seluruh bangunan dibuat dari kayu-kayu yang pastinya memiliki kualitas terbaik, mulai
                                    dari kayu juar, surian, dan ruyung. Namun, atap dari rumah ini menggunakan bahan dari
                                    seng.<br><br>

                                    Rumah adat ini terdiri dari 4 kamar tidur dengan ukiran khas Minangkabau sebagai
                                    dekorasi pada setiap pintu kamar.<br><br>

                                    Untuk membangun rumah adat ini, akan dibutuhkan 30 tiang penopang.<br><br>

                                    Karena banyaknya tiang penopang ini, maka rumah adat jenis Gajah Maharam dianggap
                                    sebagai bangunan yang tahan gempa.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Gonjong Anam
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/anam.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat ini adalah rumah adat khas Minang yang bentuk bangunannya mirip seperti Rumah
                                    Gadang Gajah Maharam.<br><br>

                                    Tetapi rumah adat Sumatera Barat ini sudah dimodifikasi dengan penambahan banyak ukiran
                                    khas Minangkabau sehingga menjadi bangunan beranjung.<br><br>

                                    Rumah adat Sumatera Barat ini memiliki bangunan yang lebih modern dibandingkan rumah
                                    adat Sumatera Barat lainnya.<br><br>

                                    Jendela pada rumah ini juga dibuat lebih banyak supaya pencahayaan bisa lebih banyak
                                    masuk ke dalam rumah.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Gonjong Sibak Baju
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/sibak.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Selanjutnya, ada Rumah Gonjing Sibak baju yang punya ciri khas bentuknya yang mirip
                                    dengan belahan baju.<br><br>

                                    Rumah adat Sumatera Barat ini masih meniru model rumah Gadang Gajah Maharam dan saat
                                    membuatnya, digunakan beberapa bahan dasar seperti kayu dan sasak.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Gadang Gonjong Limo
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/limo.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Yang menjadi ciri khas dari bangunan rumah adat ini adalah penambahan gonjong di bagian
                                    kiri dan kanan bangunan.<br><br>

                                    Moms bisa menemukan rumah adat jenis ini di Kota Payakumbuh, Padang.<br><br>

                                    Rumah Gadang Gonjong Limo juga punya pengakhiran bangunan yang sama dengan Gajah
                                    Maharam, hanya saja mereka tidak ditambah anjung.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Gadang Surambi Papek
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/papek.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat ini terlihat agak berbeda dengan rumah adat lainnya, salah satunya karena
                                    rumah adat ini punya pengakhiran kiri dan kanan yang disebut bapamokok atau papek dalam
                                    bahasa Minang yang berarti pintu masuk dari belakang.<br><br>

                                    Jadi, jika Moms mau masuk ke rumah ini ketika berkunjung, Moms harus masuk melalui pintu
                                    belakang rumah.<br><br>

                                    Namun seiring perkembangan zaman, banyak pula rumah jenis ini telah dimodifikasi
                                    sehingga punya pintu depan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Gadang Batingkek (Rumah Gadang Bertingkat)
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/batingkek.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Jika dilihat dari gambarnya, rumah ini cukup megah dan model bangunan rumah gadang ini
                                    mirip seperti rumah gadang Gajah Maharam.<br><br>

                                    Dalam bahasa Indonesia, Rumah Gadang Batingkek berarti rumah gadang bertingkat.<br><br>

                                    Namun yang dimaksud bertingkat adalah gonjongnya yang bertingkat-tingkat. <br><br>

                                    Dahulu, rumah adat ini banyak ditemui di Padang, akan tetapi akan sangat jarang ditemui
                                    pada masa kini.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('sumbar') }}" class="btn-back">
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

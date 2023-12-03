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
                    <h2 align="center">Rumah Adat Jawa Barat</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Tagog Anjing
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tagog.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Jawa Barat yang pertama adalah rumah Tagog Anjing yang berada pada daerah
                                    Garut. Tagog Anjing memiliki arti yakni seperti sikap anjing sedang duduk. Rumah adat
                                    Tagog Anjing memiliki dua bidang atap yang berbatasan pada garis batang. <br><br>
                                    Rumah adat ini memiliki desain bangunan yang sangatlah familiar dan umum ditemui saat
                                    ini. Bentuknya menyerupai desain dari sebuah gazebo yang sering dijumpai pada daerah di
                                    Jawa Barat. Karena desainnya yang sangat sederhana inilah menjadikan rumah Tagog Anjing
                                    banyak digunakan sebagai inspirasi orang dalam membangun rumah atau hunian.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Imah Julang Ngapak
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/ngapak.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Kata Julang Ngapak sendiri memiliki arti burung yang sedang mengepakkan sayap. Rumah
                                    adat Julang Ngapak ini memiliki bentukan atap yang melebar pada setiap sisinya. Pada
                                    bagian atas dari rumah ini menyerupai huruf V dan ketika dilihat akan menyerupai sebuah
                                    burung yang sedang mengepakkan sayapnya. <br><br>
                                    Untuk bisa masuk ke dalam rumah adat ini disediakan sebuah tangga yang disebut sebagai
                                    golodog yang terbuat dari bambu atau kayu dan umumnya hanya memiliki tiga buah anak
                                    tangga saja. Golodog tersebut juga biasanya digunakan sebagai tempat untuk membersihkan
                                    kaki sebelum tamu atau keluarga masuk ke dalam rumah.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Imah Badak Heuay
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/badak.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Badak Heuay memiliki arti yang sangatlah unik yaitu badak yang sedang
                                    menguap. Istilah tersebut berasal dari desain atap rumah adat pada bagian belakang dan
                                    tepiannya menyerupai badak yang sedang menguap. Anda bisa menemukan rumah adat Badak
                                    Heuay di daerah Sukabumi, terutama pada kawasan yang masih banyak bisa ditemukan
                                    pedesaan. <br><br>
                                    Rumah adat Badak Heuay merupakan salah satu rumah adat yang hingga saat ini masih bisa
                                    ditemui dengan sangat mudah karena banyak penduduk yang memanfaatkannya sebagai hunian
                                    utama oleh warga Sukabumi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Imah Jolopong
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/jolopong.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Jolopong memiliki arti yakni terkulai atau tegak lurus. Rumah adat ini
                                    dinamakan Jolopong karena bisa dilihat dari bentuk atapnya yang sangat sederhana dan
                                    tergolek lurus dengan baik. Rumah adat Jolopong sangat diminati karena proses
                                    pembuatannya yang sangat mudah dan tidak membutuhkan material bangunan yang terlalu
                                    banyak. <br><br>
                                    Bagian dari rumah adat Jolopong ini memiliki sebuah kolong, atau disebut juga sebagai
                                    ruangan yang terdapat di bawah lantai dengan tinggi sekitar 40 cm di atas permukaan
                                    tanah. Kolong tersebut memiliki fungsi untuk menjadi tempat memelihara hewan ternak yang
                                    berukuran kecil seperti unggas hingga menyimpan berbagai alat pertanian lainnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Imah Perahu Kamureb
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kamureb.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat lainnya yang berada di daerah Jawa Barat adalah rumah Perahu Kumureb. Istilah
                                    Perahu Kumureb memiliki arti yakni perahu tengkurap. Rumah adat ini mendapatkan julukan
                                    perahu tengkurap karena bentuk atapnya yang menyerupai sebuah perahu yang terbalik.
                                    Meskipun rumah ini memiliki atap dengan bentuk yang unik, sungguh disayangkan bahwa
                                    desain atap tersebut sangatlah mudah untuk mengalami kebocoran. <br><br>
                                    Agar atap bisa dibentuk seperti perahu terbalik membutuhkan banyak sekali sambungan yang
                                    apabila sambungan tidak terpasang dengan baik akan mengakibatkan kebocoran yang
                                    merepotkan seisi rumah. Karena masalah inilah yang menjadikan rumah adat Perahu Kumureb
                                    menjadi mulai ditinggalkan.
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

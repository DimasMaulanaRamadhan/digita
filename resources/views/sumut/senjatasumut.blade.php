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
                    <h1 align="center">Senjata Sumatera Utara</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Senjata Tunggal Panaluan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/panaluan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Tunggal Panaluan adalah senjata yang berbentuk seperti tongkat, dan hanya
                                    dimiliki oleh para raja. Tongkat ini diyakini memiliki kekuatan gaib atau juga
                                    supranatural.
                                    Senjata Tunggal Panaluan adalah jenis senjata yang biasa digunakan oleh datu atau dukun
                                    dari Batak. <br><br>

                                    Seperti pada penjelasan di atas, senjata Tunggal Panaluan memiliki bentuk layaknya
                                    sebuah tongkat dengan ukiran berbentuk manusia dan juga hewan yang disusun ke atas.

                                    Senjata ini tergolong dalam tongkat sakti yang digunakan sebagai upacara adat seperti
                                    meminta hujan atau menangkal hujan. <br><br>

                                    Selain itu, senjata ini juga biasa digunakan sebagai penolak bala, senjata dalam medan
                                    perang, dan alat untuk mengobati sebuah penyakit tertentu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Hujur Siringis
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/hujur.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Hujur Siringis adalah jenis senjata tradisional dari Batak yang juga memiliki bentuk
                                    seperti tombak. Dahulu kala, senjata ini digunakan dalam medan perang oleh Suku Batak.
                                    <br><br>

                                    Untuk bahan yang digunakan dalam pembuatan senjata ini adalah kayu ringan yang cukup
                                    kuat dan dilengkapi logam pada bagian ujungnya. <br><br>

                                    Bentuk tembakan dari senjata ini lebih ramping daripada tombak yang lainnya dengan jenis
                                    yang sama. Senjata ini memiliki fungsi yang lainnya selain untuk berperang, yaitu
                                    digunakan juga untuk pembuka mata air.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Piso Gaja Dompak
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/dompak.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Piso Gaja Dompak adalah senjata peninggalan dari pahlawan besar yang hidup di
                                    Indonesia, yaitu Sisingamangaraja XII.

                                    Senjata ini sering digunakan untuk melawan seseorang yang dianggap memiliki kekuatan
                                    supranatural. Piso Gaja Dompak adalah senjata tradisional yang berbentuk sedikit lebih
                                    pendek daripada pedang. <br><br>

                                    Namun, ukurannya lebih panjang dibandingkan dengan belati. Gagang pada senjata ini
                                    memiliki ukiran dengan bentuk gajah.

                                    Sementara, pada bagian sarungnya memiliki warna hitam. Senjata ini termasuk dalam benda
                                    yang disakralkan kepala suku Kerajaan Batak. <br><br>

                                    Senjata Piso Gaja Dompak sejatinya tidak diciptakan untuk membunuh seseorang dalam
                                    pertempuran. Namun, gunanya lebih pada perantara kekuatan supranatural yang dimiliki
                                    seseorang.

                                    Piso Gaja Dompak akan memberikan kekuatan berupa kebijaksanaan hingga karisma pada para
                                    pemegang senjata ini. <br><br>

                                    Selain itu, Senjata Piso Gaja Dompak juga memiliki pantangan bagi pemegangnya, yaitu
                                    dilarang untuk memiliki rasa dengki atau marah.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Piso Halasan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/halasan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Piso Halasan adalah senjata tradisional lainnya yang berasal dari wilayah
                                    Sumatera Utara, tepatnya di daerah Tapanuli Utara. <br>
                                    Senjata ini adalah simbol kebesaran bagi suku Batak Hasangapon berupa pedang atau
                                    parang. <br>
                                    Sarung yang digunakan pada pedang tersebut terbuat dari bahan kayu dan memiliki ukiran
                                    seekor singa yang memiliki tanduk tiga. <br><br>

                                    Senjata Piso Halasan adalah pedang dengan ciri memiliki mata tunggal berbentuk sedikit
                                    lebih melengkung. <br>

                                    Senjata tersebut memiliki mata pisau yang tajam dengan panjang kira-kira 50 cm,
                                    sementara panjang keseluruhan berkisar 76 cm. <br>

                                    Kemudian, pada bagian gagang senjata ini umumnya dibuat menggunakan bahan tanduk rusa
                                    dan juga logam dengan adanya ukiran yang indah. <br><br>

                                    Senjata tradisional Piso Halasan Batak cukup kental dengan nilai-nilai filosofi yang ada
                                    di dalamnya.

                                    Selain memiliki simbol kebesaran, Piso ini juga menyimbolkan penegakan hukum dan juga
                                    keadilan untuk kehidupan masyarakat.

                                    Selain itu, senjata Piso ini juga mempunyai makna pembatasan diri bagi seseorang agar
                                    tidak terjebak dengan hasrat keinginan pribadi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Piso Tumbuk Lada
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/lada.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Piso Tumbuk Lada adalah senjata tradisional Suku Karo di Sumatera Utara. Senjata
                                    ini merupakan senjata khas dari sebuah Kerajaan Aru Karo dan juga Melayu yang terletak
                                    di daerah pesisir timur. <br><br>

                                    Senjata Piso Tumbuk Lada ini termasuk senjata berbentuk pisau yang digunakan juga
                                    sebagai pertarungan dalam jarak dekat dan termasuk dalam senjata yang sangat beracun.
                                    <br>

                                    Bahan utama yang digunakan untuk membentuk senjata Piso Tumbuk Lada lebih bergantung
                                    pada kebutuhan. <br>

                                    Senjata ini sebenarnya bukan senjata yang sering digunakan untuk berperang, namun lebih
                                    digunakan sebagai alat yang sarat akan ilmu magis. <br><br>

                                    Selain sebagai senjata tradisional, Piso Tumbuk Lada juga dipakai untuk hiasan di
                                    dinding rumah atau pajangan di meja dengan berbagai macam ukiran yang terletak di bagian
                                    gagangnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Piso Gading
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/gading.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata tradisional Batak Piso Gading adalah senjata yang menjadi ciri khas masyarakat
                                    di daerah Toba. <br>

                                    Piso Gading bukanlah senjata yang bisa dimiliki oleh sembarangan orang, sebab senjata
                                    ini hanya dimiliki oleh seorang raja. Bentuk senjata ini seperti pedang yang memiliki
                                    bilah sangat tajam. <br><br>

                                    Senjata Piso Gading yang masih ada saat ini adalah senjata peninggalan dari abad ke-19
                                    milik Raja Batak Toba. <br>

                                    Senjata Piso Gading memiliki bentuk seperti pedang dengan sedikit lebih melengkung dan
                                    merupakan jenis senjata yang sangat beracun sehingga racunnya dapat membunuh seseorang
                                    dengan mudah. <br>

                                    Racun yang digunakan dalam pedang tersebut dapat menyerang sistem syaraf di bagian otak
                                    manusia, hal itu dapat menyebabkan melemahnya otak dan menyerang bagian jantung.
                                    <br><br>

                                    Senjata ini diciptakan oleh datu atau mereka yang disebut dengan dukun. Racun yang
                                    berada di dalam pedang itu bernama racun nipu, nantinya racun itu akan dioleskan pada
                                    bagian ujung Piso yang tajam. <br>

                                    Bahan yang digunakan untuk racunnya diambil dari tumbuhan di dalam hutan dan diramu oleh
                                    penciptanya yaitu sang datu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Silima Sarung
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/silima.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Silima Sarung sebenarnya memiliki nama asli Piso Silima Sarung, sebab pada
                                    bagian dalam sarungnya terdapat lima buah mata pisau. <br>

                                    Dikatakan bahwa senjata ini mengandung banyak sekali nilai-nilai filosofis yang luhur.
                                    <br><br>

                                    Senjata Silima Sarung atau Piso Silima Sarung ini termasuk dalam senjata yang didunakan
                                    ketika masa berperang di masa lampau oleh masyarakat adat Suku Batak. <br>

                                    Tak hanya itu, senjata ini pun tergolong dalam senjata yang berbahaya bila seseorang
                                    tertancap senjata ini. Suku Batak meyakini jika manusia memiliki empat roh dan yang
                                    kelima adalah tubuh manusia itu sendiri.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Piso Sitolu Sarung
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/sitolu.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Piso Sitolu Sarung adalah senjata yang memiliki tiga buah mata pisau di dalam
                                    satu sarungnya, dengan ukuran dan bentuk yang kecil. <br>

                                    Tiga mata pisau tersebut melambangkan tiga buah benua yang menjadi satu di dalam
                                    kehidupan masyarakat Batak. Ketiga benua tersebut adalah benua atas, benua tengah, dan
                                    juga benua bawah. <br><br>

                                    Selain melambangkan ketiga filosofis tadi, senjata tradisional Piso Sitolu Sarung yang
                                    berasal dari Batak ini juga melambangkan debata natolu. <br>

                                    Arti dari debata natolu adalah sang batara guru yang menyimbolkan kebijaksanaan.

                                    Lalu, sang batara surya yang menyimbolkan keimanan dan kebenaran sedang, dan sang batara
                                    bulan yang menyimbolkan kekuatan di dalam Suku Batak pada kehidupan keseharian mereka.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('sumut') }}" class="btn-back">
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

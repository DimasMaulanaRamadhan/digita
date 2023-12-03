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
                    <h2 align="center">Tari Daerah Sumatera Selatan</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Gending Sriwijaya
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/gending.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian daerah Sumatra Selatan ini cukup populer dan sering digunakan untuk menyambut
                                    tamu penting. Tepak berupa kotak berisi kapur sirih dipersembahkan oleh penari kepada
                                    tamu melalui Tari Gending Sriwijaya. <br><br>

                                    Tari Gending Sriwijaya sebelumnya dipentaskan oleh sembilan orang penari. Namun, kini
                                    tarian ini hanya dipentaskan oleh empat hingga lima penari saja. <br><br>

                                    Tari Gending Sriwijaya diciptakan pada tahun 1943 hingga 1944 atas permintaan dari
                                    pemerintah era penjajahan Jepang untuk menyambut tamu yang datang berkunjung ke Sumatra
                                    Selatan. <br><br>

                                    Sejumlah konsep dikumpulkan oleh pencipta dengan mengambil unsur-unsur tari adat
                                    Palembang yang sudah ada sebelumnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Erai-Erai
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/erai.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Erai-Erai merupakan salah satu tarian daerah Sumatra Selatan. Tarian ini berkembang
                                    di tengah-tengah etnik Lematang. <br><br>

                                    Tari Erai-Erai menceritakan kegembiraan ketika masa panen padi. Erai-Erai sendiri
                                    memiliki arti serai serumpun, yang melambangkan meski bercerai-berai tetapi tetap satu
                                    ikatan. <br><br>

                                    Tarian daerah Sumatera Selatan ini populer sejak tahun 1950-an. Tari Erai-Erai diiringin
                                    dengan sejumlah instrumen musik akustik yang indah melengkapi tarian ini. <br><br>

                                    Baju Kurung Panjang sebagai pakaian adat digunakan ketika Tari Erai-Erai dipentaskan
                                    lengkap dengan kain tumpal perahu, pending, anting-aning, serta aksesoris lainnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Tanggai
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tanggai.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Tanggai adalah salah satu tarian daerah khas Sumatra Selatan yang berasal dari
                                    Palembang. Tarian ini berkembang hingga ke seluruh Sumatera Selatan. <br><br>

                                    Tari Tanggai merupakan tarian yang sudah ada sejak abad ke-5 Masehi. Tarian ini
                                    ditujukan sebagai persembahan bagi Dewa Siwa dengan membawa sesajen berisi buah dan
                                    aneka ragam bunga. <br><br>

                                    Tari Tanggai dahulu dikategorikan sebagai tarian yang sakral. Hal ini karena Tari
                                    Tanggai merupakan tarian persembahan. <br><br>

                                    Namun, memasuki tahun 1920, Tari Tanggai ditujukan untuk mencari jodoh oleh para orang
                                    tua di Palembang dan disebut sebagai Rasan Tuo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Kebagh
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kebagh.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Kebagh merupakan tarian daerah Sumatera Selatan yang sangat populer di daerah
                                    Besemah pada zaman dahulu. Pada tahun 1940-an, tarian ini sempat dilarang untuk
                                    dipentaskan oleh pemerintah kolonial Belanda. <br><br>

                                    Tari Kebagh merupakan tarian yang dipentaskan untuk menyambut tamu. Tarian ini sering
                                    dipentaskan pada acara resmi seperti resepsi pernikahan. Tari Kebagh diciptakan untuk
                                    memberikan hiburan dengan diiringi kenong dan rehab.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Sambut Silampari
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/silampari.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian daerah Sumatra Selatan berikutnya adalah Tari Sambut Silampari. Tarian ini
                                    berkembang pada tahun 1950-an di Sumatera Selatan. Tari Sambut Silampari biasanya
                                    dipentaskan dalam suatu hajatan. <br><br>

                                    Dalam pementasan tarian ini, konon para tetua kampung dengan kekuatan supranatural
                                    memanggil peri dari kahyangan untuk turun ke bumi dan menghibur masyarakat pada hajatan
                                    tersebut. Setelah selesai menari, peri-peri tersebut akan kembali ke asalnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Begambo
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/silampari.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Begambo diciptakan oleh seorang seniman asal Kecamatan Babat Toman, Dusun Toman.
                                    Tarian daerah Sumatra Selatan satu ini mengisahkan kebiasaan masyarakat Toman dalam
                                    mengelola tanaman gambo. <br><br>

                                    Melalui tarian ini, diceritakan bagaimana proses mengelola gambo mulai dari menanam,
                                    merawat, hingga memanen hasil gambo seperti yang biasa dilakukan oleh masyarakat Toman.
                                    Gambo sendiri merupakan tanaman dengan beragam khasiat seperti obat flu bagi ibu dan
                                    bayi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Tepak Keraton
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tepak.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pada tahun 1966, Hj. Anna Kumari menciptakan Tari Tepak Keraton untuk menyambut tamu
                                    agung Bridgen Ishak Juarsa, Panglima Kodam IV Sriwijaya. Diciptakannya tarian ini karena
                                    pada saat itu, Tari Gending Sriwijaya dilarang untuk ditampilkan. <br><br>

                                    Kejayaan Kesultanan Palembang Darussalam menjadi inspirasi dari Tari Tepak Keraton.
                                    Dulu, terdapat keraton megah yang didirikan oleh Gde Ing Suro di lingkungan Benteng Kuto
                                    Gawang. <br><br>

                                    Tari Tepak Keraton pertama kali dipersembahkan di Jl. Tasik Palembang dengan menyerahkan
                                    kapur sirih kepada Bridgen Ishak Juarsa selaku Panglima Kodam IV Sriwijaya yang baru.
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

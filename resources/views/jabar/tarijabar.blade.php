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
                    <h2 align="center">Tari Daerah Jawa barat</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Jaipong
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/jaipong.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Jaipong merupakan tari tradisional yang sangat populer dari Jawa Barat. Tari ini
                                    juga menjadi identitas kesenian di Jawa Barat. Tari Jaipong biasa dipentaskan dalam
                                    banyak kegiatan dan acara. Salah satunya sebagai tari penyambut tamu baik dari dalam
                                    maupun luar negeri yang berkunjung ke Jawa Barat. Tari Jaipong diciptakan seorang
                                    seniman bernama Gugun Gumilar sekitar tahun 1960-an. Tari ini terinspirasi dari kesenian
                                    rakyat Jawa Barat, seperti Ketuk Tilu, Kliningan, serta Ronggeng. Secara gerakan, Tari
                                    Jaipong memiliki kekhasan tersendiri yang berbeda dari tari daerah lainnya. Tari Jaipong
                                    cenderung berirama cepat dan bersemangat. Gerakan Tari Jaipong di antaranya adalah
                                    Bukaan untuk mengawali tarian, Pencukan yaitu gerakan bertempo cepat, Ngala yaitu
                                    gerakan patah-patah, lalu Mincid yaitu gerakan perpindahan dari satu gerak ke gerak
                                    lain. Tari Jaipong umumnya dipentaskan dalam durasi 5-8 menit. Namun demikian, tidak ada
                                    patokan durasi bagi para penari dalam mementaskan tarian ini.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Topeng Kuncaran
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kuncaran.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari ini dipentaskan para penari yang menggunakan topeng pada bagian wajah mereka. Tari
                                    Topeng Kuncaran sangat kental dengan kebudayaan Sunda. Tari ini menjadi salah satu daya
                                    tarik kesenian di daerah Jawa Barat. Tari Topeng Kuncaran bercerita tentang dendam
                                    seorang raja kepada seorang putri. Dendam itu bermula dari penolakan cinta raja yang
                                    diutarakan kepada sang putri. Para penari Topeng Kuncaran umumnya mengenakan topeng
                                    dengan beragam ekspresi. Topeng menjadi aksesoris utama dalam tarian ini. Selain topeng,
                                    penari Topeng Kuncaran juga membawa properti lain, seperti keris, mahkota, aksesoris
                                    berupa gelang tangan dan kaki serta anting, lalu dilengkapi dengan alat musik seperti
                                    gong, bonang, hingga saron. Hingga saat ini Tari Topeng Kuncaran masih dilestarikan
                                    dengan dipentaskan dalam berbagai acara kebudayaan hingga perhelatan acara resmi.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Sintren
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/sintren.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari yang satu ini berasal dari Kota Cirebon, Jawa Barat. Melansir laman resmi Kota
                                    Cirebon, Tari Sintren biasanya dibawakan seorang wanita yang mengenakan kostum khusus
                                    dan kacamata hitam. Sebelum melakukan tarian, penari biasanya akan masuk ke dalam sebuah
                                    kurungan yang ditutup kain. Tari ini dikenal dengan unsur magis dan tidak boleh
                                    ditarikan untuk main-main. Sintren berasal dari dua kata yaitu si yang berarti dia, dan
                                    tren merujuk pada putri. Sehingga Sintren berarti si putri. Penari Sintren harus dalam
                                    keadaan suci dan bersih. Pasalnya, tarian ini menggambarkan kesucian si putri yang
                                    diperankan oleh sang penari. Karena harus suci, penari Sintren harus berpuasa terlebih
                                    dahulu dan tidak melakukan dosa sebelum pementasan. Baca juga: Tari Merak: Asal, Gerak,
                                    dan Versi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Ketuk Tilu
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tilu.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian ini dipentaskan dalam berbagai acara, seperti pernikahan, hiburan penutup acara,
                                    dan sebagainya. Tari Ketuk Tilu awalnya merupakan tarian untuk upacara adat menyambut
                                    musim panen. Tarian ini dilakukan sebagai ungkapan rasa syukur kepada dewi padi dalam
                                    kepercayaan masyarakat Sunda, yaitu Dewi Sriwedari. Di masa lampau, Tari Ketuk Tilu
                                    dipentaskan pada malam hari. Seorang gadis akan diarak ke tempat yang luas dengan
                                    diiringi bunyi-bunyian dari alat musik tradisional. Namun saat ini Tari Ketuk Tilu sudah
                                    menjadi hiburan masyarakat luas. Adapun Ketuk Tilu sendiri diambil dari alat musik
                                    pengiring yang mengeluarkan tiga suara, yaitu rebab, kendang, dan kulanter.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Merak
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/merak.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Sesuai dengan namanya, tari ini terinspirasi dari tata cara dan gerakan burung merak.
                                    Tari Merak diciptakan oleh seniman bernama Raden Tjetje Soemantri pada periode 1950-an.
                                    Tari ini awalnya diciptakan untuk menyambut para delegasi Konferensi Asia Afrika (KAA).
                                    Pada perkembangannya, Tari Merak menjadi tari modern atau kontemporer dimana gerakan
                                    tarian ini diciptakan bebas dengan kreasi sendiri. Melansir Grid.id, Tari Merak diiringi
                                    lagu Macan Ucul dengan irama musik gamelan laras salendro. Tari Merak mengandung nilai
                                    kebersamaan, religi, dan kehalusan budi. Selain itu, gerakan Tari Merak juga bermakna
                                    perwujudan rasa kagum terhadap keindahan burung merak. Oleh karenanya, gerakan dan
                                    kostum penarinya sangat kental unsur-unsur merak jantan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Wayang
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/wayang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Wayang sering ditampilkan dalam kesenian Wayang Orang. Tarian ini cukup unik,
                                    karena yang dipentaskan adalah cerita wayang. Pementasan tarian ini juga beragam. Ada
                                    Tari Wayang yang ditampilkan secara tunggal, berpasangan atau secara masal. Seiring
                                    berjalannya waktu, tarian ini dimodifikasi hingga menjadi tarian sesuai daerah
                                    masing-masing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Kamonesan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kamonesan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Kamonesan memiliki ciri khas yaitu para penarinya membawa bakul atau boboko,
                                    sebagai properti. Tarian ini dipentaskan delapan orang, yaitu 4 pria dan 4 wanita.
                                    Penari Kamonesan mengenakan kostum berwarna cerah, seperti biru, merah, hijau, maupun
                                    kuning. Penari pria mengenakan celana pangsi dan ikat kepala, dan penari wanita
                                    mengenakan kebaya lengkap dengan penutup kepala.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Wangsa Suta
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/suta.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian yang cukup populer ini menggambarkan pertempuran Wangsa Suta yang dilakukan tujuh
                                    penari pria. Para penari mengenakan kostum berwarna kuning khas hulu balang kerajaan.
                                    Tarian ini diiringi musik tradisional seperti musik Bali, namun ditambah seruling.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Boboko Mangkub
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/mangkub.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian Jawa Barat ini menggunakan bakul atau boboko besar sebagai properti utamanya.
                                    Boboko melambangkan kehidupan, karena menjadi tempat nasi bagi masyarakat Sunda. Saat
                                    pementasan, bakul ada yang diletakkan dengan posisi mangkub atau telungkup. Hal ini
                                    untuk menggambarkan kondisi masyarakat yang sedang kesulitan. Penari tarian ini cukup
                                    banyak yaitu 12 orang. Mereka terdiri dari satu penari pria, lima penari wanita, dan
                                    enam penari anak-anak.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Kedok Ireng
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kedok.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian Jawa Barat ini sarat akan gambaran kehidupan manusia. Tari Kedok Ireng berkisah
                                    tentang kehidupan manusia dari dua sisi, yaitu baik dan buruk. Pada awal pementasan akan
                                    ada tiga orang penari yang duduk bersila di atas panggung. Beberapa saat kemudian,
                                    mereka akan membungkuk lalu berdiri seraya mengenakan topeng.
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

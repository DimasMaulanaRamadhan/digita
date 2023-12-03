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
                    <h2 align="center">Tari Daerah Jawa Tengah</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Serimpi
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/serimpi.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Serimpi merupakan tarian klasik yang berasal dari Jawa Tengah. Tarian ini bisa
                                    dibilang telah ada sejak zaman feodal dan berkembang di kalangan keraton. Menariknya,
                                    Tari Serimpi juga disebut sebagai tarian tradisional yang sudah mencapai level keindahan
                                    yang tinggi. <br><br>

                                    Tarian Serimpi sangat khas dengan gerakan yang gemulai yang mendeskripsikan budi pekerti
                                    yang halus, lemah lembut, dan sopan. Kamu bisa melihat tempo gerakan yang pelan dan
                                    anggun dengan iringan musik gamelan yang mengalun magis. <br><br>

                                    Jika diperhatikan dari lembutnya gerakan penari, Tari Serimpi hampir mirip dengan Tari
                                    Pakarena yang berasal dari Makassar. Namun, eksistensi Tari Serimpi sendiri memang sudah
                                    sangat lama, karena memiliki sifat yang sakral dan sangat istimewa, terutama di kawasan
                                    keraton Jawa. <br><br>

                                    Bahkan, saking sakralnya, tarian ini sering kali dianggap sama dengan benda pusaka yang
                                    menggambarkan kekuasaan raja sejak era Jawa Hindu. Pementasan tari ini juga hanya boleh
                                    dilakukan oleh penari yang sudah dipilih oleh keraton. Meski begitu, sakralnya Tari
                                    Serimpi masih belum menyamai Tari Bedhaya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Bedhaya
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/bedhaya.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian Jawa Tengah selanjutnya adalah Tari Bedhaya yang berasal dari Keraton Surakarta.
                                    Tarian ini sangat sakral bagi masyarakat keraton dengan arti religius yang begitu kental
                                    baik untuk penari maupun para penontonnya. Oleh karena itu, banyak orang beranggapan
                                    bahwa tarian satu ini baik untuk meditasi. <br><br>

                                    Selain itu, Tari Bedhaya juga mempunyai kekuatan dan nilai keindahan. Setiap penari
                                    memakai kostum berupa blus beludru sebagai atasan lengkap dengan sarung bermotif batik.
                                    Sebagai tambahannya, mereka menggunakan selendang keemasan. <br><br>
                                    Tari Bedhaya sendiri menceritakan tentang kisah asmara antara Ratu Kidul dengan para
                                    Raja Mataram yang dikisahkan melalui gerak tubuh dan tangan, lengkap dengan iringan
                                    musik gamelan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Tayub
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tayub.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Tayub sekilas mirip dengan Tari Jaipong yang berasal dari Provinsi Jawa Barat.
                                    Tarian ini juga dikenal dengan momen Tayuban, salah satu bentuk kesenian khas Jawa
                                    Tengah yang erat kaitannya dengan keserasian dan keindahan gerak. Selain mirip dengan
                                    Tari Jaipong, tarian tradisional ini juga memiliki kemiripan dengan Tari Gambyong. <br><br>

                                    Biasanya, Tari Tayub akan dipertunjukkan pada acara sunatan, pernikahan, maupun acara
                                    tertentu, seperti momen kemerdekaan atau acara bersih desa. Anggota yang ikut
                                    berpartisipasi dalam tarian ini yaitu penyanyi atau sinden, para pemain musik gamelan,
                                    dan penari yang berjenis kelamin wanita.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Gambyong
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/gambyong.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Kemudian, ada lagi Tari Gambyong yang berasal dari wilayah Surakarta. Mulanya, tarian
                                    ini hanyalah sebuah tarian rakyat biasa yang kerap digelar saat masuk pada musim panen
                                    padi. Namun, beberapa waktu belakangan, Tari Gambyong dipertunjukkan sebagai acara yang
                                    sakral sekaligus penghormatan kepada para tamu yang datang berkunjung. <br><br>

                                    Asal mula nama tarian ini diambil dari nama penari yang punya suara indah dan tubuh yang
                                    sangat lentur, yaitu Sri Gambyong. Dengan segera, Sri Gambyong berhasil menarik
                                    perhatian banyak orang, sehingga akhirnya sampai ke telinga Sunan Paku Buwono IV.
                                    Kemudian, Sunan mengundang Sri Gambyong dan memintanya menari di istana. <br><br>

                                    Benar saja, semua penonton terpikat dengan gerakan tubuh Sri Gambyong. Selanjutnya,
                                    tarian tersebut kemudian dipelajari dan terus dikembangkan hingga akhirnya menjadi
                                    tarian khusus istana. <br><br>

                                    Jumlah penari untuk tarian ini tidak ada syaratnya, kostum yang dipakai berupa kemben
                                    dengan tinggi sampai bahu lengkap dengan selendangnya. Kostum tarian Jawa Tengah ini
                                    akan terlihat lebih meriah dengan kombinasi warna hijau dan kuning. <br><br>

                                    Meski begitu, warna sekarang tidak lagi menjadi acuan seiring dengan zaman yang semakin
                                    berkembang. Adapun peranti gamelan yang digunakan sebagai pengiring lagu Tari Gambyong
                                    adalah kendang, gong, gambang, dan kenang.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Golek
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/golek.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian Jawa Tengah yang tidak kalah populer dengan lainnya adalah Tari Golek. Tarian ini
                                    merupakan jenis tarian tunggal yang dilestarikan di keraton dan dipertontonkan untuk
                                    banyak acara budaya. Tari Golek sendiri berasal dari Solo yang bercerita tentang seorang
                                    gadis muda yang tumbuh menjadi wanita dewasa. <br><br>

                                    Teknik dasar dan posisi dari tarian Jawa Tengah ini mirip dengan Tari Bedhaya dan
                                    Serimpi. Hanya saja, gerakan intinya sebenarnya menceritakan tentang kecantikan dari
                                    seorang wanita muda. Sementara itu, kata Golek sendiri mengarah pada Wayang Golek.
                                    Selain itu, alirannya juga punya keselarasan pada khasanah cerita sejarah Wayang Golek
                                    itu sendiri.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Bondan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/bondan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Bondan, tarian Jawa Tengah yang turut berasal dari daerah Surakarta. Tarian ini
                                    menyimbolkan sosok seorang ibu yang selalu menjaga sang anak dengan begitu hati-hati.
                                    Tarian ini juga bercerita tentang anak dengan seorang wanita yang sedang memegang boneka
                                    dan payung dalam kondisi terbuka. <br><br>

                                    Mereka menari dengan sangat berhati-hati di atas kendi karena tidak boleh menginjak
                                    bahkan mematahkannya. Tari Bondan sendiri terbagi menjadi tiga, yaitu Mariah Pegunungan,
                                    Mariah Mardisiwi, dan Cindogo Mariah. Cirinya yaitu menggunakan busana seperti gadis
                                    desa, bertooi, membawa alat pertanian, dan memegang keranjang
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('jateng') }}" class="btn-back">
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

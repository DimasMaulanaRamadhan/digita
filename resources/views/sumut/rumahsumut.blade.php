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
                    <h2 align="center">Rumah Adat Sumatera Utara</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Karo
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/karo1.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Sumatera Utara yang paling terkenal di Indonesia adalah rumah adat Karo.
                                    Rumah adat ini selalu menjadi tujuan wisata budaya yang populer di kalangan turis lokal
                                    dan mancanegara. <br><br>

                                    Rumah adat Karo ini menjadi rumah adat Sumatera Utara yang paling tinggi dan paling
                                    besar ukurannya. Tinggi dari rumah adat Karo bahkan ada yang bisa mencapai hingga 12
                                    meter. <br><br>

                                    Uniknya, walaupun menjadi rumah adat terbesar dan tertinggi di Sumatera Utara, tapi
                                    rumah adat Karo ini dibangun tanpa menggunakan paku. <br><br>

                                    Terdapat enam belas tiang yang bersandar pada batu-batu besar yang menyangga bangunan
                                    ini sehingga kuat berdiri. <br><br>

                                    Untuk bagian atapnya dibuat dari ijuk hitam yang diikat pada kerangka anyaman bambu.
                                    Sementara lantainya terbuat dari kayu yang disusun dan dirangkai dengan apik sehingga
                                    menempel satu sama lain. <br><br>

                                    Rumah adat Karo memiliki nama lain yakni rumah adat Siwaluh Jabu yang mengartikan bahwa
                                    rumah tersebut dihuni oleh delapan keluarga yang perannya berbeda-beda dalam rumah
                                    tangga.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Nias
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/nias1.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Nias menjadi rumah adat Sumatera Utara berikutnya yang dari tampilannya
                                    tampak lebih mungil dibanding rumah adat Karo. Rumah adat Nias terbagi menjadi jenis,
                                    yakni Omo Hada dan Omo Sebua. <br><br>

                                    Rumah adat Omo Hada adalah rumah adat Nias yang digunakan untuk masyarakat biasa Suku
                                    Nias. Sementara untuk rumah adat Omo Sebua diperuntukkan untuk petinggi hingga
                                    bangsawan. <br><br>

                                    Dari segi bentuknya, keduanya ini tak jauh berbeda. Tapi dari ukurannya sangat jauh
                                    berbeda. Untuk rumah adat Omo Sebua memiliki tipe rumah panggung dengan tinggi kolong
                                    panggung sekitar 2-5 meter. <br><br>

                                    Sementara pada rumah adat Omo Hada, kolong panggungnya hanya sekitar 1-2 meteran saja.
                                    <br><br>

                                    Rumah adat Sumatera Utara ini dibuat dari kayu nibung yang digunakan sebagai penyangga
                                    dan atap yang terbuat dari rumbia untuk rumah adat Omo Hada, sementara untuk rumah adat
                                    Omo Sebua menggunakan atap yang dibuat dari tanah liat. <br><br>

                                    Satu lagi keunikan dari rumah adat Nias ini, yakni pondasinya yang kokoh membuatnya
                                    tahan gempa. Pasalnya di dalam pondasi diletakkan balok diagonal yang memberikan
                                    fleksibelitas dan stabilitas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Bolon
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/bolon.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Bolon termasuk salah satu rumah adat Sumatera Utara yang memiiki tampilan
                                    unik karena bentuk atapnya yang mirip dengan pelana kuda dengan bagian ujung yang sangat
                                    lancip. <br><br>

                                    Rumah adat Sumatera Utara ini merupakan rumah panggung yang bagian kolong panggungnya
                                    bisa mencapai 1,7 meter dari atas tanah. Bagian dalam rumah adat Bolon tidak bersekat
                                    karena dibiarkan terbuka begitu saja. <br><br>

                                    Rumah adat Bolon ini dibuat dari papan kayu dan atapnya dibuat dari ijuk atau daun
                                    rumbia. Sama seperti rumah adat Nias, rumah adat Bolon tidak menggunakan paku melainkan
                                    menggunakan tali untuk menyatukan bahan-bahan rumah.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Bagas Gondang
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/gondang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Selanjutnya ada rumah adat Bagas Gondang yang seringkali disebut dengan sebutan nama
                                    rumah adat Mandailing karena memang berasal dari Suku Batak Mandailing. <br><br>

                                    Rumah adat Sumatera Utara ini awalnya merupakan tempat tinggal atau tempat beristirahat
                                    para raja, namun sekarang sudah menjadi warisan budaya dan bisa digunakan oleh
                                    masyarakat suku Mandailing untuk tempat musyawarah dan pertemuan warga. <br><br>

                                    Rumah adat Sumatera Utara ini memiliki ciri khas bentuk persegi panjang ke belakang
                                    dengan bagian atap yang berbentuk segitiga. <br><br>

                                    Pada bagian atas atap terlihat seperti bentuk gunting. Bagian atap ini dijuluki dengan
                                    bentuk tarup silengkung dolok alias bentuk atap pedati. <br><br>

                                    Bagian atapnya dibuat dari ilalang dan dedaunan kering. Kita bisa melihat pada bagian
                                    atap depan terdapat ornamen berwarna merah, putih, dan hitam yang menjadi ciri khasnya.
                                    <br><br>

                                    Sementara untuk bahan bangunannya terbuat dari kayu-kayu besar berjumlah ganjil sebagai
                                    penyangga utama.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Pakpak
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/pakpak1.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Di antara rumah adat Sumatera Utara, mungkin rumah adat Pakpak inilah yang memiliki
                                    warna tampilan paling cerah karena warna merah dan orangenya mendominasi pada bagian
                                    atap dan dinding rumah. <br><br>

                                    Tapi ada juga rumah adat Pakpak yang masih menggunakan warna hitam dan cokelat pada atap
                                    lalu putih pada bagian dinding. <br><br>

                                    Rumah adat Pakpak memiliki fungsi sebagai tempat untuk melangsungkan musyawarah dalam
                                    mencapai penyelesaian masalah di masyarakat. <br><br>

                                    Keunikan rumah adat Sumatera Utara ini terletak pada bagian atapnya yang mirip seperti
                                    tanduk kerbau. <br><br>

                                    Filosofinya adalah karena atap rumah melambangkan semangat kepahlawanan sehingga
                                    pemiliknya memiliki jiwa pahlawan yang kuat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Simalungun
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/simalungun1.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Saat melihat rumah adat Simalungun, pasti yang terbayang dalam benak kita adalah rumah
                                    adat Sumatera Utara ini ukurannya besar sekali. <br><br>

                                    Dibandingkan dengan rumah adat Sumatera Urara lainnya, bentuknya memang lebih besar.
                                    <br><br>

                                    Ciri khas dari rumah adat Simalungun adalah bangunannya yang berbentuk limas dengan tipe
                                    rumah panggung. <br><br>

                                    Bagian kolong panggungnya ini dibuat setinggi dua meter dengan tujuan untuk menghindari
                                    serangan babi hutan serta hewan liar lainnya. <br><br>

                                    Pada kaki rumah adat Simalungun terdapat kayu-kayu penyangga yang diukir dan diberi
                                    warna. Sedangkan pada bagian pintunya sengaja dibuat pendek, tujuannya adalah supaya
                                    tamu menghormati pemilik rumah karena akan sedikit membungkuk ketika masuk rumah.
                                    <br><br>

                                    Rumah adat Simalungun awalnya dibangun oleh Raja Simalungun pada sekitar tahun 1939.
                                    <br><br>

                                    Saat ini rumah adat Sumatera Utara ini banyak dijumpai di Kota Pematang Siantar dan
                                    Simalungun.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Rumah Adat Angkola
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/angkola1.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Rumah adat Sumatera Utara yang terakhir adalah rumah adat Angkola yang merupakan milik
                                    dari suku Batak Angkola. <br><br>

                                    Bangunannya dibuat dari papan kayu untuk lantai dan dinding, sementara atapnya ada yang
                                    dari ijuk dan ada yang menggunakan tanah liat. <br><br>

                                    Banyak yang menyamakan rumah adat Sumatera Utara ini dengan rumah adat Bagas Godang,
                                    tapi keduanya ini berbeda. Mulai dari suku yang mendiaminya hingga bentuk dan pemilihan
                                    warna bangunan. <br><br>

                                    Rumah adat Agngkola memiliki bentuk yang lebih kotak dengan bagian atap yang besar pada
                                    bagian depan, lalu ada atap kecil lainnya di atasnya yang berbentuk segitiga. <br><br>

                                    Rumah adat Angkola juga didominasi dengan warna cokelat tua, orange, dan putih.
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

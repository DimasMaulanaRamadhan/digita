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
                    <h1 align="center">Senjata Bali</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Trisula
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/trisula.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata adat Bali pertama yang cukup terkenal di Bali adalah trisula yang memiliki nama
                                    lain serampang. Trisula berasal dari bahasa sanskerta yang bermakna tombak mata tiga.
                                    Hal ini memang sejalan dengan wujud senjata trisula yang merupakan sebuah tombak panjang
                                    dengan 3 ujung yang runcing. Konon, senjata ini merupakan alat yang digunakan oleh Dewa
                                    Siwa yang tak lain merupakan Trimurti sesembahan agama Hindu dan Budha.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Blakas
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/blakas.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Blakas merupakan istilah yang ditujukan untuk golok khas Bali. Bentuk golok ini lebih
                                    pendek dibandingkan umumnya. Sekilas, blakas menyerupai pisau daging yang besar. Blakas
                                    juga dijuluki sebagai golok cepot atau golok dapur karena fungsinya memang lebih banyak
                                    di dapur. Golok ini hanya digunakan saat acara-acara tertentu saja, seperti ketika ada
                                    gotong-royong di pura ataupun hajatan. Senjata tradisional ini juga tidak dijual bebas
                                    di pusat perbelanjaan wisata. Akan tetapi, diproduksi dan diperjualbelikan secara khusus
                                    di beberapa kota saja.
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Caluk
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/caluk.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Caluk adalah senjata tradisional Bali yang berbentuk pisau melengkung dengan
                                    gagang atau gagang yang panjang. Ganggang panjang memiliki kemampuan untuk mencapai
                                    daerah yang jauh lebih tinggi dengan senjata. Misalnya, jika ingin memanen buah atau
                                    memotong dahan yang tinggi. Senjata ini terbuat dari besi atau tembaga yang disusun
                                    sedemikian rupa sehingga menciptakan bentuk yang unik. Batang senjata tradisional ini
                                    terbuat dari kayu yang juga dikunci dengan bahan tembaga yang sangat kuat. Meskipun
                                    fungsinya terdengar sepele, namun alat ini sangat berguna dan penting untuk aktivitas
                                    masyarakat orang bali yang masih erat dengan kegiatan bercocok tanam. Caluk adalah
                                    senjata tradisional yang sebenarnya juga ada di daerah lain, namun dengan nama-nama yang
                                    berbeda. Meskipun bukan senjata perang, Celuk jadi salah satu senjata tradisional Bali
                                    yang masih dilestarikan hingga saat ini.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Taji
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/taji.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Taji adalah senjata tradisional Bali yang digunakan untuk sabung ayam untuk
                                    senjata utamanya. Untuk menggunakan senjata ini diikatkan pada kaki ayam sebagai
                                    senjata. Selain itu, senjata ini juga biasa digunakan saat menaburkan arwah tradisional.
                                    Upacara dilaksanakan dengan cara menumpahkan darah hewan dari rumah jagal. Orang Bali
                                    tidak asing lagi dengan adu ayam dan sering menggunakan Taji sebagai senjata utama
                                    mereka dalam kegiatan ini. Menggunakan senjata ini sangat mudah. Dengan kata lain, cukup
                                    mengikatnya ke kaki ayam sebagai senjata. Selain digunakan untuk sabung ayam, taji ini
                                    juga biasa digunakan dalam ritual spiritual tradisional. Ritual ini dilakukan dengan
                                    menyemprotkan darah hewan pada saat penyembelihan. Hingga saat ini, senjata tradisional
                                    dan budaya sabung ayam ini telah menjadi praktik yang biasa dan masih dikaitkan dengan
                                    kehidupan sehari-hari masyarakat Bali.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Kandik
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kandik.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Kandik adalah senjata tradisional Bali yang digunakan untuk menebang pohon, memotong
                                    kayu, atau melakukan sesuatu yang membutuhkan banyak tenaga. Kandik relatif besar dan
                                    berat, sehingga tidak semua orang ini dapat menggunakan senjata Kandik dengan baik.
                                    Kandik adalah senjata khas Bali yang berasal dari bahasa Bali yang berarti kapak.
                                    Dilihat dari bentuknya yang besar dan berat, senjata ini merupakan senjata kerajaan yang
                                    terbuat dari besi atau baja dan ditempa lama dengan proses yang tidak biasa. Inilah cara
                                    membuat senjata ampuh yang sangat kuat. Ciri khas Kandik adalah gagangnya lebih panjang
                                    dari kapak biasanya. Kandik ini sering digunakan untuk pekerjaan- pekerjaan berat.
                                    Secara mitologi, kandik menjadi simbol dari Ayudha Dewata yang merupakan senjata dewa
                                    dalam menumpas kejahatan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Wedhung
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/wedhug.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Wedhung merupakan senjata tradisional yang merupakan simbol kesediaan untuk mengabdi
                                    seorang bawahan pada atasan atau majikannya. Artinya, ketika seorang bawahan
                                    menikahinya, itu bisa dianggap sebagai ikrar setia kepada atasannya sampai akhir
                                    hayatnya. Senjata tradisional Wedhung ini juga ditemukan di wilayah Cirebon.
                                    Perbedaannya terletak pada motif pahatannya. Senjata Wedhung asal Bali memiliki mata
                                    bermotif, tetapi Wedhung Cirebon tidak memiliki motif ini. Senjata Wedhung adalah belati
                                    atau pisau logam tempa dengan gagang kayu. Biasanya sedikit lebih besar. Panjang senjata
                                    ini sekitar 38 cm. Fungsi senjata tradisional Bali ini juga semakin bergeser. Karena
                                    motifnya yang unik, Wedhung Bali saat ini banyak digunakan untuk hiasan atau senjata
                                    dalam upacara adat. Zaman dahulu, senjata ini biasa digunakan oleh masyarakat sebagai
                                    senjata perang dan bertempur melawan musuh, atau sebagai senjata tajam di dapur atau
                                    alat untuk memotong daging dan bahan-bahan keras lainnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tiuk
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tiuk.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pisau Tiuk merupakan alat kecil yang bernilai seni bagi budaya orang Bali. Pisau Tiuk
                                    ini merupakan benda yang tidak bisa lepas dari gaya dan nuansa eksotis budaya Bali.
                                    Pisau tiuk biasanya digunakan untuk memasak, mengiris daging dan mengolah bahan lainnya.
                                    Meski pisau memiliki nilai seni, barang-barang kecil selalu digunakan untuk kebutuhan
                                    rumah tangga sehari-hari. Senjata Tiuk sendiri merupakan senjata tradisional seperti
                                    keris/pisau dan mirip sekali dengan Wedhung. Bedanya, wedhung biasa digunakan laki-laki
                                    sebagai pertahanan dalam perang. sedangkan tiuk lebih condong untuk kaum hawa
                                    (Perempuan). Tiuk digunakan untuk peralatan masak, sesaji, atau keperluan dapur lainnya.
                                    Tiuk juga lebih sederhana dari Wedhung. Tentu saja, fungsi di balik semua perbedaan ini
                                    dalam kehidupan sehari-hari orang Bali sangat penting.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Keris Tayuhan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tayuhan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Keris Tayuban adalah keris yang berasal dari budaya kerajaan kuno, yakni kerajaan
                                    Majapahit. Orang Bali melihat Keris sebagai simbol dan identitas diri. Tak hanya itu,
                                    keris juga memiliki nilai sakral yang tinggi. Alhasil, Keris Tayuban selalu diperhatikan
                                    baik dari segi perawatan maupun penyimpanannya. Disisi lain, dari segi fungsinya, Keris
                                    Tayuhan biasanya digunakan sebagai sarana pertahanan diri, terutama pada saat perang.
                                    <br><br>
                                    Tapi seiring waktu, fungsi keris ini menjadi sebagai pusaka dengan berbagai hiasan
                                    seperti dari dekorasi pegangannya, bilah dan sarungnya. Keris Tayuhan ini biasanya
                                    dibersihkan saat pergantian tahunan dan upacara keagamaan lainnya di Bali. Keris Tayuhan
                                    adalah nama yang diberikan kepada Keris yang dibuat untuk kesaktian (keberuntungan),
                                    bukan keindahan. Keris ini sering dibersihkan oleh masyarakat Bali pada upacara tahun
                                    baru dan upacara keagamaan lainnya. Biasanya keris jenis ini memiliki kesan angker dan
                                    memiliki aura pembawa yang adakalanya menakutkan, sehingga sering dimurnikan atau
                                    disucikan. Maka tak heran jika perawatan dan penyimpanan keris ini selalu menjadi
                                    pertimbangan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Panambad
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/penampad.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Panambad merupakan senjata tradisional yang lahir di Bali dan memiliki berbagai
                                    keunggulan sesuai kebutuhan. Misalnya, digunakan untuk memotong bambu dan memotong
                                    rumput. Panambad memiliki bentuk yang sederhana dan tidak jauh berbeda dengan pisau.
                                    Satu-satunya perbedaan adalah panjang bilahnya, yang lebih panjang dari pisau modern
                                    biasanya. Ganggang itu sendiri terbuat dari kayu dan sangat mudah ditemukan. Senjata ini
                                    masih berlaku sampai sekarang, karena selalu digunakan oleh masyarakat Bali di semua
                                    kalangan. Penampad adalah senjata tradisional Bali berbentuk seperti pedang panjang
                                    seperti pisau dan sering digunakan untuk membersihkan rumput di lereng-lereng sawah
                                    (Garengan). Senjata Panambad bukanlah senjata yang ditujukan untuk perang atau
                                    pertempuran.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Arit
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/arit.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Arit adalah salah satu senjata tradisional Bali yang bentuknya seperti bulan
                                    sabit setengah lingkaran dan terbuat dari baja yang kuat. Senjata ini memiliki bentuk
                                    yang sama dengan Arit Madura, yaitu pisau melengkung. Orang Bali sendiri menggunakan
                                    arit ketika bepergian ke ladang dan kebun untuk mencari rumput dan bekerja di ladang.
                                    <br><br>
                                    Arit adalah benda tajam yang terbuat dari baja yang kuat dan kokoh. Meski bentuknya
                                    sederhana. Namun, senjata ini bisa sangat berbahaya. Ini karena tikungannya sangat
                                    tajam. Oleh sebab itu senjata ini sempat jadi senjata perang zaman dahulu bagi
                                    masyarakat bali. memiliki bentuk yang kokoh dan menakutkan membuat senjata tradisional
                                    ini jadi senjata andalan para prajurit. Selain dalam budaya bali, senjata Arit juga
                                    banyak ditemukan pada budaya-budaya lain. Seperti madura yang biasa disebut clurit, atau
                                    dalam budaya Betawi yang biasa disebut sabit.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Keris ki Baru Gajah
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/gajah.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Keris Ki Baru Gajah adalah senjata tradisional Bali yang dipersembahkan oleh Dang Hyang
                                    Dwijendra Saka pada tahun 1411. Keris ini dipercaya sebagai keris yang dapat membawa
                                    kemakmuran bagi masyarakat Bali. Oleh karena itu, penanggalan tradisi Nglisah
                                    berlangsung setiap bulan Juni (penanggalan Masehi) atau hari ke-210 dalam penanggalan
                                    Bali. <br><br>
                                    Tradisi Nglisah adalah tradisi turun-temurun yang bertujuan untuk mensucikan Keris.
                                    Pembersihan dilakukan dengan mengoleskan minyak kelapa ke setiap bilah Keris. Tradisi
                                    dilestarikan sebagai bentuk penghormatan dan pemujaan kepada dewa keris yang dikenal
                                    sebagai Hyang Pasupati. Keris Ki Baru Gajah juga dipercaya oleh masyarakat Bali dapat
                                    membantu mengendalikan segala jenis hama tanaman dan menjamin kesuburan pertanian.
                                    Itulah yang membuat keris ini dihormati oleh masyarakat Bali. Itulah sebabnya keris Ki
                                    Baru Gajah erat dengan berbagai upacara adat di budaya Bali.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tombak
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/Tombakbali.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tombak adalah senjata perang kuno di budaya Bali. Tombak sering digunakan oleh tentara
                                    yang bertindak sebagai senjata perang. Senjata tombak ditampilkan dalam tarian Bali atau
                                    yang disebut tari Wirayuda. Tarian ini merupakan tarian perang yang dibawakan oleh 2
                                    sampai 4 orang penari dengan senjata tombak. Tarian menggambarkan sekelompok prajurit
                                    Dwipa Bali bersiap untuk maju ke medan perang. <br><br>
                                    Tombak merupakan salah satu senjata yang melambangkan ketajaman hati, dan umumnya
                                    bercirikan senjata para dewa, termasuk Ayuda Dewata di bagian atas. Di kepulauan itu
                                    sendiri, tombak digunakan sebagai senjata perang oleh tentara kerajaan kuno. Dalam
                                    sejarah Bali, tombak digambarkan dalam tarian Bali yang dikenal dengan tari Wirayuda.
                                    Hingga saat ini, senjata tombak ini masih banyak digunakan pada upacara-upacara adat
                                    karena senjata tradisional ini memang masih erat kaitannya dengan masyarakat Bali.
                                    Itulah sebabnya kita tidak akan asing dengan tombak Bali jika berkunjung ke daerah ini
                                    karena banyak pertunjukan adat yang menggunakan senjata tradisonal ini.

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

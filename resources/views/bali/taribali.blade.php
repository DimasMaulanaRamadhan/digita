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
                    <h2 align="center">Tari Daerah Bali</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari kecak
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kecak.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Kecak merupakan salah satu seni tari nusantara terkenal yang berasal dari Bali.
                                    Seni tari ini biasanya dipertunjukkan secara massal oleh puluhan, bahkan ratusan penari
                                    laki-laki yang duduk secara melingkar. Dinamakan tari Kecak, karena pada saat irama
                                    musik dimainkan, para penari akan mengangkat dan menggerakkan kedua lengannya sambil
                                    menyerukan kata "cak ke cak ke cak". Para penari akan mengenakan kostum bermotif poleng
                                    (kotak-kotak putih hitam), mirip dengan pola papan catur.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Barong
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/barong.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari barong ini merupakan warisan dari agama Hindu, walaupun orang beranggapan bahwa ini
                                    mirip tarian China, barongsai. Padahal keduanya berbeda. Ada makna yang tersirat dari
                                    tarian ini. Tampak dari simbol barong yang berarti perseteruan pada hal yang baik,
                                    sedangkan rangda adalah simbol untuk kejahatan. Kata barong sendiri merujuk pada kata
                                    bahruag, yang dalam literatur memiliki arti beruang. Wujudnya bisa saja beragam
                                    disesuaikan dengan tipe tariannya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Pendet
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/pendet.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari pendet adalah tarian khas daerah Bali. Tarian ini digunakan sebagai persembahan
                                    untuk leluhur atau Bhatara-Bhatari. <br><br>
                                    Tari pendet biasa dipentaskan di halaman Pura menghadapkan ke sebuah palinggih, dimana
                                    Bhatara dan Bhatari diistanakan. Tari pendet biasanya dibawakan oleh penari wanita
                                    berpakaian adat, dengan membawa bokor atau canang sari yang berisi bunga. <br><br>
                                    Susunan pakaian tari pendet yaitu terdiri dari sabuk prada, anteng (cerik), dan kamben
                                    songket. Selain itu, untuk perlengkapan tari pendet mereka juga membawa alat-alat
                                    upacara seperti sangku, mangkok perak, kendi dan lain-lain.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Legong
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/legong.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Legong merupakan tarian tradisional Bali yang dibawakan oleh dua atau tiga penari
                                    wanita, dengan ciri pokok gerakan yang luwes pada kaki yang diiringi permainan musik.
                                    <br><br>
                                    Kata legong sendiri berasal dari kata "leg" berarti gerak tari yang luwes (lentur), dan
                                    "gong" artinya gamelan yang merupakan instrumen pengiringnya. <br><br>
                                    Sehingga, "Legong" mengandung makna gerak tari yang menekankan pada keluwesan penari
                                    dengan diiringi oleh musik gamelan. Gamelan yang dipakai untuk mengiringi tari legong
                                    disebut dengan Gamelan Semar Pagulingan. Tari Legong sendiri memiliki beberapa tipe.
                                    Tipe-tipe tersebut di antaranya Legong Legod Bawa, Legong Jobog, Legong Keraton atau
                                    Legong Lasem, Legong Smaradahana, Legong Kuntul, dan Legong Sudarsana.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari baris
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/baris.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Seperti halnya nama yang tertera, ternyata formasi yang digunakan untuk menarikan tari
                                    ini adalah formasi baris berbaris. Tari baris sendiri merupakan tari yang bertujuan
                                    untuk ritual. Namun, seiring berkembangnya waktu yang lebih modern, fungsinya berganti
                                    menjadi ajang hiburan masyarakat. Dalam menarikan nya, seorang penari haruslah
                                    menggerakkan badannya bak pahlawan yang sedang berada di medan perang. Gambaran singkat
                                    dari tari ini adalah kisah seorang ksatria yang berperang untuk membela rajanya.
                                    <br><br>
                                    Tari baris ada sejak pertengahan abad ke 16 lalu. Tari tersebut bisa ditarikan oleh
                                    maksimal 40 laki-laki, dan minimalnya 8 orang. Untuk kostumnya sendiri, para penari
                                    mengenakan lamak, baju beludru, awir, badog, celana panjang, dan lainnya. Beberapa
                                    hiasan juga ikut menghiasi kepala, dada, dan juga punggung. Perlu Anda ketahui, setiap
                                    kostum pada masing-masing daerah berbeda karena kekhasan daerah yang berbeda pula. Tari
                                    baris sendiri disebut sebagai tari yang keramat karena hanya dipentaskan ketika diadakan
                                    perayaan khusus dan juga upacara suci.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Puspanjali
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/Puspanjali.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari puspanjali merupakan tarian untuk penyambutan. Kata puspanjali berasal dari puspa
                                    yang artinya menghormati dan anjali yang berarti bunga. Jadi makna dari tarian ini
                                    adalah menghormati tamu bagai sekuntum bunga. <br><br>
                                    Tarian ini ditampilkan oleh sekelompok wanita dengan jumlah 5 hingga 7 orang.
                                    Penari-penari ini menggambarkan sekelompok wanita yang senang dengan kedatangan para
                                    tamu yang singgah ke daerah mereka.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Trunajaya
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/Trunajaya.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari trunajaya yang menceritakan mengenai kisah romantis. Pada tari trunajaya,
                                    dikisahkan seorang laki-laki yang sedang jatuh cinta dan diam-diam ia ingin memikat hati
                                    perempuan pujaannya. Pada mulanya tari trunajaya hanya dimainkan oleh penari laki-laki
                                    saja. Namun, seiring dengan perkembangan kini tari trunajaya pun ditarikan oleh para
                                    penari pengiring perempuan. <br><br>
                                    Tari khas Bali ini memiliki keunikan tersendiri. Pada tari trunajaya, ada gerakan
                                    seperti kuda-kuda yang dilakukan oleh penari laki-laki sambil membelalakan mata dengan
                                    lebar. Gerakan kuda-kuda tersebut, menjadi simbol dari kejantanan laki-laki yang ingin
                                    menyatakan perasaan kepada perempuan pujaan hatinya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari panji semirang
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/semirang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Panji Semirang adalah tari yang berasal dari Bali dan diciptakan pada tahun 1942.
                                    Pencipta tari Panji Semirang adalah seorang seniman yang berasal dari Bali juga. Seniman
                                    tersebut bernama, I Nyoman Kaler. Ketika menciptakan tari Panji Semirang, I Nyoman Kaler
                                    terinspirasi berdasarkan cerita mengenai petualangan dari seorang putri bernama Putri
                                    Galuh Candrakirana. <br><br>
                                    Petualangan Putri Galuh Candrakirana adalah bentuk dari petualangannya ketika ia
                                    menyamar sebagai seorang laki-laki, dalam penyamaran tersebut Putri Galuh Candrakirana
                                    menggunakan Raden Panji usai ia ditinggalkan oleh suaminya karena suaminya telah
                                    meninggal dunia. <br><br>
                                    Berdasarkan kisah dari petualangan Putri Galuh Candrakirana tersebut, I Nyoman Kaler pun
                                    menciptakan tari Panji Semirang yang memiliki kekhasan berupa hadirnya seorang penari
                                    wanita yang menggunakan riasan seperti seorang laki-laki dan menari dengan ekspresi
                                    khas, yaitu tersenyum dan membelalakan matanya atau melotot.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari margapati
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/margapati.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Margapati memiliki kisah dan makna di balik gerakan-gerakan tarian yang indah.
                                    Tidak seperti tari Panji Semirang yang mengisahkan mengenai petualangan seorang putri,
                                    tari Margapati justru dinilai memiliki makna yang menyedihkan. <br><br>
                                    Hal ini dikarenakan tari Margapati mengisahkan mengenai kematian. Tari Margapati
                                    merupakan tarian yang diartikan menuju kematian. Dalam tari Bali satu ini, kisahnya
                                    dibawakan oleh seorang penari perempuan dengan disertai gerakan-gerakan lincah seperti
                                    gerakan seorang laki-laki yang ingin menyerang atau menyergap sesuatu. <br><br>
                                    Karena gerakan yang cepat dan lincah tersebut, maka gerakan tari Margapati pun dapat
                                    memberikan suasana tegang bagi penonton yang menyaksikannya. Selain itu, tari Margapati
                                    akan lebih seru ketika penonton melihatnya secara langsung. Sehingga penampilan tari
                                    Margapati pun dapat menarik lebih banyak wisatawan untuk datang ke Bali menyaksikan
                                    tarian satu ini.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari wirayudha
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/wirayudha.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari ini mengisahkan mengenai peperangan. Peperangan yang digambarkan dalam tari
                                    Wirayudha ini terlihat dari jumlah penari yaitu dua hingga empat pasang penari pria.
                                    Selain itu, untuk menggambarkan peperangan yang lebih jelas, maka penari pun dilengkapi
                                    dengan aksesoris tari berupa senjata tombak. Selain untuk mencerminkan peperangan,
                                    senjata tombak pun mencerminkan para prajurit Bali Dwipa. <br><br>
                                    Selain tombak, para penari juga dilengkapi dengan aksesoris perang lainnya seperti
                                    hiasan kepala yang khas dengan budaya Bali atau dikenal pula dengan nama udeng-udeng.
                                    Selain mengisahkan mengenai peperangan, tari Wirayudha pun memiliki makna di baliknya,
                                    yaitu persiapan dari sekelompok prajurit yang tengah mempersiapkan diri untuk maju ke
                                    dalam medan pertempuran.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari janger
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/janger.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Janger telah ada sejak tahun 1930 dan terus menjadi tarian khas yang berasal dari
                                    Bali. Tari Janger mengisahkan mengenai pergaulan dari anak-anak muda yang ada di Bali
                                    dan dimainkan oleh sepasang penari putra serta putri yang berjumlah 10 hingga 16 pasang
                                    penari. Para penari tersebut, tidak hanya menari saja akan tetapi juga menyanyikan
                                    sebuah lagu dengan judul yang sama lalu saling sahut menyahut. <br><br>
                                    Selain penari tidak hanya menari tetapi juga bernyanyi, tari janger pun memiliki
                                    keunikan lainnya. Untuk penari laki-laki, gerakan tarian dimainkan dengan gerakan tari
                                    kecak. Sedangkan untuk penari perempuan gerakan tarian digerakan dengan tari janger.
                                    Oleh karena itu, tari janger ini tampak meriah karena ada banyak penari, gerakan tari
                                    yang berbeda serta lagu yang dinyanyikan oleh penari.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari durga mahisasura mardini
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/mardini.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari durga mahisasura mardini merupakan tari khas Bali yang mengisahkan dan terinspirasi
                                    dari durga mahisasura mardini yang tertulis pada lontar siwagama. Pada naskah klasik
                                    siwagama tersebut, mengisahkan mengenai peristiwa ketika dewa dewi di surga kelelahan
                                    karena harus bertanding dengan raksasa Rakta. <br><br>
                                    Pada tari durga mahisasura mardini, tarian ini ditarikan oleh sepuluh penari yang
                                    terdiri dari penari laki-laki dan perempuan. Sebagian penari, dikisahkan mewakili
                                    raksasa Rakta. Sedangkan satu penari akan berperan sebagai Durga yang digambarkan
                                    sebagai sosok dewi kuat dengan membawa senjata dewata nawasanga. <br><br>
                                    Ketika pementasan tari durga mahisasura mardini, para penari diiringi dengan musik
                                    gamelan semarandana, musik gamelan ini merupakan bentuk yang dari dari hasil pembaruan
                                    dari gong kebyar semar pegulingan.
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

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
                    <h2 align="center">Pakaian Adat Jawa Tengah</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Kebaya Tradisional
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kebayajateng.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Seperti halnya budaya yang beragam, Indonesia juga memiliki banyak pakaian tradisional
                                    yang berbeda. Salah satunya adalah kebaya. <br><br>
                                    Tadinya, pakaian tradisional ini hanya diperuntukkan bagi bangsawan dan keluarga penting
                                    atau acara-acara khusus yang mewah dan berkelas. <br><br>

                                    Dengan perubahan zaman, kini banyak orang mengenakan kebaya dalam penggunaan
                                    sehari-hari.
                                    Baju kebaya awalnya berasal dari kebudayaan Jawa dan Bali dengan corak yang khas.
                                    <br><br>
                                    Tetapi dengan keunggulan beragam budaya dan daerah, kebaya mulai tersebar banyak di
                                    penjuru daerah.
                                    Setiap tempat memiliki pandangan yang berbeda tentang kebaya dan keunikannya. <br><br>
                                    Tetapi umumnya dibuat dari kain tipis, seperti sutra, katun tipis, atau nilon tembus
                                    pandang yang dihiasi dengan brokat dan sulaman.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Jawi Jangkep
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/jangkep.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Jawi Jangkep, yaitu pakaian yang biasa digunakan dalam adat pernikahan Jawa Tengah.

                                    Jawi Jangkep merupakan pakaian yang dipakai oleh pria dalam upacara resmi adat Jawa
                                    Tengah.

                                    Terdiri dari baju beskap bermotif bunga atau polos di bagian tengahnya. <br><br>

                                    Seiring dengan berkembangnya zaman, pakaian adat adalah salah satu bentuk dalam
                                    acara-acara tertentu untuk menunjukkan identitas Jawa Tengah. <br><br>

                                    Untuk bawahan, biasanya akan menggunakan kain jarik panjang yang dililit dari pinggang
                                    hingga mata kaki.

                                    Tak lupa juga menyelipkan keris di belakang sebagai makna bahwa manusia harus mampu
                                    menolak godaan energi negatif. <br><br>

                                    Pakaian adat Jawa Tengah ini dilengkapi dengan blangkon atau penutup kepala yang terbuat
                                    dari kain dan sandal selop atau sandal bertutup.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Basahan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/basahan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Jawa Tengah selanjutnya adalah Basahan.

                                    Biasa digunakan untuk acara pernikahan adat Jawa. Ini merupakan warisan dari salah satu
                                    kebudayaan Mataram.

                                    Berbeda dari pakaian adat lainnya, Basahan identik tidak mengenakan luaran dengan riasan
                                    Paes Ageng Kanigaran. <br><br>

                                    Pakaian tradisional ini juga dikenal dengan nama Dodot karena kedua mempelai biasanya
                                    mengenakan kain kemben panjang dan lebar yang biasa dinamakan kain Dodot. <br><br>

                                    Pada zaman dulu pakaian ini hanya boleh dikenakan di lingkungan kerabat Keraton.

                                    Namun saat ini, pakaian adat Jawa Tengah tersebut dapat dipakai umum untuk menunjukkan
                                    identitas Jawa Tengah.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Batik Jawa Tengah
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/batik.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat Jawa Tengah yang selanjutnya adalah batik Jawa Tengah.

                                    Di Jawa Tengah terdapat beberapa motif yang umumnya dikenakan oleh masyarakat. <br><br>

                                    Salah satu daerah di Jawa Tengah yang terkenal akan seni batiknya adalah Solo.

                                    Bahkan jika dilihat dari sejarah, Solo merupakan tempat perdagangan batik pertama kali
                                    di Indonesia pada tahun 1568. <br><br>

                                    Seperti yang telah disebutkan sebelumnya, batik Jawa Tengah memiliki berbagai motif
                                    beragam, antara lain Batik Truntum, Batik Sido Wirasat, Batik Cakar Ayam, Batik
                                    Parangkusumo, dan lainnya. <br><br>

                                    Selain beberapa motif batik Jawa Tengah yang disebutkan di atas, terdapat beberapa motif
                                    batik Jawa Tengah lainnya.

                                    Namun, perlu diingat bahwa setiap motif batik Jawa Tengah maupun daerah lainnya memiliki
                                    filosofi yang berbeda-beda tergantung motifnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Surjan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/surjan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Surjan adalah bentuk pakaian adat Jawa yang identik dengan motif lurik.

                                    Biasanya dikenakan bagi kaum pria sebagai acara adat atau kebudayaan tertentu.
                                    Keunikannya, penggunaan Surjan terbatas untuk wilayah Yogyakarta. <br><br>

                                    Motif dasar Surjan utamanya adalah lurik, meskipun dapat pula bahan bermotif
                                    kembang-kembang.

                                    Melansir KRJogja, Surjan lurik ini pertama kali dibuat oleh Sunan Kalijaga sebagai
                                    pakaian Takwa. <br><br>

                                    Surjan merupakan busana adat Jawa atau disebut busana Kejawen penuh dengan Piwulang
                                    Sinandhi.

                                    Ini merupakan suatu ajaran tersirat yang terkait dengan filosofi Jawa (Kejawen).
                                    <br><br>

                                    Pakaian adat Jawa ini bermakna garis-garis melambangkan kesederhanaan.

                                    Di dalam Keraton, ukuran garis-garis atau lurik ini melambangkan jabatan si pemakainya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Jarik
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/jarik.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Hampir setiap orang Indonesia memiliki kain batik ini, Jarik. Tak heran, jika Jarik
                                    dikenal sebagai salah satu ciri khas kain Jawa. <br><br>

                                    Sebagai kain serba guna yang cocok untuk hampir semua acara, Jarik telah menjadi barang
                                    penting dalam kehidupan sehari-hari masyarakat Indonesia, khususnya pakaian adat Jawa
                                    Tengah. <br><br>

                                    Dapat digunakan sebagai pakaian, gendongan bayi, alas tidur bayi, pakaian formal, dan
                                    keperluan lainnya.

                                    Keunikan busana tradisional ini, Jarik juga bisa menunjukkan status pemakainya dari
                                    motif polanya.

                                    Jarik bisa dipadukan dengan kebaya ataupun beskap bagi pemakainya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Stagen Kebaya
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/stagen.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Stagen adalah gulungan kain yang secara tradisional dikenakan oleh pria dan wanita Jawa.

                                    Dipakai pada acara penting ataupun upacara adat pernikahan Jawa. <br><br>

                                    Saat batik dililitkan di pinggang, mengenakan stagen akan membantu menonjolkan bentuk
                                    tubuh wanita dan menjaga batik tetap di tempatnya saat pemakainya bergerak. <br><br>

                                    Motif dan warnanya tentu beragam, Moms bisa memilih sesuai dengan warna kebaya yang
                                    dikenakan.
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

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
                    <h2 align="center">Pakaian Adat Aceh</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Linto Baro
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/linto.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian Linto Baro yang digunakan oleh pria terdiri dari beberapa elemen, yakni baju,
                                    celana, senjata tradisional, penutup kepala, dan hiasan-hiasan lain. Pakaian ini
                                    digunakan oleh para pria Aceh dalam acara pernikahan, Meugang, Peusijuk, Tung Dara Baro
                                    (Ngunduh Mantu), acara adat, dan peringatan hari-hari besar.
                                <ul style="padding-left: 1cm">
                                    <li>Baju Meukeusah</li>
                                    <p style="color: black;  margin-top: 6px; text-align: justify">Baju
                                        ini berbentuk seperti beskap atau blazer digunakan sebagai atasan laki-laki
                                        Aceh. Pakaian ini sering digunakan oleh laki-laki Aceh sejak jaman kerajaan Samudra
                                        Pasai dan Perlak. Pada umumnya, baju ini terbuat dari kain tenun berbahan sutra
                                        maupun kapas yang berwarna hitam. Bagi orang Aceh, warna hitam melambangkan
                                        kebesaran, oleh karena hal tersebut, pakaian ini melambangkan kebesaran seorang
                                        laki-laki Aceh. <br><br>
                                        Kita akan menemukan sulaman-sulaman benang berwarna emas pada bagian leher sampai
                                        dada dan ujung lengan. Sulaman tersebut bermotif bunga-bungaan dan motif sulur daun.
                                        Contohnya seumanga (kenanga), bungong glima (delima), seulupok (temtai), keupula
                                        (kembang tanjung), kundo, pucok reubong (tumpal), dan lain-lain. Jarang sekali dapat
                                        Anda temukan sulaman bermotif hewan. <br><br>
                                        Makna dari motif sulaman tersebut beragam dan tidak semuanya dapat diungkapkan.
                                        Misalnya saja motif pucok reubong (tumpal) memiliki makna kesuburan dan kebersamaan.
                                        Bahwa orang yang memakai baju bermotif tersebut diharapkan diberi kesuburan oleh
                                        Tuhan Yang Maha Kuasa dalam hal rezeki dan anak-anak sebagai penerus keturunan. <br>
                                        <br>
                                        Kerah yang terdapat pada baju Meukeusah menyerupai kerah Cheongsam. Meskipun pakaian
                                        adat Aceh kental dengan budaya Islam dan Melayu, namun pakaian ini juga tidak lepas
                                        dari pengaruh budaya China yang masuk ke Aceh. Kerah tersebut dimasukkan oleh para
                                        perancang baju adat Aceh karena terinspirasi oleh kerah yang dimiliki orang-orang
                                        China yang dulunya banyak melewati Aceh sebagai saudagar dari negeri tirai bambu.
                                    </p>
                                    <li>Celana sileuweu</li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">Celana
                                        Sileuweu merupakan setelan bawahan baju Meukeusah pada set Linto Baro.
                                        Sebagaimana atasannya, celana ini juga berwarna hitam namun berbahan katun.
                                        Bentuknya melebar ke bawah dan terdapat sulaman emas di bagian tersebut. Celana ini
                                        juga biasa disebut Celana Cekak Musang.
                                    </p>
                                    <li>Kain sarung </li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">
                                        Setelah mengenakan celana, para laki-laki Aceh mengenakan sarung dari kain songket
                                        agar semakin tampak kewibawaan pemakainya. Sarung ini dikenakan dengan cara
                                        melilitkan di pinggang dan panjangnya hingga di atas lutut, mungkin sekitar 10 cm di
                                        atasnya. Kain sarung ini juga sering disebut dengan nama lain, yakni Ija Kroeng, Ija
                                        Lamugap, dan Ija Sangket.
                                    </p>
                                    <li>Meukeutop</li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">
                                        Kuatnya pengaruh Islam dalam budaya Aceh sampai pada pakaian adat Aceh dan salah
                                        satunya penutup kepala yang bernama Meukeutop. Jika dilihat dengan seksama,
                                        Meukeutop dengan penutup kepala yang digunakan oleh sultan-sultan yang ada di Turki.
                                        Meukeutop dibuat dari kain tenun yang disulam. Sulaman ini berwarna hijau, kuning,
                                        hitam, dan merah. Hijau melambangkan kedamaian yang dibawa agama Islam. Kuning
                                        melambangkan kesultanan. Hitam berarti ketegasan dan kebesaran. Dan merah menyatakan
                                        keberanian dan kepahlawanan. Jadi laki-laki yang memakai Meukeutop ini adalah
                                        laki-laki Aceh yang memegang teguh ajaran Islam dengan damai serta memiliki
                                        ketegasan dan bersikap seperti seorang pahlawan sebagaimana seorang raja. <br><br>
                                        Pada bagian atas, Meukeutop dihiasi dengan Tampoek yang terbuat dari emas atau perak
                                        sepuh emas. Terkadang ada permata-permata kecil yang diselipkan diantara hiasa emas
                                        atau perak tersebut. Bagian depan Meukeutop dibalut dengan kain tenun tradisional
                                        Aceh yang kemudian balutan kain tersebut disebut Ija Teungkulok. Kain tenun tersebut
                                        dihiasi dengan sulaman emas atau perak dengan salah satu ujung kainnya dibentuk
                                        mencuat ke atas.
                                    </p>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Daro Baro
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/daro1.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Daro Baro merupakan satu set pakaian adat Aceh yang digunakan oleh perempuan Aceh. Daro
                                    Baro terdiri dari baju kurung, celana, penutup kepala, berbagai macam perhiasan, dan
                                    bros. Sebagaimana pakaian adat khusus untuk perempuan daerah lainnya, terdapat banyak
                                    hiasan pada Daro Baro agar wanita yang mengenakannya terlihat semakin cantik dan
                                    mempesona. Jika Linto Baro didominasi oleh warna hitam, maka Daro Baro memiliki warna
                                    yang beragam mulai dari merah, ungu, kuning, dan hijau. Bagaimana sih pakaian adat Daro
                                    Baro ini? Yuk Grameds, kita bahas tuntas di bawah ini.
                                <ul style="padding-left: 1cm">
                                    <li>Baju Kurung</li>
                                    <p style="color: black;  margin-top: 6px; text-align: justify">Baju
                                        Atasan yang dikenakan oleh perempuan Aceh saat mengenakan pakaian adat Aceh berupa
                                        baju kurung. Bahan dasar baju kurung hampir sama dengan baju Meukeusah, yakni kain
                                        tenun berbahan sutra dengan sulaman-sulaman emas yang membentuk motif-motif yang
                                        indah. <br><br>
                                        Baju ini merupakan perpaduan antara bdaya Melayu, Islam, dan China. Kerah baju
                                        kurung hampir mirip dengan pakaian wanita dari China. Bentuk gaun yang panjang dan
                                        hingga pinggul, menutup tubuh, dan tidak memperlihatkan lekukan tubuh wanita
                                        merupakan penyesuaian terhadap budaya Melayu dan Islam. Yang demikian itu, agar
                                        aurat pemakainya tidak terlihat dari luar.

                                    </p>
                                    <li>Celana cekak musang atau sileuweu</li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">Celana
                                        Celana ini merupakan setelan bawahan dari baju kurung dan pada umumnya, celana yang
                                        digunakan oleh pria dan wanita Aceh sama baik bentuk maupun bahan. Lebar di bagian
                                        bawah. Namun warnanya beragam, bukan hitam seperti pria.
                                    </p>
                                    <li>Sarung</li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">
                                        Agar pinggul wanita tertutup dengan sempurna tanpa memperlihatkan bentuk tubuhnya,
                                        para wanita Aceh mengenakan sarung sebagai lapisan luar celana Cekak Musang. Sarung
                                        ini merupakan kain songket yang diikat dengan ikat pinggang berbahan perak atau emas
                                        dari pinggang hingga di bawah lutut. Ikat pinggang ini disebut Taloe Ki leng Patah
                                        Sikureueng.
                                    </p>
                                    <li>Patam Dhoe</li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">
                                        Pakaian adat Aceh menyesuaikan dengan nilai-nilai Islam, dengan demikian, seluruh
                                        desainnya didesain agar dapat menutup aurat wanita. Hal ini tidak terlepas dari
                                        penutup kepala yang disebut Patam Dhoe. Penutup kepala ini adalah perhiasan berupa
                                        mahkota yang unik yang didesain agar dapat menutup aurat di kepala. Sebelum
                                        menggunakan Patham Doi, pada umumnya wanita Aceh akan mengenakan jilbab terlebih
                                        dahulu. <br><br>
                                        Bagian tengah Patam Dhoe diberi kaligrafi yang bertuliskan lafadz Allah dan
                                        Muhammad. Lafadz tersebut dikelilingi oleh motif bunga dan bulatan-bulatan di
                                        sekitarnya. Masyarakat Aceh biasa menyebut kombinasi lafadz dan kaligrafi tersebut
                                        dengan Bungoh Kalimah. Mahkota ini juga digunakan sebagai tanda bahwa wanita yang
                                        mengenakannya telah menikah dan suaminya memiliki tanggung jawab atas dirinya.
                                    </p>
                                    <li>Keureusang</li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">
                                        Keureusang atau bros ini dipakai dengan cara disematkan pada gaun. Keureusang ini
                                        termasuk barang mewah karena berbahan emas yang secara keseluruhan berbentuk hati
                                        dan dihiasi dengan tahta intan dan berlian (konon, sampai 102 butir intan dan
                                        berlian). Keureusang berdimensi panjang 10 cm dan lebar 7,5 cm.
                                    </p>
                                    <li>Piring Dhoe</li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">
                                        Bentuk Piring Dhoe seperti mahkota dan memiliki tiga bagian yang masing-masing
                                        bagian dihubungkan dengan engsel.
                                    </p>
                                    <li>Untai Peniti</li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">
                                        Untai peniti digunakan untuk menyematkan pakaian adat Aceh untuk kaum wanita.
                                        Bahannya dari emas dan motifnya seperti motif kain tenun yang berbentuk kuncup bunga
                                        dan berpola pakis. Jika perhatikan dengan sesama, di tengah Peuniti ini terdapat
                                        motif lain berupa titik-titik kecil seperti telur ikan.
                                    </p>
                                    <li>Subang Aceh</li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">
                                        Subang sebagai anting-anting ini tentunya terbuat dari emas dan hiasan berisikan
                                        permata. Subang ini memiliki diameter sekitar 6 cm. Bentuknya bagaikan bunga
                                        matahari yang berkelopak runcing.
                                    </p>
                                    <li>Culok Ok</li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">
                                        Culok Ok merupakan perhiasan wanita Aceh berupa tusuk konde yang berfungsi untuk
                                        menguatkan sanggul. Untuk memakainya, Grameds dapat menusukkannya ke rambut atau
                                        dimasukkan melalui samping sanggul. Ada empat jenis Culok Ok, yakni bungong keupula
                                        (bunga tanjung), ulat sangkadu (melingkar seperti ulat), bintang pecah (seperti
                                        bintang pecah), dan bungong sunteng (kelopak bunga).
                                    </p>
                                    <li>Simplah</li>
                                    <p style="color: black; margin-top: 6px; text-align: justify">
                                        Simplah merupakan perhiasan berbahan emas atau perak sepuh emas yang dikenakan oleh
                                        wanita di bagian dada. Simplah terdiri dari 24 buah lempengan berbentuk segi enam
                                        dan dua buah lempengan berbentuk segi delapan. Masing-masing lempengan disertai
                                        dengan hiasan bermotif daun atau bunga dan terdapat permata berwarna merah pada
                                        bagian tengahnya. Agar lempengan-lempengan tersebut dapat terhubung dengan kuat
                                        antara satu dengan lainnya, diperlukan untaian rantai yang berwarna keemasan.
                                    </p>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Aceh Gayo
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/gayo.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Pakaian adat jaman dahulu telah dikenalkan oleh Suku Aceh Gayoyang sampai sekarang masih
                                    eksis keberadaannya. Sama dengan pakaian adat Aceh modern, pakaian adat Aceh Gayo
                                    terbagi menjadi dua macam, yakni Aman Mayok dan Ineun Mayok. <br><br>
                                    Pakaian Aman Mayok digunakan oleh para laki-laki Aceh Gayo. Pakaian untuk pengantin
                                    laki-laki ini didesain dengan memiliki aksen Bulang Pengkah, yang fungsinya sebagai
                                    tempat menancapnya sunting. Sementara untuk perlengkapannya, setelan baju ini terdiri
                                    dari baju putih, celana, ponok (sejenis keris), sarung yang dililitkan di pinggang,
                                    tanggang, genit rante, beberapa gelang di lengan, dan cincin. <br><br>
                                    Sedangkan Ineun Mayok digunakan oleh para perempuan Aceh Gayo. Pakaian yang dikenakan
                                    oleh mempelai wanita ini didesain secara Islami karena kuatnya pengaruh Islam dalam
                                    budaya Aceh. Adapun setelah baju Ineun Mayok ini terdiri dari baju, celana, sarung
                                    pawak, dan ikat pinggang ketawak. Agar perempuan yang mengenakannya terlihat semakin
                                    menawan, maka perlu diberikan perhiasan-perhiasan pada tubuhnya. <br><br>
                                    Untuk menghiasi kepala, wanita Aceh dihiasi dengan mahkota sunting, sanggul sempol
                                    gampang, cemara, anting-anting subang gener, subang ilang, lelayang, serta ilung-ilung.
                                    Di bagian leher, bergantung kalung tanggal. Agar bagian tangan mulai dari lengan hingga
                                    jemari semakin cantic dan lentik, dipasangkan gelang (seperti gelang berapit, gelang
                                    puntu, gelang giok, gelang beramur, gelang bulet), topong, serta cincin (seperti sensim
                                    patah, cincin sensim belam keramil, sensim belilit, sensim keselan, sensim genta, serta
                                    sensim kul). <br><br>
                                    Rante genit rante digunakan di pinggang di luar sarung dan digunakan di pergelangan
                                    kaki. Dan terakhir, upu ulen-ulen selendang disilangkan dari bahu ke pinggang yang
                                    ukurannya disesuaikan dengan lebar unur busana.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('aceh') }}" class="btn-back">
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

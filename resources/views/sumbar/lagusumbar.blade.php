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
                    <h1 align="center">Lagu Daerah Sumatera Barat</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Bareh Solok
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Bareh Solok, tanak didandang<br><br>
                                    Dipagatok ulam pariok<br><br>
                                    Bunyi kulek cando badendang<br><br>
                                    Dek ditingkah ondeh mak, si sambalado<br><br>
                                    Urang Sumpu jalan barampek<br><br>
                                    Di Singkarak singgah dahulu<br><br>
                                    Bareh baru makan jo pangek<br><br>
                                    Indak tampak ondeh mak, mintuo lalu<br><br>
                                    Bareh Solok, bareh tanamo<br><br>
                                    Bareh Solok, lamak rasonyo
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu Bareh Solok juga bisa disebut dengan nama beras Solok. Beras tersebut merupakan
                                    suatu komoditas besar yang berasal dari kota Solok, Sumatera Barat. Meski berasnya sama
                                    dengan beras pada umumnya, tetapi dari segi cita rasa yang ditawarkan begitu berbeda
                                    dari jenis lainnya.<br><br>

                                    Bahkan, beras solok sendiri sudah begitu terkenal, baik di dalam Sumatera Barat maupun
                                    daerah luar. Karena memiliki cita rasa yang begitu khas, kemudian dibuatlah sebuah lagu
                                    yang menceritakan beras Solok dengan nama Bareh Solok.<br><br>

                                    Lagu Bareh Solok sendiri diciptakan oleh Nuskan Sjarif. Lalu lagu ini juga dipopulerkan
                                    oleh penyanyi Elly Kasim.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Ka Parak Tingga
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Ka parak tingga jalan babelok<br>
                                    Tampek bajalan ‘rang Koto Gadang<br>
                                    Nan pai ati tak elok nan tingga dara tak sanang<br>
                                    Nan pai ati tak elok nan tingga dara tak sanang<br><br>

                                    Marilah kito mancari paku<br>
                                    Di parak tingga banyak batangnyo<br>
                                    Dikana maso daulu badarai si ala mato<br>
                                    Dikana maso daulu badarai si aia mato
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Berikutnya ada lagu dengan judul Ka Parak Tingga yang merupakan salah satu lagu daerah
                                    Sumatera Barat. Lagu Ka Parak Tingga sendiri memiliki tema tentang percintaan. Lirik
                                    lagu ini terbilang cukup unik karena memiliki bentuk pantun.<br><br>

                                    Cerita yang tersirat dari lagu Ka Parak Tingga sendiri adalah tentang kesedihan
                                    seseorang yang ditinggalkan oleh sang kekasih. Secara garis besar arti “dipisahkan” di
                                    sini adalah tentang ditinggal pergi untuk merantau.<br><br>

                                    Sebab, Minang memiliki budaya rantau yang begitu kuat. Bahkan, bisa dibilang jika budaya
                                    merantau masyarakat Minang juga sudah terkenal sampai ke luar daerah.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Kambanglah Bungo
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Kambanglah bungo parauitan si mambang riang<br><br>
                                    Ditarikan di desa dusun Ranah Minang<br><br>
                                    Bungo kambang sumarakanjuang<br><br>
                                    Pusaka Minang Ranah Pagaruyuang<br><br>
                                    Dipasuntiang siang malam tabayang-bayang rumah nan gadang<br><br>
                                    Kambanglah bungo parauitan si mambang riang<br><br>
                                    Ditarikan di desa dusun Ranah Minang
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Kambanglah Bungo menjadi salah satu lagu daerah Sumatera Barat yang menceritakan tentang
                                    kisah romansa. Selain adanya kisah percintaan, ternyata juga ada latar budaya yang
                                    begitu mengakar dan tumbuh di dalam lagu daerah tersebut.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Kampuang Nan Jauah Di Mato
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Kampuang nan jauh di mato<br>
                                    Gunuang Sansai Baku Liliang<br>
                                    Takana Jo Kawan, Kawan Nan Lamo<br>
                                    Sangkek Basu Liang Suliang<br><br>

                                    Panduduknya nan elok nan<br>
                                    Suko Bagotong Royong<br>
                                    Kok susah samo samo diraso<br>
                                    Den Takana Jo Kampuang<br><br>

                                    Takana Jo Kampuang<br>
                                    Induk Ayah Adik Sadonyo<br>
                                    Raso Mangimbau Ngimbau Den Pulang<br>
                                    Den Takana Jo Kampuang
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Bicara tentang lagu daerah Sumatera Barat rasanya tidak bisa lepas dari lagu Kampuang
                                    Nan Jauah di Mato. Ya lagu Kampuang Nan Jauah di Mato memang begitu terkenal, baik di
                                    dalam daerah Sumatera Barat maupun di luar daerah tersebut. Bahkan, dari segi lirik
                                    hingga nuansa musiknya pun banyak orang tahu. Hal ini menunjukkan tingkat kepopuleran
                                    dari lagu Kampuang Nan Jauah di Mato.<br>

                                    Jika diartikan dalam bahasa Indonesia, Kampuang Nan Jauah di Mato memiliki arti Kampung
                                    yang jauh di mata. Lagu Kampuang Nan Jauah di Mato diciptakan oleh Mahyuddin. Sampai
                                    saat ini, lagu tersebut masih terus diajarkan kepada setiap generasi baru guna
                                    melestarikannya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Mak Inang
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Kami ini tak pandai menari<br>
                                    Sebarang tari kami tarikan<br>
                                    Kami ini tak pandai menari<br>
                                    Sebarang tari kami tarikan<br>
                                    Kami ini tak ahli menyanyi<br>
                                    Sebarang nyanyi kamu nyanyikan<br>
                                    Kami ini tak ahli menyanyi<br>
                                    Sebarang nyanyi kami nyanyikan<br><br>

                                    Singkarak kotanya tinggi<br>
                                    Asam pauh dari seberang<br>
                                    Singkarak kotanya tinggi<br>
                                    Asam pauh dari seberang<br>
                                    Awan b’raraklah ditangisi<br>
                                    Badan jauh di rantau orang<br>
                                    Awan b’raraklah ditangisi<br>
                                    Badan jauh di rantau orang<br><br>

                                    Asam pauh dari seberang<br>
                                    Tumbuhnya dekat tepinya tebat<br>
                                    Asam pauh dari seberang<br>
                                    Tumbuhnya dekat tepinya tebat<br>
                                    Badan jauh di rantau orang<br>
                                    Sakit siapa akan mengubat<br>
                                    Badan jauh di rantau orang<br>
                                    Sakit siapa akan mengubat
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Mak Inang merupakan salah satu tarian tradisonal Melayu. Tarian ini memang sudah ada dan
                                    begitu terkenal sejak zaman kesultanan Malaka.<br>

                                    Sedangkan untuk lagu Mak Inang sendiri biasanya digunakan untuk menjadi salah satu
                                    backsound tari yang diiringi dengan alunan musik yang begitu khas sekali. Selain itu,
                                    banyak yang percaya jika musik tersebut ternyata diciptakan atas perintah dari Sultann
                                    Mahmud Shah.<br>

                                    Sultan Mahmud Shah merupakan Sulatn dari Malaka. Tarian ini juga kerap disebut dengan
                                    istilah Si Kembang China. Hal ini karena di dalam tarian tersebut terdapat unsur
                                    kebudayaan Tionghoa.
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Ayam den Lapeh
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Luruihlah jalan Payakumbuah<br>
                                    Lurus jalan menuju Payakumbuh<br>
                                    Babelok jalan Kayu Jati<br>
                                    Berbelok jalan Kayu Jati<br>
                                    Dima hati indak kan rusuah<br>
                                    Bagaimana hari tidak rusuh<br>
                                    Ayam den lapeh, ohoi … ayam den lapeh<br>
                                    Ayamku Lepas, ohoi … Ayamku Lepas<br><br>

                                    Mandaki jalan Pandai sikek<br>
                                    Menanjak jalan ke Pandai Sikek<br>
                                    Manurun jalan ka Biaro<br>
                                    Menurun jalan ke Biara<br>
                                    Di ma hati indak maupek<br>
                                    Bagaimana hati tidaklah kesal<br>
                                    Awak takicuah, ohoi … ayam den lapeh<br>
                                    Aku terkecoh, ohoi … Ayamku Lepas<br><br>

                                    Sikua capang sikua capeh<br>
                                    Seekor cacat karena berlebih, seekor cacat karena kurang<br>
                                    Saikua tabang sikua lapeh<br>
                                    Seekor terbang seekor lepas<br>
                                    Tabanglah juo nan karimbo<br>
                                    Terbang jauh ke dalam hutan<br>
                                    Ai lah malang juo<br>
                                    Oh malang nya<br><br>

                                    Pagaruyuang jo Batusangka<br>
                                    Pagaruyung dan Batusangkar<br>
                                    Tampek mandaki dek urang Baso<br>
                                    Tempat mendaki / berjalan orang Baso<br>
                                    Duduak tamanuang tiok sabanta<br>
                                    Duduk bermenung berkali-kali<br>
                                    Oi takana juo<br>
                                    Oh teringat selalu<br><br>

                                    Den sangko lamang nasi tuai<br>
                                    Kusangka lemang nasi tuai<br>
                                    Kironyo tatumpah kuah gulai<br>
                                    Ternyata tertumpah kuah gulau<br>
                                    Awak ka pasa alah usai<br>
                                    Aku ke pasar tapi sudah usai / tutup<br>
                                    Oi lah malang denai<br>
                                    Oh malangnya nasibku<br>
                                    O hoi … ayam den lapeh<br>
                                    O hoi … Ayamku Lepas<br>
                                    O hoi … ayam den lapeh<br>
                                    O hoi … Ayamku Lepas
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu Ayam Den Lapeh dipopulerkan oleh Elly Kasim. Lagu ini tak hanya begitu populer di
                                    daerah Sumatera Barat saja melainkan juga begitu populer hingga ke seluruh daerah
                                    Nusantara bahkan ke mancanegara sekalipun.<br><br>

                                    Jika diterjemahkan ke bahasa Indonesia, Ayam Den Lapeh memiliki arti Ayamku Lepas. Perlu
                                    diketahui juga suka lagu ini memiliki arti yang begitu mendalam. Meski hanya seekor ayam
                                    lepas, tetapi kata Ayam di sini bukanlah seperti ayam liar atau ayam peliharaan seperti
                                    saat ini.<br><br>

                                    Zaman dahulu, Ayam merupakan hewan peliharaan yang begitu berharga sekaligus memiliki
                                    harga yang begitu tinggi. Karena hal tersebut menjadikan ayam hanya bisa dimiliki oleh
                                    mereka yang berstatus tertentu.<br><br>

                                    Lalu, jika dihubungkan dengan zaman sekarang, kata Ayam ini bisa diartikan sebagai
                                    sesuatu yang begitu berharga. Tentunya jika hilang akan menimbulkan kesedihan yang amat
                                    mendalam serta akan dicari terus sampai ke manapun.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Tak Ton Tong
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Tak tontoang galamai jaguang<br>
                                    Tagunda-gunda lah kacambuang basi<br>
                                    Yo dahulu lah balaki ajuang<br>
                                    Kini lah balaki lah tukang padati<br><br>

                                    Tak tontoang galamai jaguang<br>
                                    Tagunda-gunda lah kacambuang basi<br>
                                    Lah dek a lah duduak bamanuang<br>
                                    Diliek uncang lah indak barisi<br><br>

                                    Tak tontoang galamai jaguang<br>
                                    Tagunda-gunda lah kacambuang basi<br>
                                    Ondeh upiak lah usah bamanuang<br>
                                    Iko uda ka paubek hati<br><br>

                                    Tak tontoang galamai jaguang<br>
                                    Tagunda-gunda lah kacambuang basi<br>
                                    Yo dahulu lah balaki ajuang<br>
                                    Kini lah balaki lah tukang padati
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Tak Ton Tong juga merupakan salah satu lagu daerah asal Sumatera Barat. Lagu ini juga
                                    pernah dipopulerkan oleh Oslan Husein dan juga pernah ditampilkan pada acara ulang tahun
                                    ke-50 ASEAN. Dengan adanya perkembangan dalam dunia seni, lagu Tak Ton Tong juga
                                    mendapatkan versi terbarunya dan tentunya bisa lebih semakin populer di kalangan
                                    generasi baru.<br><br>

                                    Pada versi aslinya, lagu Tak Tong Tong memiliki alur cerita tentang seseorang yang
                                    dulunya memiliki suami dengan pangkat dan juga kekuasaan yang tinggi. Akan tetapi,
                                    karena suatu sebab, akhirnya sekarang suami tersebut hanya menjadi seorang dengan
                                    pekerjaan tukang pedati atau tukang becak.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Malam Bainai
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Malam malam baiko yo mamak<br>
                                    Malam malam bainai yo sayang<br>
                                    Anak daro yo mamak<br>
                                    Jo mara pulai<br><br>

                                    Pasumandannyo banyak yo mamak<br>
                                    Manatiang-natiang piring yo sayang<br>
                                    Sambanyo lamak yo mamak<br>
                                    Patai jo jariang<br><br>

                                    Malam malam kaduo yo mamak<br>
                                    Malam malam bajapuik yo sayang<br>
                                    Anak daro yo mamak<br>
                                    Jo mara pulai<br><br>

                                    Malam malam katigo yo mamak<br>
                                    Malam malam katangah yo sayang<br>
                                    Anak daro yo mamak<br>
                                    Jo mara pulai<br><br>

                                    Cincin-cincin dicabuik yo mamak<br>
                                    Dijari-jari manih yo sayang<br>
                                    Marapulai galak yo mamak<br>
                                    Anak daro managih
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu dari daerah Sumatera Barat yang berikutnya adalah berjudul Malam Bainai. Maksud
                                    dari Malam Bainai ini merupakan suatu tradisi yang ada di dalam masyarakat Minangkabau.
                                    Dimana pengantin wanita akan menjalani masa Bainai pada malam hari sebelum hari resepsi
                                    pernikahan tiba.<br><br>

                                    Sedangkan untuk Bainai sendiri adalah suatu kegiatan mengecat kuku dengan bunga berwarna
                                    merah yang sebelumnya ditumbuh terlebih dahulu lalu ditaburkan ke bagian kuku dan
                                    dibiarkan hingga hari esok pagi tiba. Lagu ini mengambil tema yang begitu ceria,
                                    membahagiakan, dan juga rasa senang karena pada dasarnya lagu ini tentang pernikahan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Dindin Badindin
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Balari-lari.. Bukannyo kini carai..<br>
                                    Pandang tajauah di muaro..<br>
                                    Kami manari basamo-samo..<br>
                                    Paubek hati sanak sadonyo..<br><br>

                                    Ikolah indang Sungai Garinggiang<br>
                                    Kami tarikan basamo-samo<br>
                                    Sambuiklah salam oi sambak mairiang<br>
                                    Pado nan sanak ai nan tibo<br><br>

                                    Bamulo indang kami tarikan<br>
                                    Salam manjawek ondeh ganti-baganti<br>
                                    Lagu lah indang kami nyanyikan<br>
                                    Supayo sanak ondeh basuko hati<br><br>

                                    Dindin badindin oi badindin oi<br>
                                    Dindin badindin oi badindin<br><br>

                                    Di batu pasang aua malintang<br>
                                    Di sinan asa nagari kami<br>
                                    Kami narikan oi tarinyo indang<br>
                                    Salahnyo jan da tolong paeloki<br><br>

                                    Kabekkan jawi di tanah patah<br>
                                    Baoklah bulan ondeh di hari sajno<br>
                                    Kami batari batari indang<br>
                                    Maubek hati ondeh sanak basamo<br><br>

                                    Dindin badindin oi badindin oi<br>
                                    Dindin badindin oi badindin<br>
                                    Dindin badindin oi badindin oi<br>
                                    Dindin badindin oi badindin<br><br>

                                    Badan lah tinggi si buruang tabang<br>
                                    Panek malayok ka hinggok juo<br>
                                    Banyak lagaknyo oi budayo datang<br>
                                    Budayo kito kambangkan juo<br><br>

                                    Dari lah Solok nan ka Salayo<br>
                                    Singgahlah dulu ondeh pagi ka pakan<br>
                                    Ambiak nan elok jadi pusako<br>
                                    Sado nan buruak ondeh kito pelokkan<br><br>

                                    Dindin badindin oi badindin oi<br>
                                    Dindin badindin oi badindin (4x)
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Berikutnya ada Dindin Badindin yang juga merupakan salah satu lagu daerah Sumatera
                                    Barat. Lagu ini biasanya digunakan untuk mengiringi tari Indang. Dimana tari Indang ini
                                    juga merupakan salah satu tarian asal Sumatera Barat.<br><br>

                                    Awalnya tari dan lagu tersebut digunakan sebagai sarana untuk dakwah agama Islam serta
                                    dimainkan setelah para pemuda dan pemudi kembali dari surau. Akan tetapi, untuk saat ini
                                    karena terjadi beberapa perubahan, makna dari lagu dan tarian ini berubah fungsi menjadi
                                    suatu hiburan masyarakat.<br><br>

                                    Saat ini, lagu maupun tarian akan dimainkan pada beberapa acara formal seperti
                                    perpisahan sekolah, hari besar Islam serta penyambutan tamu terhormat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Anak Daro
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Anak musang di ateh pulai<br>
                                    Anak tampuo di dalam baniah<br>
                                    Kain lah usang tidak bapakai oi<br>
                                    Awak lah tuo tidak babuni<br><br>

                                    Pak Dukun batunang pulo, batunang jo anak daro<br>
                                    Pak Dukun batunang pulo, batunang jo anak daro<br>
                                    Anak daro …<br><br>

                                    Batang sicerek tumbuah di pasa<br>
                                    Puluik-puluik di Rimbo Panti<br>
                                    Saketek tantu lai manyasa<br>
                                    Kok tak di muluik di dalam hati<br><br>

                                    Pak Dukun batunang pulo, batunang jo anak daro<br>
                                    Pak Dukun batunang pulo, batunang jo anak daro<br>
                                    Anak daro …<br><br>

                                    Baimpun todak di kubangan<br>
                                    Buruang barabah lari ka parahu<br>
                                    Sungguahpun tidak bakatokan<br>
                                    Allah jo Nabi lah nan ka tahu<br><br>

                                    Pak Dukun batunang pulo, batunang jo anak daro<br>
                                    Pak Dukun batunang pulo, batunang jo anak daro<br>
                                    Anak daro …<br><br>

                                    Sungai Tanang ikannyo jinak<br>
                                    Manjumbuang kain ka subarang<br>
                                    Awak sanang badan takucak<br>
                                    Baruntuang balain jo nasib urang<br><br>

                                    Pak Dukun batunang pulo, batunang jo anak daro<br>
                                    Pak Dukun batunang pulo, batunang jo anak daro<br><br>

                                    Anak daro …<br>
                                    Anak daro …<br>
                                    Anak daro …
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Dalam bahasa Minang, Anak Daro memiliki arti sebagai pengantin atau mempelai wanita,
                                    sehingga ketika pernikahan dilangsungkan di rumah Anak Daro, maka berarti pernikahan
                                    dilaksanakan di rumah mempelai wanita. <br><br>

                                    Lagu Anak Daro biasanya digunakan untuk menyambut kedatangan mempelai pria. Dalam lagu
                                    ini memang tidak tersirat pesan tertentu. Namun, lagu Anak Daro menceritakan rasa senang
                                    dan bahagia bagi pengantin, keluarga dan juga kerabat yang hadir dalam acara tersebut.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('sumbar') }}" class="btn-back">
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

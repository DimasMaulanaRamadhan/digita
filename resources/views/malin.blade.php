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
                    <h2 align="center">Malin Kundang</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <img class="img-fluid rounded w-100" src="img/malin1.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Cerita Rakyat Malin Kundang berasal dari Sumatera Barat, menceritakan tentang Malin
                                    Kundang, seorang pemuda yang menjadi kaya tetapi kemudian sombong dan durhaka kepada
                                    ibunya. Akibatnya, ia dikutuk menjadi batu besar di pantai, mengingatkan manusia akan
                                    pentingnya menghormati asal-usul dan tidak menjadi sombong saat mencapai kesuksesan.
                                    Cerita ini memiliki pesan moral yang kuat dan telah menjadi bagian penting dari warisan
                                    budaya Indonesia.
                                </p>
                                <h3>
                                    Awal Kisah Malin Kundang
                                </h3>
                                <img class="img-fluid rounded w-100" src="img/malin2.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Zaman dahulu kala ada sebuah cerita di sebuah perkampungan nelayan Pantai Air Manis di
                                    Padang, Sumatera Barat. Ada seorang janda bernama Mande Rubayah yang hidup bersama anak
                                    laki-lakinya yang bernama Malin Kundang.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Mande Rubayah sangat menyayangi dan memanjakan Malin Kundang. Malin kemudian tumbuh
                                    menjadi seorang anak yang rajin dan penurut.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Ketika Mande Rubayah sudah tua, ia hanya mampu bekerja sebagai penjual kue untuk mencupi
                                    kebutuhan dirinya dan anak tunggalnya. Suatu hari, Malin jatuh sakit keras, hingga
                                    nyawanya hampir melayang namun akhirnya ia dapat diseiamatkan-berkat usaha keras ibunya.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Setelah sembuh dari sakitnya ia semakin disayang. Mereka adalah ibu dan anak yang saling
                                    menyayangi.
                                </p>
                                <h3>
                                    Malin Kundang Beranjak Dewasa
                                </h3>
                                <img class="img-fluid rounded w-100" src="img/malin3.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Saat Malin sudah dewasa ia meminta izin kepada ibunya untuk pergi merantau ke kota,
                                    karena saat itu sedang ada kapal besar merapat di Pantai Air Manis.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Jangan Malin, ibu takut terjadi sesuatu denganmu di tanah rantau sana. Menetaplah saja
                                    di sini, temani ibu,” ucap ibunya yang sedih setelah mendengar keinginan Malin yang
                                    ingin merantau.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Ibu tenanglah, tidak akan terjadi apa-apa denganku,” ujar Malin sambil menggenggam
                                    tangan ibunya.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Ini kesempatan Bu, kerena belum tentu setahun sekali ada kapal besar merapat di pantai
                                    ini. Aku ingin mengubah nasib kita Bu, izinkanlah” pinta Malin memohon.
                                </p>
                                <h3>
                                    Keberangkatan Malin Kundang Pergi Merantau
                                </h3>
                                <img class="img-fluid rounded w-100" src="img/malin4.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Baiklah, ibu izinkan. Cepatlah kembali, ibu akan selalu menunggumu Nak,” kata ibunya
                                    sambil menangis.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Meski dengan berat hati akhirnya Mande Rubayah mengizinkan Malin untuk pergi. Kemudian
                                    Malin dibekali dengan nasi berbungkus daun pisang sebanyak tujuh bungkus,
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Untuk bekalmu di perjalanan,” katanya sambil menyerahkannya pada Malin. Setelah itu
                                    Malin Kundang berangkat ke tanah rantau meninggalkan ibunya sendirian.
                                </p>
                                <h3>
                                    Ibu yang selalu mendoakan agar Malin selamat dan cepat kembali
                                </h3>
                                <img class="img-fluid rounded w-100" src="img/malin5.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Hari demi hari terus berlalu, hari yang terasa lambat bagi Mande Rubayah. Setiap pagi
                                    dan sore Mande Rubayah memandang ke laut.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Sudah sampai manakah kamu berlayar Nak?” tanyanya dalam hati sambil terus memandang
                                    laut.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    la selalu mendoakan agar anaknya selalu selamat dan cepat kembali. Beberapa waktu
                                    kemudian ketika ada kapal yang datang merapat ia selalu menanyakan kabar tentang
                                    anaknya.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Apakah kalian melihat anakku, Malin? Apakah dia baik-baik saja? Kapan ia pulang?”
                                    tanyanya.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Namun setiap ia bertanya pada awak kapal atau nahkoda tidak pernah mendapatkan jawaban.
                                    Malin tak pernah menitipkan barang atau pesan apapun kepada ibunya
                                </p>
                                <h3>
                                    Malin telah menikah dengan putri bangsawan
                                </h3>
                                <img class="img-fluid rounded w-100" src="img/malin6.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Bertahun-tahun Mande Rubayah terus bertanya namun tak pernah ada jawaban hingga tubuhnya
                                    semakin tua, dan kini jalannya mulai terbungkuk-bungkuk. Pada suatu hari Mande Rubayah
                                    mendapat kabar dari nakhoda yang dahulu membawa Malin, nahkoda itu memberi kabar bahagia
                                    pada Mande Rubayah.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Mande, tahukah kau, anakmu kini telah menikah dengan gadis cantik, putri seorang
                                    bangsawan yang sangat kaya raya,” ucapnya saat itu.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Malin cepatlah pulang kemari Nak, ibu sudah tua Malin, kapan kau pulang…” rintihnya
                                    pilu setiap malam.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Ia yakin anaknya pasti datang. Benar saja tak berapa lama kemudian di suatu hari yang
                                    cerah dari kejauhan tampak sebuah kapal yang megah nan indah berlayar menuju pantai.
                                </p>
                                <h3>
                                    Malin Kundang tiba di Kampung Halaman
                                </h3>
                                <img class="img-fluid rounded w-100" src="img/malin7.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Penduduk desa mulai berkumpul, mereka mengira kapal itu milik seorang sultan atau
                                    seorang pangeran. Mereka menyambutnya dengan gembira. Mande Rubayah amat gembira
                                    mendengar hal itu, ia selalu berdoa agar anaknya selamat dan segera kembali
                                    menjenguknya, sinar keceriaan mulai mengampirinya kembali.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Namun hingga berbulan-bulan semenjak ia menerima kabar Malin dari nahkoda itu, Malin tak
                                    kunjung kembali untuk menengoknya.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Ketika kapal itu mulai merapat, terlihat sepasang anak muda berdiri di anjungan. Pakaian
                                    mereka berkilauan terkena sinar matahari. Wajah mereka cerah dihiasi senyum karena
                                    bahagia disambut dengan meriah.
                                </p>
                                <h3>
                                    Pertemuan Malin dengan Ibunya
                                </h3>
                                <img class="img-fluid rounded w-100" src="img/malin8.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Mande Rubayah juga ikut berdesakan mendekati kapal. Jantungnya berdebar keras saat
                                    melihat lelaki muda yang berada di kapal itu, ia sangat yakin sekali bahwa lelaki muda
                                    itu adalah anaknya, Malin Kundang.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Belum sempat para sesepuh kampung menyambut, Ibu Malin terlebih dahulu menghampiri
                                    Malin. la langsung memeluknya erat Malin karena takut kehilangan anaknya lagi.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Malin, anakku. Kau benar anakku kan?” katanya menahan isak tangis karena gembira,
                                    “Mengapa begitu lamanya kau tidak memberi kabar?”
                                </p>
                                <img class="img-fluid rounded w-100" src="img/malin9.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Malin terkejut karena dipeluk perempuan tua renta yang berpakaian compang-camping itu.
                                    Ia tak percaya bahwa perempuan itu adalah ibunya. Sebelum dia sempat berpikir berbicara,
                                    istrinya yang cantik itu meludah dan berkata,
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Perempuan jelek inikah ibumu? Mengapa dahulu kau bohong padaku! Bukankah dulu kau
                                    katakan bahwa ibumu adalah seorang bangsawan yang sederajat denganku?!” ucapnya sinis
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Mendengar kata-kata pedas istrinya, Malin Kundang langsung mendorong ibunya hingga
                                    terguling ke pasir, “Perempuan gila! Aku bukan anakmu!” ucapnya kasar.
                                </p>
                                <img class="img-fluid rounded w-100" src="img/malin10.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Mande Rubayah tidak percaya akan perilaku anaknya, ia jatuh terduduk sambil berkata,
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Malin, Malin, anakku. Aku ini ibumu, Nak! Mengapa kau jadi seperti ini Nak?!”
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Malin Kundang tidak memperdulikan perkataan ibunya. Dia tidak akan mengakui ibunya. la
                                    malu kepada istrinya. Melihat perempuan itu bersujud hendak memeluk kakinya, Malin
                                    menendangnya sambil berkata,
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Hai, perempuan gila! lbuku tidak seperti engkau! Melarat dan kotor!”
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Perempuan tua itu terkapar di pasir, menangis, dan sakit hati. Orang-orang yang
                                    meilhatnya ikut terpana dan kemudian pulang ke rumah masing-masing. Mande Rubayah
                                    pingsan dan terbaring sendiri. Ketika ia sadar, Pantai Air Manis sudah sepi.
                                </p>
                                <h3>
                                    Ibunya berdoa dengan hatinya yang pilu dan kemudian langit berubah menjadi gelap
                                </h3>
                                <img class="img-fluid rounded w-100" src="img/malin11.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Dilihatnya kapal Malin semakin menjauh. Ia tak menyangka Malin yang dulu disayangi tega
                                    berbuat demikian. Hatinya perih dan sakit, lalu tangannya diangkat ke langit. Ia
                                    kemudian berdoa dengan hatinya yang pilu,
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    “Ya, Tuhan, kalau memang dia bukan anakku, aku maafkan perbuatannya tadi. Tapi kalau
                                    memang dia benar anakku yang bernama Malin Kundang, aku mohon keadilanmu, Ya Tuhan!”
                                    ucapnya pilu sambil menangis.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Tak lama kemudian cuaca di tengah laut yang tadinya cerah, mendadak berubah menjadi
                                    gelap. Hujan tiba-tiba turun dengan teramat lebatnya.
                                </p>
                                <img class="img-fluid rounded w-100" src="img/malin12.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Tiba-tiba datanglah badai besar, menghantam kapal Malin Kundang. Malin pun ketakutan
                                    luar biasa. Ia tidak tahu harus berbuat apa.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Lalu sambaran petir yang menggelegar. Saat itu juga kapal hancur berkeping- keping.
                                    Kemudian terbawa ombak hingga ke pantai.
                                </p>
                                <h3>
                                    Akhir Cerita Malin Kundang
                                </h3>
                                <img class="img-fluid rounded w-100" src="img/malin13.jpg" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Esoknya saat matahari pagi muncul di ufuk timur, badai telah reda. Di pinggir pantai
                                    terlihat kepingan kapal yang telah menjadi batu. Itulah kapal Malin Kundang! Tampak
                                    sebongkah batu yang menyerupai tubuh manusia.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Itulah tubuh Malin Kundang anak durhaka yang dikutuk ibunya menjadi batu karena telah
                                    durhaka. Disela-sela batu itu berenang-renang ikan teri, ikan belanak, dan ikan tengiri.
                                    Konon, ikan itu berasal dari serpihan tubuh sang istri yang terus mencari Malin Kundang.
                                </p>
                            </div>
                            <h5 class="text-center mt-5">
                                Kisah Legenda Malin Kundang ini memiliki pesan yang dapat diambil anak-anak, yaitu
                                sayangi kedua orangtua saat susah dan senang, dan jangan melupakan jasa orangtua yang
                                telah menyayangi dan mendidik dari kecil.
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center text-center rounded">
                        <a href="{{ url('/pembelajaran') }}"
                            class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">
                            <<< Kembali</a>
                    </div>
                </form>
            </div>
        </main>
        @parent
    @endsection
</body>

</html>

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
                    <h1 align="center">Senjata Sumatera Barat</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Ruduih
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/ruduih.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Budaya Minangkabau memiliki karakteristik yang sangat menarik dibandingkan dengan budaya
                                    lain di Sumatera. Pastinya banyak hal unik dan menarik yang ada di suku Minang. Ini
                                    meluas ke adat adat pernikahan, budaya bepergian, termasuk senjata tradisionalnya, yakni
                                    ruduih yang merupakan senjata tradisional Padang yang mirip parang dari budaya Minang di
                                    Sumatera Barat. <br><br>

                                    Senjata ini memiliki fungsi sebagai senjata yang digunakan untuk bertarung di medan
                                    perang. Di sisi lain, untuk senjata berburu selain dengan senjata sumpitan. Apakah
                                    Grameds tahu lokasi senjata ruduih saat ini? Ya, senjata Ruduih kini berada di Museum
                                    Perjuangan Tridaya Eka Dharma dan tercatat sebagai senjata yang digunakan pada Perang
                                    Manggopoh sebelum tahun 1908. <br><br>

                                    Perang Mangopo 1980 terjadi pada tanggal 15 Juni 1908. Peperangan pecah dari murka kaum
                                    Ninik Mamak, para alim ulama, cendekiawan, dan masyarakat Kanagari dari Mangopo di
                                    kecamatan Lubuk basung Kabupaten Agam, Sumatera Barat. Tindakan yang dilakukan tentara
                                    Belanda tersebut diyakini menjunjung tinggi nilai-nilai luhur adat dan budaya
                                    Minangkabau serta melanggar adat kebiasaan masyarakat Minangkabau yang berada di luar
                                    batas kewajaran. <br><br>

                                    Dari literatur yang ada, beberapa sumber menyebutkan bahwa senjata ruduih ini mirip
                                    dengan senjata Kelewang. Bentuk senjata ini menyerupai pedang dengan bilah tajam di
                                    salah satu sisinya. Ada beberapa perbedaan di antara mereka. Jika senjata Kerewan
                                    memiliki bilah yang tajam dan lurus, senjata Ruduih memiliki sisi tajam yang cenderung
                                    cembung ke dalam. <br><br>

                                    Bentuk pedangnya menyerang musuh lebih mematikan. Maka tidak heran jika senjata ini
                                    sering digunakan oleh para prajurit kerajaan saat berperang melawan tentara Belanda pada
                                    perang Manggopoh pada tahun 1908.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Kerambit
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kerambit.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Kerambit adalah pisau kecil dengan bentuk melengkung. Karambit juga merupakan
                                    salah satu senjata tradisional Padang Sumatera Barat dan dijadikan sebagai salah satu
                                    senjata paling mematikan di dunia. Meski Karambit berukuran kecil, ternyata sangat
                                    berbahaya karena bisa merobek atau merusak anggota tubuh lawan. <br><br>

                                    Selain itu yang mengejutkan, senjata Kerambit ini dapat dengan cepat melumpuhkan musuh,
                                    tetapi tidak terdeteksi. Senjata Kerambit sendiri berasal dari Minangkabau dan kemudian
                                    disebarkan oleh perantau Minangkabau ke berbagai daerah seperti Jawa di Semenanjung
                                    Malaya. Bentuk senjata tradisional dari Kerambit sangat unik karena terinspirasi oleh
                                    banyak kuku harimau yang banyak berkeliaran di hutan Sumatera. <br><br>

                                    Setelah masyarakat melihat harimau bertarung dengan cakarnya, kemudian mereka mulai
                                    menciptakan awal dari konsep senjata Kerambit. Ini tentu saja salah satu filosofi
                                    Minangkabau, yang dikenal dengan istilah “Alam Takambang Jadi Guru”. Fungsi Senjata
                                    Kerambit di sebagian besar daerah adalah sebagai alat pertanian seperti kegunaan berikut
                                    ini: <br><br>
                                </p>
                                <ul class="mt-2 mb-2" style="padding-left: 2cm">
                                    <li>Pembersihan akar</li>
                                    <li>Mengumpulkan batang padi</li>
                                    <li>Mengumpulkan pengirikan padi</li>
                                </ul>
                                <p>
                                    Tetapi khususnya untuk senjata tradisional Padang ini, lebih dibuat melengkung setelah
                                    masyarakat Minang melihat dan mengamati harimau yang bertarung dengan kukunya. Senjata
                                    tradisional ini juga merupakan salah satu senjata utama silat yang digunakan dalam seni
                                    bela diri. Dengan kata lain, semakin populer seni bela diri Pencak silat, semakin akrab
                                    pula dengan pisau Kerambit ini. <br><br>

                                    Saat ini, senjata ini dikembangkan oleh negara-negara Eropa-Amerika dengan banyak jenis
                                    dan varietas. Di Indonesia sendiri, Kerambit masih digunakan oleh para pegulat khususnya
                                    silat Harimau Minangkabau dalam pencak silat Sumatera. Senjata Tradisional Kerambit
                                    dapat dibagi menjadi dua variasi: Kerambit di Jawa Barat dan Kerambit Minangkabau.
                                    Karambit di Jawa Barat biasanya memiliki busur bulat, sedangkan Kerambit Minang memiliki
                                    busur siku.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Klewang Padang
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/padang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Klewang adalah senjata tradisional dari senjata Minangkabau, yang berupa parang
                                    satu sisi, yang memiliki tumpuan yang berat di tengah-tengah bagiannya. Senjata Klewang
                                    biasanya memiliki bentuk mata yang tajam, tetapi juga melengkung. Pada zaman kuno,
                                    senjata ini digunakan sebagai senjata utama pasukan Padri pada perang Sumatra Barat abad
                                    ke-19. <br><br>

                                    Insiden ini dilihat oleh petugas Padri dengan sangat cepat di Senjata Klewang selama
                                    pertempuran. Meskipun digunakan sebagai senjata utama pertempuran, Klewang sering
                                    digunakan untuk kegiatan pertanian kegiatan pertanian. Senjata yang sebelumnya telah
                                    menyebar ke publik dalam kisaran dari pegangan yang memberikan bentuk naga sampai sarung
                                    yang terbuat dari motif garis-garis mulai dibuat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Karih
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/kudhok.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Karih adalah senjata tusuk seperti belati, dengan ujung yang sama tajam di kedua sisi.
                                    Bentuknya sangat khas dan dapat dengan mudah dibedakan dari jenis senjata lainnya. Karih
                                    tidak simetris, menyebar di pangkal dan meruncing ke atas. Bilahnya lebih dominan
                                    melengkung membentuk kesenian khas Minangkabau. <br><br>

                                    Mengingat sejarah Kaliminan di Sumatera Barat, telah digunakan sebagai senjata perang
                                    dan untuk melindunginya dari serangan musuh saat meninggalkan rumah sejak awal. Selain
                                    itu, fungsi lain senjata ini adalah disediakan untuk peralatan dapur. Alat ini dulunya
                                    serba guna bagi masyarakat Minang sepanjang hidupnya. <br><br>

                                    Keistimewaan lainnya adalah bentuk potash, yang sarungnya dihiasi pahatan indah dengan
                                    berbagai motif. Begitu pula dengan batang atau ulunya. Warna utamanya adalah coklat tua
                                    atau coklat muda, mirip dengan warna kulit bagian dalam. Berkembangnya waktu, senjata
                                    karih berhenti berfungsi sebagai alat pelindung diri dan peralatan dapur, tetapi
                                    kehadirannya mendekati berbagai upacara tradisional dan perayaan budaya Kekaisaran
                                    Minang. <br><br>

                                    Biasanya senjata tradisional Padang Sumatera Barat ini digunakan oleh tokoh adat,
                                    pelobi, tokoh agama, pemilik adat atau sako, dan lainnya. Karih Minang tidak hanya
                                    dikenakan oleh para pemuka adat, tetapi juga menjadi aksesori bagi pengantin pria pada
                                    resepsi pernikahan. Karih diletakan di bagian pinggul kanan depan dengan Sarungnya.
                                    <br><br>

                                    Kehadiran senjata tradisional Sumatera Barat ini juga menjadi ciri khas orang Minang
                                    dimanapun mereka berada. Dari sudut pandang simbolis, senjata karih bertindak sebagai
                                    hakim, yakni sebagai mediator perselisihan dan masalah sengketa dalam klan dan Nagari.
                                    Selain itu, ketika karih dipegang tegak membentuk karakter Arif dalam bahasa Arab.
                                    <br><br>

                                    Ini melambangkan ajaran tauhid tentang keberadaan Allah SWT. Seperti dikutip dari buku
                                    Julfian Azrael “Menjadi Pangul”, arti Karih Minang dikatakan bersifat jasmani dan
                                    rohani. Bagian luar berarti gulungan itu melambangkan hubungan antara Panggul dan
                                    keponakannya. Hal ini dapat dikenali dari bentuk ulu atau tangkai karihnya. <br><br>

                                    Makna batin adalah sumber ajaran utama bagi ahli waris Sako atau pelamar jabatan
                                    pemimpin Minangkabau. Beberapa bagian dari Keris Minang ini, yaitu Ulu, Punting dan
                                    Tali, melambangkan tiga sistem adat Minang: adat Sambah Manyambah, adat Baso Jo basi dan
                                    adat siriah jo pinang. <br><br>

                                    Sekilas, bagi orang yang baru pertama kali melihat senjata karih Minang Ini, pasti
                                    mengira bahwa itu adalah Keris, karena saat Karih dimasukkan ke dalam warangka atau
                                    sarung-nya benar-benar akan terlihat seperti senjata keris yang banyak ditemukan di
                                    Jawa. Senjata Karih juga sudah terdaftar di UNESCO sebagai salah satu Warisan Budaya
                                    Dunia Non-Bendawi Manusia yang ditetapkan pada tahun 2005.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Piarik
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/piarik.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Senjata Piarit adalah senjata tradisional Padang Sumatera Barat berbentuk tombak dengan
                                    tiga mata tajam. Selain di Sumatera Barat juga banyak digunakan di daerah lain seperti
                                    Sumatera Selatan dan biasa disebut dengan senjata Trisula. Bentuk, senjata ini
                                    menyerupai senjata utama dewa Hindu Siwa. <br><br>

                                    Karena pada zaman dahulu, sebelum Islam masuk ke Sumatera Barat, khususnya di daerah
                                    Padang masih menganut agama Hindu. Orang Sumatera Barat sering berburu hewan besar
                                    dengan menggunakan senjata tradisional Piarik ini sebagai pegangan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Sumpitan
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/sumpitan.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Sumpit atau sumpitan juga digunakan di Sumatera Barat dan digunakan dalam berburu dan
                                    pertempuran lapangan untuk menyerang jarak jauh. Kelebihan dari senjata tradisional
                                    Padang Sumatera Barat ini adalah dapat memberikan daya tembak dengan akurasi hingga 200
                                    meter. Sumpitan tidak hanya digunakan sebagai senjata tradisional di Sumatera Barat,
                                    tetapi juga oleh masyarakat Dayak di Kalimantan. <br><br>

                                    Fungsi senjata tradisionalnya ini masih sama dengan yang digunakan untuk berburu hewan
                                    dan dibuat secara alami sehingga tidak merusak alam. Sebagai warisan budaya nenek
                                    moyang, masyarakat Minangkabau masih melestarikan sumpitan sebagai senjata tradisional.
                                    Bentuk sumpit biasanya berbentuk tabung kecil yang memungkinkan anak panah kecil yang
                                    ditembakkan untuk menembak jauh ke sasaran. <br><br>

                                    Ini adalah senjata tradisional Sumatera Barat dan masih dilestarikan oleh orang
                                    Minangkabau sampai sekarang. Betapa bangganya mereka dengan senjata tradisional mereka,
                                    sehingga senjata tradisional masih terpelihara dengan baik hingga saat ini. Tidak heran,
                                    setiap daerah perlu melestarikan senjata tradisional sebagai warisan daerah dan
                                    memperkaya budaya bangsa.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Keris Pusaka Minangkabau
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/minangkabau.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Keris pusaka Minangkabau adalah Keris khusus yang hanya boleh dikenakan oleh penguasa
                                    adat di pinggang pada acara-acara tertentu. Keris Pusaka Minangkabau selalu digiling
                                    kiri kanan. Ini berarti Pengle dapat memberikan keadilan kepada semua orang, menuntut
                                    mereka, dan memastikan keadilan. <br><br>

                                    Keris pusaka ini tidak digunakan dalam semua ritual adat. Penggunaan juga harus
                                    diperhitungkan. Artinya, mata keris ada di kiri, bukan di kanan. Hal ini dimaknai
                                    sebagai sikap bahwa Pengle harus selalu berhati-hati dan berpikir sebelum berbicara atau
                                    bertindak. <br><br>

                                    Senjata tradisional Padang Sumatera Barat ini merupakan lambang kebesaran. Pemimpin adat
                                    selalu dapat diandalkan, baik orang Minangkabau senang maupun sedih. Kesimpulannya, kita
                                    masih perlu memelihara dan melestarikan budaya lokal. Orang Minangkabau memberikan
                                    contoh yang sangat baik bagi kita semua dengan melestarikan warisan luhur nenek moyang
                                    mereka.
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

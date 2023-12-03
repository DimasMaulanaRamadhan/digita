<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori Buku</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap">

    <!-- Custom Styles -->
    <style>
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
                    <h1 align="center">Pangeran Amat Mude</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <img class="img-fluid rounded w-100" src="{{ asset('img/mude.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Raja dan Ratu Negeri Alas sudah lama menikah, tapi mereka belum dikaruniai anak.
                                    Akhir-akhir ini, Raja sering melamun, cemas memikirkan nasib Kerajaan Alas jika mereka
                                    tak memiliki putra mahkota. Ratu berusaha untuk menghibur Raja. “Kita sudah berusaha
                                    keras. Sebaiknya kita bersabar dan terus berdoa, Kanda.” Raja tersenyum dan menjawab,
                                    “Sungguh Kanda beruntung memiliki istri seperti Dinda. Benar, kita tak boleh berhenti
                                    berusaha dan berdoa. Semoga Tuhan mengabulkan doa kita.” <br><br>
                                    Suatu pagi, Ratu tak enak badan dan tubuhnya lemas. Raja panik. Tabib kerajaan dipanggil
                                    untuk memeriksa Ratu. “Selamat Baginda. Ratu sedang mengandung, ” kata Tabib sambil
                                    menyalami tangan Raja. Raja dan Ratu amat senang mendengar perkataan tabib itu. Mereka
                                    mengucap syukur pada Tuhan. Kabar kehamilan Ratu pun cepat tersebar. Seluruh rakyat
                                    bersuka cita. <br><br>
                                    Ratu melahirkan bagi laki-laki yang sempurna, tampan, berkulit bersih, dan berambut
                                    tebal. Raja menggelar pesta besar-besaran untuk menyambut putranya. Selain seluruh
                                    rakgat, semua hewan dan makhluk halus pun turut diundang. Dalam pesta itu, Raja
                                    mengumumkan, bahwa putranya bernama Amat Mude.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/mude1.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Pangeran Amat Mude tumbuh menjadi anak yang lucu dan pintar. Usianya belum genap 10
                                    tahun ketika sang Raja mulai sakit-sakitan dan akhirnya meninggal dunia. Seluruh rakyat
                                    berduka. Lalu muncul persoalan. Siapa yang akan memerintah kerajaan? Pangeran Amat Mude
                                    masih sangat kecil. Karena itu, Ratu memutuskan untuk menyerahkan takhta sementara pada
                                    adik Raja. Sang Paman setuju. Rencananya ia akan memerintah sampai Pangeran Amat Mude
                                    cukup umur. Namun lama-kelamaan sang Paman lupa diri. Ia ingin menjadi raja selamanya.
                                    Ia lalu mencari cara untuk menyingkirkan Pangeran Amat Mude. Mula-mula kamar Ratu dan
                                    Pangeran dipindahkan ke belakang. Lalu sang Paman juga mengabaikan kesejahteraan sang
                                    Ratu. Ratu yang baik hati tidak berprasangka buruk dan menerima semua perlakuan itu.
                                    <br><br>
                                    Suatu hari sang Paman mengumpulkan para prajurit dan mengeluarkan perintah, “Ajaklah
                                    Ratu dan Pangeran berburu ke hutan, kemudian tinggalkan mereka di sana.” Para prajurit
                                    bingung. “Bukankah Pangeran Amat Mude adalah putra mahkota Negeri Alas?” tanya mereka.
                                    “Tutup mulut! Akulah Raja Negeri Alas. Laksanakan perintahku atau kalian kuhukum,” jawab
                                    sang Paman. Akhirnya Ratu dan Pangeran Amat Mude dibuang ke hutan. <br><br>
                                    Pangeran Amat Mude adalah anak yang pintar dan tidak manja. Meskipun hidup di rumah
                                    sederhana di hutan, ia tak pernah mengeluh. Ia bahkan sering membantu ibunya mencari
                                    makanan atau buah-buahan ke kedalaman hutan. <br><br>
                                    Suatu hari, ketika Pangeran Amat Mude mencari buah-buahan, ia menemukan sungai yang
                                    penuh ikan. Dengan ranting pohon yang sudah diasah tajam, ia menangkap ikan-ikan itu.
                                    Dalam sekejap, ia berhasil menangkap beberapa ekor ikan. Sesampainya di rumah, Ratu
                                    menyambut hasil tangkapan itu dengan gembira.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/mude2.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Saat membersihkan perut ikan, Ratu merasa ada benda keras di dalamnya. Ratu mengira itu
                                    adalah telur ikan. Namun setelah diamati, ternyata itu adalah emas. Ratu berteriak,
                                    “Anakku… cepatlah kemari. Lihat, Ibu menemukan sebutir emas di dalam perut ikan ini.”
                                    Pangeran Amat Mude terkejut. Lalu ia membantu ibunya membuka perut-perut ikan yang lain.
                                    Ternyata setiap ikan memiliki sebutir emas dalam perutnya. <br><br>
                                    Mereka mengucap syukur pada Tuhan. Ratu kemudian menjual emas itu, dan uangnya digunakan
                                    untuk membeli rumah yang layak huni. Ia juga membeli selimut dan pakaian baru untuk
                                    putranya. Setiap hari Pangeran pergi menangkap ikan dan menjual emasnya. Uang mereka
                                    menjadi banyak. Sekarang mereka memiliki rrumah yang bagus, ternak, dan kebun gang luas.
                                    Mereka juga tak lupa membantu orang miskin.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/mude.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Pangeran Amat Mude kini telah dewasa. Kekayaan dan kedermawanannya terdengar sampai ke
                                    Negeri Alas. Pamannya tak mengira jika dia masih hidup. Dipikirnya Pangeran Amat Mude
                                    dan ibunya telah mati diterkam harimau. Ia memerintahkan para prajuritnya untuk
                                    menjemput Pangeran Amat Mude kembali ke istana. <br><br>
                                    Di istana, sang Paman berkata. “Amat Mude, kau sudah dewasa sekarang. Mungkin sudah
                                    saatnya kau menjadi raja. Tapi tidak semudah itu. Kau boleh menjadi raja jika berhasil
                                    memetik sebutir kelapa gading. Bukan kelapa gading sembarangan, tapi kelapa gading dari
                                    pulau kecil di tengah laut. Jika kau berhasil, kau boleh kembali ke istana. Tapi jika
                                    gagal, takhta kerajaan ini selamanya menjadi milikku,” lanjut pamannya. Dalam hati, sang
                                    Paman tertawa. Laut itu dijaga oleh tiga hewan buas yang siap memangsa siapa saja yang
                                    lewat. “Amat Mude tak mungkin selamat!” pikirnya. Pangeran setuju. Ia memang ingin
                                    kembali ke istana demi kebahagiaan ibunya. <br><br>
                                    Saat Pangeran Amat Mude mendayung, air laut bergejolak. Perahu yang ditumpanginya nyaris
                                    terbalik. Ia amat ketakutan. Lalu, munculah seekor ikan besar didampingi seekor buaya
                                    dan seekor naga. “Hai, Anak Muda! Berani-beraninya kau melewati wilayah kami tanpa izin?
                                    Siapa kau clan hendak ke mana?” tanya ikan itu. Dengan gemetar, Pangeran Amat Mude
                                    menjawab “Na… na… namaku Amat Mude. Aku hendak ke pulau di tengah laut untuk memetik
                                    sebutir kelapa gading.” <br><br>
                                    “Amat Mude? Apakah kau putra Raja Negeri Alas?” tanya Buaya dan Naga bersamaan. “B… b…
                                    benar… dari mana kalian tahu?” tanya Pangeran Amat Mude. Mereka tertawa clan berkata
                                    “Ayahmu adalah sahabat kami. Kami dulu diundang ke pesta kelahiranmu. Tak kusangka kau
                                    sekarang sudah menjadi pemuda yang gagah.” <br><br>
                                    “Tenanglah, kami akan membantumu sampai ke pulau itu,” sambung Naga. Sebelum berpisah,
                                    Naga memberi Pangeran Amat Mude sebuah cincin ajaib yang bisa mengabulkan semua
                                    permintaannya. <br><br>
                                    Ternyata pohon kelapa itu tinggi sekali. Pangeran Amat Mude nyaris putus asa. Tiba-tiba
                                    ia teringat pada cincin ajaib dan berbisik pada cincin itu, “Bantulah aku memetik
                                    sebutir kelapa gading.” Ajaib! Dengan mudah ia berhasil memanjat dan memetik sebutir
                                    kelapa gading. Ia mengucap syukur lalu mendayung perahunya pulang. <br><br>
                                    “Paman, ini kelapa gading yang Paman minta. Sekarang saatnya Paman menepati janji.” Sang
                                    Paman heran. Bagaimana mungkin Amat Mude bisa kembali dengan selamat? Lalu sadarlah ia,
                                    Pangeran Amat Mude memang ditakdirkan untuk menjadi raja. Tuhan selalu melindungi anak
                                    itu dari segala niat jahatnya. “Amat Mude, kau memang layak menjadi raja. Mulai
                                    sekarang, kau adalah raja Negeri Alas yang sah.” <br><br>
                                    Sejak itu, Negeri Alas dipimpin oleh Raja Amat Mude. Ia memimpin dengan arif bijaksana,
                                    persis seperti ayahnya. Ia juga tak dendam dan tetap mengizinkan Pamannya tinggal di
                                    istana. Namun sang paman menolak. Ia memilih untuk keluar dan hidup sebagai rakyat
                                    biasa.
                                </p>
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

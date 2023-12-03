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
                    <h1 align="center">Sangkuriang - Asal Muasal Tangkuban Perahu</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <img class="img-fluid rounded w-100" src="{{ asset('img/sangkuriang.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Dayang Sumbi adalah seorang putri raja yang berparas cantik dan berhati mulia. Ia pergi
                                    mengasingkan diri ke hutan karena bosan dengan kehidupannya di dalam istana. Disamping
                                    itu hal ini untuk menghindari pertikaian antara kerajaan tetangga yang berebut untuk
                                    mempersuntingnya. <br><br>
                                    Karena kecantikan paras dan baik budi pekertinya, banyak sekali pangeran dan putra
                                    bangsawan yang meminang putri Raja ini. Akibatnya terjadi peperangan antar kerajaan
                                    karena semua pangeran dan para bangsawan tidak ada yang mau mengalah. Melihat kejadian
                                    ini Dayang Sumbi menjadi sedih dan akhirnya mohon pamit kepada ayahandanya untuk
                                    mengasingkan diri. Dengan berat hati Sri Baginda Raja merestui permohonan anaknya
                                    tersebut. <br><br>
                                    Di hutan, ia ditemani oleh anjing jantannya bernama Tumang. Untuk memenuhi kebutuhan
                                    sehari-hari, Dayang Sumbi menenun kain yang kemudian dijual di pasar.Suatu hari, alat
                                    tenunnya terjatuh dan menggelinding ke bawah bukit. Dayang Sumbi malas untuk
                                    mengambilnya. Tanpa pikir panjang, ia mengucapkan sumpah, “Siapa yang bisa mengambilkan
                                    alat tenunku? Aku bersumpah, jika perempuan, ia akan kujadikan saudaraku dan jika
                                    laki-laki, akan kujadikan suamiku.” <br><br>
                                    Tumang, yang sebenarnya adalah titisan seorang dewa, mendengar sumpah Dayang Sumbi. Ia
                                    segera berlari menuruni bukit dan mengambil alat tenun Dayang Sumbi. Walaupun tidak
                                    mengira dengan apa yang terjadi, Dayang Sumbi tetap menepati janjinya. Dayang Sumbi
                                    akhirnya menikah dengan Tumang. Mereka dikaruniai seorang anak laki-laki bernama
                                    Sangkuriang. Sangkuriang kecil sangat mahir berburu. Ia menggunakan tombak dan panah
                                    untuk membunuh buruannya.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/sangkuriang1.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Sangkuriang kecil tak pernah tahu, siapa ayahnya. Pagi itu, seperti biasa Sangkuriang
                                    pergi berburu bersama Tumang. “Lihat Tumang… sepasang rusa yang gemuk.” Sangkuriang
                                    segera mengeluarkan anak panahnya. Namun sayang, kedua rusa itu sadar adanya bahaya dan
                                    melarikan diri. Anak panah itu hanya mengenai paha salah satu rusa. Sangkuriang lalu
                                    menyuruh Tumang untuk mengejar rusa itu. <br><br>
                                    “Cepat Tumang, kejarlah mereka! Gigit kakinya supaya mereka tak bisa lari lagi,”
                                    perintahnya pada Tumang.Dalam hati, Tumang sebenarnya kurang suka jika putranya itu
                                    membunuh hewan-hewan hutan. Tumang akhirnya berpura-pura mengejar kedua rusa tersebut,
                                    dan ia kembali tanpa hasil. “Payah! Seharusnya kau bisa menangkapnya dengan mudah,”
                                    gerutu Sangkuriang. Karena kecewa, Sangkuriang mengusir Tumang. “Anjing Tua, pergilah
                                    jauh-jauh dariku. Kau sudah tidak berguna lagi!” <br><br>
                                    Andai saja ia tahu bahwa Tumang adalah ayahnya, ia tentu tak akan mengusirnya. Dengan
                                    hati sedih, Tumang pun pergi meninggalkan Sangkuriang. Sesampainya di rumah, Sangkuriang
                                    bercerita pada ibunya,“Aku hampir saja mendapatkan seekor rusa. Tapi gara-gara Tumang,
                                    aku gagal. Anjing kita itu sudah terlalu tua, Bu,”Dayang Sumbi menengok keluar dan
                                    bertanya, “Di mana Tumang sekarang?” <br><br>
                                    “Sudah ku usir. Untuk apa kita memeliharanya lagi? Ia sudah tua dan tak berguna.” Dayang
                                    Sumbi terkesiap. “Apa? Sangkuriang, berani sekali kau mengusir Tumang.” Dayang Sumbi
                                    marah sekali. Ia mengambil sendok nasi dan memukulkannya ke kepala Sangkuriang. Saking
                                    kerasnya, kepala Sangkuriang terluka dan berdarah. Sangkuriang menangis dan kecewa.
                                    “Mengapa Ibu memukulku demi seekor anjing?” tanyanya. Lalu ia mengemasi barang-barangnya
                                    dan pergi meninggalkan rumah. Dayang Sumbi menyesali perbuatannya, tapi Sangkuriang
                                    sudah terlanjur pergi meninggalkannya.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/sangkuriang2.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Tak terasa hari demi hari berlalu. Sangkuriang sekarang telah dewasa. Selama
                                    kepergiannya, ia menjelajahi seluruh negeri. la pindah dari satu daerah ke daerah yang
                                    lain. Suatu saat, tanpa sadar, Sangkuriang kembali ke hutan tempat ia dulu tinggal
                                    bersama Dayang Sumbi. Hutan itu sudah jauh berubah. Pohonnya tak lagi banyak dan
                                    digantikan oleh rumah-rumah penduduk yang bagus-bagus. Sangkuriang benar-benar tak
                                    mengenali bahwa inilah hutan tempat ia tinggal dulu. <br><br>
                                    Saat Sangkuriang melewati pasar, ia melihat sesosok wanita cantik semampai. “Cantik
                                    sekali wanita itu,” gumamnya. Sangkuriang tak tahu, wanita itu adalah Dayang Sumbi,
                                    ibunya sendiri. Sangkuriang mendekati wanita itu dan mengajaknya berkenalan. Mereka
                                    berdua pun soling jatuh cinta, dan sepakat untuk menikah. <br><br>
                                    Suatu sore, Dayang Sumbi hendak memotong rambut Sangkuriang. Saat menyisir rambut
                                    Sangkuriang, Dayang Sumbi terkejut. Ia melihat bekas luka di kepala Sangkuriang.
                                    “Jangan-ja- ngan…” bisiknya cemas. <br><br>
                                    “Sangkuriang, mengapa ada bekas luka di kepalamu?” tanyanya penasaran.
                                    “Saat kecil, Ibuku memukul kepalaku dengan sendok nasi. Ia marah karena aku mengusir
                                    anjing peliharaan kami.” <br><br>
                                    Dayang Sumbi langsung lemas mendengar penjelasan Sangkuriang itu. Terbata-bata, ia
                                    berkata, “Sangkuriang… akulah Ibu yang dulu memukul kepalamu, Nak. Kita tak boleh
                                    menikah, kita adalah ibu dan anak.” <br><br>
                                    “Tak mungkin, pasti ini hanya alasanmu saja untuk membatalkan pernikahan kita.” jawab
                                    Sangkuriang keras. Seribu kali Dayang Sumbi meyakinkannya, seribu kali pula Sangkuriang
                                    menolak. Ia tetap ingin menikahi Dayang Sumbi!
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/sangkuriang3.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Akhirnya Dayang Sumbi mendapat akal. Ia meminta Sangkuriang untuk membendung Sungai
                                    Citarum dan membuat perahu besar untuk menyeberanginya. Keduanya harus selesai sebelum
                                    fajar menyingsing. Jika Sangkuriang gagal, Dayang Sumbi tak mau menikah dengannya.
                                    Sangkuriang menyanggupi permintaan Dayang Sumbi itu. Baginya, kedua permintaan itu
                                    bukanlah hal yang sulit. Sangkuriang mulai bekerja. Dengan bantuan para jin, ia bekerja
                                    keras membendung Sungai Citarum. la tak sadar kalau Dayang Sumbi diam-diam
                                    memperhatikannya. <br><br>
                                    Dayang Sumbi cemas melihat Sangkuriang bisa bekerja secepat itu. “Aku harus segera
                                    melakukan sesuatu,” pikirnya. “Aha,” ia teringat dengan kain sutra berwarna merah yang
                                    baru ia tenun. Kain itu berukuran cukup besar karena ia menenunnya untuk digunakan
                                    sebagai tirai dan selimut. <br><br>
                                    Dayang Sumbi berlari menuju perumahan penduduk. Dengan panik, ia menceritakan apa yang
                                    terjadi. Penduduk yang telah mengenal Dayang Sumbi dengan baik, tentu saja tak setuju
                                    jika Sangkuriang menikahinya. Mereka setuju untuk membantu Dayang Sumbi. Dayang Sumbi
                                    mengajak penduduk untuk menggelar kain sutra merah itu di sebelah timur Sungai Citarum.
                                    Sebagian penduduk yang lain membuat suara gaduh seolah-olah kegiatan pagi telah
                                    dilakukan.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/sangkuriang4.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Sangkuriang yang sedang bekerja, terkejut mendengar suara gaduh tersebut. Ia menoleh ke
                                    arah timur. Dilihatnya langit sudah merah, ia mengira pagi telah tiba. Ia tak tahu bahwa
                                    itu adalah kain sutra merah yang digelar oleh Dayang Sumbi dan penduduk desa. <br><br>
                                    Sangkuriang sangat marah dan kecewa. “Aku telah gagal,” katanya dalam hati. Sangkuriang
                                    berteriak sekeras-kerasnya, “Aku mencintaimu, Dayang Sumbiiii… aku benar-benar
                                    mencintaimu!” Sangkuriang tak bisa melawan amarah dalam dirinya. Dengan segala
                                    kekuatannya, ia menjebol bendungan yang ia buat. Air pun tumpah ke mana-mana. Ia juga
                                    menendang perahu besar yang terbuat dari kayu. “Gloodakkkk…” perahu itu terlempar jauh
                                    ke arah utara dengan posisi tertelungkup. <br><br>
                                    Konon kabarnya, perahu yang jatuh tertelungkup itu, sekarang dikenal dengan Gunung
                                    Tangkuban Perahu, yang berarti “perahu yang menelungkup”.
                                </p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('jabar') }}" class="btn-back">
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

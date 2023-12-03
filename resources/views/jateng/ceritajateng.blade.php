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
                    <h1 align="center">Roro Jonggrang dan Candi Sewu</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <img class="img-fluid rounded w-100" src="{{ asset('img/roro.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Pada zaman dahulu kala, hiduplah seorang raja dengan wujud raksasa bernama Prabu Baka
                                    yang tinggal di Kerajaan Baka.Dia adalah raja yang terkenal rakus dan suka memeras
                                    rakyatnya,
                                    inilah yang membuat semua orang takut padanya. Prabu Baka juga memiliki seorang patih
                                    yang setia, bernama Patih Gupala. <br><br>
                                    Suatu hari Prabu Baka memimpin penyerbuan ke Kerajaan Pengging. Hal ini dilakukannya
                                    karena ingin menguasai kerajaan makmur dan subur itu.Perang pun tidak terhindarkan,
                                    Prabu Baka mengamuk dan memukul mundur pasukan Kerajaan Pengging."Serbu! Serbu!"
                                    perintah Patih Gupala yang menyemangati pasukan Prabu Baka.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/roro1.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Putra mahkota Kerajaan Pengging yang bernama Bandung Bondowoso marah besar saat tahu
                                    kerajaannya diserang tiba-tiba oleh Prabu Baka.Maka Bandung Bondowoso menyiapkan
                                    pasukannya dan memimpin serangan balasan. <br><br>
                                    "Ini tidak bisa dibiarkan. Kita harus menyerang
                                    pasukan Prabu Baka" serunya sambil mengacungkan pedangnya. <br><br>
                                    Di tengah pertempuran, Bandung Bondowoso bertemu dengan Prabu Baka.
                                    Mereka bertarung dengan ganas saling menyerang dan saling mengeluarkan jurus andalan
                                    mereka.
                                    Akhirnya Bandung Bondowoso berhasil membunuh Prabu Baka.
                                    Pasukan Prabu Baka kocar-kacir saat tahu rajanya terbunuh. Patih Gupala
                                    kemudian memerintahkan mereka lari pulang ke Kerajaan Baka. <br>Bandung Bondowoso juga tidak
                                    tinggal diam. <br><br> "Ayo kejar! Jangan menyerah!" seru Bandung Bondowoso. <br><br>
                                    Bandung Bondowoso dan pasukannya terus mengejar musuh hingga ke Kerajaan Baka.
                                    Pasukan Kerajaan Baka menyerah kalah. Sehingga Bandung Bondowoso bisa masuk istana
                                    mereka dengan leluasa. <br>Alangkah terkejutnya dia, karena bertemu putri yang menawan
                                    didalam istana. <br><br> "Wahai putri jelita siapa gerangan dirimu?" tanya Bandung Bondowoso pada
                                    perempuan itu. <br> "Aku adalah putri Prabu Baka. Namaku Roro Jonggrang" jawabnya. <br><br>Bandung
                                    Bondowoso tidak menyangka Prabu Baka yang berwujud raksasa, ternyata memiliki putri yang
                                    manawan. Inilah yang membuat Bandung Bondowoso langsung jatuh cinta kepada Roro
                                    Jonggrang. Bandung Bondowoso pun tidak bisa tidur memikirkan Roro Jonggrang. <br>Akhirnya ia
                                    mengutarakan maksud hatinya pada putri itu. <br><br> "Wahai Roro Jonggrong yang jelita, maukah kau
                                    menjadi istriku? Jika kau mau, kau dan seluruh rakyatmu akan ku maafkan" kata Bandung
                                    Bondowoso.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/roro2.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Mendengar pinangan Bandung Bondowoso, Roro Jonggrang menjadi bingung. Dia ingin
                                    menyelamatkan rakyatnya, namun dia tidak ingin menikah dengan orang yang telah membunuh
                                    orangtuanya. <br><br> "Aku mau menikah denganmu, tapi kamu harus memenuhi persyaratanku. Aku ingin
                                    dibuatkan sumur jalatunda" ujar Roro Jonggrang. <br><br>Bandung Bondowoso Menyanggupi syarat Roro
                                    Jonggrang."Baiklah aku sanggup melakukan itu semua, dan aku bisa menikahimu hai putri
                                    jelita" kata Bandung Bondowoso. <br><br>Tanpa banyak membuang waktu Bandung Bondowoso segera
                                    menggali tanah untuk membuat sumur jalatunda.
                                    Hanya dalam waktu singkat, sumur itu sudah jadi.Roro Jonggrang jadi gelisah dan berusaha
                                    memikirkan cara untuk menyakiti Bandung Bondowoso. <br><br> "Bagaimana Roro Jonggrang, apakah
                                    sumurnya sesuai dengan keinginanmu?" tanya Bandung Bondowoso. <br> "Bandung Bondowoso, maukah
                                    kamu masuk ke dalam untuk memeriksa semua itu?" kata Roro Jonggrang sambil
                                    tersenyum. <br> "Baiklah aku akan memeriksanya" kata Bandung Bondowoso. <br><br>Bandung Bondowoso
                                    segera masuk kedalam sumur tanpa rasa curiga.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/roro3.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Saat Bandung Bondowoso masuk kedalam sumur, Roro Jonggrang memerintahkan Patih Gupala
                                    dan pasukannya untuk menutup sumur itu dengan batu. Bandung Bondowoso tahu kalau dia
                                    ditipu dan marah besar. <br><br> "Rupanya dia telah menipuku!" kata Bandung Bondowoso di dalam
                                    sumur. <br><br>Namun dengan kesaktiannya, Bandung Bondowoso berhasil menjebol batu-batu itu dan
                                    naik ke atas. Roro Jonggrang pun terkejut, karena Bandung Bondowoso masih hidup. <br><br> "Apakah
                                    kamu hendak menipuku putri?" tanya Bandung Bondowoso kepada Roro Jonggrang. <br><br>Roro
                                    Jonggrang pun hanya tersenyum dan berusaha meredakan amarah Bandung Bondowoso, <br><br> "Ujian
                                    pertamamu sudah berhasil. Sekarang tinggal syarat kedua. Bangunlah 1000 candi untukku
                                    dalam semalam" kata Roro Jonggrang.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/roro4.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    "Akan kubangunkan engkau 1000 candi, tapi jangan sampai engkau menipuku lagi!" kata
                                    Bandung Bondowoso. <br><br>Bandung Bondowoso tahu dia tidak akan mungkin membangun 1000 candi
                                    dalam waktu semalam dengan kekuatannya sendiri. Akhirnya dia memanggil pasukan makhluk
                                    halus dan mengarahkan mereka untuk membangun candi. Ribuan makhluk halus datang dari
                                    segala penjuru arah dan segera membangun candi-candi itu,Roro Jonggrang mulai gelisah,
                                    sebab baru tengah malam namun candi-candi itu sudah mulai berdiri, bahkan tinggal sebuah
                                    saja. <br><br> "Bagaimana ini? Candinya sudah hampir selesai" kata Roro Jonggrang dengan
                                    cemas. <br><br>Roro Jonggrang kemudian mendapat akal untuk menggagalkan usaha Bandung
                                    Bondowoso. Dia membangunkan seluruh dayang di kerajaannya dan menyuruh mereka menumbuk
                                    padi dan membakar jerami.
                                    Mendengar suara lesung, ayam-ayam mengira hari telah pagi. Mereka pun berkokok. Pasukan
                                    makhluk halus pun mengira hari sudah pagi, sehingga mereka segera berlari meninggalkan
                                    tempat itu. <br><br>Bandung Bondowoso segera pergi ke kerajaan dan melihat para dayang yang
                                    menumbuk padi dan membakar jerami. Ia tahu kalau dia ditipu lagi.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/roro5.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    "Kau menipuku lagi Roro
                                    Jonggrang! Aku tak bisa memaafkanmu kali ini!" kata Bandung Bondowoso. <br><br>Dia tidak bisa
                                    menahan kemarahannya, bahkan senyum Roro Jonggrang tidak bisa meredam amarahnya. <br><br> "Kukutuk
                                    kau menjadi batu untuk menggantikan satu candi yang belum selesai!" kata Bandung
                                    Bondowoso sambil mengacungkan jari pada Roro Jonggrang. <br><br> Dalam sekejap Roro Jonggrang
                                    menjadi arca batu. Maka genaplah seribu candi yang telah dibangun Bandung
                                    Bondowoso. Melihat Roro Jonggrang telah berubah menjadi arca, menyesalah Bandung
                                    Bondowoso. Ia menangisinya, namun nasi telah menjadi bubur. Bandung Bondowoso tidak bisa
                                    menarik kutukannya.
                                </p>
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

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
                    <h2 align="center">Tari Daerah Sumatera Utara</h2>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Tor Tor
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/tor.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian tradisional Sumatera Utara yang pertama adalah Tari Tor Tor. Perlu kamu ketahui
                                    bahwa Tari Tor Tor ini sudah ada dan dipertunjukkan sebagai sebuah tarian perayaan pada
                                    upacara tertentu.

                                    Tari Tor Tor sendiri berasal dari suku yang terletak di daerah Sumatera Utara, seperti
                                    Kabupaten Toba, Kabupaten Samosir, Kabupaten Humbang Hasundutan, Kabupaten Tapanuli
                                    Utara dan Kabupaten Tapanuli Tengah. <br><br>

                                    Tari Tor Tor merupakan salah satu tarian tradisional tua yang ada di Indonesia. Konon,
                                    tarian ini sudah ada sejak zaman purba dahulu kala.

                                    Namun, pendapat yang menyebutkan bahwa Tari Tor Tor sudah ada sejak zaman purba masih
                                    diragukan sejumlah pakar mengingata tidak banyaknya bukti yang bisa menguatkan
                                    pernyataan tersebut.

                                    Menilik dari sejarahnya, Tari Tor Tor sudah ada sekitar abad ke-13 Masehi. Pada awal
                                    kemunculannya, tarian ini bukanlah suatu tarian, namun sebagai pelengkap gondang atau
                                    uning-uningan yang berdasarkan falsafah adat.

                                    Misalnya pada upacara-upacara adat di Mandiling, di mana uning-uningan dibunyikan
                                    (margondang) dan akan selalu dilengkapi dengan acara pertunjukan Tari Tor Tor
                                    (manortor).

                                    Sehingga, pertunjukan Tari Tor Tor dulunya hanya bisa ditemui pada upacara adat yang
                                    sakral, serta sebagai sebuah persembahan bagi roh leluhur.

                                    Namun, kemudian Tari Tor Tor dimodifikasi sedemikian rupa hingga menarik minat orang
                                    banyak dan menjadi sebuah tarian. <br><br>

                                    Seperti yang sudah dijelaskan tadi, Tari Tor Tor merupakan tarian sakral yang beperan
                                    sebagai sebagai sarana penyampaian batin kepada roh-roh leluhur ataupun kepada
                                    orang-orang yang dihormati.

                                    Itu sebabnya, hingga kini Tari Tor Tor hanya dilakukan pada waktu-waktu tertentu saja.
                                    Misalnya pada upacara kematian, musim panen tiba, ritual penembuhan, ataupun saat
                                    tamu-tamu penting. <br><br>

                                    Menurut keterangan dalam buku berjudul Mengenal Rumah Adat, Pakaian Adat, Tarian Adat,
                                    dan Senjata Tradisional (2009: 6), Tari Tor Tor adalah tarian yang memiliki gerakan
                                    seirama dengan iringan musik tradisional seperti gondang, suling, dan terompet batak.

                                    Umumnya, gerakan Tari Tor Tor terbilang sederhana, namun biasanya gerakan bagi laki-laki
                                    atau perempuannya akan berbeda.

                                    Sebagaimana pentas tarian pada umumnya, Tari Tor Tor juga diiringi oleh musik
                                    tradisional. <br><br>

                                    Nah, musik tradisional yang mengiringi tarian ini disebut dengan alat musik khas
                                    Sumatera Utara (magondangi) yang terdiri dari doal, gondang, gordang, hesek, ogung,
                                    oloan, sarune, ihuton, panggora, dan taganing.

                                    Unuknya lagi, para penari Tari Tor Tor wajib mengenakan kain ulos khas Batak. Di samping
                                    itu, ketika tengah menari, para penari Tor Tor memiliki aturan mutlak yang harus ditaati
                                    di mana tangan penari tersebut tidak boleh melewati batas kira-kira setinggi bahu.

                                    Jika aturan tersebut dilanggar, maka penari tersebut akan dianggap ingin menantang dan
                                    diyakini akan mendatangkan kesialan. <br><br>

                                    Kini, Tari Tor Tor bukan sekedar tarian tradisional untuk hiburan saja. Lebih dari itu,
                                    tarian yang satu ini sudah membudaya dan menjadi salah satu jati diri masyarakat Suku
                                    Batak.

                                    Sehingga, dapat disimpulkan bahwa Tari Tor Tor mempunyai tempat dan kedudukan yang
                                    penting di dalam kehidupan masyarakat Batak.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Endeng-endeng
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/endeng.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Sumatera Utara memiliki banyak warisan budaya yang harus dilestarikan, salah satunya
                                    adalah tarian tradisional.

                                    Ada beragam jenis tarian tradisional di Sumatera Utara yang bisa kamu temui, salah satu
                                    yang populer adalah Tari Endeng-endeng.

                                    Merupakan tari tradisional yang berasal dari Kabupaten Labuhanbatu Utara, Tari
                                    Endeng-endeng sejak dulu seringkali di pertunjukkan di upacara atau acara untuk
                                    memanjatkan rasa syukur dan kegembiraan. <br><br>

                                    Dulunya, tarian ini disebut sebagai seni Berdah, yakni tari yang berisikan shalawattan
                                    yang digunakan untuk acara pesta perkawinan, acara aqiqah (mengayun anak), dan khitanan
                                    yang bernuansa Melayu.

                                    Kesenian Berdah ini kemudian semakin berkembang dengan datangnya masyarakat Tapanuli
                                    Selatan yang merantau ke Labuhanbatu Utara dan membawa Tor Tor Onang-onang.

                                    Bercampurnya masyarakat etnis Melayu dengan etnis Mandailing pun berdampak pada
                                    berbaurnya kesenian yang mereka miliki. <br><br>

                                    Tari Endeng-endeng pun muncul sebagai perpaduan antara seni Berdah dari etnis Melayudan
                                    Tor Tor Onang-onang yang dibawa oleh masyarakat etnis Mandailing yang menetap di
                                    Labuhanbatu Utara.

                                    Uniknya, gerakan tarian ini memadukan tarian dan pencak silat dengan diiringi oleh
                                    iringan musik yang tergolong modern. Yakni, perpaduan alat musik gendang pak pung,
                                    rebana, keyboard, drum, serta gitar. <br><br>

                                    Biasanya, Tari Endeng-endeng ditampilkan selama empat jam dengan suasana riang gembira
                                    yang dibawakan oleh semua penarinya.

                                    Tarian Endeng-endeng kini sering dipentaskan masyarakat yang menggelar pesta khitanan
                                    atau malam pesta perkawinan oleh masyarakat Tapanuli Selatan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Serampang XII (Tari Serampang Dua Belas)
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/xii.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tarian tradisional khas Sumatera Utara berikutnya adalah Tari Serampang Dua Belas.
                                    Merupakan tarian tradisional Melayu yang berkembang di bawah Kesultanan Serdang, Tari
                                    Serampang Dua Belas diciptakan oleh Almarhum Guru Sauti.

                                    Sebelum dikenal luas dengan nama Serampang Dua Belas, tarian ini dulunya bernama Tari
                                    Pulau Sari menyesuikan dengan judul lagu yang mengiringi tarian ini, yakni lagu Pulau
                                    Sari. <br><br>

                                    Menilik dari sejarahnya. Terdapat alasan mengapa tarian Pulau Sari diganti menjadi
                                    Serampang Dua Belas.

                                    Hal ini dikarenakan nama Pulau Sari dianggap kurang tepat untuk tarian yang memiliki
                                    tempo cepat (quick step) sehingga muncullah ide untuk mengganti dengan nama Serampang
                                    Dua Belas merujuk pada ragam gerak tarinya yang berjumlah 12. <br><br>

                                    Dikutip dari buku yang ditulis oleh Takari & Dja’far berjudul Ronggeng dan Serampang Dua
                                    Belas: Dalam Kajian Ilmu-Ilmu Seni yang ditulis oleh Takari & Dja’far (2014: 266),
                                    walaupun Tari Serampang Dua Belas tidak menggunakan komunikasi verbal, tetapi
                                    gerak-gerik tari dengan segala keindahan, kerumitan, dan keunikannya mampu menarik
                                    perhatian penonton.

                                    Tarian tradisional yang satu ini sarat dengan makna-makna kebudayaan yang bersifat
                                    universal, yaitu cinta dan kasih sayang. <br><br>

                                    Berdasarkan total ragam gerak tarinya yang berjumlah 12, Tari Serampang Dua Belas
                                    sejatinya mengisahkan tentang cinta suci dua anak manusia yang muncul sejak pandangan
                                    pertama dan diakhiri dengan pernikahan yang direstui oleh kedua orang tua sang dara dan
                                    teruna.

                                    Oleh sebab itu, Tari Serampang Dua Belas biasanya dimainkan secara berpasangan oleh
                                    laki-laki dan perempuan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Piso Surit
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/surit.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Tari Piso Surit juga menjadi salah satu tarian tradisional khas Sumatera Utara yang
                                    wajib kamu kenali lebih jauh.

                                    Merupakan tarian khas suku Batak Karo, Tari Piso Surit biasanya dipertunjukkan untuk
                                    menyambut para tamu kehormatan dalam sebuah acara. <br><br>

                                    Dalam bahasa Batak Karo sendiri, kata ‘piso’ memiliki arti pisau. Makna dari kata
                                    tersebut membuat banyak masyarakat mengira piso surit merupakan nama sejenis pisau khas
                                    yang dimiliki oleh masyarakat Batak Karo. Padahal sesungguhnya, Piso Surit adalah jenis
                                    burung yang gemar bernyanyi. <br><br>

                                    Tari Piso Surit sendiri menggambarkan seorang gadis yang sedang menantikan kedatangan
                                    sang pujaan hati.

                                    Penantian ini sangat lama dan cukup menyedikan sehingga digambarkan seperti seekor
                                    burung piso surit yang sedang memanggil-manggil. <br><br>

                                    Biasanya, tarian tradisional khas suku Batak Karo ini dibawakan oleh penari yang terdiri
                                    dari beberapa gadis yang melakukan gerakan tarian yang lemah gemulai.

                                    Gerakan-gerakan ini seperti menggambarkan seorang gadis yang sedang bersedih menantikan
                                    kekasihnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h3>
                                    Tari Moyo
                                </h3>
                                <img class="img-fluid rounded w-50 mt-2 mb-3" src="{{ asset('img/moyo.jpg') }}"
                                    alt="">
                                <p style="color: black; margin-bottom: 3px; margin-top: 6px; text-align: justify">
                                    Satu lagi tarian tradisional khas Sumatera Utara yang wajib kamu ketahui, yakni Tari
                                    Moyo (Tari burung Elang).

                                    Merupakan suatu bentuk kesenian tari yang berasal dari Pulau Nias, Tari Moyo
                                    menggambarkan semangat yang tak terpatahkan, keuletan, kekuatan, dan kasih sayang. Tari
                                    Moyo cukup populer di kalangan masyarakat Nias karena keunikannya dan sarat akan makna.
                                    <br><br>

                                    Menilik dari sejarahnya, Tari Moyo sudah ada sejak zaman dahulu kala dan masih
                                    dilestarikan oleh masyarakat Nias hingga saat ini.

                                    Tarian ini menjadi salah salah satu tarian kebanggaan bagi masyarakat Nias dan kerap
                                    ditampilkan di berbagai acara adat, acara resmi daerah, serta perayaan-perayaan hari
                                    besar. <br><br>

                                    Tari Moyo termasuk dalam jenis tarian pertunjukan, sehingga biasanya memang ditampulkan
                                    sebagai hiburan dalam suatu acara ataupun pertunjukkan seni.

                                    Biasanya, tarian ini ditampilkan oleh penari wanita secara berpasangan yang berjumlah 4
                                    orang penari atau lebih.

                                    Dalam pertunjukannya, para penari yang membawakan Tari Moyo akan menggunakan busana
                                    tradisional khas Suku Nias yang terdiri dari baju lengan panjang, kain panjang, kain
                                    serampang dan ikat kepala khas Nias. <br><br>

                                    Nah, busana tersebut biasanya didominasi oleh warna putih, hitam, merah, ataupun kuning.

                                    Menariknya lagi, pertunjukan Tari Moyo biasanya diiringi oleh musik tradisional seperti
                                    gong khas Nias dan gendering.

                                    Selain itu, pertunjukan tarian ini juga akan diiringi oleh lantunan syair atau lagu yang
                                    dibawakan oleh para pengiring vokal yang biasanya berjumlah dua penyanyi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('sumut') }}" class="btn-back">
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

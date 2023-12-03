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
                    <h1 align="center">Si Pahit Lidah</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <img class="img-fluid rounded w-100" src="{{ asset('img/lidah.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Dahulu, di daerah Sumidang, Sumatera Selatan, ada seorang pangeran bernama Serunting. Ia
                                    adalah anak keturunan raksasa yang namanya Putri Tenggang. <br><br>

                                    Suatu hari, Pangeran Serunting mempersunting seorang gadis desa bernama Sitti, Setelah
                                    menikah, ia mengajak istrinya untuk tinggal di istana. <br><br>

                                    Namun, Sitti bingung. Di satu sisi, ia tidak ingin berpisah dengan adik laki-lakinya
                                    yang bernama Aria Tebing, tapi di sisi lain ia harus patuh pada suaminya. <br><br>

                                    “Dinda tidak tahu harus berbuat apa lagi, Kanda. Dinda tidak tega jika harus
                                    meninggalkan Aria Tebing, adik Dinda satu-satunya,” kata Sitti kepada suaminya. <br><br>

                                    “Kalau begitu, bagaimana jika Aria Tebing kita ajak untuk tinggal bersama di istana?”
                                    usul Pangeran Serunting.

                                    Sitti pun menerima saran tersebut.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/lidah1.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Namun, ketika hal itu disampaikan kepada Aria Tebing, adiknya itu justru menolak.

                                    Ia lebih senang hidup bebas di desa daripada tinggal di istana yang penuh dengan aturan.
                                    <br><br>

                                    Akhirnya, Sitti dan Aria Tebing bermufakat untuk membagi dua kebun warisan dari orangtua
                                    mereka. <br><br>
                                    Agar tidak terjadi perselisihan di antara mereka, Pangeran Serunting pun menyarankan
                                    agar kebun mereka diberi pembatas. <br><br>
                                    “Lebih baik di tengah-tengah ladang itu diberi pembatas agar kelak tidak terjadi
                                    perselisihan di antara kita” ujar Pangeran Serunting, <br><br>

                                    “Saran yang bagus, Kanda" kata Aria Tebing.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/lidah2.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Keesokan harinya, Aria Tebing bersama Serunting berangkat ke kebun itu dengan membawa
                                    sebatang kayu pembatas. <br><br>

                                    Setiba di sana, kayu pembatas itu mereka tanam dalam-dalam di tengah ladang. <br><br>
                                    Beberapa hari kemudian, pada kayu pembatas itu tumbuh tanaman cendawan atau jamur.
                                    <br><br>

                                    Namun, cendawan yang tumbuh pada batang kayu itu jauh berbeda. <br><br>

                                    Cendawan yang mengarah ke kebun Serunting hanya cendawan biasa, sedangkan cendawan yang
                                    mengarah ke kebun Aria Tebing berupa cendawan emas. <br><br>

                                    Aria Tebing pun menjual cendawan emas tersebut dan ia lenjadi kaya raya. Rupanya,
                                    Serunting iri hati melihat nasib baik dialami oleh adik iparnya itu.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/lidah3.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Suatu hari, Serunting mendatangi Aria Tebing yang sedang memetik jamur emas di
                                    ladangnya.

                                    Ia sudah tidak kuat menahan perasaan iri yang menyelimuti hatinya. <br><br>

                                    “Hai, Aria Tebing! Apa yang kau lakukan terhadap tanaman cendawanku?” tanya Pangeran
                                    Serunting. <br><br>

                                    “Apa maksud, Kanda? Aku tidak melakukan apa-apa terhadap cendawan Kanda,” jawab Aria
                                    Tebing dengan heran. <br><br>

                                    “Ah, bohong kamu! Pasti kamu telah berbuat curang kepadaku,” tuduh Pangeran Serunting,
                                    <br><br>

                                    “Engkau telah membalik kayu pembatas itu sehingga cendawan emas itu mengarah ke
                                    ladangmu!”<br><br>

                                    Aria Tebing semakin bingung dengan tuduhan yang ditujukan kepadanya. Ia merasa tidak
                                    pernah membalik kayu pembatas itu.

                                    Cendawan emas itu tumbuh dengan sendirinya,

                                    Meskipun ia sudah meminta maaf dan menjelaskan keadaan yang sebenarnya, Pangeran
                                    Serunting tidak mau terima,

                                    Bahkan, ia menantang Aria Tebing untuk berkelahi.<br><br>

                                    “Hai, Aria Tebing. Kamu tidak usah banyak alasan. Jika kamu berani, lawan aku! Aku
                                    menantangmu!” tantang Pangeran Serunting.<br><br>

                                    Aria Tebing bingung untuk menjawab tantangan itu.

                                    Ia menyadari bahwa dirinya akan mungkin mampu menghadapi kakak iparnya sakti mandraguna
                                    itu.

                                    Tapi, jika ia menolak tantangan itu, Pangeran Serunting pasti akan membunuhnya.<br><br>

                                    “Baiklah, Kanda. Aku akan terima tantangan Kanda, tapi berilah aku waktu 2 hari untuk
                                    berpikir!” pinta Aria Tebing.<br><br>

                                    “Baik, kalau itu maumu. Jika perlu, latihlah kemampuanmu sebelum waktu itu tiba!” seru
                                    Pangeran Serunting dengan nada melecehkan.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/lidah4.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Sejak itu, Aria Tebing sulit memejamkan matanya. Ia bingung mencari cara agar bisa
                                    mengalahkan Pangeran Serunting. <br><br>

                                    Sehari sebelum pertarungan itu dimulai, ia akhirnya menemukan jalan keluarnya. <br><br>

                                    “Ahhaaa… aku tahu cara sekarang,” gumam Aria Tebing. <br><br>

                                    “Kak Sitti pasti tahu kelemahan Pangeran Serunting.”
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/lidah5.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Aria Tebing menemui kakaknya secara sembunyi-sembunyi.

                                    Ia kemudian meminta kepada kakaknya agar mau memberitahu kelemahan Pangeran
                                    Serunting.<br><br>

                                    “Kak Sitti, tolong kasih tahu aku mengenai kelemahan Pangeran Serunting!” bujuk Aria
                                    Tebing, “Kalau tidak, ia pasti akan membunuhku.”<br><br>

                                    Sitti tidak menjawab, Hatinya sedang bingung, la tidak ingin adiknya mati, tapi ia pun
                                    tidak mampu mengkhianati suaminya.<br><br>

                                    “Maafkan aku, adikku. Aku tidak bisa mengkhianati suamiku,” kata Sitti kepada
                                    adiknya.<br><br>

                                    “Tolonglah aku, Kakak,” rengek Aria Tebing,<br><br> “Jika pun aku mengetahui kelemahan
                                    Pangeran
                                    Serunting,

                                    aku tidak akan membunuhhnya, sedangkan ia pasti akan membunuhku. Apakah Kakak rela
                                    melihat aku tewas di tangan suami Kakak sendiri?”<br><br>

                                    Sitti kembali terdiam. Ia tersentuh dengan perkataan adiknya.<br><br>

                                    “Baiklah, Dik. Aku akan memberitahukannya, tapi kamu harus berjanji untuk tidak
                                    membunuhnya,” ujar Sitti.<br><br>

                                    “Baik, aku janji. Aku tidak akan membunuhnya” kata Aria Tebing.<br><br>

                                    Akhirnya, Sitti pun membocorkan rahasia kelamahan suaminya kepada Aria Tebing.<br><br>

                                    “Rahasia kesaktian suamiku ada pada rumput ilalang yang selalu bergetar walaupun tidak
                                    tertiup angin,” kata Sitti,<br><br>

                                    “Jika kamu menombak rumput ilalang itu, kekuatannya langsung lenyap seketika.”<br><br>

                                    “Baik, Kak, Terima kasih atas bantuannya’ ucap Aria Tebing.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/lidah6.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Sejak itu, Aria Tebing sulit memejamkan matanya. Ia bingung mencari cara agar bisa
                                    mengalahkan Pangeran Serunting. <br><br>

                                    Sehari sebelum pertarungan itu dimulai, ia akhirnya menemukan jalan keluarnya. <br><br>

                                    “Ahhaaa… aku tahu cara sekarang,” gumam Aria Tebing. <br><br>

                                    “Kak Sitti pasti tahu kelemahan Pangeran Serunting.”
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/lidah7.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Sejak itu, Aria Tebing sulit memejamkan matanya. Ia bingung mencari cara agar bisa
                                    mengalahkan Pangeran Serunting. <br><br>

                                    Sehari sebelum pertarungan itu dimulai, ia akhirnya menemukan jalan keluarnya. <br><br>

                                    “Ahhaaa… aku tahu cara sekarang,” gumam Aria Tebing. <br><br>

                                    “Kak Sitti pasti tahu kelemahan Pangeran Serunting.”
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/lidah8.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Sejak itu, Aria Tebing sulit memejamkan matanya. Ia bingung mencari cara agar bisa
                                    mengalahkan Pangeran Serunting. <br><br>

                                    Sehari sebelum pertarungan itu dimulai, ia akhirnya menemukan jalan keluarnya. <br><br>

                                    “Ahhaaa… aku tahu cara sekarang,” gumam Aria Tebing. <br><br>

                                    “Kak Sitti pasti tahu kelemahan Pangeran Serunting.”
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/lidah9.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Sejak itu, Aria Tebing sulit memejamkan matanya. Ia bingung mencari cara agar bisa
                                    mengalahkan Pangeran Serunting. <br><br>

                                    Sehari sebelum pertarungan itu dimulai, ia akhirnya menemukan jalan keluarnya. <br><br>

                                    “Ahhaaa… aku tahu cara sekarang,” gumam Aria Tebing. <br><br>

                                    “Kak Sitti pasti tahu kelemahan Pangeran Serunting.”
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/lidah10.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Sejak itu, Aria Tebing sulit memejamkan matanya. Ia bingung mencari cara agar bisa
                                    mengalahkan Pangeran Serunting. <br><br>

                                    Sehari sebelum pertarungan itu dimulai, ia akhirnya menemukan jalan keluarnya. <br><br>

                                    “Ahhaaa… aku tahu cara sekarang,” gumam Aria Tebing. <br><br>

                                    “Kak Sitti pasti tahu kelemahan Pangeran Serunting.”
                                </p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('sumsel') }}" class="btn-back">
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

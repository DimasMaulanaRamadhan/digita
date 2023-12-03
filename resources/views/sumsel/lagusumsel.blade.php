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
                    <h1 align="center">Lagu Daerah Sumatera Selatan</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Kabile-bile
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Kebile-bile mangke ku lege <br>
                                    Kebile-bile ku ade kance <br>
                                    Kebile-bile mangke ku lege <br>
                                    Kebile-bile ku ade kance<br><br>

                                    Kebile nian jagunglah putih<br>
                                    Putih dik putih ke kendam kina<br>
                                    Kebile nian ibung kah nulih<br>
                                    Nulih dik nulih kudendam kina<br><br>

                                    Kabile nian mampat begune<br>
                                    Mangke dik payah ku nandan lagi<br>
                                    Kebile nian sifat begune<br>
                                    Mangke dik payah ku midang lagi<br><br>

                                    Oh, malang nian nasib 'mbak ini<br>
                                    Bilangan jame lah laut gale<br>
                                    Alahkah sedih ai tumbak ini<br>
                                    Aku 'mbak ini dide bekance
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu ini mengenai seorang yang merasa kesepian dan menanti pendamping hidup. Di mana
                                    dirinya merasa tak berguna lantaran semua orang meninggalkannya yang tetap dalam
                                    penantian.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Dek Sangke
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Dek sangke aku dek sangke<br>
                                    Awak tunak ngaku juare<br>
                                    Alamat badan sengsare<br>
                                    Akhirnya masuk penjare<br><br>

                                    Dek sangke aku dek sangke<br>
                                    Cempedak babuah nangke<br>
                                    Dek sangke aku dek sangke<br>
                                    Cempedak babuah nangke<br><br>

                                    Dek sangke aku dek sangke<br>
                                    Ujiku bujang tak batanye tua bangke<br>
                                    Anaknye lah gadis gale<br>
                                    Dek sangke gadis tegile<br><br>

                                    Dek sangke aku dek sangke<br>
                                    Cempedak babuah nangke<br>
                                    Dek sangke aku dek sangke<br>
                                    Cempedak babuah nangke<br><br>

                                    Dek sangke aku dek sangke<br>
                                    Ujiku gadis tak batanye jande mude<br>
                                    Anaknye lah ade tige<br>
                                    Dek sangke bujang tegile<br><br>

                                    Dek sangke aku dek sangke<br>
                                    Cempedak babuah nangke<br>
                                    Dek sangke aku dek sangke<br>
                                    Cempedak babuah nangke
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu ini menceritakan suatu kebohongan yang dilakukan oleh seseorang kelak akan
                                    terbongkar juga. Dengan begitu lahu daerah Sumatera Selatan ini mengajarkan untuk tidak
                                    berbohong.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Ya Saman
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Nyelek Belumban Perahu Bidar di Sungai Musi<br>
                                    Janganlah lupo meli telok abang<br>
                                    Cantik rupo penyabar dan baek hati<br>
                                    Adek Manis berambut Panjang di kuncit kepang<br><br>

                                    Lika-liku banyu batanghari Sembilan<br>
                                    Mengalir bemuaro ke Sungai Musi jugo<br>
                                    Elok laku ngaesi rupo cindo menawan<br>
                                    Muat kakak siang tekenang malem tejago<br><br>

                                    Pulo Kemaro melah Sungi Musi ke Sungsang<br>
                                    Nak Ke pusri laju kesasar ke Kalidoni<br>
                                    Badan saro pikiran resah hati teguncang<br>
                                    Ngarepke adek kalu be galak jadi bini<br><br>

                                    Ay.. ya..ya..ya ya Saman<br>
                                    Pecaknyo mudah tapi saro nian<br>
                                    Ay.. ya..ya..ya ya Saman<br>
                                    Nyari bini yang benar-benar setolok an<br>
                                    Ay.. ya..ya..ya ya Saman<br>
                                    Ya Saman Ya Saman Ya Saman
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu Ya Saman merupakan salah satu lagu khas daerah Palembang yang sering dimainkan di
                                    upacara pernikahan. Lagu ini mulai diperkenalkan sejak tahun 2009 dan diciptakan oleh
                                    Kamsul A Harla. <br><br>

                                    Ya Saman memiliki makna untuk menunjukkan kesan positif dan pujian kepada gadis yang
                                    cantik. Lagu ini juga kental akan lantunan musik melayu yang mendayu-dayu.
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Cuk Mak Ilang
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Kapal api masok Pelembang<br>
                                    Banyu tenang jadi gelumbang<br>
                                    Oi makmano ati dak bimbang<br>
                                    Gades doson bujang Pelembang<br><br>

                                    Cop mak ilang<br>
                                    Mak ilang jaga batu<br>
                                    Dimano koceng belang<br>
                                    Di situ rumah aku<br><br>

                                    Alangkah lemak rumah di lebak<br>
                                    Siput dan gondang memanjat cagak<br>
                                    Alangkah lemak rumah nan parak<br>
                                    Bukak jendelo lah saling agam<br><br>

                                    Cop mak ilang<br>
                                    Mak ilang jaga batu<br>
                                    Dimano koceng belang<br>
                                    Di situ rumah aku
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu ini menceritakan kisah cinta di kalangan anak muda. Bila dilihat dari liriknya,
                                    lagu ini rapi bagaikan sebuah pantun. Demikian karena orang Sumatera Selatan atau
                                    masyarakat Melayu di zaman dahulu, senang menyampaikan sesuatu delam bentu pantun.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Sayang Selayak
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Sayang selayak burung lempipi, sayang selayak burung lempipi<br><br>
                                    Menarap abang keputehan ai keputehan<br><br>
                                    Kakang berayak ke duson ini<br><br>
                                    Kakang berayak ke duson ini<br><br>
                                    Tuape batan perulehan, ai perulehan<br><br>
                                    Sayang selayak burung lempipi, sayang selayak burung lempipi<br><br>
                                    Sayang selayak burung lempipi, sayang selayak burung lempipi<br><br>
                                    Menarap abang keputehan ai keputehan<br><br>
                                    Kami berayak keduson ini<br><br>
                                    Kami berayak keduson ini<br><br>
                                    Ade mbak gunong perulehan, ai perulehan<br><br>
                                    Sayang selayak burung lempipi, sayang selayak burung lempipi
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu ini berisi nasihat agar saling mencintai dengan tulus. Sehingga lagu ini mengajak
                                    untuk memiliki rasa cinta yang damai dan saling mengayomi satu sama lainnya. Lagu Sayang
                                    Selayak juga banyak dinyanyikan dalam berbagai acara lantaran lirik dan maknanya yang
                                    mendalam.
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Sukat Malang
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Naseb malang nian<br><br>
                                    Ditinggalkan kundang<br><br>
                                    Kumbang suhang terbang<br><br>
                                    Terbang Jauh malang<br><br>
                                    Sukat malang badan<br><br>
                                    Senasep bunge lalang<br><br>
                                    Tinggal dusun laman<br><br>
                                    Kemambang midang suhang<br><br>
                                    Ngeding sukat dek betulan<br><br>
                                    Sepanjangan ...<br><br>
                                    Ngape nian tibe badan sukat malang
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Bercerita tentang seseorang yang menyesal atas dirinya yang kehilangan seorang kekasih.
                                    Yang nasib kesendiriannya itu bagaikan alang-alang yang tertiup angin, dan
                                    terombang-ambing tiada arah.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Idup Nak Rantau
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Mulai pel beak... uku kulaleu<br><br>

                                    Mesoa kuat Nupang temalem<br>
                                    Lak belek mai pe belek<br>
                                    Inouk cigei bapek bilaleu<br><br>

                                    Lak mok mei coa de lapen<br>
                                    Lak te mokoak coa de caci<br>
                                    Genpadek kesaro idup nak rantau<br><br>

                                    Lak mok mei coa de lapen<br>
                                    Lak te mokoak coa de caci<br>
                                    Genpadek kesaro idup nak rantau
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Menceritakan tentang seseorang yang tengah berjuang dalam perantauan, tetapi malah
                                    dikhianati oleh sang kekasih dengan menikah bersama orang lain.
                                </p>
                            </div>
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

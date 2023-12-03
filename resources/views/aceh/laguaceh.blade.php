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
                    <h1 align="center">Lagu Daerah Aceh</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Bungong Jeumpa
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Bungong Jeumpa Bungong Jeumpa <br>
                                    Meugah di Aceh <br>
                                    Bungong teuleubeh teuleubeh <br>
                                    Indah lagoina <br><br>
                                    Bungong Jeumpa Bungong Jeumpa <br>
                                    Meugah di Aceh <br>
                                    Bungong teuleubeh teuleubeh <br>
                                    Indah lagoina <br><br>
                                    Puteh kuneng meujampu mirah <br>
                                    Bungong si-ula indah lagoina <br>
                                    Puteh kuneng meujampu mirah <br>
                                    Bungong si-ula indah lagoina <br><br>
                                    Lam sinar buleun lam sinar buleun <br>
                                    Angen peu ayon <br>
                                    Luroh meususon meususon yang mala mala <br>
                                    Lam sinar buleun lam sinar buleun <br>
                                    Angen peu ayon <br>
                                    Luroh meususon meususon yang mala mala <br><br>
                                    Keubit that meubee meunyoe tatem com <br>
                                    Leupah that harom si bungong jeumpa <br>
                                    Keubit that meubee meunyoe tatem com <br>
                                    Leupah that harom si bungong jeumpa <br><br>
                                    Bungong Jeumpa Bungong Jeumpa <br>
                                    Meugah di Aceh <br>
                                    Bungong teuleubeh teuleubeh <br>
                                    Indah lagoina <br><br>
                                    Bungong Jeumpa Bungong Jeumpa <br>
                                    Meugah di Aceh <br>
                                    Bungong teuleubeh teuleubeh <br>
                                    Indah lagoina <br><br>
                                    Puteh kuneng meujampu mirah <br>
                                    Bungong si-ula indah lagoina <br>
                                    Puteh kuneng meujampu mirah <br>
                                    Bungong si-ula indah lagoina <br><br>
                                    Lam sinar buleun lam sinar buleun <br>
                                    Angen peu ayon <br>
                                    Luroh meususon meususon yang mala mala <br>
                                    Lam sinar buleun lam sinar buleun <br>
                                    Angen peu ayon <br>
                                    Luroh meususon meususon yang mala mala <br><br>
                                    Keubit that meubee meunyoe tatem com <br>
                                    Leupah that harom si bungong jeumpa <br>
                                    Keubit that meubee meunyoe tatem com <br>
                                    Leupah that harom si bungong jeumpa <br>
                                    Leupah that harom si bungong jeumpa <br>
                                    Leupah that harom si bungong jeumpa
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    ‘Bungong Jeumpa’ memiliki arti bunga cempaka yang menjadi simbol bunga khas Aceh. Lagu
                                    ini juga mencerminkan masyarakat Aceh yang bersyukur telah diberi tanah yang subur dan
                                    indah. Nyanyian ini biasanya dibarengi dengan tarian tradisional khas Aceh dengan nama
                                    yang sama. Formasi tarian Bungong Jeumpa dilakukan duduk dan berdiri dengan gerakan
                                    tangan yang serasi bersama penari lain.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Lembah alas
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Walo pe... kau ndauh di mate <br>
                                    Tapi denoh ni ate <br> <br>
                                    Walo pe kau ndauh di mate <br>
                                    Tapi denoh ni ate <br> <br>
                                    Bakasmu ni pulo Jawe <br>
                                    Aku ni kutecane <br><br>
                                    Kuharap kao manjage <br>
                                    Kesucien cinte <br>
                                    Semoge cinte abadi <br>
                                    Soh ni wakhi pudhi <br><br>
                                    Wakhi nggo meganti minggu <br>
                                    Bulan meganti tahun <br>
                                    Metahun-tahun ndah jumpe <br>
                                    Namun aku tetap cinte <br><br>
                                    Kau umpame bumi aku mate <br>
                                    Wakhi nggo pasti kao aku sinakhi <br><br>
                                    Begedi me ku hakhap <br>
                                    Cintamu enggi <br>
                                    Bage belin cinteku <br>
                                    Belin atemu bangku <br><br>
                                    Sekali cinte oh tetap cinte <br>
                                    Sekali sayang oh tetap sayang <br>
                                    Walo pe kithe jakhang jumpe <br><br>
                                    Nampang kadang ku cembukhu <br>
                                    Cembukhu ku kakahane cinte <br>
                                    Ku gelisah kakhene tedoh <br>
                                    Tedoh ate be dirimu
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Dalam lagu ini, mengisahkan kisah cinta antara sepasang kekasih yang harus menjaga
                                    kesetiaan mereka meskipun terpisah oleh jarak yang jauh. Terdapat pesan tersirat pada
                                    lagu ini dimana jarak fisik yang memisahkan mereka sebenarnya tidak menghalangi perasaan
                                    cinta mereka. Sebaliknya, jarak tersebut justru menjadi bukti kuat dari kesetiaan dan
                                    kecintaan mereka satu sama lain.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Aceh Lon Sayang
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Daerah Aceh, tanoh lon sayang <br><br>
                                    Nibak tempat nyan, lon udep matee <br><br>
                                    Tanoh keuneubak, indatu moyang <br><br>
                                    Lampoh deungon blang luah bukeon lee <br><br>
                                    Tanoh kenuneubak, na so peutimang <br><br>
                                    Na so peuseunang, keureuja matee <br><br>
                                    Hate nyang susah, lon rasa seunang <br><br>
                                    Aceh lon saying, sampo'an matee <br><br>
                                    Hate nyang susah, lon rasa seunang <br><br>
                                    Aceh lon saying, sampo'an matee
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    lagu Aceh Lon Sayang yang menggambarkan keindahan Aceh dan cinta mendalam masyarakat
                                    terhadap tanah kelahiran. Lagu ini diciptakan oleh Anzib Lamnyong, seorang maestro musik
                                    terkemuka di Aceh yang telah menciptakan banyak karya fenomenal. Kata Aceh Lon Sayang
                                    dalam lagu ini mencerminkan makna kasih sayang dan cinta yang mendalam terhadap daerah
                                    asal. Lagu ini juga merupakan ekspresi rasa syukur masyarakat Aceh atas kelimpahan
                                    sumber daya alam dan kekayaan yang ada.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Saleum
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Salamualaikom warahmatullah <br><br>
                                    Jaroe dua blah ateuh jeumala <br><br>
                                    Jaroe lon siploh di ateuh ule <br><br>
                                    Meuah lon lake bak kawom dumna <br><br>
                                    Jaroe lon siploh di ateuh ubon <br><br>
                                    Salamualaikom lon tegur sapa <br><br>
                                    Jaroe lon siploh beu ot sikureng <br><br>
                                    Syarat ulon khen tanda mulia <br><br>
                                    Jaroe sikureng lon beu ot lapan <br><br>
                                    Geunan to timphan ngon aso kaya <br><br>
                                    Jaroe lon lapan lon beuot tujoh <br><br>
                                    Ranup lam bungkoh lon jok keu gata
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Saleum adalah salah satu lagu yang menceritakan kehidupan sosial di Aceh. Saleum dalam
                                    Bahasa Aceh berarti salam dan lagu ini mencerminkan nilai-nilai keagamaan, seperti
                                    memberikan salam kepada sesama dan melakukan perbuatan baik dalam kehidupan sehari-hari.
                                    Selain memiliki makna keagamaan, lagu ini juga mencerminkan aspek kebudayaan dan sering
                                    dinyanyikan dalam tarian penyambutan tamu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Jambo
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Jambo … Jambo <br>
                                    Hai Jambo Sinan Diblang <br><br>
                                    Jambo … Jambo <br>
                                    Hai Jambo Sinan Manyang <br><br>
                                    Jambo … Jambo <br>
                                    Hai Jambo Sinan Diblang <br>
                                    Hai Jambo Sinan Manyang
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu Jambo dikenal sebagai lagu pengiring Tari Saman yang erat kaitannya dengan Lapangan
                                    Blang Padang di Banda Aceh. Lagu daerah Aceh ini memuji keindahan alam Aceh yang tetap
                                    subur bahkan saat musim kemarau tiba. Dengan lirik yang menggambarkan kekayaan alam
                                    Aceh, Jambo adalah bagian tak terpisahkan dari budaya dan tradisi Aceh yang kaya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Dodaidi
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Allah hai dô dô da idi <br>
                                    Boh gadông bi boh kayèe uteun <br>
                                    Rayek sinyak hana peu ma bri <br>
                                    'Ayéb ngön keuji ureueng dônya kheun <br><br>
                                    Allah hai dô dô da idang <br>
                                    Seulayang blang ka putôh taloe <br>
                                    Beurijang rayek muda seudang <br>
                                    Tajak bantu prang tabila nanggroe <br>
                                    Wahé aneuek bek taduek lé <br><br>
                                    Beudöh saré tabila bansa <br>
                                    Bèk tatakot keu darah ilé <br>
                                    Adak pih maté poma ka rèla <br>
                                    Jak lôn tatèh, meujak lon tatèh <br><br>
                                    Beudoh hai aneuek tajak u Acèh <br>
                                    Meubèe bak ôn ka meubèe timphan <br>
                                    Meubèe badan bak sinyak Acèh <br>
                                    Allah hai Po Ilahon hak <br>
                                    Gampông jarak h'an trôh lôn woe <br>
                                    Adak na bulèe ulon teureubang <br>
                                    Mangat rijang trôk u nanggroe <br><br>
                                    Allah hai jak lôn timang preuek <br>
                                    Sayang riyeuk disipreuek panté <br>
                                    'Oh rayek sinyak nyang puteh meupreuek <br>
                                    Töh sinaleuek gata boh hate
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu Do Do Daidi adalah sebuah lagu daerah Aceh yang menggambarkan momen seorang ibu
                                    menidurkan anaknya dengan penuh kasih sayang. Dalam lagu ini, ibu mengayunkan anaknya
                                    sambil menyanyikan melodi Do Do Daidi hingga si anak tertidur nyenyak. Selain sebagai
                                    lagu pengantar tidur, lagu ini juga mencerminkan kehidupan religius yang kuat di wilayah
                                    Aceh, yang kental dengan nilai-nilai Islam. Do Do Daidi adalah lagu yang mengingatkan
                                    pendengarnya untuk menjalani hidup sesuai dengan ajaran Allah SWT.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Tawar sedenge
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Engon ko so tanoh Gayo <br><br>
                                    Si megah mu reta dele <br><br>
                                    Rum batang uyem si ijo kupi bako e <br><br>
                                    Pengen ko tuk ni korek so <br><br>
                                    Uwet mi ko tanoh Gayo <br><br>
                                    Seselen pumu ni baju netah dirimu
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu daerah Aceh ini berasal dari Gayo yang diciptakan oleh seorang seniman asli Gayo
                                    bernama AR Moese. Lagu daerah Aceh ini mengisahkan tentang keindahan dan kekayaan alam
                                    yang ada di Gayo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Hikayat Prang sabi
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Tajak prang musoh beuruntoh dum sitrei nabi. <br><br>
                                    Nyang meu eungki keu Rabbi keu Po yg esa. <br><br>
                                    Musoe hantem prang syit malang ceulaka tuboh rugoe roh. <br><br>
                                    Syuruga tan roh reugoe roh balah neuraka. <br><br>
                                    Syuruga tan roh reugoe roh balah neuraka.
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu Hikayat Prang Sabi merupakan sebuah lagu perjuangan yang sudah sangat lama dikenal
                                    masyarakat Aceh. Lagu ini dipercaya dapat memberikan semangat dan keberanian kepada para
                                    pejuang kemerdekaan pada saat menghadapi penjajahan Belanda kala itu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Aneuk Yatim
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Jinoe lon kisah saboh riwayat <br><br>
                                    Kisah baro that di Aceh raya <br><br>
                                    Lam karu Aceh .. Acehh timu ngon barat <br><br>
                                    Ngon barat <br><br>
                                    Di saboh tempat … tempat muno calitra <br><br>
                                    Na sidroe aneuk jimoe siat at <br><br>
                                    Lam jiep jiep saat saat dua ngon poma
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Di dalam lagu ini diceritakan kehidupan anak yatim yang begitu menggugah hati. Lagu ini
                                    dianggap sebagai pengharapan bagi masyarakat Aceh agar tidak ada lagi konflik hingga
                                    menghilangkan nyawa dan membuat anak-anak menjadi anak yatim.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    I Lah Ni Ume (Ala Rune Ala Runang)
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Ni kacang koro… oooo, gere tebuh uwet <br><br>
                                    Si karna kacang piet, diatas berdiang <br><br>
                                    Ala kêtis, tis <br><br>
                                    Ala kêtis, ala kêtis, tis, tang tang <br><br>
                                    Ala rune rune <br><br>
                                    Ala runang runang <br><br>
                                    Asal bêtôl kê biyak nabang
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    I Lah Ni Ume (Ala Rune Ala Runang) sebuah lagu indah yang dicipta oleh penyair (ceh)
                                    didong Gayo, Item Gamang, yang berasal dari klop/grup Amruna Kampung Umang, Aceh Tengah.
                                    Lagu tradisional ini jadi salah satu lagu asal Gayo yang paling populer juga di
                                    Indonesia. Sekadar fakta tambahan, lagu ini pernah menepati puncak tertinggi sebuah
                                    acara kontes musik dangdut hingga 5 minggu berturut-turut, lo.
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

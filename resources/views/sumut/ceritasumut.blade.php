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
                    <h1 align="center">Danau Toba</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4">
                                <img class="img-fluid rounded w-100" src="{{ asset('img/danau.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Di sebuah lembah daerah Sumatera, hiduplah seorang petani bernama Toba. Dia seorang
                                    petani yang sangat rajin. Namun sayang, pada suatu ketika ia sedang kelaparan, hasil
                                    kebunnya tidak berhasil. Karena lapar, maka Toba pergi memancing di sungai. Lama sekali
                                    dia menunggu, hingga dia putus asa. <br><br>
                                    Saat Toba memutuskan untuk pulang, tiba-tiba ada yang menarik umpannya. Toba kegirangan
                                    dan menarik pancingnya. <br><br> "Wah ada ikan besar!" seru Toba. <br><br>Benar saja, di
                                    ujung kailnya
                                    tersangkut ikan besar bersisik emas. Toba segera membawa ikan besar itu untuk dimasak di
                                    rumah.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/danau1.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Sesampainya di rumah Toba kecewa, sebab kayu bakarnya telah habis. <br><br> "Yah, tidak
                                    ada kayu
                                    bakar di sini. Sebaiknya aku akan mencari kayu bakar di ladang sekarang" kata
                                    Toba. <br><br>Kemudian ikan itu pun diletakkan di dalam baskom, dan Toba pergi mencari
                                    kayu bakar
                                    ke ladang. <br><br> "Aku akan makan enak hari ini!" seru Toba sambil membawa kayu bakar
                                    ke
                                    belakang rumahnya. <br><br>Api sudah mulai menyala, namun saat Toba hendak mengambil
                                    ikan itu
                                    alangkah terkejutnya ia. Sebab ikan itu sudah lenyap, yang ada justru berkeping-keping
                                    uang emas. <br><br> "Hah dimana ikanku tadi? dan itu uang siapa?" kata Toba yang
                                    kebingungan.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/danau2.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Namun saat Toba membuka pintu kamar, alangkah terkejutnya dia. Seorang perempuan tinggi
                                    semampai dengan rambut panjang sedang menyisir rambutnya di depan cermin. <br><br> "Wah
                                    alangkah
                                    menawannya perempuan ini. Hei siapa siapa engkau ini?" tanya Toba. <br><br>Perempuan itu
                                    membalikkan badan, dan Toba semakin terpesona,  belum pernah dia melihat perempuan
                                    secantik dia. <br><br> "Akulah jelmaan ikan yang kamu tangkap tadi. Sementara keping
                                    uang emas
                                    tadi adalah sisik-sisikku" kata perempuan tersebut. <br><br>Perkataan perempuan tersebut
                                    membuat
                                    Toba bingung tak percaya. Sebaliknya, perempuan itu pun tersenyum melihatnya. <br><br>
                                    "Aku
                                    dikutuk oleh dewa menjadi ikan. Tapi berkat engkau, kutukan itu hilang. Mari kita ke
                                    dapur akanku masakan kamu makanan. Kamu pasti lapar, kan?" tanya perempuan itu.
                                </p>
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Toba akhirnya hanya menurut ketika perempuan itu mengajaknya ke dapur. Dengan cekatan
                                    perempuan itu segera menyiapkan makanan. Toba sangat takjub dengan kehebatan perempuan
                                    itu di dapur. <br><br> "Seandainya dia ini jadi istriku" ujar Toba dalam hati.
                                    <br><br>Namun rupanya si
                                    perempuan itu bisa membaca keinginan hati Toba. <br><br> "Aku mau jadi istrimu, tapi aku
                                    punya
                                    satu syarat" kata perempuan itu. <br><br> "Katakan apa syaratnya jika kita menikah
                                    nanti?" tanya
                                    Toba. <br><br>Setelah selesai makan, Toba sangat terkejut mendengar syaratnya. <br><br>
                                    "Jangan pernah
                                    mengungkit asal mulaku sebagai seekor ikan. Aku tidak akan menanggung akibatnya jika
                                    kamu melanggarnya" jawabnya. <br><br>Toba menyanggupinya, karena baginya itu syarat yang
                                    mudah.
                                    Toba dan perempuan itu akhirnya menikah. Ini yang membuat Toba semakin bekerja keras di
                                    ladang untuk mencukupi kebutuhan mereka sehari-hari.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/danau3.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Tak lama kemudian, Toba dan sang istri dikaruniai seorang anak. Toba sangat bahagia, dia
                                    tidak sabar menunggu kelahiran anaknya. Setelah sembilan bulan lamanya, seorang bayi
                                    laki-laki lahir. Toba memberinya nama Samosir. <br><br>Namun Samosir tumbuh menjadi anak
                                    yang
                                    sangat nakal dan pemalas. Sehari-harinya, ia hanya main-main. Toba masih berusaha
                                    bersabar dengan kelakuan Samosir. Jika Toba bekerja di ladang, Samosir tidak pernah mau
                                    mengantarkan makanan yang sudah dimasak. <br><br>Akhirnya Mamanya sendiri yang mengantar
                                    makanan
                                    itu kepada Toba. <br><br> "Istriku kamu jangan terlalu memanjakan anak kita. Jika terus
                                    dimanjakan, Samosir malah jadi tambah nakal!" kata Toba. <br><br>Namun sang istri hanya
                                    tersenyum
                                    mendengarnya. <br><br> "Bersabarlah, karena suatu hari nanti Samosir akan menyadarinya"
                                    kata
                                    istrinya. <br><br> "Aku sudah cukup bersabar, tapi kesabaran itu kan ada batasnya" ujar
                                    Toba.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/danau4.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Suatu hari istri Toba membujuk anaknya untuk mengantar makanan ke ladang. Semula Samosir
                                    tidak mau, namun sang Mama Terus membujuknya. Akhirnya Samosir menuruti
                                    keinginannya. <br><br> "Baiklah! nanti aku akan antar makanan ini untuk Papa!" kata
                                    Samosir. <br><br>Namun
                                    di tengah jalan, Samosir malah bermain bersama teman-temannya. Selesai bermain Samosir
                                    merasa lapar. <br><br> "Aduh, lapar sekali aku! Oh iya, aku makan saja makanan ini hehe"
                                    kata
                                    Samosir sambil membuka makanan yang harusnya diantarkannya untuk sang Papa.
                                    <br><br>Samosir hanya
                                    menyisakan sedikit makanan, padahal di ladang, Toba tidak sabar menunggu makanan yang
                                    tidak kunjung datang. Dia sudah sangat lapar, apalagi tidak sempat sarapan karena banyak
                                    sekali pekerjaan yang dilakukannya hari ini. <br><br>
                                    Dari kejauhan, Samosir datang dengan berlari-lari. <br><br> "Menunggumu lama sekali!"
                                    kata Toba
                                    sambil marah. <br><br>Samosir tidak menjawab dan langsung memberikan rantang berisi
                                    makanan.
                                    Betapa terkejutnya Toba, sebab hanya menemukan sisa makanan yang sedikit sekali.
                                    <br><br> "Kamu
                                    sudah makan makanan Papa ya! Kelakuanmu ini sudah di luar batas ya anak ikan!" kata Toba
                                    dengan penuh amarah. <br><br> Kemarahan Toba tidak terbendung lagi, sehingga tanpa sadar
                                    dia sudah
                                    mengucapkan pantangan yang dulu disyaratkan istrinya. Tak hanya itu, Toba memukul
                                    Samosir
                                    hingga menangis kencang dan berlari menuju rumah.
                                </p>
                                <img class="img-fluid rounded w-100" src="{{ asset('img/danau5.jpg') }}" alt="">
                                <p style="color: black; margin-bottom: 5px; margin-top: 5px">
                                    Sesampainya di rumah, Samosir mengadu pada sang Mama. <br><br> "Kata Papa aku ini anak
                                    ikan, apa
                                    benar itu?" kata Samosir sambil menangis. <br><br>Istri Toba sangat sedih, karena Toba
                                    telah
                                    mengungkit asal-usulnya meski hanya ke anaknya. Kemudian perempuan itu menyuruh Samosir
                                    untuk berlari ke atas bukit. <br><br> "Cepatlah kau lari ke atas bukit nak, sebelum air
                                    bah
                                    datang!" kata sang Mama. <br><br>Walaupun kebingungan, tanpa panjang lebar, Samosir
                                    menuruti
                                    keinginan Mamanya. <br><br> "Baik Ma!" kata Samosir yang menurut. <br><br>
                                    Tak lama kemudian, segeralah langit berwarna gelap dan petir menyambar-nyambar.
                                    Tiba-tiba air bah muncul dari arah sungai. Istri Toba itu tiba-tiba meloncat ke dalam
                                    air
                                    bah dan seketika menjadi ikan kembali.Toba yang bekerja di ladang terkejut karena
                                    tiba-tiba air bah datang. <br>br' "Air apa itu?!" tanya Toba. <br><br>Namun, Toba idak
                                    sempat melarikan
                                    diri sehingga hanyut dan tenggelam dalam air bah. Segera saja air bah menggenangi
                                    seluruh
                                    lembah dan hanya menyisakan pucuk bukit di tengahnya. Di bukit itu, Samosir
                                    sembunyi. Namun saat air bah berubah menjadi danau, dan Samosir pun menjadi Pulau.
                                </p>
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

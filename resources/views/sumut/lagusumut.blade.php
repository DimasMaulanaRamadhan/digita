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
                    <h1 align="center">Lagu Daerah Sumatera Utara</h1>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Butet
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Butet dipangungsian do <br>
                                    apang mu ale, Butet <br><br>

                                    Da margurilla da <br>
                                    mardarurat ale, Butet <br><br>

                                    Da margurilla da <br>
                                    mardarurat ale, Butet <br><br>

                                    I doge doge doge (hi) da i <br>
                                    doge (hi) doge <br><br>

                                    I doge doge doge (hi) da i <br>
                                    doge (hi) doge (hi) doge <br><br>

                                    Butet so tung ngolngolan <br>
                                    roha muna ale, Butet <br><br>

                                    Paima tona manang surat <br>
                                    ale, Butet <br><br>

                                    Paima tona manang surat <br>
                                    ale, Butet <br><br>

                                    I doge doge doge (hi) da i <br>
                                    doge (hi) doge <br><br>

                                    I doge doge doge (hi) da i <br>
                                    doge (hi) doge (hi) doge
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Makna dari lagu ini adalah seorang ibu yang memberi tahu putrinya bahwa ayahnya sedang
                                    pergi ke medan perang untuk melawan penjajah Belanda. Sang ibu memberikan keyakinan
                                    bahwa ayahnya akan berhasil mengalahkan penjajah, dan dia memberikan pesan kepada
                                    putrinya agar tumbuh besar dan menjadi generasi penerus bangsa yang kuat dan cerdas,
                                    sehingga tidak akan tertipu oleh bangsa penjajah.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Sinanggar Tullo
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Sinanggar tullo tullo a tullo<br>
                                    sinanggar tullo tullo a tullo<br><br>

                                    Sinanggar tullo tullo a tullo<br>
                                    sinanggar tullo tullo a tullo<br><br>

                                    Sinanggar tullo tullo a tullo<br>
                                    sinanggar tullo tullo a tullo<br><br>

                                    Tudia ma luluan da goreng<br>
                                    goreng bahen soban<br><br>

                                    Sai tudia ma luluan<br><br>

                                    Da boru tobing bahen<br>
                                    dongan sinanggar tullo tullo<br>
                                    a tullo <br><br>

                                    Sinanggar tullo tullo a tullo <br>
                                    sinanggar tullo tullo a tullo<br><br>

                                    Sinanggar tullo tullo a tullo<br>
                                    sinanggar tullo tullo a tullo<br><br>

                                    Sinanggar tullo tullo a tullo<br>
                                    sinanggar tullo tullo a tullo<br><br>

                                    Bidang bulung ni rimbang<br>
                                    da bidangan bulung ni<br>
                                    dulang <br><br>

                                    Sai pandokan ni dainang <br><br>

                                    Da ikkon do marboru tulang <br>
                                    sinanggar tullo tullo a tullo
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu Sinanggar Tulo menggambarkan situasi di mana seorang anak mendengarkan nasihat dari
                                    orang tua mereka tentang pencarian jodoh. Dalam lagu ini, anak tersebut merasa bingung
                                    tentang bagaimana mencari pasangan hidup yang tepat.<br><br>

                                    Orang tua anak tersebut memberikan nasihat yang berfokus pada nilai-nilai adat yang
                                    harus dipegang ketika mencari pasangan hidup agar menghindari masalah di masa depan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Aek Sarulla
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Aek Sarulla tudia ho laho<br>
                                    tung ganjang ma antong<br>
                                    dalanmi<br><br>

                                    Nunga leleng hundul hundul<br>
                                    ahu di topi ni aek Sarulla i<br><br>

                                    Aek Sarulla na mansai tio<br>
                                    tung godang mangka<br>
                                    lunguni ho<br><br>

                                    Sai paboa ma jolo tu ahu ni<br>
                                    idam di tonga dalan i<br><br>

                                    Paimahon barita na i<br>
                                    manang tudia ibana laho<br><br>

                                    Manang ise na marnida ho<br>
                                    so adong na mandok<br>
                                    magopo<br><br>

                                    Boan barita sian nadua<br>
                                    patuduhon hina ulimi<br><br>

                                    Angka tor dohot rura nadua<br>
                                    nunga sun dipangkulingi ho<br><br>

                                    Ai inumon pe ho tung tabo<br>
                                    paradion pe ho tung tabo<br><br>

                                    Tung paboa husiphon tu<br>
                                    ahu ni idam di tonga dalan i<br><br>

                                    Ro ma ho sai husiphon tu<br>
                                    ahu aek Sarula tudia ho laho<br><br>

                                    Nang pe laho au tu luat na<br>
                                    dao tung so lupa do ahu<br>
                                    sian ho
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Aek Sarulla adalah lagu daerah yang berasal dari Tapanuli Utara dan diciptakan oleh
                                    Siddik Sitompul. Lagu ini menceritakan rasa ingin tahu dan kagumnya terhadap keindahan
                                    alam Sungai Sarulla, yang terletak di Pasar Sarulla, Pahae Jae, Tapanuli Utara.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Mariam Tomong
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Salendang ma<br>
                                    diginjang kain<br>
                                    panjang ma di toru<br><br>

                                    Pangeol ni gonting<br>
                                    mu songon dengke<br>
                                    na mangolu<br><br>

                                    O Marriam Tomong<br>
                                    dainang si napang<br>
                                    masin<br><br>

                                    O Marriam Tomong<br>
                                    dainang si napang<br>
                                    masin<br><br>

                                    Metmet dope<br>
                                    singkoru da nunga<br>
                                    dihandang-handangi<br><br>

                                    Metmet dope<br>
                                    si boru da nunga ditandang-tandangi<br><br>

                                    O Mariam Tomong<br>
                                    dainang si napang masin (2x)
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Selanjutnya ada lagu Mariam Tomong, lagu ini mengisahkan perjuangan anak-anak Batak
                                    dalam mengusir penjajah yang mengganggu tanah kelahiran suku Batak, dengan cara
                                    menggunakan meriam bambu sebagai senjata yang digunakan seperti senapan mesin.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Rambadia
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Rambadia ramba<br>
                                    mun da ito rio rio<br>
                                    ramba naposo<br><br>

                                    Marga dia marga<br>
                                    muna da ito so uso<br>
                                    naso umboto<br>
                                    Ala tipang tipang<br>
                                    tipang polo labaya<br><br>

                                    Ala rudeng rudeng<br>
                                    rudeng Pong<br>
                                    Ala tipang tipang<br>
                                    tipang polo labaya<br><br>

                                    Ala rudeng rudeng<br>
                                    rudeng pong<br><br>

                                    I anggo ramba nami<br>
                                    da ito parasaran ni<br>
                                    ambaromba<br>
                                    I anggo marga muna<br>
                                    da ito indada<br>
                                    tarpaboa-boa<br>
                                    Ala tipang tipang<br>
                                    tipang polo labaya<br><br>

                                    Ala rudeng rudeng<br>
                                    rudeng pong<br>
                                    Ala tipang tipang<br>
                                    tipang polo labaya<br><br>

                                    Ala rudeng rudeng<br>
                                    rudeng pong
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Berasal dari daerah Tapanuli, lagu Rambadia adalah sebuah lagu yang menggambarkan
                                    nilai-nilai persaudaraan dan budaya masyarakat Batak. Lirik lagu ini mencerminkan
                                    tradisi ramah-tamah serta cara orang Batak berinteraksi dengan orang baru, dengan penuh
                                    sikap hormat dan salam perkenalan.<br><br>

                                    Lagu ini dinyanyikan ketika seseorang ingin mengetahui asal usul atau marga dari
                                    seseorang yang baru dikenalnya. Biasanya, hubungan akan semakin erat jika ternyata
                                    memiliki marga yang sama.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Alusi Au
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Alusi au Alusi au<br><br>

                                    Marragam ragam do anggo<br>
                                    sita sita di hita manisia<br><br>

                                    Marasing asing do anggo<br>
                                    pangidoan diganup ganup<br>
                                    jolma<br><br>

                                    Hamoraon hagabeon<br>
                                    hasangapon ido dilului na<br>
                                    deba<br><br>

                                    Di nadeba asal ma tarbarita<br>
                                    goarna tahe<br><br>

                                    Anggo di ahu tung asing do<br>
                                    sita sita asing pangidoanku<br><br>

                                    Mansai ambal be unang<br>
                                    pola mangicak hamu sude<br>
                                    di ahu<br><br>

                                    Sasude na na hugoari<br>
                                    indada i saut di ahu<br><br>

                                    Sita sita di ahu tung asing si<br>
                                    tutu do tahe<br><br>

                                    Tung holong ni roham mi<br>
                                    sambing do na huparsita-sita<br><br>

                                    Tung denggan ni basam<br>
                                    basami do na hupaima-ima<br><br>

                                    Asi ni roham da ito unang<br>
                                    loas au maila<br><br>

                                    Beha roham dok ma hatam<br>
                                    Alusi au<br><br>

                                    Alusi au alusi au
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Lagu ciptaan dari komponis Nahum Situmorang ini mencerminkan aspirasi dan keinginan yang
                                    ada dalam hati manusia. Dalam kata-kata lagunya, tercermin bahwa setiap individu pasti
                                    memiliki beragam harapan dan impian dalam hidupnya, termasuk mencapai kemakmuran, meraih
                                    kesuksesan, dan mendapatkan penghargaan atau kehormatan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Sitara Tilo
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Au si jara jiri naso hea<br>
                                    maridi<br><br>

                                    Sahali au maridi dapot au<br>
                                    pira mi bibi<br><br>

                                    Hei bibi hei bibi hei bibi hei<br><br>

                                    Tillo tillo si tara tillo tillo<br><br>

                                    Si tara tillo tillo si tara tillo<br>
                                    tillo<br><br>

                                    Au si jara jiri naso hea<br>
                                    maridi<br><br>

                                    Sahali au maridi dapot au<br>
                                    pira mi bibi<br><br>

                                    Hei bibi hei bibi hei bibi hei<br><br>

                                    Tillo tillo si tara tillo tillo<br><br>

                                    Si tara tillo tillo si tara tillo<br>
                                    tillo<br><br>

                                    Au sitangkal tabu naso hea<br>
                                    madabu<br><br>

                                    Sahali au madabu tu<br>
                                    abingan ni namarbaju<br><br>

                                    Hei baju hei baju hei baju<br>
                                    hei<br><br>

                                    Tillo tillo si tara tillo tillo<br><br>

                                    Si tara tillo tillo si tara tillo<br>
                                    tillo<br><br>

                                    Lala lala lala lala lala lalala
                                    lala lala lala

                                    Lala lala lala lala lala lalala<br>
                                    lala lala lala<br><br>

                                    Lala lalala laaaa aaaaa<br>
                                    aaaaa aaaaa
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Sitara Tillo adalah salah satu lagu daerah Sumatera Utara yang menyampaikan pesan
                                    tentang seseorang yang kerap kali berada dalam situasi menguntungkan dan jarang
                                    mengalami kesialan.<br><br>

                                    Lagu ini juga sering menjadi pengiring tarian dalam acara hiburan Batak.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl py-5" id="services">
                        <div class="container px-lg-5">
                            <div class="row g-4 justify-content-center">
                                <h2>
                                    Sing Sing So
                                </h2>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Lirik
                                </h5>
                                <p class="mt-2" style="font-style: italic">
                                    Ule lugahon ahu A sing sing<br>
                                    so a sing sing so<br><br>

                                    A sing sing so a sing sing<br>
                                    so da parau<br><br>

                                    Ulushon ahu da alogo a<br>
                                    sing sing so a sing sing so<br><br>

                                    Tu huta ni da tulangi<br><br>

                                    A sing sing so a sing sing<br>
                                    so a sing sing so<br><br>

                                    Sotung manimbil roham da<br>
                                    hasian<br><br>

                                    Paima tona si rongkap ni<br>
                                    tondim tarsongon<br><br>

                                    Par tiur do tongtong roha ni<br>
                                    bao<br><br>

                                    Di binsar ni mataniari da<br>
                                    use<br><br>

                                    Lugahon ahu<br><br>

                                    A sing sing so a sing sing<br>
                                    so da parau<br><br>

                                    Ulushon ahu da alogo<br><br>

                                    Asing sing so asing sing so<br>
                                    a sing sing so a sing sing<br>
                                    so<br><br>

                                    Tu huta ni da tulangi<br><br>

                                    A sing sing so a sing sing<br>
                                    so a sing sing so
                                </p>
                                <h5 style="color: black; margin-bottom: 2px; margin-top: 6px; text-align: justify">
                                    Makna
                                </h5>
                                <p class="mt-1" style="text-align: justify">
                                    Jika lagu Sitara tillo menggambarkan tentang seseorang yang jarang mengalami kesialan
                                    berbeda halnya dengan lagu Sing Sing So, lagu ini menggambarkan tentang seseorang yang
                                    sedang menantikan kedatangan jodoh yang takdirnya sudah ditetapkan.<br><br>

                                    Dalam harapan, doa, dan usahanya, dia berharap agar segera bertemu dengan pasangan
                                    hidupnya seperti perahu yang mengikuti arah angin. Dia juga berdoa dan berharap agar
                                    kekasih hatinya tetap setia dan tidak berpaling hati sambil menantikan kedatangan mereka
                                    dengan kesetiaan.
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

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Homepage - Perpustakaan Digital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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

<body class="antialiased">
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="#" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-search me-2"></i>Digita</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#" class="nav-item nav-link">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#services" class="nav-item nav-link">Service</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="#test" class="dropdown-item">Testimonial</a>
                                <a href="#team" class="dropdown-item"></a>
                            </div>
                        </div>
                    </div>
                    @if (Route::has('login'))
                        <div class="div">
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Home</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </ul>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Perpustakaan Digital</h1>
                            <p class="text-white pb-3 animated zoomIn">Baca Lebih Banyak, Tahu Lebih Banyak</p>
                            <a href="{{ url('/login') }}"
                                class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Mulai
                                Membaca</a>
                            {{-- <a href="https://sidata-ptn-snpmb.bppp.kemdikbud.go.id/ptn_sn.php"
                                class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Kategori Buku</a> --}}
                        </div>
                        <div class="col-lg-6 text-lg-start mt-2">
                            <img class="img-fluid" src="img/Picture2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp pt-5" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">Apa sih Perpustakaan Digital itu?</h2>
                        </div>
                        <p class="mb-4">
                            Digita adalah portal perpustakaan digital modern yang menghadirkan dunia pengetahuan ke
                            dalam genggaman Anda.
                            Dengan koleksi luas buku digital dari berbagai genre,
                            Digita memberikan akses cepat dan mudah untuk membaca, belajar, dan menggali harta karun
                            pengetahuan.
                            Jelajahi ribuan buku digital yang mendidik, menginspirasi, dan menghibur.
                            Dengan Digita, pengetahuan berada di ujung jari Anda.
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Pembelajaran</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Novel</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Cerita Rakyat</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Ulas Kami Disini</h3>
                        <form action="{{ route('storeReview') }}" method="POST" id="reviewForm">
                            @csrf
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                    placeholder="Enter Your Review" style="height: 48px;" name="review">
                                <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"
                                    form="reviewForm"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                            </div>
                            @if (session('success'))
                                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                                <script>
                                    swal("Success", "{{ session('success') }}", "success");
                                </script>
                            @endif
                        </form>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="height: 250px;" src="img/newsletter.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Service Start -->
        <div class="container-xxl py-5" id="services">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pt-5 pb-2 wow fadeInUp"
                    data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Kategori</h6>
                    <h2 class="mt-2">Pilih Kategori Yang Ingin Anda Baca</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-book fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Pembelajaran</h5>
                            <p>Ada Banyak Macam Mata Pelajaran Yang Disediakan Untuk Anak Sekolah.</p>
                            <a href="{{ url('/login') }}"
                                class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-question-circle fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Novel</h5>
                            <p>Jelajahi dan Temukan Dunia Cerita yang Tak Terbatas.</p>
                            <a href="{{ url('/login') }}"
                                class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-star fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Cerita Rakyat</h5>
                            <p>Memuat Kisah-kisah yang Mewarisi Kearifan dan Keindahan yang Abadi.</p>
                            <a href="{{ url('/login') }}"
                                class="btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Baca</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Testimonial Start -->
        <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s"
            id="test">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Mantap deh Digita! Buku-bukunya oke punya.
                            Abis itu, bisa diakses lewat hape, gak ribet deh!
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Mufida</h6>
                                <small>Pelajar</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Bro, Digita keren banget!
                            Baca novel, e-book, semuanya ada di sini.
                            Gak nyesel langganan, jadi bisa nongkrong di mana aja sambil baca.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Sudirman</h6>
                                <small>Pelajar</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Nemu Digita itu kayak nemu harta karun digital, Bro.
                            Buku-buku seru banyak, bikin makin oke buat ngisi waktu luang.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Steven</h6>
                                <small>Pelajar</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Gak usah repot cari buku lagi, guys.
                            Digita punya semua yang kamu butuhkan.
                            Aku jadi makin suka baca!
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Emma</h6>
                                <small>Pelajar</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Semarang No.5, Sumbersari, Kec. Lowokwaru, Kota
                            Malang, Jawa Timur</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+62 851-6106-9864</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="#about">About Us</a>
                        <a class="btn btn-link"
                            href="https://web.whatsapp.com/send/?phone=6281217952403&text=Hai+kak%2C+kami+ingin+berkonsultasi+dengan+Anda">Contact
                            Us</a>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Digita Siap Menyediakan Semua Buku yang Ada</p>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Digita</a>. All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i
                class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('landing_page') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('landing_page') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing_page') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('landing_page') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('landing_page') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('landing_page') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('landing_page') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('landing_page') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('landing_page') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Resi
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/resi-free-bootstrap-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a
                    href="{{ asset('landing_page') }}/index.html">{{ config('app.name', 'Laravel') }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="{{ asset('landing_page') }}/index.html" class="logo"><img src="{{ asset('landing_page') }}/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        @auth
                            <a href="{{ url('/home') }}" class="getstarted scrollto">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="getstarted scrollto">Masuk</a>
                        @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Laundry Terbaik Untuk Keluarga Anda.</h1>
                    <ul>
                        <li><i class="ri-check-line"></i> Pakaian Bersih dan Wangi.</li>
                        <li><i class="ri-check-line"></i> Kilat, dan Tepat Waktu.</li>
                        <li><i class="ri-check-line"></i> Ditangani Para Ahlinya.</li>
                    </ul>
                    <div class="mt-3">
                        @auth
                            <a href="{{ url('/home') }}" class="getstarted scrollto">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="btn-get-started scrollto">Masuk</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}/" class="btn-get-quote">Buat Akun</a>
                            @endif
                        @endauth
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('landing_page') }}/assets/img/m.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">



        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Pelanggan Puas</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-calendar3-event"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Cucian</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-shop-window"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Outlet</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Pekerja Hebat</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>kontak</h2>
                    <p>Jangan ragu untuk memberikan kami umpan balik tentang layanan kami. Kami selalu terbuka untuk
                        saran dan kritik dari pelanggan kami, sehingga kami dapat terus meningkatkan kualitas layanan
                        kami.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Alamat Kami</h3>
                                    <p>Jl.Samaaku, Kawinama Temenaku 6911 </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Kami</h3>
                                    <p>acil@laundry.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Hubungi Kami</h3>
                                    <p>+62 878-3937-6909</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nama" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Judul" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesanmu telah terkirim. Terima kasih!</div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Arsyl</span></strong>. All Rights Reserved
                </div>
                <div class="credits">

                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="{{ asset('landing_page') }}/#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{ asset('landing_page') }}/#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{ asset('landing_page') }}/#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{ asset('landing_page') }}/#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="/#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing_page') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('landing_page') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing_page') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('landing_page') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('landing_page') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('landing_page') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('landing_page') }}/assets/js/main.js"></script>

</body>

</html>

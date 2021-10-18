<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portal PPDB SMK Online</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('landing-page/assets/img/smkwd.png') }}" rel="icon">
    <link href="{{ asset('landing-page/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing-page/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('landing-page/assets/css/style.css') }}" rel="stylesheet">

    {{-- <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'> --}}
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>

    <!-- =======================================================
        * Template Name: Arsha - v4.3.0
        * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center pl-5">
            <h1 class="logo me-auto">
                <img src="{{ asset('./landing-page/assets/img/smkwd.png') }}" class="img-fluid pb-2" alt="">
                <a href="index.html"> PPDB SMK WD</a>
            </h1>

            <nav id="navbar" class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class=" navbar-nav mr-auto">
                        <li class=" nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class=" nav-item"><a class="nav-link" href="{{ url('/#informasi') }}">Informasi</a></li>
                        <li class=" nav-item"><a class="nav-link" href="{{ url('/#jurusan') }}">Jurusan</a></li>
                        <li class=" nav-item"><a class="nav-link" href="{{ url('/#galeri') }}">Galeri</a></li>
                        <li class=" nav-item"><a class="nav-link" href="{{ url('/#kontak') }}">Kontak</a></li>
                        <li class=" nav-item"> <a href="{{ url('/login') }}"
                                class=" nav-link btn btn-success">Login</a> </li>
                    </ul>
                </div>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <h1>PENERIMAAN PESERTA DIDIK BARU</h1>
                    <h2>SMK WIDYA DIRGANTARA | KOTA BANDUNG </h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ url('/student-registration') }}" class="btn-get-started scrollto">Daftar
                            Sekarang</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Tutorial Pendaftaran</span></a>
                    </div>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('download-panduan', ['filename' => 'panduan-ppdb.docx']) }}"
                            class="btn-get-started scrollto"><span>Download Syarat & Panduan Pendaftaran</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('landing-page/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="mb-3">Testimoni Alumni</h3>
                    </div>
                    @foreach($testimoniData as $data)
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text" style="color: black">
                                    {{$data->testimoni}}
                                    <br>
                                    <small>{{$data->nama}} - {{$data->lulusan}}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        {{-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Gabung bersama kami untuk mendapatkan info terbaru</h4>
                        <p></p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Kirim">
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="footer-top" style="background: #f3f5fa" id="kontak">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">

                        <h3><strong>KONTAK</strong></h3>
                        <hr>
                        <strong class="bi bi-map"> Lokasi : </strong> <br>
                        <p>
                            Jl. Bojong Raya No.114 A, Cibuntu, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40212
                        </p> <br>

                        <strong class="bi bi-envelope"> Email : </strong>
                        <p>
                            widyadirgantara@gmail.com
                        </p> <br>
                        <strong class="bi bi-phone"> Telepon : </strong>
                        <p>(022)6081617 </p>

                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63372.30176221881!2d107.5725558!3d-6.9182135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5f8d625f92d%3A0x71599464193dc021!2sSMK%20Widya%20Dirgantara!5e0!3m2!1sen!2sid!4v1626405130058!5m2!1sen!2sid" framborder="0" style="border: 0" width="100%" height="300" allowfullscreen="" loading="lazy"></iframe> --}}

                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Fasilitas</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lab TBSM</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lab TKRO</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lab TKJ</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">LAB TP</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lapangan Basket</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lapangan Bola Voli</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lapangan Futsal</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Ekstrakurikuler</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Paskibra</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pramuka</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Futsal</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Basket</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Voli</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <p>Jangan lupa Follow, Like, Comment dan juga Subscribe keaktifan kami di social media</p>
                        <div class="" style="display: block">
                            <p><a href="#" class=" bi bi-instagram"> smkwidyadirgantara_official </a> </p>
                            <p><a href="#" class="bi bi-youtube"> SMK Widya Dirgantara </a></p>
                            <p><a href="#" class=" bi bi-cloud-arrow-up"> widyadirgantara.sch.id </a></p>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-12 footer-contact">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63372.30176221881!2d107.5725558!3d-6.9182135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5f8d625f92d%3A0x71599464193dc021!2sSMK%20Widya%20Dirgantara!5e0!3m2!1sen!2sid!4v1626405130058!5m2!1sen!2sid"
                            framborder="0" style="border: 0" class=" shadow p-1" width="100%" height="300"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>MulyanaOfficial</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="">Yana Mulyana</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing-page/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('landing-page/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('landing-page/assets/js/main.js') }}"></script>

    {{-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script> --}}
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'>
    </script>

</body>

</html>

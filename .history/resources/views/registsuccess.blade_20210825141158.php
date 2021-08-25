<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portal PPDB SMK WD</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('landing-page/assets/img/smkwd.png')}}" rel="icon">
    <link href="{{asset('landing-page/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('landing-page/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('landing-page/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('landing-page/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing-page/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing-page/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('landing-page/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('landing-page/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"> <img src="{{asset('landing-page/assets/img/clients/smkwd.png')}}" class="img-fluid" alt=""><a href="index.html"> PPDB SMK WD</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="{{asset('landing-page/assets/img/smkwd2.png')}} alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                {{-- <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#informasi">Informasi</a></li>
                    <li><a class="nav-link scrollto" href="#jurusan">Jurusan</a></li>
                    <li><a class="nav-link   scrollto" href="#galeri">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="{{url('/login')}}">Login</a></li> --}}
                {{-- </ul> --}}
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('landing-page/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>PENDAFTARAN BERHASIL DISIMPAN</h1>
                    <h2>Silahkan Segera Lakukan Verifikasi Data Anda Dengan Datang Ke Sekolah</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{url('/')}}" class="btn-get-started scrollto">Kembali Ke Halaman Utama</a> 
                        
                    </div>
                        <a href="{{url('/')}}" class="btn-get-started scrollto">Download / Print Out Formulir</a>
                </div>

            </div>
            
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Cliens Section ======= -->
        <section id="cliens" class="cliens section-bg">
            <div class="container">

                <div class="row justify-content-center" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-3 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('landing-page/assets/img/clients/honda.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('landing-page/assets/img/clients/telkom.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('landing-page/assets/img/clients/toyota.png')}}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    {{-- <footer id="footer">

        <div class="footer-newsletter">
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
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Arsha</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
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
                            <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <p>Jangan lupa Follow, Like, Comment dan juga Subscribe keaktifan kami di social media</p>
                        <div class="social-links mt-1">
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <p>SMK Widya Dirgantara</p>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <p>smkwidyadirgantara_official</p>
                            <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                            <p>SMK Widya Dirgantara</p>
                            <a href="#" class="dribbble"><i class="bx bxl-dribbble"></i></a>
                            <p>widyadirgantara.sch.id</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>SMKWD</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer> --}}
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('landing-page/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('landing-page/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('landing-page/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('landing-page/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('landing-page/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('landing-page/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('landing-page/assets/js/main.js')}}"></script>

</body>

</html>
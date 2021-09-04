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


        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class=" footer-newsletter d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <h1>PENDAFTARAN BERHASIL</h1>
                    <h2>SEGERA LAKUKAN VERIFIKASI BERKAS DATA ANDA DENGAN DATANG KE SEKOLAH</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{url('/')}}" class=" btn btn-warning">Kembali</a> 
                    </div> <br>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{route('download.formulir', ['param'=>$nisn])}}" onclick="myPrint('myfrm')" class=" btn btn-success"><span>Download / Print Out Formulir</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('landing-page/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">

                </div>
            </div>     
        </div>  


                
    </section>
    <!-- End Hero -->

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portal PPDB SMK Online</title>
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
            <div class="container d-flex align-items-center">
                
                <h1 class="logo me-auto"> <img src="{{asset('landing-page/assets/img/clients/smkwd.png')}}" class="img-fluid" alt=""><a href="index.html"> PPDB SMK</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="{{asset('landing-page/assets/img/smkwd2.png')}} alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home 1</a></li>
                    <li><a class="nav-link scrollto" href="#informasi">Informasi</a></li>
                    <li><a class="nav-link scrollto" href="#jurusan">Jurusan</a></li>
                    <li><a class="nav-link   scrollto" href="#galeri">Galeri</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="{{url('/login')}}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>PENERIMAAN PESERTA DIDIK BARU</h1>
                    <h2>SMK WIDYA DIRGANTARA | KOTA BANDUNG </h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{url('/student-registration')}}" class="btn-get-started scrollto">Daftar Sekarang</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Tutorial Pendaftaran</span></a>
                    </div>
                    <a href="" class="btn-get-started scrollto"><span>Syarat & Panduan Pendaftaran</span></a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('landing-page/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
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

        <!-- ======= Informasi Us Section ======= -->
        <section id="informasi" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Informasi Umum</h2>
                </div>

                <div class="row justify-content-center" style="text-align: justify">
                    <div class="col-lg-4 col-lg-offset-2">
                        <p>
                            SMK WIDYA DIRGANTARA menyediakan PPDB secara online. Aplikasi ini diharapkan n bisa 
                            memperlancar proses ppdb, mengefektifkan waktu, meminimalisir penggunaan kertas, 
                            memangkas biaya penyelenggaraan ppdb dan sistem bisa berjalan lebih cepat dalam 
                            memberikan hasil seleksi kepada calon peserta didik baru.

                        </p>
                        
                    </div><div class="col-lg-4 col-lg-offset-2">
                        <p>
                            Setelah melakukan pendaftaran PPDB secara online, mohon di cek kembali apakah data yang dimasukkan sudah benar. Jika ada keterangan yang kurang dimengerti silahkan tanyakan ke nomor kontak panitia PPDB sekolah yang ada pada website ini.
                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3><strong>ALUR PPDB ONLINE</strong></h3>
                            <p>
                                Berikut merupakan alur dari ppdb (penerimaan peserta didik baru) online SMK Widya Dirgantara
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Daftar online<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Calon Peserta Didik Baru melakukan pendaftaran online melalui website : ...
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapse"><span>02</span> Print Out Formulir<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Calon Peserta Didik Baru melakukan melakukan print out dan mempersiapkan kelengkapan berkas.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapse"><span>03</span> Menyerahkan berkas<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Calon Peserta Didik Baru datang ke sekolah membawa formulir pendaftaran yang telah di print out dan persyaratan PPDB yang telah dilengkapi.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapse"><span>04</span> Verifikasi dan Validasi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Panitia melakukan verifikasi dan validasi berkas pendaftaran 
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapse"><span>05</span> Terima bukti verifikasi dan menerima akun<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Calon Peserta Didik Baru menerima tanda bukti verifikasi dan menerima akun untuk login ke dashboard PPDB.  
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapse"><span>06</span> Ujian online<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Setelah login ke dashboard PPDB. Calon Peserta Didik Baru diwajibkan melakukan Tes Potensi Akademik (TPA) yang dilaksanakan secara online. Tes ini berupa soal ujian yang bisa dikerjakan dimanapun dan kapanpun.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-7" class="collapse"><span>07</span> Pengumuman Hasil Ujian<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Pengumuman hasil tes / Pengumuman kelulusan.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-8" class="collapse"><span>08</span> Daftar Ulang <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-8" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Calon Peserta Didik Baru yang dinyatakan LULUS diwajibkan registrasi / daftar ulang dengan datang ke sekolah. 
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" data-aos="zoom-out" data-aos-delay="100">
                    {{-- <img src="{{asset('landing-page/assets/img/ppdbsmk.jpg')}}" class="img-fluid animated" alt=""> --}}
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        <section id="jurusan" class="skills services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Jurusan</h2>
                    <p>Jurusan di SMK WIDYA DIRGANTARA merupakan jurusan yang masuk kategori paling banyak diminati oleh para siswa lulusan SMP / Sederjat.</p>
                </div>     
                
                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-wifi"></i></div>
                            <h4><a href="">TKJ</a></h4>
                            <p>Teknik Komputer dan Jaringan</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-wrench"></i></div>
                            <h4><a href="">TBSM</a></h4>
                            <p>Teknik Bisnis dan Sepeda Motor</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-car"></i></div>
                            <h4><a href="">TKRO</a></h4>
                            <p>Teknik Kendaraan Ringan dan Otomotif</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-shekel"></i></div>
                            <h4><a href="">TP</a></h4>
                            <p>Teknik Pemesinan</p>
                        </div>
                    </div>

                </div>
            
                {{-- <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{asset('landing-page/assets/img/skills.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>

                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">HTML <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">CSS <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">JavaScript <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Photoshop <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div> --}}

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        {{-- <section id="jurusan" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Jurusan</h2>
                    <p>Jurusan di SMK WIDYA DIRGANTARA merupakan jurusan yang masuk kategori paling banyak diminati oleh para siswa lulusan SMP / Sederjat.</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-wifi"></i></div>
                            <h4><a href="">TKJ</a></h4>
                            <p>Teknik Komputer dan Jaringan</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-wrench"></i></div>
                            <h4><a href="">TBSM</a></h4>
                            <p>Teknik Bisnis dan Sepeda Motor</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-car"></i></div>
                            <h4><a href="">TKRO</a></h4>
                            <p>Teknik Kendaraan Ringan dan Otomotif</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-shekel"></i></div>
                            <h4><a href="">TP</a></h4>
                            <p>Teknik Pemesinan</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section --> --}}

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>TESTIMONI ALUMNI</h3>
                        <p> Berawal dari Sekolah SMK Widya Dirgantara banyak pelajaran yang saya dapatkan tentang kesidiplinan, karakter dan masih banyak lagi, kompetensi keahlian Teknik Bisnis dan Sepeda Motor mengajarkan siswa - siswinya untuk teliti dalam hal apapun terutama dalam memperbaiki sepeda motor.</p>
                        <p>~ Andi  ~</p>
                        <p>Selama tiga Tahun saya belajar di jurusan Rekayasa Perangkat Lunak (RPL) SMK TEUKU UMAR membentuk saya menjadi insan yang terampil sesuai keinginan saya dalam bidang IT dan menjadi insan yang berkarakter luhur, karena selain menekankan akademik maupun kejuruan, juga menekankan nilai-nilai agama islam yang diterapkan pada saat proses pembelajaran. Alhamdulillah berkat ketekunan, doa orang tua, bekal ilmu, serta bimbingan bapak/ibu guru saya lolos seleksi PTN sehingga dapat melanjutkan pendidikan di UNDIP Jurusan TEKNIK KOMPUTER yang merupakan salah satu universitas negeri terbaik di Indonesia, Sesuai dengan cita-cita saya ingin menjadi programmer yang Handal dan menjadi hacker konten-konten yang tidak baik bagi umat manusia.</p>
                        <p>~ Tijo ~</p>

                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle">Testimoni Alumni</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="galeri" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Galeri</h2>
                    <p>Kegiatan di SMK Widya Dirgantara</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-tkro">TKRO</li>
                    <li data-filter=".filter-tkj">TKJ</li>
                    <li data-filter=".filter-tbsm">TBSM</li>
                    <li data-filter=".filter-tp">TP</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tkro">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tkro1.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tbsm">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tbsm1.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tp">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tp1.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tkro">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tkro2.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tkj">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tkj1.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tbsm">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tbsm2.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tkro">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tkro5.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tkj">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tkj2.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tp">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tp2.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tkj">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tkj3.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tbsm">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tbsm3.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tkro">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tkro3.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tp">
                        <div class="portfolio-img"><img src="{{asset('landing-page/assets/img/portfolio/tp3.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="{{asset('landing-page/assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        {{-- <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{asset('landing-page/assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{asset('landing-page/assets/img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="{{asset('landing-page/assets/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="{{asset('landing-page/assets/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section --> --}}

        <!-- ======= Pricing Section ======= -->
        {{-- <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pricing</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <h3>Free Plan</h3>
                            <h4><sup>$</sup>0<span>per month</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>
                            <a href="{{url('/login')}}" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3>Business Plan</h3>
                            <h4><sup>$</sup>29<span>per month</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h3>Developer Plan</h3>
                            <h4><sup>$</sup>49<span>per month</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section --> --}}

        <!-- ======= Frequently Asked Questions Section ======= -->
        {{-- <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section --> --}}

        <!-- ======= Contact Section ======= -->
        <section id="kontak" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kontak</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Jl. Bojong Raya No.114 A, Cibuntu, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40212</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>widyadirgantara@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon:</h4>
                                <p>(022)6081617 </p>
                            </div>
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> --}}
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63372.30176221881!2d107.5725558!3d-6.9182135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5f8d625f92d%3A0x71599464193dc021!2sSMK%20Widya%20Dirgantara!5e0!3m2!1sen!2sid!4v1626405130058!5m2!1sen!2sid" framborder="0" style="border: 0" width="100%" height="300" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Email Aktif</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subjek</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Pesan</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
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
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> <p>SMK Widya Dirgantara</p>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> <p>smkwidyadirgantara_official</p>
                            <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a> <p>SMK Widya Dirgantara</p>
                            <a href="#" class="dribbble"><i class="bx bxl-dribbble"></i></a> <p>widyadirgantara.sch.id</p>
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
    </footer><!-- End Footer -->

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
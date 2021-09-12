@extends('layouts.master')
@section('title', 'PPDB - Dashboard')
@section('content')
@if(auth()->user()->role_name == "admin")
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-albums icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                <div class="page-title-subheading"> 
                    <h4>
                        Dashboard Monitoring PPDB
                    </h4>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            {{-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button> --}}
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Pendaftar</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$totalRegister}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Tes</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>150</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">User aktif</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$totalUserActive}}</span></div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-premium-dark">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Products Sold</div>
                    <div class="widget-subheading">Revenue streams</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-warning"><span>$14M</span></div>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">User aktif
                <div class="btn-actions-panel-right">
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless tabs-animated table-striped table-hover ">
                    <thead>
                        <tr>
                            <th class="text-center">ID User</th>
                            <th class="">Nama</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="text-center">{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            @if($user->is_active == 0)
                            <td class="text-center bg-danger">Tidak Aktif</td>
                            @else
                            <td class="text-center bg-success"> <strong> Aktif</strong></td>
                            @endif
                            <td class="text-center"><a href="" class=" btn btn-danger">Matikan User</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endif
@if(auth()->user()->role_name != "admin")
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-notebook icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                <div class="page-title">
                    <h3>Dashboard Peserta Didik</h3>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            {{-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button> --}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card mb-2">
            <h5 class="card-header"></h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text text-center container" style="font-size: 16px;">Selamat Datang di website sistem informasi Penerimaan Peserta Didik Baru (PPDB) SMK Widya Dirgantara. <br>Adanya PPDB yang bersifat Online ini bertujuan untuk membantu calon Peserta Didik agar lebih mudah dalam mendaftar dan melihat hasil seleksi peneirmaan peserta didik baru di SMK Widya Dirgantara.</p>              
            </div>
        </div>
    </div>
</div>

<section id="why-us" class="why-us section-bg">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                <div class="content">
                    <h3><strong>ALUR PPDB ONLINE</strong></h3>
                    <hr>
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
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapse"><span>06</span> Pengumuman Jadwal Tes Potensi Akademik (TPA)<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Setelah login ke dashboard PPDB. Calon Peserta Didik Baru menerima pengumuman ujian / tes potensi akademik di menu pengumuman.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapse"><span>07</span> Ujian/Tes online<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Calon Peserta Didik Baru diwajibkan mengikuti  Ujian/Tes Potensi Akademik (TPA) yang dilaksanakan secara online. Tes ini berupa soal pilihan ganda yang bisa dikerjakan dimanapun dan kapanpun tapi dengan waktu yang telah ditentukan.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-7" class="collapse"><span>08</span> Pengumuman Hasil Ujian<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Pengumuman hasil tes / Pengumuman kelulusan.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-8" class="collapse"><span>09</span> Daftar Ulang <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-8" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    Calon Peserta Didik Baru yang dinyatakan LULUS diwajibkan registrasi / daftar ulang dengan datang ke sekolah. 
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
            
            <div class="col-lg-5 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1 img" data-aos="zoom-out" data-aos-delay="100">
                <img src="{{asset('landing-page/assets/img/alur2.png')}}" class="img-fluid animated shadow p-2 rounded" alt="">
            </div>
        </div>

    </div>
</section>


<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card mb-2">
            <h5 class="card-header">Tes Potensi Akademik</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Anda Sudah Mengerjakan</p>
                <p>Nilai nya berapa</p>
                
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12 col-xl-12">
        @foreach($announcements as $announce)
        <div class="card mb-2">
            <h5 class="card-header">{{$announce->title}}</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><?php echo html_entity_decode($announce->description); ?></p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

@endsection
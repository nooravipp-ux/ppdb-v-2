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
            {{-- <h5 class="card-header"></h5> --}}
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text text-center container" style="font-size: 17px;">Selamat Datang di website sistem informasi Penerimaan Peserta Didik Baru (PPDB) SMK Widya Dirgantara. <br>Adanya PPDB yang bersifat Online ini bertujuan untuk membantu calon Peserta Didik agar lebih mudah dalam mendaftar dan melihat hasil seleksi peneirmaan peserta didik baru di SMK Widya Dirgantara.</p>   
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row mb-lg-5 justify-content-center">
    <div class="col-md-7 col-xl-7">
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
    <div class="col-md-5 col-xl-5">
        <div class="card"></div>
        <img src="{{asset('landing-page/assets/img/alur2.png')}}" class=" container img-fluid animated shadow p-2 rounded" alt=""> <br> <br>
        <div class="hero ">
            <a href="" class=" btn btn-info"><span>Syarat & Panduan Pendaftaran</span></a>
        </div>
    </div>
</div>
@endif

@endsection
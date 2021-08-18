@extends('layouts.app')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light" style="background: #37517e">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Formulir Pendaftaran</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
        </ul>
        {{-- <form class="d-flex">
            <li class="nav-item float-left">
                <a class=" btn btn-warning float-left" >Kembali</a>
            </li>
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
</nav>

  <br>
  <hr>


  <div class="container">
    <div class="row rounded container">
        <div class="container emp-profile">
            <form id="form-register" method="post" action="{{url('/student-registration/save')}}" enctype="multipart/form-data" class=" container">
                @csrf

                <!--Body-->
                    <div class="card border-0 ">
                        <div class="card border-0" >
                            <div class="card-header rounded-pill rounded-3 text-white py-2" style="background: #37517e">
                                    <h4 class="pl-5" >Data Diri</h4>
                                </div>
                            </div>
                            
                        
                        <div class="card-body p-3">
                            <hr>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-text-width text-info"> </i></div>
                                    <input type="text" class="form-control" name="nama_lengkap">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">NIK</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-id-card text-info"> </i></div>
                                    <input type="text" class="form-control" name="nik_siswa">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-address-card text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Kode POS</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-barcode text-info"> </i></div>
                                    <input type="text" class="form-control" name="kode_pos">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-location-arrow text-info"> </i></div>
                                    <input type="text" class="form-control" name="tempat_lahir">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-calendar text-info"> </i></div>
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Registrasi Akta Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-registered text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_registrasi_akta_lahir">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="form-check input-group-text fa fa-male text-info">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" checked>
                                        <label class="form-check-label">
                                            Laki - Laki
                                        </label>
                                    </div>
                                    <div class="form-check input-group-text fa fa-female text-info">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
                                        <label class="form-check-label">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Anak Ke</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-group text-info"> </i></div>
                                    <input type="text" class="form-control" name="anak_ke">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Jumlah Saudara Kandung</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-group text-info"> </i></div>
                                    <input type="text" class="form-control" name="jumlah_saudara_kandung">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-list text-info"> </i></div>
                                    <input type="text" class="form-control" name="agama">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-mail-reply-all text-info"> </i></div>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Telp</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-th text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_telp">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="card border-0">
                        <div class="card border-0">
                            <div class=" card-header rounded-pill rounded-3 text-white py-2" style="background: #37517e">
                                    <h4 class=" pl-5">Data Pendidikan</h4>
                            </div>
                        </div>
        
                        <div class="card-body p-3">
                            <hr>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Nama Asal Sekolah</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-university text-info"> </i></div>
                                    <input type="text" class="form-control" name="nama_sekolah_asal">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-address-card text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat_sekolah"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Induk Siswa Nasional (NISN)</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_induk_siswa_nasional">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Peserta Ujian Nasional (SMP / MTs)</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card-o text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_peserta_ujian_nasional">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Upload Ijazah</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" name="file_ijazah">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Seri Ijazah</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_seri_ijazah">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tahun Ijazah</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-sort-numeric-asc text-info"> </i></div>
                                    <input type="text" class="form-control" name="tahun_ijazah">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Upload SKHUN</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" name="file_skhun">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Seri SKHUN</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card-o text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_seri_skhun">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <br>

                    <div class="card border-0 ">                   
                        <div class="card border-0">
                            <div class=" card-header rounded-pill rounded-3 text-white py-2" style="background: #37517e">
                                    <h4 class=" pl-5">Biodata Orang Tua / Wali</h4>
                            </div>
                        </div>

                        <!-- Biodata Ayah -->
                        <div class="card-body p-3">
                            <hr>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Nama Ayah Kandung</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-text-width text-info"> </i></div>
                                    <input type="text" class="form-control" name="nama_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Induk Keluaraga (NIK)</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card text-info"> </i></div>
                                    <input type="text" class="form-control" name="nik_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-location-arrow text-info"> </i></div>
                                    <input type="text" class="form-control" name="tempat_lahir_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-calendar text-info"> </i></div>
                                    <input type="date" class="form-control" name="tanggal_lahir_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-area-chart text-info"> </i></div>
                                    <input type="text" class="form-control" name="pendidikan_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-google-wallet text-info"> </i></div>
                                    <input type="text" class="form-control" name="pekerjaan_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Perbulan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-money text-info"> </i></div>
                                    <input type="text" class="form-control" name="penghasilan_ayah">
                                </div>
                            </div>
                            
                            <!-- Biodata Ibu -->
                            <hr>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-text-width text-info"> </i></div>
                                    <input type="text" class="form-control" name="nama_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Induk Keluaraga (NIK)</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card text-info"> </i></div>
                                    <input type="text" class="form-control" name="nik_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-location-arrow text-info"> </i></div>
                                    <input type="text" class="form-control" name="tempat_lahir_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-calendar text-info"> </i></div>
                                    <input type="date" class="form-control" name="tanggal_lahir_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-area-chart text-info"> </i></div>
                                    <input type="text" class="form-control" name="pendidikan_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-google-wallet text-info"> </i></div>
                                    <input type="text" class="form-control" name="pekerjaan_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Perbulan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-money text-info"> </i></div>
                                    <input type="text" class="form-control" name="penghasilan_ibu">
                                </div>
                            </div>
                            
                            <hr>
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Alamat Orang Tua</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-address-card text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat_ortu"></textarea>
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Kode POS</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-barcode text-info"> </i></div>
                                    <input type="text" class="form-control" name="kode_pos_ortu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Telp Orang Tua</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-th text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_telp_ortu">
                                </div>
                            </div>
                            
                            {{-- Wali --}}
                            <hr>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Nama Wali</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-text-width text-info"> </i></div>
                                    <input type="text" class="form-control" name="nama_wali">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-google-wallet text-info"> </i></div>
                                    <input type="text" class="form-control" name="pekerjaan_wali">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Perbulan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-money text-info"> </i></div>
                                    <input type="text" class="form-control" name="penghasilan_wali">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Alamat Wali</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-address-card text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat_wali"></textarea>
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Kode POS</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-barcode text-info"> </i></div>
                                    <input type="text" class="form-control" name="kode_pos_wali">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Hub Dengan Peserta Didik</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-group text-info"> </i></div>
                                    <input type="text" class="form-control" name="hub_dengan_peserta_didik">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <br>

                    <div class="card border-0">
                        <div class="card border-0">
                            <div class=" card-header rounded-pill rounded-3 text-white py-2" style="background: #37517e">
                                    <h4 class=" pl-5">Lain - lain</h4>
                            </div>
                        </div>
                        
                        <div class="card-body p-3">
                            <hr>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Jarak Rumah Ke Sekolah</label>
                                <div class="col-sm-8 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-long-arrow-right text-info"> </i></div>
                                    <input type="text" class="form-control">
                                </div>
                                <label for="inputPassword" class="col-sm-1 col-form-label">KM</label>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Transportasi</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-car text-info"> </i></div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Berat Badan</label>
                                <div class="col-sm-8 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-pie-chart text-info"> </i></div>
                                    <input type="text" class="form-control" name="berat_badan">
                                </div>
                                <label for="inputPassword" class="col-sm-1 col-form-label">Kg</label>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-8 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-line-chart text-info"> </i></div>
                                    <input type="text" class="form-control" name="tinggi_badan">
                                </div>
                                <label for="inputPassword" class="col-sm-1 col-form-label">M</label>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Riwayat Penyakit</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-eraser text-info"> </i></div>
                                    <input type="text" class="form-control" name="riwayat_penyakit">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="card border-0" >
                        <div class="card-body p-3">
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                
            </form>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #37517e">
    <a class="navbar-brand text-white container pl-5" href="#">Formulir Pendaftaran</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
    <form class="form-inline my-2 my-lg-0">
        <li class="nav-item active pr-5">
          <a class=" btn btn-warning" href=""> Kembali<span class="sr-only">(current)</span></a>
        </li>
      </form>
    </div>
</nav>
<br>
<br> 
<br>
<hr>


  <div class="container">
    <div class="row rounded container">
        <div class="container emp-profile">
            <form id="form-register" method="post" action="{{url('/student-registration/save')}}" enctype="multipart/form-data" class=" container">
                @csrf

                <!--Body-->
                    <div class="card shadow p-3">
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
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">NIK</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-id-card text-info"> </i></div>
                                    <input type="text" class="form-control" name="nik_siswa" placeholder="Masukkan NIK">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-address-card text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Saat ini"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Kode POS</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-barcode text-info"> </i></div>
                                    <input type="text" class="form-control" name="kode_pos" placeholder="Masukkan Kode POS">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-location-arrow text-info"> </i></div>
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
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
                                    <input type="text" class="form-control" name="no_registrasi_akta_lahir" placeholder="Masukkan No Akta Lahir">
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
                                    <input type="text" class="form-control" name="anak_ke" placeholder="Masukkan Anak Ke">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Jumlah Saudara Kandung</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-group text-info"> </i></div>
                                    <input type="text" class="form-control" name="jumlah_saudara_kandung" placeholder="Masukkan Jumlah Saudara Kandung">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-list text-info"> </i></div>
                                    <input type="text" class="form-control" name="agama" placeholder="Masukkan Agama">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-mail-reply-all text-info"> </i></div>
                                    <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Telp</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-th text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_telp" placeholder="Masukkan No Telepon">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <br>
                    <div class="card border-0 ">
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
                                    <input type="text" class="form-control" name="nama_sekolah_asal" placeholder="Masukkan Asal Sekolah">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-address-card text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat_sekolah" placeholder="Masukkan Alamat Asal Sekolah"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Induk Siswa Nasional (NISN)</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_induk_siswa_nasional" placeholder="Masukkan NISN">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Peserta Ujian Nasional (SMP / MTs)</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card-o text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_peserta_ujian_nasional" placeholder="Masukkan No Peserta Ujian SMP">
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
                                    <input type="text" class="form-control" name="no_seri_ijazah" placeholder="Masukkan No Ijazah">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tahun Ijazah</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-sort-numeric-asc text-info"> </i></div>
                                    <input type="text" class="form-control" name="tahun_ijazah" placeholder="Masukkan Tahun Ijazah">
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
                                    <input type="text" class="form-control" name="no_seri_skhun" placeholder="Masukkan No SKHUN">
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
                                    <input type="text" class="form-control" name="nama_ayah" placeholder="Masukkan Nama Ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Induk Keluaraga (NIK)</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card text-info"> </i></div>
                                    <input type="text" class="form-control" name="nik_ayah" placeholder="Masukkan NIK Ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-location-arrow text-info"> </i></div>
                                    <input type="text" class="form-control" name="tempat_lahir_ayah" placeholder="Masukkan Tempat Lahir Ayah">
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
                                    <input type="text" class="form-control" name="pendidikan_ayah" placeholder="Masukkan Pendidikan Terakhir Ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-google-wallet text-info"> </i></div>
                                    <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah">
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
                                    <input type="text" class="form-control" name="nama_ibu" placeholder="Masukkan Nama Ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Induk Keluaraga (NIK)</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card text-info"> </i></div>
                                    <input type="text" class="form-control" name="nik_ibu" placeholder="Masukkan NIK Ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-location-arrow text-info"> </i></div>
                                    <input type="text" class="form-control" name="tempat_lahir_ibu" placeholder="Masukkan Tempat Lahir Ibu">
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
                                    <input type="text" class="form-control" name="pendidikan_ibu" placeholder="Masukkan Pendidikan Terakhir Ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-google-wallet text-info"> </i></div>
                                    <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu">
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
                                    <textarea type="text" class="form-control" name="alamat_ortu" placeholder="Masukkan Alamat Orang Tua"></textarea>
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Kode POS</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-barcode text-info"> </i></div>
                                    <input type="text" class="form-control" name="kode_pos_ortu" placeholder="Masukkan Kode POS">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Telp Orang Tua</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-th text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_telp_ortu" placeholder="Masukkan No Telp Orang Tua">
                                </div>
                            </div>
                            
                            {{-- Wali --}}
                            <hr>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Nama Wali</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-text-width text-info"> </i></div>
                                    <input type="text" class="form-control" name="nama_wali" placeholder="Masukkan Nama Wali">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-google-wallet text-info"> </i></div>
                                    <input type="text" class="form-control" name="pekerjaan_wali" placeholder="Masukkan Pekerjaan Wali">
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
                                    <textarea type="text" class="form-control" name="alamat_wali" placeholder="Masukkan Alamat Wali"></textarea>
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Kode POS</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-barcode text-info"> </i></div>
                                    <input type="text" class="form-control" name="kode_pos_wali" placeholder="Masukkan Kode POS">
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
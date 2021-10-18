@extends('layouts.app')
@section('content')

<nav class="navbar fixed-top form-inline" style="background: #37517e">
    <a class="navbar-brand text-white pl-3" href="#">Formulir Pendaftaran</a>
    <a class=" btn btn-warning" href="http://127.0.0.1:8000/"> Kembali</a>
</nav>
<br>
<br> 
<br>
<hr>


<div class="container">
    <div class="row rounded container">
        <div class=" emp-profile">
            <div class="card text-white mb-3" style="background: #fa9643">
                    <div class="row pl-3" >
                        <div class="card-body col-sm-10">
                            <h1 class=" card-title">Informasi</h1>
                            <hr>
                            <p class=" text-white"> 'Sebelum mengisi formulir pendaftaran, diharapkan Calon Peserta Didik Baru membaca terlebih dahulu Syarat dan Panduan Pendaftaran pada halaman utama. </p>
                            <p class=" text-white"> 'Bisa juga dengan melihat video tutorial yang telah disajikan pada halaman utama.</p>
                        </div>
                        <div class="col-sm-2">
                            <img src="{{asset('landing-page/assets/img/drible.png')}}" class="img-fluid rounded pt-5" alt="">
                        </div>
                    </div>
            </div> 
            <br>
            <form id="form-register" method="post" action="{{url('/student-registration/save')}}" enctype="multipart/form-data" class=" container">
                @csrf

                <!--Body-->
                {{-- Data Diri --}}
                    <div class="card shadow p-2 rounded">
                        <div class="card border-0" >
                            <div class="card-header rounded-pill rounded-3 text-white py-2" style="background: #37517e">
                                    <h4 class="pl-5" >Data Diri</h4>
                                </div>
                            </div>
                            
                        
                        <div class="card-body p-3">
                            <hr>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Pilih Jurusan</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-list text-info"> </i></div>
                                    <select name="pilihan_jurusan" id="" class=" form-control">
                                        <option value="" selected>Pilih Jurusan</option>
                                        <option value="Teknik Bisnis dan Sepeda Motor">Teknik Bisnis dan Sepeda Motor</option>
                                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                        <option value="eknik Pemesinan">Teknik Pemesinan</option>
                                    </select>
                                </div>
                            </div>

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
                                    <input type="text" class="form-control" name="nik_siswa" placeholder="Masukkan NIK" required>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-address-card text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Saat ini" required></textarea>
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
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-calendar text-info"> </i></div>
                                    <input type="date" class="form-control" name="tanggal_lahir" required>
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Kartu Keluarga</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-address-card text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_kk" placeholder="Masukkan No. KK" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Upload Kartu Keluarga</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" name="file_kk" required>
                                </div>
                            </div>

                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Registrasi Akta Lahir</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-registered text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_registrasi_akta_lahir" placeholder="Masukkan No. Akta Lahir" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Upload Akta Kelahiran</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" name="file_akta" required>
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
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" >
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
                                    <input type="text" class="form-control" name="anak_ke" placeholder="Diisi dengan angka" required>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Jumlah Saudara Kandung</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-group text-info"> </i></div>
                                    <input type="text" class="form-control" name="jumlah_saudara_kandung" placeholder="Diisi dengan angka" required>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-list text-info"> </i></div>
                                    <!-- {{-- <input type="text" class="form-control" name="agama" placeholder="Masukkan Agama"> --}} -->
                                    <select name="agama" id="" class=" form-control">
                                        <option value="" selected>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-mail-reply-all text-info"> </i></div>
                                    <input type="text" class="form-control" name="email" placeholder="Masukkan Email" required>
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Telp / WhatsApp</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-th text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_telp" placeholder="Masukkan No Telepon / WhatsApp" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br> <hr>

                {{-- Data Pendidikan --}}
                    <div class="card shadow p-2 rounded ">
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
                                    <input type="text" class="form-control" name="nama_sekolah_asal" placeholder="Masukkan Asal Sekolah" required>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-address-card text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat_sekolah" placeholder="Masukkan Alamat Asal Sekolah" required></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Induk Siswa Nasional (NISN)</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_induk_siswa_nasional" placeholder="Masukkan NISN" required>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">No. Peserta Ujian Nasional (SMP / MTs)</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-id-card-o text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_peserta_ujian_nasional" placeholder="Masukkan No Peserta Ujian SMP / MTs">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Upload Surat Kelulusan</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" name="file_surat_kelulusan">
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
                                    <input type="text" class="form-control" name="no_seri_ijazah" placeholder="Masukkan No. Seri Ijazah">
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
                                    <input type="text" class="form-control" name="no_seri_skhun" placeholder="Masukkan No. Seri SKHUN">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br> <hr>

                {{-- Data Ortu / Wali --}}
                    <div class="card shadow p-2 rounded ">                   
                        <div class="card border-0">
                            <div class=" card-header rounded-pill rounded-3 text-white py-2" style="background: #37517e">
                                    <h4 class=" pl-5">Data Orang Tua / Wali</h4>
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
                                    {{-- <input type="text" class="form-control" name="pendidikan_ayah" placeholder="Masukkan Pendidikan Terakhir Ayah"> --}}
                                    <select name="pendidikan_ayah" id="" class=" form-control">
                                        <option value="" selected>Pilih Pendidikan Terakhir</option>
                                        <option value="Tidak Sekolah" >Tidak Sekolah</option>
                                        <option value="SD / Sederajat" >SD / Sederajat</option>
                                        <option value="SMP / Sederajat" >SMP / Sederajat</option>
                                        <option value="SMA / Sederajat" >SMA / Sederajat</option>
                                        <option value="D1" >D1</option>
                                        <option value="D2" >D2</option>
                                        <option value="D3" >D3</option>
                                        <option value="D4" >D4</option>
                                        <option value="S1" >S1</option>
                                        <option value="S2" >S2</option>
                                        <option value="S3" >S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-google-wallet text-info"> </i></div>
                                    {{-- <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah"> --}}
                                    <select name="pekerjaan_ayah" id="" class=" form-control">
                                        <option value="" selected>Pilih Pekerjaan</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Buruh">Buruh</option>
                                        <option value="Guru">Guru</option>
                                        <option value="TNI">TNI</option>
                                        <option value="POLRI">POLRI</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Perbulan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-money text-info"> </i></div>
                                    {{-- <input type="text" class="form-control" name="penghasilan_ayah"> --}}
                                    <select name="penghasilan_ayah" id="" class=" form-control">
                                        <option value="" selected>Pilih Penghasilan</option>
                                        <option value="< 250.000">< 250.000</option>
                                        <option value="250.000 - 500.000">250.000 - 500.000</option>
                                        <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                        <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                                        <option value="> 2.000.000">> 2.000.000</option>
                                    </select>
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
                                    {{-- <input type="text" class="form-control" name="pendidikan_ibu" placeholder="Masukkan Pendidikan Terakhir Ibu"> --}}
                                    <select name="pendidikan_ibu" id="" class=" form-control">
                                        <option value="" selected>Pilih Pendidikan Terakhir</option>
                                        <option value="Tidak Sekolah" >Tidak Sekolah</option>
                                        <option value="SD / Sederajat" >SD / Sederajat</option>
                                        <option value="SMP / Sederajat" >SMP / Sederajat</option>
                                        <option value="SMA / Sederajat" >SMA / Sederajat</option>
                                        <option value="D1" >D1</option>
                                        <option value="D1" >D1</option>
                                        <option value="D3" >D3</option>
                                        <option value="D4" >D4</option>
                                        <option value="S1" >S1</option>
                                        <option value="S2" >S2</option>
                                        <option value="S3" >S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-google-wallet text-info"> </i></div>
                                    {{-- <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu"> --}}
                                    <select name="pekerjaan_ibu" id="" class=" form-control">
                                        <option value="" selected>Pilih Pekerjaan Terakhir</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Buruh">Buruh</option>
                                        <option value="Guru">Guru</option>
                                        <option value="TNI">TNI</option>
                                        <option value="POLRI">POLRI</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Perbulan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-money text-info"> </i></div>
                                    <select name="penghasilan_ibu" id="" class=" form-control">
                                        <option value="" selected>Pilih Penghasilan</option>
                                        <option value="< 250.000">< 250.000</option>
                                        <option value="250.000 - 500.000">250.000 - 500.000</option>
                                        <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                        <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                                        <option value="> 2.000.000">> 2.000.000</option>
                                    </select>
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
                            
                            <!-- {{-- Wali --}} -->
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
                                    <select name="pekerjaan_wali" id="" class=" form-control">
                                        <option value="" selected>Pilih Pekerjaan</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Buruh">Buruh</option>
                                        <option value="Guru">Guru</option>
                                        <option value="TNI">TNI</option>
                                        <option value="POLRI">POLRI</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Penghasilan Perbulan</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-money text-info"> </i></div>
                                    <select name="penghasilan_wali" id="" class=" form-control">
                                        <option value="" selected>Pilih Penghasilan</option>
                                        <option value="< 250.000">< 250.000</option>
                                        <option value="250.000 - 500.000">250.000 - 500.000</option>
                                        <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                        <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                                        <option value="> 2.000.000">> 2.000.000</option>
                                    </select>
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
                                    <input type="text" class="form-control" name="hub_dengan_peserta_didik" placeholder="Masukkan Hubungan Kekerabatan dengan Peserta Didik">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <br> <hr>

                {{-- Lain - lain     --}}
                    <div class="card shadow p-2 rounded">
                        <div class="card border-0">
                            <div class=" card-header rounded-pill rounded-3 text-white py-2" style="background: #37517e">
                                    <h4 class=" pl-5">Lain - lain</h4>
                            </div>
                        </div>
                        
                        <div class="card-body p-3">
                            <hr>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Jarak Rumah Ke Sekolah</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-long-arrow-right text-info"> </i></div>
                                    {{-- <input type="text" class="form-control"> --}}
                                    <select name="jarak_rumah_ke_sekolah" id="" class=" form-control">
                                        <option value="" selected>Pilih Jarak</option>
                                        <option value="0 - 1 Km">0 - 1 Km</option>
                                        <option value="1 - 3 Km">1 - 3 Km</option>
                                        <option value="3 - 5 Km">3 - 5 Km</option>
                                        <option value="> 5 Km">> 5 Km </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Transportasi</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-car text-info"> </i></div>
                                    {{-- <input type="text" class="form-control"> --}}
                                    <select name="transportasi" id="" class=" form-control">
                                        <option value="" selected>Pilih Transportasi</option>
                                        <option value="Jalan Kaki">Jalan Kaki</option>
                                        <option value="Sepeda">Sepeda</option>
                                        <option value="Mobil Pribadi">Mobil Pribadi</option>
                                        <option value="Motor">Motor</option>
                                        <option value="Antar Jemput">Antar Jemput</option>
                                        <option value="Angkutan Umum">Angkutan Umum</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Berat Badan</label>
                                <div class="col-sm-8 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-pie-chart text-info"> </i></div>
                                    <input type="text" class="form-control" name="berat_badan" placeholder="Masukkan Berat Badan">
                                </div>
                                <label for="inputPassword" class="col-sm-1 col-form-label">Kg</label>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-8 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-line-chart text-info"> </i></div>
                                    <input type="text" class="form-control" name="tinggi_badan" placeholder="Masukkan Tinggi Badan">
                                </div>
                                <label for="inputPassword" class="col-sm-1 col-form-label">Cm</label>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Golongan Darah</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-thermometer text-info"> </i></div>
                                    {{-- <input type="text" class="form-control" name="gol_darah"> --}}
                                    <select name="gol_darah" id="" class=" form-control">
                                        <option value="" selected>Pilih Golongan Darah</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Riwayat Penyakit</label>
                                <div class="col-sm-9 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-eraser text-info"> </i></div>
                                    <input type="text" class="form-control" name="riwayat_penyakit" placeholder="Masukkan Riwayat Penyakit">
                                </div>
                            </div>

                            <hr>
                        </div>
                    </div>
                    <hr>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>

                
            </form>
        </div>
    </div>
    <div class="row"></div>
</div>

@endsection
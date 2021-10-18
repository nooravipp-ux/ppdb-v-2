@extends('layouts.app')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Hidden brand</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>

  <br>
  <hr>



  <div class="container">
    <div class="row rounded">
        <div class="container emp-profile">
            <form id="form-register" method="post" action="{{url('/student-registration/save')}}" enctype="multipart/form-data">
                @csrf

                <!--Body-->
                    <div class="card rounded-0">
                        
                        <div class="card-header p-0">
                            <div class="bg-info text-white py-2">
                                    <h4 class="pl-5">Data Diri</h4>
                            </div>
                        </div>

                        <div class="card-body p-3">
                            <hr>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8  input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="nama_lengkap">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="nik_siswa">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Kode POS</label>
                                <div class="col-sm-2 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="kode_pos">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="tempat_lahir">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-3 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No. Registrasi Akta Lahir</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_registrasi_akta_lahir">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="form-check input-group-text fa fa-envelope text-info">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" checked>
                                        <label class="form-check-label">
                                            Laki - Laki
                                        </label>
                                    </div>
                                    <div class="form-check input-group-text fa fa-envelope text-info">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
                                        <label class="form-check-label">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Anak Ke</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="anak_ke">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah Saudara Kandung</label>
                                <div class="col-sm-10 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="jumlah_saudara_kandung">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10 input-group-append">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="agama">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No. Telp</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_telp">
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <hr>
            

                    <div class="card rounded-0">

                        <div class="card-header p-0">
                            <div class="bg-info text-white py-2">
                                    <h4 class=" pl-5">Data Pendidikan</h4>
                            </div>
                        </div>
        
                        <hr>
                        <div class="card-body p-3">
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Asal Sekolah</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="nama_sekolah_asal">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat_sekolah"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No. Induk Siswa Nasioanl (NISN)</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_induk_siswa_nasional">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No. Peserta Ujian Nasional (SMP / MTs)</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_peserta_ujian_nasional">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Upload Ijazah</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control-file" name="file_ijazah">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No. Seri Ijazah</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_seri_ijazah">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tahun Ijazah</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="tahun_ijazah">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Upload SKHUN</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control-file" name="file_skhun">
                                </div>
                            </div>
                            
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No. Seri SKHUN</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_seri_skhun">
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <hr>

                    <div class="card rounded-0">
                        
                        <div class="card-header p-0">
                            <div class="bg-info text-white py-2">
                                    <h4 class=" pl-5">Biodata Orang Tua / Wali</h4>
                            </div>
                        </div>
                        <hr>

                        <!-- Biodata Ayah -->
                        <div class="card-body p-3">
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="nama_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No. Induk Keluaraga (NIK)</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="nik_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="tempat_lahir_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="date" class="form-control" name="tanggal_lahir_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="pendidikan_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="pekerjaan_ayah">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="penghasilan_ayah">
                                </div>
                            </div>
                            
                            <!-- Biodata Ibu -->
                            <hr>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="nama_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No. Induk Keluaraga (NIK)</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="nik_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="tempat_lahir_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="date" class="form-control" name="tanggal_lahir_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="pendidikan_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="pekerjaan_ibu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="penghasilan_ibu">
                                </div>
                            </div>
                            
                            <hr>
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Orang Tua</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat_ortu"></textarea>
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Kode POS</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="kode_pos_ortu">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No. Telp Orang Tua</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="no_telp_ortu">
                                </div>
                            </div>
                            
                            {{-- Wali --}}
                            <hr>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Wali</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="nama_wali">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="pekerjaan_wali">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="penghasilan_wali">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Wali</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <textarea type="text" class="form-control" name="alamat_wali"></textarea>
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Kode POS</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="kode_pos_wali">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Hub Dengan Peserta Didik</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="hub_dengan_peserta_didik">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>

                    <div class="card  rounded-0">
                        
                        <div class="card-header p-0">
                            <div class="bg-info text-white py-2">
                                    <h4 class=" pl-5">Lain - lain</h4>
                            </div>
                        </div>
                        <hr>

                        <div class="card-body p-3">
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Jarak Rumah Ke Sekolah</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Transportasi</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Berat Badan</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="berat_badan">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="tinggi_badan">
                                </div>
                            </div>
                            <div class="form-group row input-group">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Riwayat Penyakit</label>
                                <div class="col-sm-10 input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-envelope text-info"> </i></div>
                                    <input type="text" class="form-control" name="riwayat_penyakit">
                                </div>
                            </div>
                        </div>
                    </div>


                <hr>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>

@endsection
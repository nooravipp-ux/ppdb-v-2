@extends('layouts.app')

@section('content')
<body class="fixed-topbar theme-sdtl color-green  sidebar-hover">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>

      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar" style="background-color:#2B589C;color:#fff;">
          <div class="header-left">
            <div class="col-sm-12">
              <div style="margin-top:-8px;">
              <h2>
								<strong class="text-primary">
									<a href=""><img src="img/logo.png" alt="Logo" width="35" style="position:absolute;margin-top:-8px;"> <span style="margin-left:40px;color:#fff;">PPDB Online</span></a>
								</strong>
              </div>
            </div>

          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="language-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <span style="color:#ddd;">PPDB Tahun Pelajaran <b class="text-danger" style="color:#fff;">2021-2022</b></span>
                </a>
              </li>
            </ul>
          </div>

          <!-- header-right -->
        </div>
      <div>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content page-wizard">

          <div class="header" style="margin-top:-20px;">
            <h2>Form Pendaftaran PPDB Online <strong> SMK WIDYA DIRGANTARA</strong></h2>
            <hr style="margin-top:5px;">

          </div>
          <div class="row" style="margin-top:-30px;">
            <div class="col-lg-12">

              <div class="tabs tabs-linetriangle">

                <div class="tab-content">
                  <div class="tab-pane active" id="style">
                                        <div class="wizard-div current wizard-sea" id="register">
                      <form role="form" class="wizard wizard-validation" data-style="sea" role="form" action="" enctype="multipart/form-data"  method="post">
                        <fieldset>
                               <legend>Ketentuan</legend>

                               <div class="col-md-2"></div>
                               <div class="col-md-8">
																 	<div class="panel panel-primary">
  <div class="panel-heading">
    <h2>Kententuan PPDB <strong class="text-success" style="color:#eee;">SMK WIDYA DIRGANTARA</strong></h2>
    <span style="font-size:30px;"> Tahun Pelajaran <b>2021-2022</b></span>
    <!-- <hr> -->
  </div>
  <div class="panel-body">

    <ol style="color:#333;">

      <li>Setiap calon peserta didik wajib mengisi form pendaftaran dengan lengkap. </li>

      <li>Data-data yang diisikan pada form PPDB Online harus sesuai dengan data asli dan benar adanya.</li>

      <li>Calon peserta didik yang sudah mendaftarkan secara online akan mendapatkan Nomor Pendaftaran yang harus dicetak dan dilampirkan dalam persyaratan yang diminta oleh Panitia PPDB SMK WIDYA DIRGANTARA.  </li>

      <li>Calon peserta didik yang sudah mendaftarkan diri melalui PPDB Online SMK WIDYA DIRGANTARA akan mendapatkan nomor pendaftaran dan password yang nantinya akan digunakan untuk akses informasi yang berkaitan dengan PPDB SMK WIDYA DIRGANTARA.</li>

      <li>Calon peserta didik yang sudah mendaftarakan diri melalui PPDB Online SMK WIDYA DIRGANTARA wajib menyerahkan dokumen persyaratan yang sudah ditentukan oleh Panitia PPDB.</li>

      <li>Setiap calon peserta didik yang mendaftar wajib mengikuti tes seleksi yang diadakan oleh panitia PPDB SMK WIDYA DIRGANTARA.</li>

      <li>Data yang sudah diberikan oleh Panitia PPDB SMK WIDYA DIRGANTARA hanya digunakan untuk keperluan penerimaan peserta didik baru. <strong class="text-danger">Data yang dikirimkan akan dijaga kerahasiaannya dan tidak akan dipublikasikan oleh Panita PPDB</strong>.</li>

    </ol>

  </div>
</div>
                                   <div class="col-md-12" >
                                       <span class="text-primary" style="font-size:18px;color:#222;"><strong>Apakah Anda setuju dengan ketentuan diatas?</strong></span>
                                       <div class="form-group" style="padding-bottom:30px;">
                                          <div class="radio bg-success" style="padding-top:10px;padding-bottom:10px;border-radius:3px;color:#222;" >
                                             <label>
                                               <input type="radio" value="cek" name="cek" data-parsley-group="block0" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-ck"]' required> <b>Ya, saya setuju</b>
 																					   </label>
                                             <div id="condition-ck" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                                          </div>
                                      </div>
                                   </div>
                               </div>
                               <div class="col-md-2"></div>

                             </fieldset>

                        <fieldset>
                          <legend>Data Siswa</legend>
                          <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
  														<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;"><center>Data Siswa</center></strong></h2>
  </div>
  <div class="panel-body">

    <div class="form-group" style="padding-bottom:30px;">
        <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">Nomor Pendaftaran <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
          <input type="text" name="nis" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="Nomor Induk Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nis"]' value="2021-019" readonly required>
          <i class="fa fa-users" style="margin-left:15px;"></i>
          <div id="error-nis" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          <div id="pesan_komentar">*Jangan mengganti isian ini.</div>
        </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_lengkap" class="form-control bg-blue" placeholder="Nama lengkap Calon Siswa" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan akte kelahiran/ijazah</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.S.N <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="nisn" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="10" placeholder="Nomor Induk Siswa Nasional" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nisn"]'>
        <i class="fa fa-users" style="margin-left:15px;"></i>
        <div id="error-nisn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan data dari web  http://nisn.data.kemdikbud.go.id/kartu NISN</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NIK Siswa <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nik" class="form-control bg-blue" placeholder="NIK Siswa" maxlength="16" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nik"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nik" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan akte kelahiran/ijazah</div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:-3px">Jenis Kelamin <span class="text-danger">*</span></label>
      <div class="col-sm-9">
      <div class="radio" style="margin-top:3px;margin-left:-20px;">
          <label>
          <input type="radio" value="Laki-Laki" name="jk" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required> <i class="fa fa-male"></i> &nbsp;Laki-laki
          </label>
        </div>
        <div class="radio" style="margin-left:-20px;">
          <label>
          <input type="radio" value="Perempuan" name="jk" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required> <i class="fa fa-female"></i> &nbsp;Perempuan
          </label>
        </div>
        <div id="condition-error" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Kelahiran <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="tempat_lahir" class="form-control bg-blue class" placeholder="Tempat Kelahiran Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tempat_lahir"]' required>
        <i class="fa fa-building" style="margin-left:15px;"></i>
        <div id="error-tempat_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group" >
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
        <div class="col-sm-4" style="padding:0px">
        <select class="form-control bg-blue class"  name="tgl_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tgl_lahir"]' required>
              <option value="" selected>Pilih Tanggal</option>
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                              <option value="09">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                       </select>
         <div id="error-tgl_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>

    <div class="col-sm-4"  style="padding-left:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-bln_lahir"]' required>
              <option value="" selected>Pilih Bulan</option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
         </select>
        <div id="error-bln_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>

    <div class="col-sm-4" style="margin-left:-27px;">
         <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="thn_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-thn_lahir"]' required>
          <option value="" selected>Pilih Tahun Lahir</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                   </select>
          <div id="error-thn_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Agama <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Agama yang dianut" name="agama" data-parsley-group="block1" data-parsley-errors-container='div[id="error-agama"]' required>
              <option value="">Pilih agama yang dianut</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
              <option value="Konghucu">Konghucu</option>
              <option value="lainnya">Lainnya</option>
        </select>
        <div id="error-agama" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status dalam Keluarga <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Pilih Status dalam Keluarga" name="status_keluarga" data-parsley-group="block1" data-parsley-errors-container='div[id="error-status_keluarga"]' required>
              <option value="">Pilih Status dalam Keluarga</option>
              <option value="Anak Kandung">Anak Kandung</option>
              <option value="Anak Angkat">Anak Angkat</option>
          </select>
      <div id="error-status_keluarga" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Anak Ke- <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="anak_ke" class="form-control bg-blue" placeholder="Anak Ke-" maxlength="2" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-anak_ke"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-anak_ke" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi dengan angka</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jumlah Saudara <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="jml_saudara" class="form-control bg-blue" placeholder="Jumlah Saudara Kandung" maxlength="2" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-jml_saudara"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-jml_saudara" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi dengan angka</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Registrasi Akta <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="no_akta" class="form-control bg-blue" placeholder="No. Registrasi Akta" maxlength="25" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-no_akta"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-no_akta" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi dengan angka</div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Hobi <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="hobi" class="form-control bg-blue class" placeholder="Hobi" data-parsley-group="block1" data-parsley-errors-container='div[id="error-hobi"]' required>
        <div id="error-hobi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Cita - Cita <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="cita" class="form-control bg-blue class" placeholder="Cita - Cita" data-parsley-group="block1" data-parsley-errors-container='div[id="error-cita"]' required>
        <div id="error-cita" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Berat Badan <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="berat_badan" class="form-control bg-blue class" maxlength="3" placeholder="Berat Badan" data-parsley-group="block1" data-parsley-errors-container='div[id="error-berat_badan"]' required>
        <div id="error-berat_badan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi dengan angka</div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tinggi Badan <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="tinggi_badan" class="form-control bg-blue class" maxlength="3" placeholder="Tinggi Badan" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tinggi_badan"]' required>
        <div id="error-tinggi_badan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi dengan angka</div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penyakit Yang diderita <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="penyakit" class="form-control bg-blue class" placeholder="Penyakit Yang diderita" data-parsley-group="block1" data-parsley-errors-container='div[id="error-penyakit"]' required>
        <div id="error-penyakit" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Golongan Darah <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Golongan Darah" name="gol_darah" data-parsley-group="block1" data-parsley-errors-container='div[id="error-gol_darah"]' required>
              <option value="">Pilih Golongan Darah</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="AB">AB</option>
              <option value="O">O</option>
        </select>
        <div id="error-gol_darah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group" >
       <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_hp_siswa" class="form-control bg-blue class" maxlength="14" onkeypress="return hanyaAngka(this);" placeholder="No. Handphone Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-no_hp_siswa"]' required>
              <i class="fa fa-phone" style="margin-left:15px;"></i>
              <div id="error-no_hp_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
    </div>

  <div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kompetensi Keahlian <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Kompetensi Keahlian yang Diinginkan" name="komp_ahli" data-parsley-group="block1" data-parsley-errors-container='div[id="error-komp_ahli"]' required>
              <option value="">Pilih salah satu</option>
              <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif (TKRO)</option>
              <option value="Teknik Pemesinan">Teknik Pemesinan (TP)</option>
              <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor (TBSM)</option>
              <option value="Teknik Komputer & Jaringan">Teknik Komputer & Jaringan (TKJ)</option>
      </select>
      </div>
      <div id="error-komp_ahli" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
  </div>
  </div>

  </div>

<!--<a class="next-btn sf-right sf-btn" href="../../../../step/3.php">LANJUT</a>
<a class="prev-btn sf-left sf-btn" href="../../../../step/1.php">KEMBALI</a>!-->

<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>
                            </div>
                          </div>
                          <div class="col-lg-12"></div>
                        </fieldset>

                        <fieldset>
                           <legend>Data Alamat</legend>
                           <div class="row">
                             <div class="col-md-2"></div>
                             <div class="col-md-8">
   														<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;"><center>Data Alamat</center></strong></h2>
  </div>
  <div class="panel-body">

        <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jenis tempat tinggal <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih jenis tempat tinggal" name="jenis_tinggal" data-parsley-group="block2" data-parsley-errors-container='div[id="error-jenis_tinggal"]' required>
              <option value="">Pilih jenis tempat tinggal</option>
              <option value="1">Tinggal dengan orangtua/wali</option>
              <option value="2">Ikut saudara/kerabat</option>
              <option value="3">Asrama Madrasah</option>
              <option value="4">Kontrak/kost</option>
              <option value="5">Asrama Pesantren</option>
              <option value="6">Panti Asuhan</option>
              <option value="7">Rumah singgah</option>
              <option value="8">Lainnya</option>
        </select>
        <div id="error-jenis_tinggal" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat Lengkap Siswa <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="alamat_siswa" class="form-control bg-blue" placeholder="Alamat siswa" maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-alamat_siswa"]' required>
        <i class="fa fa-home" style="margin-left:15px;"></i>
        <div id="error-alamat_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Harap dituliskan dengan lengkap beserta nama gang/komplek</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">RT <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="rt_siswa" class="form-control bg-blue" placeholder="RT" maxlength="3" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-rt_siswa"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-rt_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK dan diisi hanya angka saja</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">RW <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="rw_siswa" class="form-control bg-blue" placeholder="RW" maxlength="3" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-rw_siswa"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-rw_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK dan diisi hanya angka saja</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kelurahan <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="desa" class="form-control bg-blue" placeholder="Kelurahan" maxlength="50" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-desa"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-desa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kecamatan <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="kec" class="form-control bg-blue" placeholder="Kecamatan" maxlength="50" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kec"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-kec" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kabupaten/Kota<span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="kab" class="form-control bg-blue" placeholder="Kabupaten/Kota" maxlength="50" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kab"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-kab" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Provinsi <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="prov" class="form-control bg-blue" placeholder="Provinsi" maxlength="50" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-prov"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-prov" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kode pos <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="kode_pos" class="form-control bg-blue" placeholder="Kode pos" maxlength="50" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kode_pos"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-kode_pos" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jarak ke sekolah <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Jarak ke sekolah" name="jarak" data-parsley-group="block2" data-parsley-errors-container='div[id="error-jarak"]' required>
              <option value="">Pilih jarak siswa ke sekolah</option>
              <option value="Kurang dari 5 km">Kurang dari 5 km</option>
              <option value="5 - 10 km">5 - 10 km</option>
              <option value="11 - 20 km">11 - 20 km</option>
              <option value="21 - 30 km">21 - 30 km</option>
              <option value="Lebih dari 30 km">Lebih dari 30 km</option>
          </select>
      <div id="error-jarak" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Transportasi yang digunakan <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Transportasi yang digunakan" name="trans" data-parsley-group="block2" data-parsley-errors-container='div[id="error-trans"]' required>
              <option value="">Pilih transportasi yang digunakan ke sekolah</option>
              <option value="Jalan kaki">Jalan Kaki</option>
              <option value="Sepeda">Sepeda</option>
              <option value="Sepeda motor">Sepeda motor</option>
              <option value="Mobil pribadi">Mobil Pribadi</option>
              <option value="Antar jemput sekolah">Antar jemput sekolah</option>
              <option value="Angkutan Umum">Angkutan umum</option>
              <option value="Lainnya">Lainnya</option>
          </select>
      <div id="error-trans" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
    </div>

  </div>
</div>

<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>
                             </div>
                           </div>
                           <div class="col-lg-12"></div>
                        </fieldset>

                         <fieldset>
                            <legend>Data Ortu</legend>
                            <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-8">
    														<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;"><center>Data Orangtua/Wali</center></strong></h2>
  </div>
  <div class="panel-body">

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">Nomor Kartu Keluarga <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="no_kk" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="16" placeholder="Nomor Kartu Keluarga" data-parsley-group="block3" data-parsley-errors-container='div[id="error-no_kk"]' required>
        <div id="error-no_kk" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan Kartu Keluarga (KK)</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Kepala Keluarga <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="kepala_keluarga" class="form-control bg-blue" placeholder="Nama Kepala Keluarga" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kepala_keluarga"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-kepala_keluarga" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan KK</div>
      </div>
    </div>

    </br></br></br>
    <h2><strong class="text-success" style="color:#000000;"><center>Data Ayah Kandung</center></strong></h2>
    <hr />

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Ayah Kandung <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_ayah" class="form-control bg-blue" placeholder="Nama Ayah Kandung" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_ayah"]' required>
        <i class="fa fa-male" style="margin-left:15px;"></i>
        <div id="error-nama_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">NIK Ayah <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="nik_ayah" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="16" placeholder="NIK Ayah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-nik_ayah"]' required>
        <div id="error-nik_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan Kartu Keluarga (KK)</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">Tempat Kelahiran Ayah <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="tmpt_lahir_ayah" class="form-control bg-blue class" maxlength="50" placeholder="Tempat Kelahiran Ayah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-tmpt_lahir_ayah"]' required>
        <div id="error-tmpt_lahir_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>


    <div class="form-group" >
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
        <div class="col-sm-4" style="padding:0px">
        <select class="form-control bg-blue class"  name="tgl_lahir_ayah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-tgl_lahir_ayah"]' required>
              <option value="" selected>Pilih Tanggal</option>
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                              <option value="09">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                       </select>
         <div id="error-tgl_lahir_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>




    <div class="col-sm-4"  style="padding-left:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_lahir_ayah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-bln_lahir_ayah"]' required>
              <option value="" selected>Pilih Bulan</option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
         </select>
        <div id="error-bln_lahir_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>


    <div class="col-sm-4" style="margin-left:-27px;">
         <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="thn_lahir_ayah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-thn_lahir_ayah"]' required>
          <option value="" selected>Pilih Tahun Lahir</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                   </select>
          <div id="error-thn_lahir_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status Ayah <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Status Ayah" name="status_ayah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-status_ayah"]' required>
              <option value="">Pilih Status Ayah</option>
              <option value="1">Masih hidup</option>
              <option value="2">Sudah meninggal</option>
              <option value="3">Tidak diketahui</option>
        </select>
        <div id="error-status_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan Ayah <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Ayah" name="pekerjaan_ayah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-pekerjaan_ayah"]' required>
                  <option value="">Pilih Pekerjaan Ayah</option>
                                      <option value="Tidak Bekerja">Tidak Bekerja</option>
                                      <option value="Pensiunan">Pensiunan</option>
                                      <option value="PNS Selain (Guru dan Dokter/Bidan/Perawat)">PNS Selain (Guru dan Dokter/Bidan/Perawat)</option>
                                      <option value="PNS">PNS</option>
                                      <option value="TNI/POLRI">TNI/POLRI</option>
                                      <option value="Pegawai Swasta">Pegawai Swasta</option>
                                      <option value="Wiraswasta">Wiraswasta</option>
                                      <option value="Pengacara/Hakim/Jaksa/Notaris ">Pengacara/Hakim/Jaksa/Notaris </option>
                                      <option value="Seniman/Pelukis/Artis/Sejenis
">Seniman/Pelukis/Artis/Sejenis
</option>
                                      <option value="Dokter/Bidan/Perawat">Dokter/Bidan/Perawat</option>
                                      <option value="Pilot/Pramugara">Pilot/Pramugara</option>
                                      <option value="Pedagang">Pedagang</option>
                                      <option value="Petani/Peternak">Petani/Peternak</option>
                                      <option value="Nelayan">Nelayan</option>
                                      <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                                      <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                                      <option value="Politikus">Politikus</option>
                                      <option value="Lainnya">Lainnya</option>
                                </select>
              <div id="error-pekerjaan_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan Ayah<span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Ayah" name="penghasilan_ayah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-penghasilan_ayah"]' required>
                  <option value="">Pilih Penghasilan Ayah</option>
                                      <option value="< 500.000">< 500.000</option>
                                      <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                      <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                                      <option value="2.000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                                      <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                                      <option value="> 5.000.000">> 5.000.000</option>
                                </select>
              <div id="error-penghasilan_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan Ayah <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pendidikan Ayah" name="pdd_ayah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-pdd_ayah"]' required>
                  <option value="">Pilih Pendidikan Ayah</option>
                                      <option value="SD/Sederajat">SD/Sederajat</option>
                                      <option value="SMP/Sederajat">SMP/Sederajat</option>
                                      <option value="SMA/Sederajat">SMA/Sederajat</option>
                                      <option value="D1">D1</option>
                                      <option value="D2">D2</option>
                                      <option value="D3">D3</option>
                                      <option value="D4/S1">D4/S1</option>
                                      <option value="S2">S2</option>
                                      <option value="S3">S3</option>
                                      <option value="Tidak Berpendidikan Formal">Tidak Berpendidikan Formal</option>
                                </select>
              <div id="error-pdd_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        </br></br></br></br>
    <h2><strong class="text-success" style="color:#000000;"><center>Data Ibu Kandung</center></strong></h2>
    <hr>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Ibu Kandung <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_ibu" class="form-control bg-blue" placeholder="Nama Ibu Kandung" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_ibu"]' required>
        <i class="fa fa-female" style="margin-left:15px;"></i>
        <div id="error-nama_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">NIK Ibu <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="nik_ibu" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="16" placeholder="NIK Ibu" data-parsley-group="block3" data-parsley-errors-container='div[id="error-nik_ibu"]' required>
        <div id="error-nik_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan Kartu Keluarga (KK)</div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Kelahiran Ibu <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="tmpt_lahir_ibu" class="form-control bg-blue class" placeholder="Tempat Kelahiran Ayah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-tmpt_lahir_ibu"]' required>
        <i class="fa fa-building" style="margin-left:15px;"></i>
        <div id="error-tmpt_lahir_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group" >
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
        <div class="col-sm-4" style="padding:0px">
        <select class="form-control bg-blue class"  name="tgl_lahir_ibu" data-parsley-group="block3" data-parsley-errors-container='div[id="error-tgl_lahir_ibu"]' required>
              <option value="" selected>Pilih Tanggal</option>
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                              <option value="09">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                       </select>
         <div id="error-tgl_lahir_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>

    <div class="col-sm-4"  style="padding-left:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_lahir_ibu" data-parsley-group="block3" data-parsley-errors-container='div[id="error-bln_lahir_ibu"]' required>
              <option value="" selected>Pilih Bulan</option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
         </select>
        <div id="error-bln_lahir_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>

    <div class="col-sm-4" style="margin-left:-27px;">
         <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="thn_lahir_ibu" data-parsley-group="block3" data-parsley-errors-container='div[id="error-thn_lahir_ibu"]' required>
          <option value="" selected>Pilih Tahun Lahir</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                   </select>
          <div id="error-thn_lahir_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status Ibu <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Status Ibu" name="status_ibu" data-parsley-group="block3" data-parsley-errors-container='div[id="error-status_ibu"]' required>
              <option value="">Pilih Status Ibu</option>
              <option value="1">Masih hidup</option>
              <option value="2">Sudah meninggal</option>
              <option value="3">Tidak diketahui</option>
        </select>
        <div id="error-status_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan Ibu <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Ibu" name="pekerjaan_ibu" data-parsley-group="block3" data-parsley-errors-container='div[id="error-pekerjaan_ibu"]' required>
                  <option value="">Pilih Pekerjaan Ibu</option>
                                      <option value="Tidak Bekerja">Tidak Bekerja</option>
                                      <option value="Pensiunan">Pensiunan</option>
                                      <option value="PNS Selain (Guru dan Dokter/Bidan/Perawat)">PNS Selain (Guru dan Dokter/Bidan/Perawat)</option>
                                      <option value="PNS">PNS</option>
                                      <option value="TNI/POLRI">TNI/POLRI</option>
                                      <option value="Pegawai Swasta">Pegawai Swasta</option>
                                      <option value="Wiraswasta">Wiraswasta</option>
                                      <option value="Pengacara/Hakim/Jaksa/Notaris ">Pengacara/Hakim/Jaksa/Notaris </option>
                                      <option value="Seniman/Pelukis/Artis/Sejenis
">Seniman/Pelukis/Artis/Sejenis
</option>
                                      <option value="Dokter/Bidan/Perawat">Dokter/Bidan/Perawat</option>
                                      <option value="Pilot/Pramugara">Pilot/Pramugara</option>
                                      <option value="Pedagang">Pedagang</option>
                                      <option value="Petani/Peternak">Petani/Peternak</option>
                                      <option value="Nelayan">Nelayan</option>
                                      <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                                      <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                                      <option value="Politikus">Politikus</option>
                                      <option value="Lainnya">Lainnya</option>
                                </select>
              <div id="error-pekerjaan_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan Ibu <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Ayah" name="penghasilan_ibu" data-parsley-group="block3" data-parsley-errors-container='div[id="error-penghasilan_ibu"]' required>
                  <option value="">Pilih Penghasilan Ibu</option>
                                      <option value="< 500.000">< 500.000</option>
                                      <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                      <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                                      <option value="2.000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                                      <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                                      <option value="> 5.000.000">> 5.000.000</option>
                                </select>
              <div id="error-penghasilan_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan Ibu <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pendidikan Ibu" name="pdd_ibu" data-parsley-group="block3" data-parsley-errors-container='div[id="error-pdd_ibu"]' required>
                  <option value="">Pilih Pendidikan Ibu</option>
                                      <option value="SD/Sederajat">SD/Sederajat</option>
                                      <option value="SMP/Sederajat">SMP/Sederajat</option>
                                      <option value="SMA/Sederajat">SMA/Sederajat</option>
                                      <option value="D1">D1</option>
                                      <option value="D2">D2</option>
                                      <option value="D3">D3</option>
                                      <option value="D4/S1">D4/S1</option>
                                      <option value="S2">S2</option>
                                      <option value="S3">S3</option>
                                      <option value="Tidak Berpendidikan Formal">Tidak Berpendidikan Formal</option>
                                </select>
              <div id="error-pdd_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat Lengkap Orang Tua <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="alamat_ortu" class="form-control bg-blue" placeholder="Alamat Orang Tua" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-alamat_ortu"]' required>
        <i class="fa fa-home" style="margin-left:15px;"></i>
        <div id="error-alamat_ortu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Harap dituliskan dengan lengkap beserta nama gang/komplek dan rt rw</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kelurahan <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="kel_ortu" class="form-control bg-blue" placeholder="Kelurahan" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kel_ortu"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-kel_ortu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kecamatan <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="kec_ortu" class="form-control bg-blue" placeholder="Kecamatan" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kec_ortu"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-kec_ortu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kabupaten/Kota<span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="kota_ortu" class="form-control bg-blue" placeholder="Kabupaten/Kota" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kota_ortu"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-kota_ortu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kode pos <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="kodepos_ortu" class="form-control bg-blue" placeholder="Kode pos" maxlength="5" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kodepos_ortu"]' required>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-kodepos_ortu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" >
       <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone Ortu <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_hp_ortu" class="form-control bg-blue class" maxlength="14" onkeypress="return hanyaAngka(this);" placeholder="No. Handphone Orangtua" data-parsley-group="block3" data-parsley-errors-container='div[id="error-no_hp_ortu"]' >
              <i class="fa fa-phone" style="margin-left:15px;"></i>
              <div id="error-no_hp_ortu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

            </br></br></br></br>
    <h2><strong class="text-success" style="color:#000000;"><center>Data Wali</center></strong></h2>
    <hr />

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama wali  <span class="text-danger"></span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_wali" class="form-control bg-blue" placeholder="Nama wali " maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_wali"]' >
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan wali <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan wali" name="pekerjaan_wali" data-parsley-group="block3" data-parsley-errors-container='div[id="error-pekerjaan_wali"]' >
                  <option value="">Pilih Pekerjaan wali</option>
                                      <option value="Tidak Bekerja">Tidak Bekerja</option>
                                      <option value="Pensiunan">Pensiunan</option>
                                      <option value="PNS Selain (Guru dan Dokter/Bidan/Perawat)">PNS Selain (Guru dan Dokter/Bidan/Perawat)</option>
                                      <option value="PNS">PNS</option>
                                      <option value="TNI/POLRI">TNI/POLRI</option>
                                      <option value="Pegawai Swasta">Pegawai Swasta</option>
                                      <option value="Wiraswasta">Wiraswasta</option>
                                      <option value="Pengacara/Hakim/Jaksa/Notaris ">Pengacara/Hakim/Jaksa/Notaris </option>
                                      <option value="Seniman/Pelukis/Artis/Sejenis
">Seniman/Pelukis/Artis/Sejenis
</option>
                                      <option value="Dokter/Bidan/Perawat">Dokter/Bidan/Perawat</option>
                                      <option value="Pilot/Pramugara">Pilot/Pramugara</option>
                                      <option value="Pedagang">Pedagang</option>
                                      <option value="Petani/Peternak">Petani/Peternak</option>
                                      <option value="Nelayan">Nelayan</option>
                                      <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                                      <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                                      <option value="Politikus">Politikus</option>
                                      <option value="Lainnya">Lainnya</option>
                                </select>
              <div id="error-pekerjaan_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan wali <span class="text-danger"></span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Ayah" name="penghasilan_wali" data-parsley-group="block3" data-parsley-errors-container='div[id="error-penghasilan_wali"]' >
                  <option value="">Pilih Penghasilan wali</option>
                                      <option value="< 500.000">< 500.000</option>
                                      <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                      <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                                      <option value="2.000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                                      <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                                      <option value="> 5.000.000">> 5.000.000</option>
                                </select>
              <div id="error-penghasilan_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
        <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat Lengkap Wali <span class="text-danger"></span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="alamat_wali" class="form-control bg-blue" placeholder="Alamat Wali" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-alamat_wali"]'>
        <i class="fa fa-home" style="margin-left:15px;"></i>
        <div id="error-alamat_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Harap dituliskan dengan lengkap beserta nama gang/komplek dan rt rw</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kelurahan <span class="text-danger"></span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="kel_wali" class="form-control bg-blue" placeholder="Kelurahan" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kel_wali"]'>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-kel_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kecamatan <span class="text-danger"></span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="kec_wali" class="form-control bg-blue" placeholder="Kecamatan" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kec_wali"]'>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-kec_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kabupaten/Kota<span class="text-danger"></span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="kota_wali" class="form-control bg-blue" placeholder="Kabupaten/Kota" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kota_wali"]'>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-kota_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kode pos <span class="text-danger"></span></label>
        <div class="col-sm-9 prepend-icon">
        <input type="text" name="kodepos_wali" class="form-control bg-blue" placeholder="Kode pos" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-kodepos_wali"]'>
        <i class="fa fa-map-marker" style="margin-left:15px;"></i>
        <div id="error-kodepos_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi sesuai KK</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Hubungan dengan peserta didik <span class="text-danger"></span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="hubungan_wali" class="form-control bg-blue" placeholder="Hubungan dengan peserta didik " maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-hubungan_wali"]'>
        <i class="" style="margin-left:15px;"></i>
        <div id="error-hubungan_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    </br></br></br></br>
    <h2><strong class="text-success" style="color:#000000;"><center>Status Kepemilikan Kartu</center></strong></h2>
    <hr />

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nomor Kartu Keluarga Sejahtera (KKS)  <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="no_kks" class="form-control bg-blue" placeholder="No. KKS " maxlength="25" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-no_kks"]' required>
        <i class="" style="margin-left:15px;"></i>
        <div id="error-no_kks" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi dengan tanda "-" apabila tidak memiliki</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nomor Program Keluarga Harapan (PKH)  <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="no_pkh" class="form-control bg-blue" placeholder="No. PKH " maxlength="25" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-no_pkh"]' required>
        <i class="" style="margin-left:15px;"></i>
        <div id="error-no_pkh" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi dengan tanda "-" apabila tidak memiliki</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nomor Kartu Indonesia Pintar (KIP)  <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="no_kip" class="form-control bg-blue" placeholder="No. KIP " maxlength="25" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-no_kip"]' required>
        <i class="" style="margin-left:15px;"></i>
        <div id="error-no_kip" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi dengan tanda "-" apabila tidak memiliki</div>
      </div>
    </div>

       

  

  </div>
</div>


<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>
                              </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Data Sekolah</legend>
                            <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-8">
                                <div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;"><center>Data Sekolah</center></strong></h2>
  </div>
  <div class="panel-body">

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Sekolah <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_sekolah" class="form-control bg-blue" placeholder="Nama Sekolah" maxlength="100" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_sekolah"]' required>
        <i class="fa fa-university" style="margin-left:15px;"></i>
        <div id="error-nama_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jenjang sekolah <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih jenjang sekolah sebelumnya" name="jenjang_sekolah" data-parsley-group="block4" data-parsley-errors-container='div[id="error-jenjang_sekolah"]' >
              <option value="">Pilih Jenjang Sekolah</option>
              <option value="1">SMP</option>
              <option value="2">MTs</option>
              <option value="3">SMP Terbuka</option>
              <option value="4">SLB-MTs</option>
              <option value="5">Paket B</option>
              <option value="6">Salafiyah Wustha</option>
              <option value="7">SMP Luar Negeri</option>
              <option value="8">Mu'adalah MTs</option>
              <option value="9">Pesantren</option>
        </select>
        <div id="error-jenjang_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status sekolah <span class="text-danger">*</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih status sekolah sebelumnya" name="status_sekolah" data-parsley-group="block4" data-parsley-errors-container='div[id="error-status_sekolah"]' >
              <option value="">Pilih Status Sekolah</option>
              <option value="NEGERI">NEGERI</option>
              <option value="SWASTA">SWASTA</option>
        </select>
        <div id="error-status_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat Sekolah <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="lokasi_sekolah" class="form-control bg-blue" placeholder="Alamat Sekolah" maxlength="100" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-lokasi_sekolah"]' required>
        <i class="fa fa-university" style="margin-left:15px;"></i>
        <div id="error-lokasi_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tahun Ijazah  <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="tahun_ijazah" class="form-control bg-blue" placeholder="No. Seri Ijazah " maxlength="4" onkeypress="return hanyaAngka(this);" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-tahun_ijazah"]' required>
        <i class="" style="margin-left:15px;"></i>
        <div id="error-tahun_ijazah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi dengan tahun lulus</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Seri Ijazah  <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="no_ijazah" class="form-control bg-blue" placeholder="No. Seri Ijazah " maxlength="25" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-no_ijazah"]' required>
        <i class="" style="margin-left:15px;"></i>
        <div id="error-no_ijazah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi dengan tanda "-" apabila ijazah belum diterima</div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. SKHU  <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="no_skhu" class="form-control bg-blue" placeholder="No. SKHU " maxlength="25" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-no_skhu"]' required>
        <i class="" style="margin-left:15px;"></i>
        <div id="error-no_skhu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Isi dengan tanda "-" apabila tidak memiliki</div>
      </div>
    </div>

  </div>
</div>

<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>
                              </div>
                            </div>
                        </fieldset>

                        <fieldset>
                           <legend>Konfirmasi</legend>
                           <div class="row">
                           <div class="form-group" >
                               <div class="col-md-3">
                              </div>
                              <div class="col-md-6 panel p-20" style="text-align:center">
                              <i class="fa fa-info-circle faa-flash animated c-blue" style="font-size:97px"></i><br><br>
                              <span style="font-size:15px">
                                 Proses PPDB Online SMK WIDYA DIRGANTARA hampir selesai. Silakan periksa kembali data-data calon siswa yang sudah anda masukkan.
                                 <br><br>
                                 <div class="col-md-12" >
                                       <span class="text-primary" style="font-size:18px;"><strong>Apakah data calon siswa sudah sesuai dan lengkap?</strong></span>
                                       <div class="form-group">
                                          <div class="radio bg-success p-10" style="border-radius:3px;" >
                                             <label>
                                               <input type="radio" value="cekx" name="cekx" data-parsley-group="blockx" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-cx"]' required> <b>Ya, data sudah sesuai dan lengkap.</b>
                                             </label>
                                             <div class="faa-flash animated" id="condition-cx" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                                          </div>
                                   </div>

                                   <!-- <fieldset>
                            <legend>Kom</legend>
                            <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-8">
                                <div class="panel panel-primary">
  <!-- <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Rayonisasi</strong></h2>
  </div> -->
  <div class="panel-body">

  <!-- <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Rayon 
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: user</p>
<p>Filename: step/6.php</p>
<p>Line Number: 8</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/u7293598/public_html/ppdb/application/views/web/step/6.php<br />
			Line: 8<br />
			Function: _error_handler			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/u7293598/public_html/ppdb/application/views/web/pendaftaran.php<br />
			Line: 201<br />
			Function: view			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/u7293598/public_html/ppdb/application/controllers/Web.php<br />
			Line: 34<br />
			Function: view			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/u7293598/public_html/ppdb/index.php<br />
			Line: 315<br />
			Function: require_once			</p>

		
	

</div> <span class="text-danger">*</span></label>
      <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Rayon SMA Negeri 1 Belitang" name="rayonisasi" data-parsley-group="block4" data-parsley-errors-container='div[id="error-rayonisasi"]' required>
                <option value=""> - Rayon MTs NEGERI 1 WONOGIRI - </option>
                <option value="Lintas Rayon">Lintas Rayon</option>
                <option value="Lintas Sektoral">Lintas Sektoral</option>
        </select>
        <div id="error-rayonisasi" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>

  </div>
</div>


<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b>
        <ol>
          <li>Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</li>
          <li>
            <table width="100%" border="0">
              <tr>
                <th colspan="2">Untuk Lintas Rayon dan Lintas Sektoral pada saat verifikasi membawa berkas pendukung sbb :</th>
              </tr>
              <tr>
                <td valign="top"><i class="fa fa-check"></i></td>
                <td><i>Untuk Lintas Rayon apabila  dapat menunjukan surat keterangan domisili (fotocopy kartu keluarga), dan surat pindah rayon dari kepala sekolah SMP/MTs.</i></td>
              </tr>
              <tr>
                <td valign="top"><i class="fa fa-check"></i></td>
                <td><i>Untuk  Lintas Sektoral  bukti pindah mengikuti orang tua/wali. (Surat Domisili dari Kepala Desa).</i></td>
              </tr>
            </table>
          </li>
        </ol>
    </p>
  </blockquote>
<div> -->
                              </div>
                            </div>
                        </fieldset> -->

                              </span>
                              </div>
                              <div class="col-md-3">
                              </div>
                           </div>
                           <div class="col-lg-12"></div>
                        </fieldset>
                      </form>
                    </div>

                </div>
              </div>
            </div>

          </div>
          <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset">
                <span>Copyright &copy; <a href="https://www.mr-ell.com" target="_blank">SMK WIDYA DIRGANTARA</a> 2021</span>
              </p>
              <p class="pull-right sm-pull-reset">
                <span><a href="" class="m-r-10"><i class="fa fa-home"></i> Beranda </a> | <a href="#" class="m-l-10 m-r-10" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-legal"></i>Ketentuan & Syarat PPDB</a></span>
              </p>
            </div>
          </div>
        </div>
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
      <!-- BEGIN BUILDER -->

      <!-- END BUILDER -->
    </section>
    <!-- BEGIN QUICKVIEW SIDEBAR -->

    <!-- END QUICKVIEW SIDEBAR -->
    <!-- BEGIN SEARCH -->

    <!-- END SEARCH -->
    <!-- BEGIN PRELOADER -->

    <!-- END PRELOADER -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="margin-top:5px;">
    <div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      	<div class="panel panel-primary">
  <div class="panel-heading">
    <h2>Kententuan PPDB <strong class="text-success" style="color:#eee;">SMK WIDYA DIRGANTARA</strong></h2>
    <span style="font-size:30px;"> Tahun Pelajaran <b>2021-2022</b></span>
    <!-- <hr> -->
  </div>
  <div class="panel-body">

    <ol style="color:#333;">

      <li>Setiap calon peserta didik wajib mengisi form pendaftaran dengan lengkap. </li>

      <li>Data-data yang diisikan pada form PPDB Online harus sesuai dengan data asli dan benar adanya.</li>

      <li>Calon peserta didik yang sudah mendaftarkan secara online akan mendapatkan Nomor Pendaftaran yang harus dicetak dan dilampirkan dalam persyaratan yang diminta oleh Panitia PPDB SMK WIDYA DIRGANTARA.  </li>

      <li>Calon peserta didik yang sudah mendaftarkan diri melalui PPDB Online SMK WIDYA DIRGANTARA akan mendapatkan nomor pendaftaran dan password yang nantinya akan digunakan untuk akses informasi yang berkaitan dengan PPDB SMK WIDYA DIRGANTARA.</li>

      <li>Calon peserta didik yang sudah mendaftarakan diri melalui PPDB Online SMK WIDYA DIRGANTARA wajib menyerahkan dokumen persyaratan yang sudah ditentukan oleh Panitia PPDB.</li>

      <li>Setiap calon peserta didik yang mendaftar wajib mengikuti tes seleksi yang diadakan oleh panitia PPDB SMK WIDYA DIRGANTARA.</li>

      <li>Data yang sudah diberikan oleh Panitia PPDB SMK WIDYA DIRGANTARA hanya digunakan untuk keperluan penerimaan peserta didik baru. <strong class="text-danger">Data yang dikirimkan akan dijaga kerahasiaannya dan tidak akan dipublikasikan oleh Panita PPDB</strong>.</li>

    </ol>

  </div>
</div>
      </div>
    </div>
  </div>
</div>

@endsection
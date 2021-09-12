@extends('layouts.master')
@section('title', 'PPDB - Biodata')
@section('css')
<style>
    body {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    }

    .emp-profile {
        padding: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }

    .profile-img {
        text-align: center;
    }

    .profile-img img {
        width: 70%;
        height: 100%;
    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="container emp-profile">
            <div class="form-group container">
                <h2 style="font-family: Arial, Helvetica, sans-serif">Data Calon Peserta Didik</h2>
            </div>
            <hr>
            <div class="form-group container">
                @if($register->status == 0)
                <a href="{{route('confirm.id', ['id' => $register->id])}}" class="btn btn-success btn-sm">Confirm</a>
                <a href="{{route('download.formulir', ['param'=>$register->no_induk_siswa_nasional])}}" class="btn btn-d ml-1">
                    Cetak Formulir
                </a>
                @else
                <a href="{{route('download.formulir', ['param'=>$register->no_induk_siswa_nasional])}}" class="btn btn-info ml-1">
                    Cetak Formulir
                </a>
                <a href="{{route('download', ['filename' => 'bukti-daftar.doc'])}}" class="btn btn-primary ml-1">
                    Cetak Bukti Pendaftaran
                </a>
                @endif

                {{-- <a href="{{route('confirm.id', ['id' => $register->id])}}" class="btn btn-success btn-sm">Confirm</a> --}}

                {{-- <button type="button" class="btn btn-info ml-1">
                        Hapus
                    </button> --}}
            </div>
            <hr>

            {{-- Data Siswa --}}
            <form action="{{route('biodata.id', ['id' => $register->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" form-group container card shadow p-2 rounded">
                    <div class=" container card" style="background: #37517e">
                        <h4 class=" text-white text-center pt-1 pb-1">Biodata Siswa</h4>
                    </div>
                    <hr>

                    <div class="card-body p-3 container">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">No Pendaftaran</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_lengkap"  value="{{$register->nama_lengkap}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pilihan_jurusan" value="{{$register->pilihan_jurusan}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nik_siswa" value="{{$register->nik_siswa}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="alamat" value="{{$register->alamat}}">{{$register->alamat}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kode POS</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="kode_pos" value="{{$register->kode_pos}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tempat_lahir" value="{{$register->tempat_lahir}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" name="tanggal_lahir" value="{{$register->tanggal_lahir}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No. Registrasi Akta Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_registrasi_akta_lahir" value="{{$register->no_registrasi_akta_lahir}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" <?php if ($register->jenis_kelamin == 'L') echo 'checked'; ?>>
                                    <label class="form-check-label">
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" <?php if ($register->jenis_kelamin == 'P') echo 'checked'; ?>>
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Anak Ke</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="anak_ke" value="{{$register->anak_ke}}">
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Saudara Kandung</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" value="{{$register->jumlah_saudara_kandung}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="agama" value="{{$register->agama}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" value="{{$register->email}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No. Telp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_telp" value="{{$register->no_telp}}">
                            </div>
                        </div>

                    </div>
                </div>


                {{-- Data Pendidikn --}}
                <br>
                <div class="container card shadow p-2 rounded">
                    <div class=" container card" style="background: #37517e">
                        <h4 class=" text-white text-center pt-1 pb-1">Data Pendidikan</h4>
                    </div>
                    <hr>
                    <div class="card-body p-3 container">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Asal Sekolah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_sekolah_asal" value="{{$register->nama_sekolah_asal}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="alamat_ortu" value="{{$register->alamat_sekolah}}">{{$register->alamat_sekolah}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No. Induk Siswa Nasioanl (NISN)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_induk_siswa_nasional" value="{{$register->no_induk_siswa_nasional}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No. Peserta Ujian Nasional (SMP / MTs)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_peserta_ujian_nasional" value="{{$register->no_peserta_ujian_nasional}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">File Ijazah</label>
                            <div class="col-sm-10">
                                <a href="{{route('download', ['filename' => $register->file_ijazah])}}" data-toggle="tooltip" data-placement="top" title="Download File">{{$register->file_ijazah}}</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No. Seri Ijazah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_seri_ijazah"  value="{{$register->no_seri_ijazah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tahun Ijazah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tahun_ijazah" value="{{$register->tahun_ijazah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">File SKHUN</label>
                            <div class="col-sm-10">
                                <a href="{{route('download', ['filename' => $register->file_skhun])}}" data-toggle="tooltip" data-placement="top" title="Download File">{{$register->file_skhun}}</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No. Seri SKHUN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_seri_skhun" value="{{$register->no_seri_skhun}}">
                            </div>
                        </div>
                    </div>
                </div>
                <br>


                {{-- Data Ortu / Wali --}}
                <div class="container card shadow p-2 rounded">
                    <div class=" container card" style="background: #37517e">
                        <h4 class=" text-white text-center pt-1 pb-1">Biodata Orang Tua / Wali</h4>
                    </div>
                    <hr>
                    <div class="card-body p-3 container">

                        <!-- Biodata Ayah -->
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_ayah" value="{{$register->nama_ayah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No. Induk Keluaraga (NIK)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nik_ayah" value="{{$register->nik_ayah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tempat_lahir_ayah" value="{{$register->tempat_lahir_ayah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" name="tanggal_lahir_ayah" value="{{$register->tanggal_lahir_ayah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pendidikan_ayah" value="{{$register->pendidikan_ayah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pekerjaan_ayah" value="{{$register->pekerjaan_ayah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="penghasilan_ayah" value="{{$register->penghasilan_ayah}}">
                            </div>
                        </div>
                        <!-- Biodata Ibu -->
                        <hr>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_ibu" value="{{$register->nama_ibu}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No. Induk Keluaraga (NIK)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nik_ibu" value="{{$register->nik_ibu}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tempat_lahir_ibu" value="{{$register->tempat_lahir_ibu}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" name="tanggal_lahir_ibu" value="{{$register->tanggal_lahir_ibu}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pendidikan_ibu" value="{{$register->pendidikan_ibu}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pekerjaan_ibu" value="{{$register->pekerjaan_ibu}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="penghasilan_ibu" value="{{$register->penghasilan_ibu}}">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Orang Tua</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="alamat_ortu" value="{{$register->alamat_ortu}}">{{$register->alamat_ortu}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kode POS</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="kode_pos_ortu" value="{{$register->kode_pos_ortu}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No. Telp Orang Tua</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_telp_ortu" value="{{$register->no_telp_ortu}}">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Wali</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_wali" value="{{$register->nama_wali}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pekerjaan_wali" value="{{$register->pekerjaan_wali}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="penghasilan_wali" value="{{$register->penghasilan_wali}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Wali</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="alamat_wali" value="{{$register->alamat_wali}}">{{$register->alamat_wali}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kode POS</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="kode_pos_wali" value="{{$register->kode_pos_wali}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Hub Dengan Peserta Didik</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="hub_dengan_peserta_didik" value="{{$register->hub_dengan_peserta_didik}}">
                            </div>
                        </div>

                    </div>
                </div>
                <br>


                {{-- Lainnya --}}
                <div class="container card shadow p-2 rounded">
                    <div class=" container card" style="background: #37517e">
                        <h4 class=" text-white text-center pt-1 pb-1">Lain - lain </h4>
                    </div>
                    <hr>
                    <div class="card-body p-3 container">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Jarak Rumah Ke Sekolah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jarak_rumah_ke_sekolah" value="{{$register->jarak_rumah_ke_sekolah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Transportasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="transportasi" value="{{$register->transportasi}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Berat Badan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="berat_badan" value="{{$register->berat_badan}}">
                            </div>
                            <label for="inputPassword" class="col-sm-1 col-form-label">Kg</label>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tinggi Badan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tinggi_badan" value="{{$register->tinggi_badan}}">
                            </div>
                            <label for="inputPassword" class="col-sm-1 col-form-label">Cm</label>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Riwayat Penyakit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="riwayat_penyakit" value="{{$register->riwayat_penyakit}}">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-warning">
                    Update
                </button>
            </form>
    </div>
</div>

@endsection
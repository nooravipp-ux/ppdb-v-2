<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="./responsiveRegistration.css">
    <script type="text/javascript" lang="javascript" src="./responsiveRegistaration.js"></script>
    <style type="text/css" media="all">

        table {
            font-family: Arial, Helvetica, sans-serif;
        }

        p {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        h4{
            font-family: Arial, Helvetica, sans-serif;

        }

        td {
            height: 10px;
        }
    </style>
</head>

<body>
    <img src="{{ url('landing-page/assets/img/kopwd2.jpg') }}" height="100" width="710">
    <?php echo url('landing-page/assets/img/kopwd2.jpg'); ?>
    <p>{{ public_path ('landing-page/assets/img/kopwd2.jpg') }} Formulir Pendaftaran Siswa Baru <br class="mt-2"> Tahun Pelajaran 2020-2021</p>
    <div class="container">
        {{-- Data Saya --}}
        <h4><b>I. BIODATA SISWA</b></h4>
        <table class=" pl-3">
            <tr>
                <td style="height: 20px;"><label for="fname">No. Pendaftaran</label></td>
                <td>:</td>
                <td>201</td>
            </tr>
            <tr>
                <td><label for="fname">Jurusan</label></td>
                <td>:</td>
                <td>{{$data->pilihan_jurusan}}</td>
            </tr>
            <tr>
                <td><label for="fname">Nama Lengkap</label></td>
                <td>:</td>
                <td>{{$data->nama_lengkap}}</td>
            </tr>
            <tr>
                <td><label for="fname">NIK (No. Induk Keluarga)</label></td>
                <td> : </td>
                <td>{{$data->nik_siswa}}</td>
            </tr>
            <tr>
                <td><label for="fname">Alamat</label></td>
                <td>:</td>
                <td>{{$data->alamat}}</td>
            </tr>
            <tr>
                <td><label for="fname">Kode POS</label></td>
                <td>:</td>
                <td>{{$data->kode_pos}}</td>
            </tr>

            <tr>
                <td><label for="fname">Jenis Kelamin</label></td>
                <td>:</td>
                <td>{{$data->jenis_kelamin}}</td>
            </tr>
            <tr>
                <td><label for="fname">Tempat Lahir</label></td>
                <td> : </td>
                <td>{{$data->tempat_lahir}}</td>
            </tr>
            <tr>
                <td><label for="fname">Tanggal Lahir</label></td>
                <td> : </td>
                <td>{{$data->tanggal_lahir}}</td>
            </tr>
            <tr>
                <td><label for="fname">No. Registrasi Akta Lahir</label></td>
                <td> : </td>
                <td>{{$data->no_registrasi_akta_lahir}}</td>
            </tr>
            <tr>
                <td><label for="fname">Anak Ke</label></td>
                <td> : </td>
                <td>{{$data->anak_ke}}</td>
            </tr>
            <tr>
                <td><label for="fname">Jumlah Saudara Kandung</label></td>
                <td> : </td>
                <td>{{$data->jumlah_saudara_kandung}}</td>
            </tr>
            <tr>
                <td><label for="fname">Agama</label></td>
                <td> : </td>
                <td>{{$data->agama}}</td>
            </tr>
            <tr>
                <td><label for="fname">Email</label></td>
                <td> : </td>
                <td>{{$data->email}}</td>
            </tr>
            <tr>
                <td><label for="fname">No. Telp/WhatsApp</label></td>
                <td> : </td>
                <td>{{$data->no_telp}}</td>
            </tr>
        </table>   
    </div>

    <div class="container">
        {{-- Data Pendidikan --}}
        <h4><b>II. ASAL SEKOLAH</b></h4>
        <table>
            <tr>
                <td><label for="fname">Nama Sekolah / Madrasah</label></td>
                <td> : </td>
                <td>{{$data->nama_sekolah_asal}}</td>
            </tr>
            <tr>
                <td><label for="fname">Alamat</label></td>
                <td> : </td>
                <td>{{$data->alamat_sekolah}}</td>
            </tr>
            <tr>
                <td><label for="fname">No. Induk Siswa Nasional</label></td>
                <td> :</td>
                <td> {{$data->no_induk_siswa_nasional}}</td>
            </tr>
            {{-- <tr>
                <td><label for="fname">No. Peserta Ujian Nasional</label></td>
                <td> : </td>
                <td>{{$data->no_peserta_ujian_nasional}}</td>
            </tr> --}}
            <tr>
                <td><label for="fname">No. Seri Ijazah</label></td>
                <td> :</td>
                <td> {{$data->no_seri_ijazah}}</td>
            </tr>
            <tr>
                <td><label for="fname">Tahun Ijazah</label></td>
                <td> : </td>
                <td>{{$data->tahun_ijazah}}</td>
            </tr>
            <tr>
                <td><label for="fname">No. Seri SKHUN</label></td>
                <td> : </td>
                <td>{{$data->no_seri_skhun}}</td>
            </tr>
        </table>
    </div>

    <div class="container">
        {{-- Data Ortu / Wali --}}
        <h4><b>III. BIODATA ORANG TUA / WALI</b></h4>
        <table>
            <tr>
                <td><label for="fname">Nama Ayah Kandung</label></td>
                <td> :</td>
                <td> {{$data->nama_ayah}}</td>
            </tr>
            <tr>
                <td><label for="fname">NIK (No. Induk Keluarga)</label></td>
                <td> :</td>
                <td> {{$data->nik_ayah}}</td>
            </tr>
            <tr>
                <td><label for="fname">Tempat, Tgl Lahir</label></td>
                <td> : </td>
                <td>{{$data->tempat_lahir_ayah}}, {{$data->tanggal_lahir_ayah}}</td>
            </tr>
            <tr>
                <td><label for="fname">Pendidikan Terakhir</label></td>
                <td> : </td>
                <td>{{$data->pendidikan_ayah}}</td>
            </tr>
            <tr>
                <td><label for="fname">Pekerjaan</label></td>
                <td> :</td>
                <td> {{$data->pekerjaan_ayah}}</td>
            </tr>
            <tr>
                <td><label for="fname">Penghasilan</label></td>
                <td> :</td>
                <td> Rp. {{$data->penghasilan_ayah}} /Bulan</td>
            </tr>
            <tr>
                <td><label for="fname">Nama Ibu Kandung</label></td>
                <td> : </td>
                <td>{{$data->nama_ibu}}</td>
            </tr>
            <tr>
                <td><label for="fname">NIK (No. Induk Keluarga)</label></td>
                <td> : </td>
                <td>{{$data->nik_ibu}}</td>
            </tr>
            <tr>
                <td><label for="fname">Tempat, Tgl Lahir</label></td>
                <td> :</td>
                <td> {{$data->tempat_lahir_ibu}}, {{$data->tanggal_lahir_ibu}}</td>
            </tr>
            <tr>
                <td><label for="fname">Pendidikan Terakhir</label></td>
                <td> :</td>
                <td> {{$data->pendidikan_ibu}}</td>
            </tr>
            <tr>
                <td><label for="fname">Pekerjaan</label></td>
                <td> :</td>
                <td> {{$data->pekerjaan_ibu}}</td>
            </tr>
            <tr>
                <td><label for="fname">Penghasilan</label></td>
                <td> :</td>
                <td> Rp. {{$data->penghasilan_ibu}} / Bulan</td>
            </tr>
            <tr>
                <td><label for="fname">Alamat Orang Tua</label></td>
                <td> : </td>
                <td>{{$data->alamat_ortu}}</td>
            </tr>
            <tr>
                <td><label for="fname">No. Telp / WhatsApp</label></td>
                <td> : </td>
                <td>{{$data->no_telp_ortu}}</td>
            </tr>
            <tr>
                <td><label for="fname">Nama Wali</label></td>
                <td> : </td>
                <td>{{$data->nama_wali}}</td>
            </tr>
            <tr>
                <td><label for="fname">Pekerjaan</label></td>
                <td> : </td>
                <td>{{$data->pekerjaan_wali}} </td>
            </tr>
            <tr>
                <td><label for="fname">Penghasilan</label></td>
                <td> : </td>
                <td> Rp. {{$data->penghasilan_wali}} / Bulan</td>
            </tr>
            <tr>
                <td><label for="fname">Alamat Wali</label></td>
                <td> :</td>
                <td> {{$data->alamat_wali}}</td>
            </tr>
            <tr>
                <td><label for="fname">Hub Dengan Peserta Didik</label></td>
                <td> :</td>
                <td> {{$data->hub_dengan_peserta_didik}}</td>
            </tr>
        </table>
    </div>

    <div class="container">
        {{-- Lainlain --}}
        <h4><b>IV. LAIN - LAIN</b></h4>
        <table>
            <tr>
                <td><label for="fname">Jarak Rumah Ke sekolah</label></td>
                <td> : </td>
                <td> {{$data->jarak_rumah_ke_sekolah}}</td>
            </tr>
            <tr>
                <td><label for="fname">Transportasi Ke sekolah</label></td>
                <td> : </td>
                <td>{{$data->transportasi}}</td>
            </tr>
            <tr>
                <td><label for="fname">Berat Badan</label></td>
                <td> :</td>
                <td> {{$data->berat_badan}} Kg</td>
            </tr>
            <tr>
                <td><label for="fname">Tinggi Badan</label></td>
                <td> :</td>
                <td> {{$data->tinggi_badan}} Cm</td>
            </tr>
            <tr>
                <td><label for="fname">Golongan Darah</label></td>
                <td> :</td>
                <td> {{$data->gol_darah}}</td>
            </tr>
            <tr>
                <td><label for="fname">Riwayat Penyakit</label></td>
                <td> : </td>
                <td>{{$data->riwayat_penyakit}}</td>
            </tr>
        </table> 
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>
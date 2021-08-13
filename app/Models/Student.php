<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_lengkap','nik_siswa','tempat_lahir','jenis_kelamin','tanggal_lahir','no_registrasi_akta_lahir','anak_ke','jumlah_saudara_kandung','agama','email','no_telp','alamat','kode_pos','nama_sekolah_asal','alamat_sekolah','no_induk_siswa_nasional','no_peserta_ujian_nasional','tahun_ijazah','no_seri_ijazah','no_seri_skhun','nama_ayah','nik_ayah','tempat_lahir_ayah','tanggal_lahir_ayah','pendidikan_ayah','pekerjaan_ayah','penghasilan_ayah','nama_ibu','nik_ibu','tempat_lahir_ibu','tanggal_lahir_ibu','pendidikan_ibu','pekerjaan_ibu','penghasilan_ibu','alamat_ortu','kode_pos_ortu','no_telp_ortu','nama_wali','pekerjaan_wali','penghasilan_wali','alamat_wali','kode_pos_wali','hub_dengan_peserta_didik','jarak_rumah_ke_sekolah','transportasi','','berat_badan','tinggi_badan','riwayat_penyakit','file_ijazah','file_ijazah_path_name','file_skhun','file_skhun_path_name'];
    protected $table = 't_student';
    public $timestamps = false;
}

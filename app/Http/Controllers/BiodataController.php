<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiodataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function biodata()
    {
        $biodata = DB::table('t_registration')
                    ->join('t_student', 't_student.id','=', 't_registration.student_id')
                    ->where('t_student.id', auth()->user()->student_id)
                    ->first();
        // dd($biodata);
        return view('student.biodata', compact('biodata'));
    }

    public function updateBiodata(Request $req, $id)
    {

        if($req->file('file_ijazah_new')){
            $file_ijazah = $req->file('file_ijazah_new')->getClientOriginalName();;
            $req->file('file_ijazah_new')->move('uploads', $req->file('file_ijazah_new')->getClientOriginalName());
        }else{
            $file_ijazah = $req->file_ijazah_old;
        }

        if($req->file('file_skhun_new')){
            $file_skhun = $req->file('file_skhun_new')->getClientOriginalName();;
            $req->file('file_skhun_new')->move('uploads', $req->file('file_skhun_new')->getClientOriginalName());
        }else{
            $file_skhun = $req->file_skhun_old;
        }

        if($req->file('file_surat_kelulusan_new')){
            $file_surat_kelulusan = $req->file('file_surat_kelulusan_new')->getClientOriginalName();;
            $req->file('file_surat_kelulusan_new')->move('uploads', $req->file('file_surat_kelulusan_new')->getClientOriginalName());
        }else{
            $file_surat_kelulusan = $req->file_skhun_old;
        }

        if($req->file('file_akta_new')){
            $file_akta = $req->file('file_akta_new')->getClientOriginalName();;
            $req->file('file_akta_new')->move('uploads', $req->file('file_akta_new')->getClientOriginalName());
        }else{
            $file_akta = $req->file_akta_old;
        }

        if($req->file('file_kk_new')){
            $file_kk = $req->file('file_kk_new')->getClientOriginalName();;
            $req->file('file_kk_new')->move('uploads', $req->file('file_kk_new')->getClientOriginalName());
        }else{
            $file_kk = $req->file_kk_old;
        }

        $updatedData = DB::table('t_student')
            ->where('id', $id)
            ->update([    
                'nama_lengkap' => $req->nama_lengkap,
                'nik_siswa' => $req->nik_siswa,
                'tempat_lahir' => $req->tempat_lahir,
                'tanggal_lahir' => $req->tanggal_lahir,
                'no_registrasi_akta_lahir' => $req->no_registrasi_akta_lahir,
                'anak_ke' => $req->anak_ke,
                'jumlah_saudara_kandung' => $req->jumlah_saudara_kandung,
                'jenis_kelamin' => $req->jenis_kelamin,
                'agama' => $req->agama,
                'email' => $req->email,
                'no_telp' => $req->no_telp,
                'alamat' => $req->alamat,
                'kode_pos' => $req->kode_pos,
                'nama_sekolah_asal' => $req->nama_sekolah_asal,
                'alamat_sekolah' => $req->alamat_sekolah,
                'no_induk_siswa_nasional' => $req->no_induk_siswa_nasional,
                'no_peserta_ujian_nasional' => $req->no_peserta_ujian_nasional,
                'tahun_ijazah' => $req->tahun_ijazah,
                'no_seri_ijazah' => $req->no_seri_ijazah,
                'no_seri_skhun' => $req->no_seri_skhun,
                'nama_ayah' => $req->nama_ayah,
                'nik_ayah' => $req->nik_ayah,
                'tempat_lahir_ayah' => $req->tempat_lahir_ayah,
                'tanggal_lahir_ayah' => $req->tanggal_lahir_ayah,
                'pendidikan_ayah' => $req->pendidikan_ayah,
                'pekerjaan_ayah' => $req->pekerjaan_ayah,
                'penghasilan_ayah' => $req->penghasilan_ayah,
                'nama_ibu' => $req->nama_ibu,
                'nik_ibu' => $req->nik_ibu,
                'tempat_lahir_ibu' => $req->tempat_lahir_ibu,
                'tanggal_lahir_ibu' => $req->tanggal_lahir_ibu,
                'pendidikan_ibu' => $req->pendidikan_ibu,
                'pekerjaan_ibu' => $req->pekerjaan_ibu,
                'penghasilan_ibu' => $req->penghasilan_ibu,
                'alamat_ortu' => $req->alamat_ortu,
                'kode_pos_ortu' => $req->kode_pos_ortu,
                'no_telp_ortu' => $req->no_telp_ortu,
                'nama_wali' => $req->nama_wali,
                'pekerjaan_wali' => $req->pekerjaan_wali,
                'penghasilan_wali' => $req->penghasilan_wali,
                'alamat_wali' => $req->alamat_wali,
                'kode_pos_wali' => $req->kode_pos_wali,
                'hub_dengan_peserta_didik' => $req->hub_dengan_peserta_didik,
                'jarak_rumah_ke_sekolah' => $req->jarak_rumah_ke_sekolah,
                'transportasi' => $req->transportasi,
                'berat_badan' => $req->berat_badan,
                'tinggi_badan' => $req->tinggi_badan,
                'riwayat_penyakit' => $req->riwayat_penyakit,
                'pilihan_jurusan' => $req->pilihan_jurusan,
                'no_kk' => $req->no_kk,
                'gol_darah' => $req->gol_darah,
                'file_ijazah' => $file_ijazah,
                'file_skhun' => $file_skhun,
                'file_surat_kelulusan' => $file_surat_kelulusan,
                'file_akta' => $file_akta,
                'file_kk' => $file_kk
            ]);
        return back()->withInput();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Mail\RegistrationMailNotif;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function index(){
        $register = DB::table('t_registration')
                    ->select('t_student.id','t_student.nama_lengkap','t_student.alamat','t_student.no_telp','t_student.nama_sekolah_asal', 't_registration.status')
                    ->join('t_student', 't_student.id','=', 't_registration.student_id')
                    ->get();
        return view('admin.registration', compact('register'));
    }

    public function registrationStudent(){
        return view('student.registration');
    }

    public function save(Request $req){
        // dd($req->all());
        $student = Student::create(
            ['nama_lengkap' => $req->nama_lengkap,
            'nik_siswa' => $req->nik_siswa,
            'tempat_lahir' => $req->tempat_lahir,
            'tanggal_lahir' => $req->tanggal_lahir,
            'no_registrasi_akta_lahir' => $req->no_registrasi_akta_lahir,
            'anak_ke' => $req->anak_ke,
            'jumlah_saudara_kandung' => $req->jumlah_saudara_kandung,
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
            'kode_pos_ortu' => $req->kode_post_ortu,
            'no_telp_ortu' => $req->no_telp_ortu,
            'nama_wali' => $req->nama_wali,
            'pekerjaan_wali' => $req->pekerjaan_wali,
            'penghasilan_wali' => $req->penghasilan_wali,
            'alamat_wali' => $req->alamat_wali,
            'kode_pos_wali' => $req->kode_pos_wali,
            'hub_dengan_peserta_didik' => $req->hub_dengan_peserta_didik,
            'berat_badan' => $req->berat_badan,
            'tinggi_badan' => $req->tinggi_badan,
            'riwayat_penyakit' => $req->riwayat_penyakit]
        );

        Registration::create([
            'student_id' => $student->id
        ]);

        return redirect('/');
    }

    public function getDetailRegister($id){
        $register = DB::table('t_registration')
                    ->join('t_student', 't_student.id','=', 't_registration.student_id')
                    ->where('t_student.id', $id)
                    ->first();
        return view('admin.detail-register', compact('register'));
    }

    public function confirmRegister($id){
        Registration::where('student_id', $id)->update(['status' => 1]);
        $data = Student::find($id);
        $user_data = User::create([
            'student_id' => $id,
            'name' => $data->nama_lengkap,
            'email' => $data->email,
            'role_name' => 'siswa',
            'password' => Hash::make('Abcd1234'),
        ]);

        Mail::to($user_data->email)->send(new RegistrationMailNotif($user_data));

        return $this->index();
    }

    public function detailRegister(){

    }
}

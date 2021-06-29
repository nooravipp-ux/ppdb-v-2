<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Registration;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()){
            $takenExam = DB::table('t_exam_attemp')
                        ->select('t_exam.id', 't_exam.title')
                        ->join('t_exam','t_exam.id', '=','t_exam_attemp.exam_id')
                        ->join('users', 't_exam_attemp.student_id', '=', 'users.student_id')
                        ->where('users.student_id', auth()->user()->student_id)
                        ->get();

            $availableExam = DB::table('t_exam')->get();
            $totalRegister = DB::table('t_registration')->count();
            $totalUserActive = DB::table('users')->where('is_active', 1)->count();
            return view('home', compact('takenExam', 'availableExam', 'totalRegister', 'totalUserActive'));
        }
        
        return view('home');
       
        
    }

    public function listExam(){
        
    }
}

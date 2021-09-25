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
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()){
            $users = DB::table('users')->get();
            $totalRegister = DB::table('t_registration')->count();
            $totalUserActive = DB::table('users')->where('is_active', 1)->count();

            $announcements  = DB::table('t_announcement')->where('status', 1)->orderBy('created_at', 'DESC')->get();
            return view('home', compact('users', 'totalRegister', 'totalUserActive', 'announcements'));
        }
        
        return view('home');
       
        
    }

    public function listExam(){
        
    }

    
}

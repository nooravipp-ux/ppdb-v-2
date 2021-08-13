<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiodataController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function biodata(){
        $biodata = DB::table('t_student')->where('id', auth()->user()->student_id)->first();
        return view('student.biodata', compact('biodata'));
    }
}

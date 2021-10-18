<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class HomeLandingController extends Controller
{
    public function index()
    {
        $testimoniData = Testimoni::all();
        return view('welcome', compact('testimoniData'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $this->middleware('auth');
        $testimoniData = Testimoni::all();
        return view('admin.testimoni', compact('testimoniData'));
    }

    public function add(Request $req)
    {
        $this->middleware('auth');
        $testimoni = Testimoni::updateOrCreate(
            [
                'nama' => $req->nama_alumni,
                'lulusan' => $req->lulusan,
                'testimoni' => $req->testimoni,
                // 'status' => $req->status_testimoni,
            ]
        );

        return response()->json(['status' => 'success', 'data' => $testimoni]);
    }

    public function deleteTestimoni(Request $req)
    {
        $this->middleware('auth');
        $testimoni = Testimoni::find($req->id);
        $testimoni->delete();
        return redirect('/testimoni');
    }

    public function landingPage()
    {
        $testimoniData = Testimoni::all();
        return view('landing_testimoni', compact('testimoniData'));
    }
}

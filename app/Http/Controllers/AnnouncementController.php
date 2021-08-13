<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
        $announceData = Announcement::all();
        return view('admin.announcement', compact('announceData'));
    }

    public function add(Request $req){
        $announce = Announcement::updateOrCreate(
            ['title' => $req->title, 
            'description' => $req->description,
            'status' => $req->status,
            ]
        );

        return response()->json(['status' => 'success', 'data' => $announce]);
    }
}

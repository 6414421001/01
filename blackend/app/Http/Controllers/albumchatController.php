<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Mu;
use Illuminate\Support\Facades\DB;

class albumchatController extends Controller
{
    public function index(){
        $album_count = DB::table('album')
  ->select('album_name', 'view')
  ->orderBy('album_name')
  ->get()
  ->toArray();
$labels = array_column($album_count, 'album_name');
$data = array_column($album_count, 'view');
 
 
         return view('Album.album_chat',compact('labels','data'));
     }
}

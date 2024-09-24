<?php

namespace App\Http\Controllers;
use App\Models\Album;
use App\Models\mu;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index(){
        $Albums =  Album::orderBy('id','DESC')->paginate(4);
        return view('kuy02', ['Albums' => $Albums]);
    }
    public function detail($album_name){
        $Albumsdeatail = Album::where('album_name','=',$album_name)->first(); 
        $Mus = Mu::where('album_name','=',$album_name)->get(); 
        Album::where('album_name','=',$album_name)->increment('view');
        return view('layouts.หน้าหี.Genierock', compact('Albumsdeatail','Mus'));
    }
    
}

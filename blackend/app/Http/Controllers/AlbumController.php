<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index(){
        $Albums =  Album::orderBy('id','DESC')->paginate(4);
        return view('album.index', ['Albums' => $Albums]);
    }
    public function create(){
        return view('album.create');
    }
    public function store(Request $request){
        $request->validate([
            'album_name' => 'required',
            'album_pdf' => 'required',
            'person_name' => 'required',
            'song_date' => 'required',

        ]);
        Album::create($request->post());

        return redirect()->route('Album.index')->with('success','album has been added');
    }
    public function show(Album $Album){
        return view('Album.show',compact('Album'));
    }

    public function edit(Album $Album){
        return view('Album.edit',compact('Album'));
    }
    public function update(Request $request,Album $Album){
        $request->validate([
           'album_name' => 'required',
            'album_pdf' => 'required',
            'person_name' => 'required',
            'song_date' => 'required',
        ]);
        $Album->fill($request->post())->save();

        return redirect()->route('Album.index')->with('success','album has been updated');
    }
    public function destroy(Album $Album){
        $Album->delete();
        return redirect()->route('Album.index')->with('success','album has been deleted');
    }
}

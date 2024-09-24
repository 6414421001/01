<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mu;

class MuController extends Controller
{
    public function index(){
        $Mus =  Mu::orderBy('id','DESC')->paginate(4);
        return view('Mu.index', ['Mus' => $Mus]);
    }
    public function create(){
        return view('Mu.create');
    }
    public function store(Request $request){
        $request->validate([
            'album_name' => 'required',
            'music_name' => 'required',
            'camp_name'=> 'required',
            'person_date'=> 'required'

        ]);
        Mu::create($request->post());

        return redirect()->route('Mu.index')->with('success','Mu has been added');
    }
    public function show(Mu $Mu){
        return view('Mu.show',compact('Mu'));
    }

    public function edit(Mu $Mu){
        return view('Mu.edit',compact('Mu'));
    }
    public function update(Request $request,Mu $Mu){
        $request->validate([
            'album_name' => 'required',
            'music_name' => 'required',
            'camp_name'=>'required',
            'person_date'=> 'required'
        ]);
        $Mu->fill($request->post())->save();

        return redirect()->route('Mu.index')->with('success','Mu has been updated');
    }
    public function destroy(Mu $Mu){
        $Mu->delete();
        return redirect()->route('Mu.index')->with('success','Mu has been deleted');
    }
}

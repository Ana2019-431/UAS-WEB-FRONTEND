<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_author = \App\Models\Author::where('title','LIKE','%'.$request->cari.'%')->get(); 
        }
        else{
            $data_author = \App\Models\Author::all();
        }
         return view('homes.index',['data_author1' => $data_author]);
    }

    public function create(Request $request){
        \App\Models\Author::create($request->all());
        if($request->hasFile('picture')){
            $request->file('picture')->move('images/',$request->file('picture')->getClientOriginalName());
            $author->picture = $request->file('picture')->getClientOriginalName();
            $author->save();
        }
        return redirect('/homes')->with('sukses','Data berhasil ditambahkan');
    }

    public function delete($id){
        $author = \App\Models\Author::find($id);
        $author->delete($author);
        return redirect('/homes')->with('sukses','Data berhasil dihapus');
    }

    public function edit_author($id){
        $author = \App\Models\Author::find($id);
        return view('/homes/edit_author',['author' => $author]);
    }

    public function update_author(Request $request,$id){
        $author = \App\Models\Author::find($id);
        $author->update($request->all());
        if($request->hasFile('picture')){
            $request->file('picture')->move('images/',$request->file('picture')->getClientOriginalName());
            $author->picture = $request->file('picture')->getClientOriginalName();
            $author->save();
        }
        return redirect('/homes')->with('sukses','Data berhasil diupdate');
    }

    public function gambar($id){
        $author = \App\Models\Author::find($id);
        return view('homes.gambar',['author' => $author]);
    }
}

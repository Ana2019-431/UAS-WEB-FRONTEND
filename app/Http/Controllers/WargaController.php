<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_warga = \App\Models\Warga::where('Nama','LIKE','%'.$request->cari.'%')->get(); 
        }
        else{
            $data_warga = \App\Models\Warga::all();
        }
         return view('warga.index',['data_warga1' => $data_warga]);
    }
    
    public function rt06(Request $request){
        if($request->has('cari')){
            $data_warga = \App\Models\Warga::where('Nama','LIKE','%'.$request->cari.'%')->get(); 
        }
        else{
            $data_warga = \App\Models\Warga::where('RT','6')->get();
        }
         return view('warga.rt06',['data_warga1' => $data_warga]);
    }
    public function create_rt06(Request $request){
        \App\Models\Warga::create($request->all());
        return redirect('/warga/rt06')->with('sukses','Data berhasil ditambahkan');
    }
    public function edit_rt06($id){
        $warga = \App\Models\Warga::find($id);
        return view('/warga/edit_rt06',['warga' => $warga]);
    }
    public function update_rt06(Request $request,$id){
        $warga = \App\Models\Warga::find($id);
        $warga->update($request->all());
        return redirect('/warga/rt06')->with('sukses','Data berhasil diupdate');
    }
    public function delete_rt06($id){
        $warga = \App\Models\Warga::find($id);
        $warga->delete($warga);
        return redirect('/warga/rt06')->with('sukses','Data berhasil dihapus');
    }

    public function rt03(Request $request){
        if($request->has('cari')){
            $data_warga = \App\Models\Warga::where('Nama','LIKE','%'.$request->cari.'%')->get(); 
        }
        else{
            $data_warga = \App\Models\Warga::where('RT','3')->get();
        }
         return view('warga.rt03',['data_warga1' => $data_warga]);
    }
    public function rt02(Request $request){
        if($request->has('cari')){
            $data_warga = \App\Models\Warga::where('Nama','LIKE','%'.$request->cari.'%')->get(); 
        }
        else{
            $data_warga = \App\Models\Warga::where('RT','2')->get();
        }
         return view('warga.rt02',['data_warga1' => $data_warga]);
    }
    public function rt04(Request $request){
        if($request->has('cari')){
            $data_warga = \App\Models\Warga::where('Nama','LIKE','%'.$request->cari.'%')->get(); 
        }
        else{
            $data_warga = \App\Models\Warga::where('RT','4')->get();
        }
         return view('warga.rt04',['data_warga1' => $data_warga]);
    }
    public function create(Request $request){
        \App\Models\Warga::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $warga->foto = $request->file('foto')->getClientOriginalName();
            $warga->save();
        }
        return redirect('/warga')->with('sukses','Data berhasil ditambahkan');
    }
    public function edit($id){
        $warga = \App\Models\Warga::find($id);
        return view('warga/edit',['warga' => $warga]);
    }
    public function update(Request $request,$id){
        $warga = \App\Models\Warga::find($id);
        $warga->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $warga->foto = $request->file('foto')->getClientOriginalName();
            $warga->save();
        }
        return redirect('/warga')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id){
        $warga = \App\Models\Warga::find($id);
        $warga->delete($warga);
        return redirect('/warga')->with('sukses','Data berhasil dihapus');
    }

    public function avatar($id){
        $warga = \App\Models\Warga::find($id);
        return view('warga.avatar',['warga' => $warga]);
    }

}

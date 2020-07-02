<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;
use App\Daftar;

class SantriController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_santri = Santri::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_santri = Santri::paginate(10);
        }
        return view('santri.index', ['data_santri' => $data_santri]);
    }

    public function tambah(Request $request)
    {
       Santri::create($request->all());
       return redirect('/santri')->with('sukses','Data berhasil disimpan..');
    }

    public function edit($id)
    {
        $santri = Santri::find($id);
        //dd ($santri);
        return view('santri/edit',['santri'=> $santri]);
    }

    public function update(Request $request,$id)
    {
        $santri = Santri::find($id);
        $santri->update($request->all());
        return redirect('/santri')->with('sukses','Data berhasil diupdate..');

    }

    public function delete($id)
    {
        $santri = Santri::find($id);
        $santri->delete();
        return redirect('/santri')->with('sukses','Data berhasil dihapus..');
    }
    
    public function profil($id)
    {
        $santri = Santri::find($id);
        return view('santri.profil',['santri' => $santri]);
    }
}

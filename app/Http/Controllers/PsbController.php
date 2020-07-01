<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Wawancara;
Use App\Daftar;

class PsbController extends Controller
{
    public function tambah(Request $request)
    {
        Wawancara::create($request->all());
       return redirect('psb/wawancara')->with('sukses','Data berhasil disimpan..');
    }

    public function index()
    {
        $list_pendaftar = Daftar::select('id', 'nama')->get();
        return view('psb.insert_wawancara', compact('list_pendaftar'));
    }
}

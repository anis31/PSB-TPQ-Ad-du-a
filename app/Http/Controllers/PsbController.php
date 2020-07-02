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

    public function detail($id)
    {
        $data_wawancara = Wawancara::find($id);
        return view('psb.detail_wawancara', ['data_wawancara'=> $data_wawancara]);
    }

    public function edit($id)
    {
        $profil_pendaftar = Daftar::find($id);
        return view('psb.edit_profil', ['profil_pendaftar' => $profil_pendaftar]);
    }

    public function update(Request $request, $id)
    {
        $profil_pendaftar = Daftar::find($id);
        $profil_pendaftar->update($request->all());
        if ($request->hasFile('photo')){
            $request->file('photo')->move('/images', $request->file('photo')->getClientOriginalName());
            $profil_pendaftar->photo = $request->file('photo')->getClientOriginalName();
            $profil_pendaftar->save();
        }
        return redirect('/daftar')->with('sukses','Data berhasil diperbarui');
    }
}

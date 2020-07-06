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

    public function index() //Dropdown function
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
            $request->file('photo')->move(public_path('images'), $request->file('photo')->getClientOriginalName());
            $profil_pendaftar->photo = $request->file('photo')->getClientOriginalName();
            $profil_pendaftar->save();
        }
        return redirect('/daftar')->with('sukses','Data berhasil diperbarui');
    }

    public function delete($id)
    {
        $profil_pendaftar = Daftar::find($id);
        //dd ($id);
        $profil_pendaftar->delete();
        return redirect('/psb/wawancara')->with('sukses','Data berhasil dihapus..');
    }

}

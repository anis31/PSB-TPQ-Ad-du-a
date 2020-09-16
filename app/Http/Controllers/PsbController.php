<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Wawancara;
Use App\Daftar;
Use App\Santri;
Use App\Periode;

class PsbController extends Controller
{
    public function tambah(Request $request)
    {
        Wawancara::create($request->all());
        return redirect('psb/wawancara')->with('sukses','Data berhasil disimpan..');
    }

    public function index() //Dropdown function
    {
        $list_pendaftar = Daftar::select('id', 'nama')
        ->whereNull('status')
        ->whereDoesntHave('relasi_wawancara')
        ->get();
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
        // if ($request->hasFile('photo')){
        //     $request->file('photo')->move(public_path('images'), $request->file('photo')->getClientOriginalName());
        //     $profil_pendaftar->photo = $request->file('photo')->getClientOriginalName();
        //     $profil_pendaftar->save();
        // }
        return redirect('/daftar')->with('sukses','Data berhasil diperbarui');
    }

    public function tolak($id)
    {
        $profil_pendaftar = Daftar::findOrFail($id);
        $profil_pendaftar->status="TOLAK";
        $profil_pendaftar->save();
        return redirect('/psb/wawancara')->with('sukses','Data calon santri berhasil ditolak..');
    }

    public function terima(Request $request, $id)
    {
        $profil_pendaftar = Daftar::findOrFail($id);
        $profil_pendaftar->status="TERIMA";
        $profil_pendaftar->save();

        Santri::create($request->all());
        return redirect('psb/pengumuman')->with('sukses','Data calon santri berhasil diterima..');
    }

    public function pengumuman(Request $request)
    {
        $data_santri = Santri::paginate(10);
        return view('psb/pengumuman', ['data_santri' => $data_santri])->with('sukses','Data berhasil ditambahkan..');
    }

    public function periode(Request $request)
    {
        Periode::create($request->all());
        return view('psb/periode');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar;
use App\Santri;

class SitusController extends Controller
{
    public function home()
    {
        return view('situs.home');
    }

    public function tentang()
    {
        return view('situs.tentang');
    }

    public function pendaftaran()
    {
        return view('situs.pendaftaran');
    }

    public function daftar(Request $request)
    {
        Daftar::create($request->all());
        return redirect('/pesan_telah_daftar')->with('sukses','Pendaftaran berhasil..');
    }

    public function pesan_telah_daftar()
    {
        return view('situs.pesan');
    }

    public function pengumuman()
    {
        $data_santri = Santri::paginate(10);
        return view('situs.pengumuman', compact('data_santri'));
    }
}

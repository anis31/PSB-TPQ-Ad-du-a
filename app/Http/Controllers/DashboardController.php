<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;
use App\Daftar;
Use App\Guru;
use App\Wawancara;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboards.index');
    }

    public function kelompok()
    {
        return view('santri.kelompok');
    }

    public function daftar()
    {
        $data_pendaftaran = Daftar::all();  
        return view('psb.daftar',['data_pendaftaran' => $data_pendaftaran]);
    }

    public function profil($id)
    {
        $daftar = Daftar::find($id);
        return view('psb.profil',['daftar' => $daftar]);
    }

    public function wawancara()
    {
        $data_wawancara = Wawancara::all();
        return view('psb.wawancara',['data_wawancara'=> $data_wawancara]);
    }

    public function tambah(Request $request)
    {
        Wawancara::create($request->all());
        return redirect('/psb/wawancara')->with('sukses','Data wawancara berhasil ditambahkan...');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;
use App\Daftar;
Use App\Guru;
use App\Wawancara;
use App\Halaqoh;

class DashboardController extends Controller
{
    public function index()
    {
        $data_pendaftaran = Daftar::all();
        return view('dashboards.index', compact('data_pendaftaran'));
    }

    public function kelompok()
    {
        $halaqoh = Halaqoh::all();
        //dd ($halaqoh);
        return view('santri.kelompok', compact('halaqoh'));
    }

    public function daftar()
    {
        $data_pendaftaran = Daftar::paginate(8);  
        return view('psb.daftar',['data_pendaftaran' => $data_pendaftaran]);
    }

    public function profil($id)
    {
        $daftar = Daftar::find($id);
        return view('psb.profil',['daftar' => $daftar]);
    }

    public function wawancara()
    {
        $data_wawancara = Wawancara::paginate(10);
        return view('psb.wawancara',['data_wawancara'=> $data_wawancara]);
    }

}

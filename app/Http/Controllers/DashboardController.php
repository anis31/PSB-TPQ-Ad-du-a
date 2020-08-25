<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;
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
        $guru = Guru::whereDoesntHave('relasi_halaqoh')->get();
        $santri_unlisted = Santri::whereNull('halaqoh_id')->get();
        return view('santri.kelompok', [
            'halaqoh' => $halaqoh, 
            'guru' => $guru, 
            'santri_unlisted'=> $santri_unlisted
        ]);
    }

    public function daftar()
    {
        $data_pendaftaran = Daftar::paginate(8);  
        $app = App::where('key', 'STATUS_PENDAFTARAN')->firstOrFail();
        return view('psb.daftar', [
            'data_pendaftaran' => $data_pendaftaran,
            'app' => $app
        ]);
    }

    public function profil($id)
    {
        $daftar = Daftar::find($id);
        return view('psb.profil',['daftar' => $daftar]);
    }

    public function wawancara()
    {
        $data_wawancara = Wawancara::whereHas('relasi_daftar', function ($pendaftaran) {
            $pendaftaran->whereNull('status');
        })->paginate(10);
        return view('psb.wawancara',['data_wawancara'=> $data_wawancara]);
    }

    public function laporan(Request $request)
    {
        $years = range(date("Y"), 2018);

        $data_pendaftaran = Daftar::when($request->has('periode'), function($query) use($request){
            return $query->whereYear('created_at',$request->periode);
        })->paginate(8);  
        $app = App::where('key', 'STATUS_PENDAFTARAN')->firstOrFail();
        return view('dashboards.laporan', [
            'data_pendaftaran' => $data_pendaftaran,
            'app' => $app,
            'years' => $years
        ]);
    }

}

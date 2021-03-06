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
        $data_laki = Daftar::where('jenis_kelamin','L')->count();
        $data_perempuan = Daftar::where('jenis_kelamin','P')->count();
        $jumlah_pendaftar = Daftar::all()->count();
        $data_ustadz = Guru::where('jenis_kelamin','L')->count();
        $data_ustadzah = Guru::where('jenis_kelamin','P')->count();
        $jumlah_guru = Guru::all()->count();
        $data_santri_L = Santri::where('jenis_kelamin','L')->count();
        $data_santri_P = Santri::where('jenis_kelamin','P')->count();
        $jumlah_santri = Santri::all()->count();
        return view('dashboards.index', [
            'data_laki' => $data_laki, 
            'data_perempuan' => $data_perempuan, 
            'jumlah_pendaftar' => $jumlah_pendaftar, 
            'data_ustadz' => $data_ustadz,
            'data_ustadzah' => $data_ustadzah,
            'jumlah_guru' => $jumlah_guru,
            'data_santri_L' => $data_santri_L,
            'data_santri_P' => $data_santri_P,
            'jumlah_santri' => $jumlah_santri,
            
        ]);
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

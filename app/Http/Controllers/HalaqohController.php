<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;
use App\Daftar;
Use App\Guru;
use App\Wawancara;
use App\Halaqoh;

class HalaqohController extends Controller
{
    
    public function simpanSantri(Request $request)
    {
        // Membatasi jumlah santri dalam satu halaqoh
        $total_santri = Santri::where('halaqoh_id', $request->halaqoh_id)->count();
        if ($total_santri >= 3) {
            return response()->json('Jumlah santri maksimal 3');
        }
        // simpan
        $santri = Santri::findOrFail($request->santri_id);
        $santri->halaqoh_id = $request->halaqoh_id;
        $santri->save();

        return response()->json('Berhasil memperbarui data santri');
    }

    public function simpanHalaqoh(Request $request)
    {
        $halaqoh = new Halaqoh;
        $halaqoh->guru_id = $request->guru_id;
        $halaqoh->kode_halaqoh = $request->kode_halaqoh;
        $halaqoh->nomor_halaqoh = $request->nomor_halaqoh;
        $halaqoh->save();

        return response()->json('Berhasil menyimpan data halaqoh');
    }

    public function hapus_guru($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/kelompok')->with('sukses','Data halaqoh berhasil dihapus..');
    }
    
    public function getSantriAvailable(Request $request)
    {
        $santri_unlisted = Santri::whereNull('halaqoh_id')
        ->when($request->kode === "A", function($query) {
            $query->where('jenis_kelamin', 'L');
        })
        ->when($request->kode === "B", function($query) {
            $query->where('jenis_kelamin', 'P');
        })
        ->get();
        $data = "
        <select class='form-control' id='pilih_santri'>
            <option datd-display=''>pilih...</option>
        ";

        foreach($santri_unlisted as $value){
            $data .= "
            <option value='".$value->id."' data-umur='".$value->umur."' data-jk='".$value->jenis_kelamin."'>
            ".$value->nama."
            </option>
            ";
        }

        $data .= "</select>
        ";

        return $data;
    }

}

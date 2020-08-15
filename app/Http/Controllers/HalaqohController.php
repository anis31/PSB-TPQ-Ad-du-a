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
    

}

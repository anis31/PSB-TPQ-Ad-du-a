<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;

class AlumniController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_santri = Santri::whereNotNull('lulus')->where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_santri = Santri::whereNotNull('lulus')->paginate(10);
        }
        return view('alumni.index', ['data_santri' => $data_santri]);
    }
}

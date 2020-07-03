<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $data_guru = Guru::paginate(10);
        return view('guru.index', ['data_guru' => $data_guru]);
    }

    public function tambah(Request $request)
    {
       Guru::create($request->all());
       return redirect('/guru')->with('sukses','Data berhasil disimpan..');
    }
}

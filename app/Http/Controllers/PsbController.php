<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Wawancara;
Use App\Daftar;

class PsbController extends Controller
{
    public function create()
    {
        return redirect('/psb/wawancara')->with('sukses','Data wawancara berhasil ditambahkan...');
    }
}

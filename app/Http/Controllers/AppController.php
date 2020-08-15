<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;

class AppController extends Controller
{
    
    public function editPendaftaran(Request $request)
    {
       $app = App::where('key', 'STATUS_PENDAFTARAN')->firstOrFail();
       $app->value = $request->status;
       $app->save();

       return response()->json("Status Pendaftaran berhasil diubah");
    }

}

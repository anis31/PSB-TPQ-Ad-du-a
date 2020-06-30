<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Daftar;

class Wawancara extends Model
{
    protected $table = 'wawancara';
    protected $fillable = ['pendaftaran_id','hafalan','surat_dihafal','tartil','jilid','catatan_quran','ask_peraturan','ask_infaq','ask_bangunan','ask_partisipasi','ask_kegiatan','catatan_kuisioner'];

    public function relasi_daftar()
    {
        return $this->belongsTo('App\Daftar','pendaftaran_id');
    }

    public function wawancara(){
        return $this->belongsTo(Daftar::class);
    }
}
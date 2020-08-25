<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periode';
    protected $fillable = ['tahun','semester', 'tgl_buka', 'tgl_tutup'];

    public function relasi_pendaftaran()
    {
        return $this->hasMany('App\Daftar', 'periode_id');
    }

}

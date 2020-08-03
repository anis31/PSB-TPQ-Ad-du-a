<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Guru;

class Halaqoh extends Model
{
    protected $table = 'halaqoh';
    protected $fillable = ['nomor_halaqoh','kode_halaqoh'];

    public function relasi_guru()
    {
        return $this->belongsTo('App\Guru', 'guru_id', 'id');
    }

    public function relasi_santri()
    {
        return $this->hasMany('App\Santri', 'halaqoh_id');
    }
}

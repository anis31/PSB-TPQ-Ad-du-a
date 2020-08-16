<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Halaqoh;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nama','umur', 'no_hp', 'jenis_kelamin','tahfidz','tartil'];

    public function relasi_halaqoh()
    {
        return $this->hasOne('App\Halaqoh', 'guru_id', 'id');
    }
}

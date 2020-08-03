<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santri';
    protected $fillable = ['nama','nama_panggilan','tempat_lahir','tgl_lahir','umur','sekolah_asal','kelas','jenis_kelamin','alamat','nama_ortu','nomor_hp', 'halaqoh_id','avatar'];

    public function relasi_halaqoh()
    {
        return $this->belongsTo('App\Halaqoh', 'halaqoh_id');
    }
}

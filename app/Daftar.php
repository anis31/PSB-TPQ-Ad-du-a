<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'pendaftaran';
    protected $fillable = ['nama','nama_panggilan','tempat_lahir','tgl_lahir','umur','sekolah_asal','kelas','jenis_kelamin','alamat','nama_ortu','nomor_hp'];

    public function relasi_wawancara()
    {
        return $this->hasOne('App\Wawancara');
    }
}

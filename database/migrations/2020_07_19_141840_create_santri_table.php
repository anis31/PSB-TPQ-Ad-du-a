<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_panggilan');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->integer('umur');
            $table->string('sekolah_asal');
            $table->integer('kelas');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('nama_ortu');
            $table->string('nomor_hp');
            $table->string('avatar')->nullable();
            //Relasi ke Table Halaqoh
            $table->unsignedBigInteger('halaqoh_id')->nullable();
            $table->foreign('halaqoh_id')->references('id')->on('halaqoh')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('santri');
    }
}

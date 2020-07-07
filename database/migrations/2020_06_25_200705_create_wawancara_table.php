<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWawancaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wawancara', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pendaftaran_id');
            $table->foreign('pendaftaran_id')->references('id')->on('pendaftaran')->onDelete('cascade');
            $table->string('hafalan',10);
            $table->string('surat_dihafal')->nullable();
            $table->string('tartil',10);
            $table->string('jilid',20);
            $table->string('catatan_quran')->nullable();
            $table->string('ask_peraturan',10);
            $table->string('ask_infaq',10);
            $table->string('ask_bangunan',10);
            $table->string('ask_partisipasi',10);
            $table->string('ask_kegiatan',10);
            $table->string('catatan_kuisioner')->nullable();
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
        Schema::dropIfExists('wawancara');
    }
}

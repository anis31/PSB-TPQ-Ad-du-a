<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalaqohTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaqoh', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_halaqoh');
            $table->string('kode_halaqoh', 5);
            //Relasi ke Table Guru
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('cascade');
            //Relasi Ke Table Santri
            $table->unsignedBigInteger('santri_id');
            $table->foreign('santri_id')->references('id')->on('santri')->onDelete('cascade');
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
        Schema::dropIfExists('halaqoh');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_pegawai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lokasi_id')->references('id')->on('lokasi')->cascadeOnDelete();
            $table->foreignId('pegawai_id')->references('id')->on('pegawai')->cascadeOnDelete();
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
        Schema::dropIfExists('lokasi_pegawai');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamKerjaPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_kerja_pegawai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jam_kerja_id')->references('id')->on('jam_kerja')->cascadeOnDelete();
            $table->foreignId('pegawai_id')->references('id')->on('pegawai')->cascadeOnDelete();
            $table->date('tanggal');
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
        Schema::dropIfExists('jam_kerja_pegawai');
    }
}

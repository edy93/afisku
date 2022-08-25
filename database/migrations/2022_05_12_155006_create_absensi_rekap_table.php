<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiRekapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_rekap', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pegawai_id')->nullable()->references('id')->on('pegawai')->nullOnDelete();
            $table->char('nip', 18)->nullable();
            $table->foreignId('jam_kerja_id')->nullable()->references('id')->on('jam_kerja')->nullOnDelete();
            $table->date('tanggal')->nullable();
            $table->foreignId('masuk')->nullable()->references('id')->on('absensi')->nullOnDelete();
            $table->foreignId('pulang')->nullable()->references('id')->on('absensi')->nullOnDelete();
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
        Schema::dropIfExists('absensi_rekap');
    }
}

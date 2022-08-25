<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pegawai_id')->nullable()->references('id')->on('pegawai')->nullOnDelete();
            $table->char('nip', 18)->nullable();
            $table->foreignId('jam_kerja_id')->nullable()->references('id')->on('jam_kerja')->nullOnDelete();
            $table->foreignId('tipe_id')->nullable()->references('id')->on('absensi_tipe')->nullOnDelete();
            $table->date('tanggal')->nullable();
            $table->time('jam')->nullable();
            $table->float('lat', 10, 8)->nullable();
            $table->float('lng', 11, 8)->nullable();
            $table->text('alamat')->nullable();
            $table->boolean('is_dilokasi')->nullable();
            $table->text('keterangan_pegawai')->nullable();
            $table->char('verifikator', 18)->nullable();
            $table->text('keterangan_verifikator')->nullable();
            $table->foreignId('status_id')->nullable()->references('id')->on('absensi_status')->nullOnDelete();
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
        Schema::dropIfExists('absensi');
    }
}

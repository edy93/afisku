<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nm_pegawai');
            $table->char('nip', 18)->unique();
            $table->foreignId('satker_id')->nullable()->references('id')->on('satuan_kerja')->nullOnDelete();
            $table->foreignId('uniker_id')->nullable()->references('id')->on('unit_kerja')->nullOnDelete();
            $table->string('jabatan')->nullable();
            $table->integer('kelas_jabatan')->nullable();
            $table->string('email')->nullable();
            $table->string('nohp')->nullable();
            $table->string('password');
            $table->boolean('is_auto_verif')->default(false);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('pegawai');
    }
}

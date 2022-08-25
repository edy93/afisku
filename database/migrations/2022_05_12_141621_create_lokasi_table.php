<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi', function (Blueprint $table) {
            $table->id();
            $table->string('nm_lokasi');
            $table->string('deskripsi')->nullable();
            $table->foreignId('satker_id')->nullable()->references('id')->on('satuan_kerja')->nullOnDelete();
            $table->foreignId('uniker_id')->nullable()->references('id')->on('unit_kerja')->nullOnDelete();
            $table->text('koordinat');
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
        Schema::dropIfExists('lokasi');
    }
}

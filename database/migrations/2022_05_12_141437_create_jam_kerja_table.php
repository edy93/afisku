<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('nm_jam_kerja');
            $table->string('kode')->nullable();
            $table->time('jam_masuk');
            $table->time('checkin_start');
            $table->time('checkin_end');
            $table->integer('checkin_tolerance')->nullable();
            $table->time('jam_pulang');
            $table->time('checkout_start');
            $table->time('checkout_end');
            $table->integer('checkout_tolerance')->nullable();
            $table->boolean('is_crossday')->default(false);
            $table->foreignId('satker_id')->nullable()->references('id')->on('satuan_kerja')->nullOnDelete();
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
        Schema::dropIfExists('jam_kerja');
    }
}

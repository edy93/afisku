<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Pegawai extends Model
{
    use HasFactory, HasApiTokens;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pegawai';

    public function satuanKerja()
    {
        return $this->hasOne(SatuanKerja::class, 'id', 'satker_id');
    }

    public function unitKerja()
    {
        return $this->hasOne(UnitKerja::class, 'id', 'uniker_id');
    }

    public function atasan()
    {
        return $this->belongsToMany(Pegawai::class, 'atasan_bawahan', 'bawahan_id', 'atasan_id')->withTimestamps();
    }

    public function bawahan()
    {
        return $this->belongsToMany(Pegawai::class, 'atasan_bawahan', 'atasan_id', 'bawahan_id')->withTimestamps();
    }

    public function jam_kerja()
    {
        return $this->belongsToMany(JamKerja::class, 'jam_kerja_pegawai', 'pegawai_id', 'jam_kerja_id')->withTimestamps();
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'pegawai_id');
    }

    public function absensiPending()
    {
        return $this->absensi->where('status_id', AbsensiStatus::getDataByKode('T')->id);
    }
}

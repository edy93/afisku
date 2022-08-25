<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamKerja extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jam_kerja';

    public function satuanKerja()
    {
        return $this->hasOne(SatuanKerja::class, 'id', 'satker_id');
    }

    public function pegawai()
    {
        return $this->belongsToMany(Pegawai::class, 'jam_kerja_pegawai', 'jam_kerja_id', 'pegawai_id')->withTimestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'unit_kerja';

    public function unitKerja()
    {
        return $this->hasOne(UnitKerja::class);
    }

    public function pegawai()
    {
        return $this->belongsTo(UnitKerja::class);
    }

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lokasi';

    public function satuanKerja()
    {
        return $this->hasOne(SatuanKerja::class, 'id', 'satker_id');
    }

    public function unitKerja()
    {
        return $this->hasOne(UnitKerja::class, 'id', 'uniker_id');
    }
}

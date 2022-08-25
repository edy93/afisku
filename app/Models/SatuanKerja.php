<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanKerja extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'satuan_kerja';

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function jamKerja()
    {
        return $this->belongsTo(JamKerja::class);
    }

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class);
    }
}

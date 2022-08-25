<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'absensi';

    public function tipe()
    {
        return $this->hasOne(AbsensiTipe::class, 'id', 'tipe_id');
    }

    public function status()
    {
        return $this->hasOne(AbsensiStatus::class, 'id', 'status_id');
    }
}

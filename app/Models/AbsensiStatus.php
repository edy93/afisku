<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiStatus extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'absensi_status';

    public static function getDataByKode($kode) {
        $result = AbsensiStatus::whereKode($kode)->first();
        return $result;
    }
}

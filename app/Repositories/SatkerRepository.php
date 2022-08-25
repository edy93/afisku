<?php

namespace App\Repositories;

use App\Models\SatuanKerja;

class SatkerRepository
{
    public function all()
    {
        $data = SatuanKerja::all();
        return $data;
    }
}

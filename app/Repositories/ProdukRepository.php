<?php

namespace App\Repositories;

use App\Models\Produk;

class ProdukRepository
{
    public function allActive()
    {
        $produk = Produk::where('is_publish', 1)->where('is_delete', 0)->paginate(10);
        return $produk;
    }
}

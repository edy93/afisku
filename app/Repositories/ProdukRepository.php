<?php

namespace App\Repositories;

use App\Http\Resources\ProdukPaginateResource;
use App\Models\Produk;

class ProdukRepository
{
    public function allActive()
    {
        $produk = Produk::where('is_publish', 1)->where('is_delete', 0)->paginate(10);
        if ($produk->count() > 0) {
            $produk = new ProdukPaginateResource($produk);
        }
        return $produk;
    }
}

<?php

namespace App\Http\Resources;

use App\Helpers\Helper;
use Illuminate\Http\Resources\Json\JsonResource;

class ProdukResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_merchant' => $this->id_merchant,
            'id_kategori' => $this->id_kategori,
            'kode_produk' => $this->kode_produk,
            'nama_produk' => $this->nama_produk,
            'deskripsi' => $this->deskripsi,
            'harga' => $this->harga,
            'harga_text' => $this->harga ? Helper::angkaKeRupiah($this->harga) : '',
            'harga_coret' => $this->harga_coret,
            'harga_coret_text' => $this->harga_coret ? Helper::angkaKeRupiah($this->harga_coret) : '',
            'jumlah' => $this->jumlah,
            'satuan' => $this->satuan,
            'banner_app' => $this->banner_app,
            'quantity' => $this->quantity,
            'is_publish' => $this->is_publish == '1' ? true : false,
            'is_delete' => $this->is_delete == '1' ? true : false,
            'is_promo' => $this->is_promo == '1' ? true : false,
            'is_featured' => $this->is_featured == '1' ? true : false,
            'is_soldout' => $this->is_soldout == '1' ? true : false,
        ];
    }
}

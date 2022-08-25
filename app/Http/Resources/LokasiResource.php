<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LokasiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nm_lokasi' => $this->nm_lokasi,
            'deskripsi' => $this->deskripsi,
            'koordinat' => $this->koordinat,
            'is_active' => $this->is_active ? true : false,
        ];
    }
}

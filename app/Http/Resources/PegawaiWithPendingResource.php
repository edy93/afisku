<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PegawaiWithPendingResource extends JsonResource
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
            'nm_pegawai' => $this->nm_pegawai,
            'nip' => $this->nip,
            'satker' => $this->satuanKerja->nm_satker,
            'jabatan' => $this->jabatan ?? '',
            'email' => $this->email ?? '',
            'nohp' => $this->nohp ?? '',
            'is_active' => $this->is_active ? true : false,
            'pending' => $this->absensiPending() ? $this->absensiPending()->count() : 0,
        ];
    }
}

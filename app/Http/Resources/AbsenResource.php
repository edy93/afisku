<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AbsenResource extends JsonResource
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
            'pegawai_id' => $this->pegawai_id,
            'nip' => $this->nip,
            'jam_kerja_id' => $this->jam_kerja_id,
            'tipe' => new AbsensiTipeResource($this->tipe),
            'tanggal' => $this->tanggal ? Carbon::parse($this->tanggal)->format('d-m-Y') : '',
            'jam' => $this->jam ? Carbon::parse($this->jam)->format('H:i') : '',
            'lat' => $this->lat,
            'lng' => $this->lng,
            'alamat' => $this->alamat,
            'is_dilokasi' => $this->is_dilokasi ? true : false,
            'alasan' => $this->keterangan_pegawai ?? '',
            'status_absensi' => new AbsensiStatusResource($this->status),
            'is_active' => $this->is_active ? true : false,
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminResource extends JsonResource
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
            'id_admin' => $this->id_admin,
            'id_merchant' => $this->id_merchant,
            'id_level' => $this->id_level,
            'id_satker' => $this->id_satker,
            'username' => $this->username,
            'email' => $this->email,
            'nama_lengkap' => $this->nama_lengkap,
            'nohp' => $this->nohp,
            'pass' => $this->pass,
            'avatar' => $this->avatar,
            'banned' => $this->banned,
        ];
    }
}

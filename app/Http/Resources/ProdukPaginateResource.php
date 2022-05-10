<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdukPaginateResource extends JsonResource
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
            'pagination' => [
                'total' => $this->total(),
                'count' => $this->count(),
                'per_page' => $this->perPage(),
                'current_page' => $this->currentPage(),
                'next_page' => $this->currentPage() != $this->lastPage() ? $this->currentPage() + 1 : $this->currentPage(),
                'total_pages' => $this->lastPage()
            ],
            'produk' => ProdukResource::collection($this),
        ];
    }
}

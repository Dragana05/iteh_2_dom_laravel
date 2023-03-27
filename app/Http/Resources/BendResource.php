<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BendResource extends JsonResource
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
            'ID: ' => $this->resource->id,
            'Naziv: ' => $this->resource->naziv,
            'Broj članova: ' => $this->resource->brojClanova,
            'Youtube: ' => $this->resource->youtube,
            'Instagram: ' => $this->resource->instagram,
        ];
    }
}

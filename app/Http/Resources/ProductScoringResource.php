<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductScoringResource extends JsonResource
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
            'min_value' =>$this->min_value,
            'max_value' =>$this->max_value,
            'exact_value' =>$this->exact_value,
            'mandatory' =>$this->mandatory,
        ];
    }
}

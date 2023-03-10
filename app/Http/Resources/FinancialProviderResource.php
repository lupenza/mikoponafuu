<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FinancialProviderResource extends JsonResource
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
            'name' =>$this->name,
            'contact' =>$this->contact,
            'email' =>$this->email,
            'region'     =>$this->region->name,
            'district'   =>$this->district->name,
            'location'   =>$this->location,
            'products'   =>FinancialProductResource::collection($this->products),
        ];
    }
}

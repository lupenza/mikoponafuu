<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FinancialProductResource extends JsonResource
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
            'name'       =>$this->name,
            'max_amount' =>$this->max_amount,
            'min_amount' =>$this->min_amount,
            'adminstration_fees' =>$this->adminstration_fees,
            'interest'   =>$this->interest,
            'other_fees' =>$this->other_fees,
            'product_id' =>$this->uuid,
            'product_category' =>$this->category->name,
            'product_requirement' =>ProductRequirementResource::collection($this->requirements),
        ];
    }
}

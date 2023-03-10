<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRequirement extends Model
{
    use HasFactory;

    protected $table='fsp_product_requirements';
    protected $fillable=['fsp_products_id','requirement_category_id','status','uuid'];

    public function category(){
        return $this->hasOne(RequirementCategory::class,'id','requirement_category_id');
    }

    public function specific_requirement(){
        return $this->hasOne(ProductScoring::class,'fsp_product_requirement_id','requirement_category_id');
    }
}

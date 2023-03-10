<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductScoring extends Model
{
    use HasFactory;

    protected $table='fsp_product_scoring';

    protected $fillable=['fsp_product_requirement_id','status','min_value','max_value','exact_value','mandatory','uuid','fsp_products_id'];
}

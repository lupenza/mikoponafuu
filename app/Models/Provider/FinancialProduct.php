<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Str;

class FinancialProduct extends Model
{
    use HasFactory;

    protected $table ="fsp_products";
    protected $fillable=['name','max_amount','min_amount','adminstration_fees','interest','other_fees','financial_provider_id','fsp_product_category_id','uuid','status'];

    public static function store($request_data){
        $product =FinancialProduct::create([
            'name'        =>ucwords($request_data['name']),
            'max_amount'  =>$request_data['max_amount'],
            'min_amount'  =>$request_data['min_amount'],
            'adminstration_fees' =>$request_data['adminstration_fee'],
            'interest'    =>$request_data['interest'],
            'other_fees'  =>$request_data['other_fee'],
            'financial_provider_id'  =>Auth::user()->financial_staff->financial_provider_id ?? 1,
            'fsp_product_category_id' =>$request_data['product_category'],
            'uuid' =>(string)Str::orderedUuid()
        ]);

        return $product;
    }

    public function category(){
            return $this->hasOne(ProductCategory::class,'id','fsp_product_category_id');
    }

    public function requirements(){
        return $this->hasMany(ProductRequirement::class,'fsp_products_id','id');
    }
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider\FinancialProvider;
use App\Models\Provider\FinancialProduct;
use App\Http\Resources\FinancialProviderResource;
use App\Http\Resources\FinancialProductResource;



class ProductController extends Controller
{
    public function index(){
        $vendors =FinancialProvider::with('products','region','district','products.requirements','products.category')
                                    ->latest()->get();

        return response()->json([
            'success' =>true,
            'message' =>'vendors list',
            'data'    =>FinancialProviderResource::collection($vendors)
        ],200);
    }

    public function productList(){
        $products =FinancialProduct::
        latest()->get();

        return response()->json([
        'success' =>true,
        'message' =>'Products list',
        'data'    =>FinancialProductResource::collection($products)
        ],200);
    }
}

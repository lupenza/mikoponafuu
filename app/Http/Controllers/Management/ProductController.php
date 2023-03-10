<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider\FinancialProvider;
use App\Models\Provider\FinancialProduct;
use App\Models\Provider\ProductCategory;
use App\Models\Provider\RequirementCategory;
use App\Models\Provider\ProductRequirement;
use App\Models\Provider\ProductScoring;
use App\Http\Requests\ProductStoreRequest;
use Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories   =ProductCategory::get(['id','name']);
        $requirements =RequirementCategory::get(['id','name']);
        return view('backend.companies.add_product',compact('categories','requirements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
            $valid_data =$request->validated();
            $unvalidated =$request->all();


            $request_data =array_merge($valid_data,$unvalidated);

            $requirement_array =$request_data['requirements'] ?? [];
            $min_value_array   =$request_data['min_value'] ?? [];
            $max_value_array   =$request_data['max_value'] ?? [];
            $exact_value_array =$request_data['exact_value'] ?? [];
            $requirement_id_array =$request_data['requirement_id'] ?? [];
            $mandatory_array     =$request_data['mandatory'] ?? [];


            $product =FinancialProduct::store($request_data);

            if (count($requirement_array) > 0) {
                foreach ($requirement_array as $key) {
                    $requirement =ProductRequirement::create([
                        'fsp_products_id'         =>$product->id,
                        'requirement_category_id' =>$key,
                        'uuid'    =>(string)Str::orderedUuid(),
                    ]);
                }
            } 

            if ((count($min_value_array) > 0) || (count($max_value_array) >0 ) (count($exact_value_array) > 0) || (count($requirement_id_array) >0 ) || (count($mandatory_array) >0)) {

                foreach ($min_value_array as $key => $value) {
                    $product_requirement =ProductRequirement::where('fsp_products_id',$product->id)
                                        ->where('requirement_category_id',$requirement_id_array[$key])->first();

                        if (($product_requirement )) {
                            $specific_requirement =ProductScoring::create([
                                'fsp_product_requirement_id' =>$requirement_id_array[$key],
                                'fsp_products_id'            =>$product->id,
                                'min_value'   =>$value,
                                'max_value'   =>$max_value_array[$key],
                                'exact_value' =>$exact_value_array[$key],
                                'mandatory'   =>$mandatory_array[$key] ?? "No",
                                'uuid'    =>(string)Str::orderedUuid(),
                            ]);
                        }
                }
            }

            return response()->json([
                'success' =>true,
                'message' =>"Action Done Successfully"
            ],200);
            
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($company_uuid)
    {
        $company   =FinancialProvider::where('uuid',$company_uuid)->first();
        $products  =FinancialProduct::where('financial_provider_id',$company->id)->get();
        return view('backend.companies.product_list',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entities\Region;
use App\Http\Requests\CompanyStoreRequest;
use App\Models\User;
use App\Models\Provider\FinancialProvider;
use App\Models\Provider\FinancialProviderUser;
use Hash;
use Str;
use Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies =FinancialProvider::latest()->get();
        return view('backend.companies.list',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions =Region::get();
        return view('backend.companies.add',compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyStoreRequest $request)
    {
        $valid_data =$request->validated();

        $company =FinancialProvider::store($valid_data);

        $user =User::create([
            'name'         =>ucwords($valid_data['full_name']),
            'email'        =>$valid_data['user_email'],
            'phone_number' =>$valid_data['user_phone_number'],
            'created_by'   =>Auth::user()->id ?? null,
            'uuid'         =>(string)Str::orderedUuid(),
            'password'     =>Hash::make('123456'),
        ]);

        $user->assignRole('Financial Provider');

        $company_user =FinancialProviderUser::create([
            'user_id'               =>$user->id,
            'financial_provider_id' =>$company->id,
            'uuid'         =>(string)Str::orderedUuid(),
        ]);

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
    public function show($id)
    {
        //
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

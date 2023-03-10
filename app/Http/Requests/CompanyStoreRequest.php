<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'                =>['required','unique:financial_providers,name'],
            'licence_number'      =>'required',
            'tin_number'          =>'required',
            'email'               =>'required',
            'contact'       =>'required',
            'region_id'     =>'required',
            'district_id'   =>'required',
            'location'      =>'required',
            'user_email'        =>['required','unique:users,email'],
            'user_phone_number' =>'required',
            'full_name'         =>'required',
        ];
    }
}

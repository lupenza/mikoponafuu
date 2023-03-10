<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Str;
use App\Models\Entities\Region;
use App\Models\Entities\District;

class FinancialProvider extends Model
{
    use HasFactory;

    protected $fillable=['name','licence_number','tin_number','email','contact','region_id','district_id','location','created_by','uuid'];

    public static function store($data){
        $company =FinancialProvider::create([
            'name'           =>$data['name'],
            'licence_number' =>$data['licence_number'],
            'tin_number'  =>$data['tin_number'],
            'email'       =>$data['email'],
            'contact'     =>$data['contact'],
            'region_id'   =>$data['region_id'],
            'district_id' =>$data['district_id'],
            'location'    =>$data['location'],
            'created_by'  =>Auth::user()->id ?? null,
            'uuid'        =>(string)Str::orderedUuid(),
        ]);

        return $company;
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function products(){
        return $this->hasMany(FinancialProduct::class,'financial_provider_id');
    }
}

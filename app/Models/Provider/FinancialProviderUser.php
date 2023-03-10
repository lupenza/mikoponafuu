<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialProviderUser extends Model
{
    use HasFactory;

    protected $fillable=['user_id','financial_provider_id','uuid'];
}

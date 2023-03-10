<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Auth;
use Str;
use Hash;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'status',
        'created_by',
        'uuid'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function store($user_data){
       
        $user =User::create([
            'name'         =>ucwords($user_data['first_name'].' '.$user_data['middle_name'].' '.$user_data['last_name']),
            'email'        =>$user_data['username'],
            'phone_number' =>$user_data['phone_number'],
            'created_by'   =>Auth::user()->id ?? null,
            'uuid'         =>(string)Str::orderedUuid(),
            'password'     =>Hash::make('123456'),
        ]);

        return $user;
    }
}

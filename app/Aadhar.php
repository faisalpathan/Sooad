<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aadhar extends Model
{
    protected $primaryKey='aadhar_id';

    protected $fillable = ['fullname','fname','mname','address','gender','mobile','email','DOB'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */ 
    protected $hidden = [
        'password', 'remember_token','user_id'
    ];

}

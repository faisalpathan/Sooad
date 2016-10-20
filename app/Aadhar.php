<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aadhar extends Model
{
    public $timestamps = false;
    protected $primaryKey='aadhar_id';

    protected $fillable = ['fullname','fname','mname','address','gender','mobile','email','DOB','user_id','status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */ 
    protected $hidden = [
        'password', 'remember_token'
    ];

}

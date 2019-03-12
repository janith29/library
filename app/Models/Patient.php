<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{  protected $table = 'patient';
    protected $fillable = [
        'id','Did',  'name','nic','gender','email','mobile', 'address'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{public $timestamps = false;

    protected $table='doctors';
    protected $primarykey='id';
    protected $fillable=[
        'id','Did', 'name', 'email', 'hospital' , 'mobile',  'doc_pic'

];
}

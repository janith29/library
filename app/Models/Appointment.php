<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{    
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'appointments';

    protected $primaryKey = 'id';
    protected $fillable = [
        'id','Did', 'name', 'date', 'time', 'type','applicant'
    ];

    public function scopeSearch($query, $key) {
        return $query->where('name', 'like', '%' .$key. '%')
                    ->orWhere('type', 'like', '%' .$key. '%')
                    ->orWhere('date', 'like', '%' .$key. '%')
                    ->orWhere('Did', 'like', '%' .$key. '%')
                    ->orWhere('time', 'like', '%' .$key. '%');
    }
}

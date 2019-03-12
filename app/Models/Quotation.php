<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table='quotations';
    protected $primarykey = 'id';
    protected $fillable=[
        'id','did','date','pronounced','gender', 'name', 'address', 'divice', 'diagnosis', 'prescription', 'warranty', 'deliverydate', 'price', 'pricevalidity', 'paymentmethod'
    ];
}

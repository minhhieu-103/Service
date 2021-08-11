<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    protected $table = 'product_brands';
    protected $fillable = [
        'id', 'name', 'price','price_old', 'sale_off','status', 'desc','image', 'model_machines_id'
    ];
    function Model_machines(){
        return $this->belongsTo('App\Models\ModelMachine', 'model_machines_id');
    }
}

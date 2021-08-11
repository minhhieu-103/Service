<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'id','name','model_machines_id'
    ];
    public function Model_machines()
    {
        return $this->belongsTo('App\Models\ModelMachine', 'model_machines_id');
    }
}

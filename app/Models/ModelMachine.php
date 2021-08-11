<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelMachine extends Model
{
    protected $table = 'model_machines';
    protected $fillable = [
        'id','name','categories_id'
    ];
    public function Categories()
    {
        return $this->belongsTo('App\Models\Category', 'categories_id');

    }
    public function Brand()
    {
        return $this->hasMany('App\Models\ProductBrand', 'model_machines_id');
    }
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'model_machines_id');
    }
}

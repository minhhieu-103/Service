<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'id', 'name'
    ];
    public function Model_machines()
    {
        return $this->hasMany('App\Models\ModelMachine', 'categories_id');
    }
}

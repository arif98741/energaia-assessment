<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public function supplier()
    {
        return $this->hasMany(Supplier::class);
    }
}
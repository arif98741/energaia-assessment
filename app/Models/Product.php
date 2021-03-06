<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class);
    }


    public function supply()
    {
        return $this->belongsTo(Supply::class);
    }
}
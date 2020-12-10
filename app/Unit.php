<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Unit extends Model
{
    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_unit', 'unit_id', 'product_id');
    }
}

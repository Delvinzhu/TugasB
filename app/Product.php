<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unit;

class Product extends Model
{
    protected $guarded = [];

    public function carts(){
        return $this->hasMany('App\Cart', 'product_id', 'id');
    }

    public function units()
    {
        return $this->belongsToMany(Unit::class, 'product_unit', 'product_id', 'unit_id');
    }

    public function getPriceMoneyAttribute(){
        return number_format($this->attributes['price'],2,',','.');
    }
}

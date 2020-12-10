<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaction;
use App\User;
use App\Product;

class Cart extends Model
{
    protected $guarded = [];

    public function transactions(){
        return $this->belongsTo(Transaction::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->belongsTo(Product::class,'product_id');
    }
}

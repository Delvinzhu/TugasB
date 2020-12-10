<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Transaction extends Model
{
    protected $guarded = [];

    public function carts(){
        return $this->hasMany('App\Cart', 'transaction_id', 'id');
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}

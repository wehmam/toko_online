<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id','product_id','qty'];

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}

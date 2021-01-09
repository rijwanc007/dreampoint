<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
      'ip',
      'product_id',
      'liked',
    ];
    public function product(){
        return $this->belongsTo('App\Product');
    }
}

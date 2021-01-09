<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'category',
      'sub_category',
      'image',
      'product_code',
      'title',
      'description',
      'pf',
      'offer',
      'prev_price',
      'new_price',
      'discount',
    ];
}

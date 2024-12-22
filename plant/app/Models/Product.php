<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'quantity',
        'discount_price',
        'catagory',
        'image',
    ];
}

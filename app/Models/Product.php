<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'product_description',
        'product_is_featured',
        'product_base_price',
    ];

    protected $casts = [
        'status'    =>  'boolean',
        'featured'  =>  'boolean'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Brand extends Model
{
    protected $table = 'product_brand';

    protected $fillable = [
        'product_brand_name',
    ];

    public function product(){
        return $this->hasMany(Product::class );
    }
}

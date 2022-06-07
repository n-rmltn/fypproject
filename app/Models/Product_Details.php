<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Details extends Model
{
    protected $table = 'product_details';

    protected $fillable = [
        'product_id',
        'product_details_header',
        'product_details_content',
    ];

    public function Product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}

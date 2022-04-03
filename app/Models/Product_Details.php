<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Details extends Model
{
    protected $table = 'product_details';

    protected $fillable = [
        'product_details_header',
        'product_details_content',
    ];

    public function brand(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}

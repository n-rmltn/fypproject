<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Images extends Model
{
    protected $table = 'product_images';

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_id',
        'product_images_name',
        'product_images_priority',
    ];

    public function Product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}

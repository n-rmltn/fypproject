<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Option extends Model
{
    protected $table = 'product_option';

    protected $fillable = [
        'id',
        'product_id',
        'product_option_name',
        'product_option_status',
    ];

    public function Product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function list(){
        return $this->hasMany(Product_Option_List::class, 'product_option_id');
    }
}

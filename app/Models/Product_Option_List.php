<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Option_List extends Model
{
    protected $table = 'product_option_list';

    protected $fillable = [
        'id',
        'product_option_id',
        'product_option_list_name',
        'product_option_list_additional_price',
        'product_option_list_status',
    ];

    public function brand(){
        return $this->belongsTo(Product_Option::class, 'product_option_id');
    }
}

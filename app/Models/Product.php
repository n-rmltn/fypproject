<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name_short',
        'product_name_long',
        'product_cart_images_name',
        'product_categories',
        'product_catalog_images_name',
        'product_brand_id',
        'product_description',
        'product_base_price',
        'product_status',
        'product_featured',
        'product_stripe_id',
    ];

    protected $casts = [
        'product_featured'    =>  'boolean',
        'product_status'  =>  'boolean'
    ];

    public function brand(){
        return $this->belongsTo(Product_Brand::class, 'product_brand_id');
    }

    public function images(){
        return $this->hasMany(Product_Images::class, 'product_id');
    }

    public function details(){
        return $this->hasMany(Product_Details::class, 'product_id');
    }

    public function option(){
        return $this->hasMany(Product_Option::class, 'product_id');
    }

}

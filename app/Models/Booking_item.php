<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_item extends Model
{
    public $timestamps = false;
    protected $table = 'booking_item';

    protected $fillable = [
        'id',
        'booking_id',
        'product_id'
    ];

    public function Booking(){
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    public function Product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function Booking_item_option(){
        return $this->hasMany(Booking_item_option::class, 'booking_item_id', 'id' );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'product_brand';

    protected $fillable = [
        'id',
        'user_id',
        'address_1',
        'address_2',
        'city',
        'state',
        'postal',
        'phone',
        'total',
        'status',
    ];

    public function Booking_item(){
        return $this->hasMany(Booking_item::class, 'booking_id');
    }

    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_item_option extends Model
{
    protected $table = 'booking_item_option';
    public $timestamps = false;


    protected $fillable = [
        'id',
        'booking_item_id',
        'option_id',
    ];

    public function Booking_item(){
        return $this->belongsTo(Booking_item::class, 'booking_item_id');
    }
    public function Product_option_list(){
        return $this->belongsTo(Product_Option_List::class, 'option_id');
    }
}

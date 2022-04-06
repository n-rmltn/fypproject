<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
            'product_name_short' => 'KEYCHRON K2',
            'product_name_long' =>  'Keychron K2 Wireless Mechanical Keyboard (Version 2)',
            'product_cart_images_name' => 'product-cart-1.webp',
            'Product_categories' => 'keyboard',
            'product_brand_id' => '1',
            'product_description' =>  'K2 is a super tactile wireless or wired keyboard giving you all the keys and function you need while keeping it compact, with the largest battery seen in a mechanical keyboard.',
            'product_base_price' =>  '69.00',
            'product_status' =>  '1',
            'product_featured' =>  '0',
            'product_stripe_id' =>  'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
            'product_name_short' => 'test',
            'product_name_long' =>  'testo',
            'product_cart_images_name' => 'product-cart-1.webp',
            'Product_categories' => 'mouse',
            'product_brand_id' => '1',
            'product_description' =>  'testo',
            'product_base_price' =>  '69.00',
            'product_status' =>  '1',
            'product_featured' =>  '0',
            'product_stripe_id' =>  'price_1KhD0lEpRCJdieCxAVKUK4av',
            ]
            ]
        );//
    }
}

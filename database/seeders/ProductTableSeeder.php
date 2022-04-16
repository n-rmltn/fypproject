<?php

namespace Database\Seeders;

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
                'product_name_short' => 'Keychron K2',
                'product_name_long' => 'Keychron K2 Wireless Mechanical Keyboard (Version 2)',
                'product_cart_images_name' => 'product-cart-1.webp',
                'product_categories' => 'keyboard',
                'product_brand_id' => '1',
                'product_description' => 'K2 is a super tactile wireless or wired keyboard giving you all the keys and function you need while keeping it compact, with the largest battery seen in a mechanical keyboard.',
                'product_base_price' => '320.00',
                'product_status' => '1',
                'product_featured' => '0',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
                'product_name_short' => 'Keychron K4',
                'product_name_long' => 'Keychron K4 Wireless Mechanical Keyboard (Version 2)',
                'product_cart_images_name' => 'product-cart-2.webp',
                'product_categories' => 'keyboard',
                'product_brand_id' => '1',
                'product_description' => 'K4 version 2 has full-size functionality in a compact design with 100 necessary keys. The hot-swappable option with preinstalled Gateron Mechanical switches offers the freedom to customize per-key typing experience without soldering.',
                'product_base_price' => '320.00',
                'product_status' => '1',
                'product_featured' => '0',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
                'product_name_short' => 'Keychron K10',
                'product_name_long' => 'Keychron K10 Wireless Mechanical Keyboard',
                'product_cart_images_name' => 'product-cart-3.webp',
                'product_categories' => 'keyboard',
                'product_brand_id' => '1',
                'product_description' => 'K10 comes with a 104 key full size layout included number pad that offers convenient access to all the essential keys* for Mac and Windows included the dedicated Screenshot Key, Siri (Cortana) Key, and Screen Lock Key.',
                'product_base_price' => '390.00',
                'product_status' => '1',
                'product_featured' => '1',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
                'product_name_short' => 'Keychron K8',
                'product_name_long' => 'Keychron K8 Wireless Mechanical Keyboard',
                'product_cart_images_name' => 'product-cart-4.webp',
                'product_categories' => 'keyboard',
                'product_brand_id' => '1',
                'product_description' => 'K8 is engineered to maximize your productivity with most popular TKL layout. The hot-swappable option on Optical and Mechanical switches offers the freedom to easily personalize your typing experience without soldering.',
                'product_base_price' => '320.00',
                'product_status' => '1',
                'product_featured' => '1',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
                'product_name_short' => 'Keychron K6',
                'product_name_long' => 'Keychron K6 Wireless Mechanical Keyboard',
                'product_cart_images_name' => 'product-cart-5.webp',
                'product_categories' => 'keyboard',
                'product_brand_id' => '1',
                'product_description' => 'K6 is crafted to maximize your workspace with an ergonomic design, while retaining all necessary multimedia and function keys. The hot-swappable version offers the freedom to easily personalize your typing experience without soldering.',
                'product_base_price' => '320.00',
                'product_status' => '1',
                'product_featured' => '1',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
                'product_name_short' => 'Ducky One 2 Mini Blackout',
                'product_name_long' => 'Ducky One 2 Mini Blackout Mechanical Keyboard',
                'product_cart_images_name' => 'product-cart-6.webp',
                'product_categories' => 'keyboard',
                'product_brand_id' => '2',
                'product_description' => 'All black bezels to match all varieties of keycap colorways.',
                'product_base_price' => '420.00',
                'product_status' => '1',
                'product_featured' => '1',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
                'product_name_short' => 'Ducky One 2 RGB TKL White',
                'product_name_long' => 'Ducky One 2 RGB TKL White Mechanical Keyboard',
                'product_cart_images_name' => 'product-cart-7.webp',
                'product_categories' => 'keyboard',
                'product_brand_id' => '2',
                'product_description' => 'Pure white color bezels to match all varieties of keycap colorways. Features Cherry MX key switches.',
                'product_base_price' => '430.00',
                'product_status' => '1',
                'product_featured' => '0',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
                'product_name_short' => 'Ducky One 2 Tuxedo',
                'product_name_long' => 'Ducky One 2 Tuxedo Mechanical Keyboard',
                'product_cart_images_name' => 'product-cart-8.webp',
                'product_categories' => 'keyboard',
                'product_brand_id' => '2',
                'product_description' => 'Dual color bezels to match all varieties of keycap colorways. Features Cherry MX key switches.',
                'product_base_price' => '460.00',
                'product_status' => '1',
                'product_featured' => '1',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
                'product_name_short' => 'Ducky Feather',
                'product_name_long' => 'Ducky Feather Black & White Mouse',
                'product_cart_images_name' => 'product-cart-9.webp',
                'product_categories' => 'mouse',
                'product_brand_id' => '2',
                'product_description' => 'An evolution of Ducky Secret series, taking performance to another level. Now, boasting a DPI resolution of 16000.',
                'product_base_price' => '250.00',
                'product_status' => '1',
                'product_featured' => '1',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
                'product_name_short' => 'Ducky Secret',
                'product_name_long' => 'Ducky Secret M Mouse',
                'product_cart_images_name' => 'product-cart-10.webp',
                'product_categories' => 'mouse',
                'product_brand_id' => '2',
                'product_description' => 'The second rendition of Ducky Secret line. Now, boasting a DPI resolution of 5000.',
                'product_base_price' => '170.00',
                'product_status' => '1',
                'product_featured' => '0',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
                'product_name_short' => 'Redragon K556',
                'product_name_long' => 'Redragon Devarajas K556 Mechanical Keyboard',
                'product_cart_images_name' => 'product-cart-11.webp',
                'product_categories' => 'keyboard',
                'product_brand_id' => '3',
                'product_description' => 'The Redragon K556 RGB isn\'t your average gaming keyboard. Perfect for whatever battle you might face.',
                'product_base_price' => '270.00',
                'product_status' => '1',
                'product_featured' => '0',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
            [
                'product_name_short' => 'Redragon K552',
                'product_name_long' => 'Redragon Kumara K552 Mechanical Keyboard',
                'product_cart_images_name' => 'product-cart-12.webp',
                'product_categories' => 'keyboard',
                'product_brand_id' => '3',
                'product_description' => 'Redragon K552 KUMARA RED LED Backlit Mechanical Gaming Keyboard Compact 87-keys Space Saving Design, frees up workspace on your desk without sacrificing performance!',
                'product_base_price' => '150.00',
                'product_status' => '1',
                'product_featured' => '0',
                'product_stripe_id' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
            ],
        ]
        ); //
    }
}
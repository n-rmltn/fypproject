<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            [
            'product_id' => '1',
            'product_images_name' => 'product-page-1.webp',
            'product_images_priority' => '1',
            ],
            [
            'product_id' => '1',
            'product_images_name' => 'product-page-2.webp',
            'product_images_priority' => '2',
            ],
            [
            'product_id' => '1',
            'product_images_name' => 'product-page-3.webp',
            'product_images_priority' => '3',
            ],
            [
            'product_id' => '1',
            'product_images_name' => 'product-page-4.webp',
            'product_images_priority' => '4',
            ],
        ]);//
    }
}

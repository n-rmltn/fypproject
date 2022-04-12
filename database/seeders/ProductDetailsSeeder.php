<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_details')->insert([
            [
                'product_id' => '1',
                'product_details_header' => 'Battery Size',
                'product_details_content' => '4000 mAh',
            ],
            [
                'product_id' => '1',
                'product_details_header' => 'Bluetooth',
                'product_details_content' => 'Bluetooth 5.1. Up to 3 devices.',
            ],
            [
                'product_id' => '2',
                'product_details_header' => 'Battery Size',
                'product_details_content' => '4000 mAh',
            ],
            [
                'product_id' => '2',
                'product_details_header' => 'Bluetooth',
                'product_details_content' => 'Bluetooth 5.1. Up to 3 devices.',
            ],
            [
                'product_id' => '3',
                'product_details_header' => 'Battery Size',
                'product_details_content' => '4000 mAh',
            ],
            [
                'product_id' => '3',
                'product_details_header' => 'Bluetooth',
                'product_details_content' => 'Bluetooth 5.1. Up to 3 devices.',
            ],
            [
                'product_id' => '4',
                'product_details_header' => 'Battery Size',
                'product_details_content' => '4000 mAh',
            ],
            [
                'product_id' => '4',
                'product_details_header' => 'Bluetooth',
                'product_details_content' => 'Bluetooth 5.1. Up to 3 devices.',
            ],
            [
                'product_id' => '5',
                'product_details_header' => 'Battery Size',
                'product_details_content' => '4000 mAh',
            ],
            [
                'product_id' => '5',
                'product_details_header' => 'Bluetooth',
                'product_details_content' => 'Bluetooth 5.1. Up to 3 devices.',
            ],
        ]); //
    }
}

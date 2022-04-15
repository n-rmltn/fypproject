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
            [
                'product_id' => '6',
                'product_details_header' => 'Dimensions',
                'product_details_content' => '302 x 108 x 40 mm',
            ],
            [
                'product_id' => '6',
                'product_details_header' => 'Weight',
                'product_details_content' => '590 g',
            ],
            [
                'product_id' => '7',
                'product_details_header' => 'Dimensions',
                'product_details_content' => '365 x 135 x 40 mm',
            ],
            [
                'product_id' => '7',
                'product_details_header' => 'Weight',
                'product_details_content' => '950 g',
            ],
            [
                'product_id' => '8',
                'product_details_header' => 'Dimensions',
                'product_details_content' => '440 x 135 x 40 mm',
            ],
            [
                'product_id' => '8',
                'product_details_header' => 'Weight',
                'product_details_content' => '1,100 g',
            ],
            [
                'product_id' => '9',
                'product_details_header' => 'Dimensions',
                'product_details_content' => '124 x 59 x 36 mm',
            ],
            [
                'product_id' => '9',
                'product_details_header' => 'Weight',
                'product_details_content' => '65 g',
            ],
            [
                'product_id' => '10',
                'product_details_header' => 'Dimensions',
                'product_details_content' => '64.6 x 117.3 x 37 mm',
            ],
            [
                'product_id' => '10',
                'product_details_header' => 'Weight',
                'product_details_content' => '93.5 g',
            ],
            [
                'product_id' => '11',
                'product_details_header' => 'Dimensions',
                'product_details_content' => '440 x 124 x 40 mm',
            ],
            [
                'product_id' => '11',
                'product_details_header' => 'Weight',
                'product_details_content' => '590 g',
            ],
            [
                'product_id' => '12',
                'product_details_header' => 'Dimensions',
                'product_details_content' => '354 x 123 x 37 mm',
            ],
            [
                'product_id' => '12',
                'product_details_header' => 'Weight',
                'product_details_content' => '880 g',
            ],
        ]); //
    }
}

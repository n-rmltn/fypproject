<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOptionListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_option_list')->insert([

            [
                'product_option_id'=>'1',
                'product_option_list_name'=>'WHITE BACKLIGHT',
                'product_option_list_additional_price'=>'0',
            ],
            [
                'product_option_id'=>'1',
                'product_option_list_name'=>'RGB BACKLIGHT',
                'product_option_list_additional_price'=>'5.00',
            ],
            [
                'product_option_id'=>'1',
                'product_option_list_name'=>'RGB BACKLIGHT ALUMINUM FRAME',
                'product_option_list_additional_price'=>'10.00',
            ],
            [
                'product_option_id'=>'2',
                'product_option_list_name'=>'GATERON G PRO RED',
                'product_option_list_additional_price'=>'0',
            ],
            [
                'product_option_id'=>'2',
                'product_option_list_name'=>'GATERON G PRO BLUE',
                'product_option_list_additional_price'=>'0',
            ],
            [
                'product_option_id'=>'2',
                'product_option_list_name'=>'GATERON G PRO BROWN',
                'product_option_list_additional_price'=>'0',
            ]
        ]);
    }
}

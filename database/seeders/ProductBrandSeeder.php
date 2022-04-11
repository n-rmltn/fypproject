<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_brand')->insert([
            [
                'id' => '1',
                'product_brand_name' => 'Keychron',
            ],
            [
                'id' => '2',
                'product_brand_name' => 'Ducky',
            ],
            [
                'id' => '3',
                'product_brand_name' => 'Redragon',
            ],
            [
                'id' => '4',
                'product_brand_name' => 'Royal Kludge',
            ],
            [
                'id' => '5',
                'product_brand_name' => 'GMMK',
            ],
            [
                'id' => '6',
                'product_brand_name' => 'Leopold',
            ],
            [
                'id' => '7',
                'product_brand_name' => 'Corsair',
            ],
            [
                'id' => '8',
                'product_brand_name' => 'Coolermaster',
            ],
            [
                'id' => '9',
                'product_brand_name' => 'Razer',
            ],
            [
                'id' => '10',
                'product_brand_name' => 'Logitech',
            ],
            [
                'id' => '11',
                'product_brand_name' => 'HyperX',
            ],
            [
                'id' => '12',
                'product_brand_name' => 'SteelSeries',
            ],
            [
                'id' => '13',
                'product_brand_name' => 'ROG',
            ],
            [
                'id' => '14',
                'product_brand_name' => 'MSi',
            ],
            [
                'id' => '15',
                'product_brand_name' => 'Predator',
            ],
        ]); //
    }
}

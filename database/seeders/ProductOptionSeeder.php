<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_option')->insert([
            [
                'product_id' => '1',
                'product_option_name' => 'Version',
            ],
            [
                'product_id' => '1',
                'product_option_name' => 'Switches',
            ],
            [
                'product_id' => '2',
                'product_option_name' => 'Version',
            ],
            [
                'product_id' => '2',
                'product_option_name' => 'Switches',
            ],
            [
                'product_id' => '3',
                'product_option_name' => 'Version',
            ],
            [
                'product_id' => '3',
                'product_option_name' => 'Switches',
            ],
            [
                'product_id' => '4',
                'product_option_name' => 'Version',
            ],
            [
                'product_id' => '4',
                'product_option_name' => 'Switches',
            ],
            [
                'product_id' => '5',
                'product_option_name' => 'Version',
            ],
            [
                'product_id' => '5',
                'product_option_name' => 'Switches',
            ],
            [
                'product_id' => '6',
                'product_option_name' => 'Switches',
            ],
            [
                'product_id' => '7',
                'product_option_name' => 'Switches',
            ],
            [
                'product_id' => '8',
                'product_option_name' => 'Switches',
            ],
            [
                'product_id' => '9',
                'product_option_name' => 'Switches',
            ],
            [
                'product_id' => '11',
                'product_option_name' => 'Switches',
            ],
            [
                'product_id' => '12',
                'product_option_name' => 'Switches',
            ],
        ]);
    }
}

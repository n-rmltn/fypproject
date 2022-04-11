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
        ]);
    }
}

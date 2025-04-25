<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [];
        for ($i = 1; $i <= 100; $i++) {
            $products[] = ['name' => 'Sản phẩm ' . $i];
        }

        DB::table('products')->insert($products);
    }
}

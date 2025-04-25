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
        $products = [
            ['name' => 'Bánh quy sữa'],
            ['name' => 'Kẹo socola đen'],
            ['name' => 'Bánh mì sandwich'],
            ['name' => 'Kẹo dẻo trái cây'],
            ['name' => 'Bánh ngọt kem tươi'],
            ['name' => 'Snack khoai tây chiên'],
            ['name' => 'Kẹo mút vị dâu'],
            ['name' => 'Bánh bông lan trứng muối'],
            ['name' => 'Kẹo bạc hà the mát'],
            ['name' => 'Bánh su kem nhân kem'],
            ['name' => 'Bánh quy bơ'],
            ['name' => 'Kẹo socola sữa'],
            ['name' => 'Bánh mì que'],
            ['name' => 'Kẹo dẻo vị chanh'],
            ['name' => 'Bánh ngọt socola'],
            ['name' => 'Snack ngô rang bơ'],
            ['name' => 'Kẹo mút vị cam'],
            ['name' => 'Bánh bông lan trà xanh'],
            ['name' => 'Kẹo bạc hà lạnh'],
            ['name' => 'Bánh su kem socola'],
        ];

        DB::table('products')->truncate();
        DB::table('products')->insert($products);
    }
}
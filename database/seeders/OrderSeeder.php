<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = range(1, 100);

        $users = User::all();

        foreach ($users as $index => $user) {
            $productId = $products[$index % count($products)];

            Order::create([
                'order_code' => 'ORDER-' . strtoupper(uniqid()),
                'user_id' => $user->id,
                'product_id' => $productId,
            ]);
        }
    }
}

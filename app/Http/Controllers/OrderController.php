<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Hiển thị danh sách đơn hàng của user theo id
     */
    public function userOrders($id)
    {
        $user = User::findOrFail($id);
        $orders = Order::with('product')->where('user_id', $id)->get();
        $allProducts = Product::all();

        // Chia danh sách sản phẩm thành các nhóm không trùng nhau cho mỗi đơn hàng
        foreach ($orders as $order) {
            $order->randomProducts = $allProducts->random(rand(1, 20));
        }

        return view('crud_user.orders', compact('user', 'orders'));
    }
}
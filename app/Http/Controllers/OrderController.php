<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        // Lấy tất cả đơn hàng của user
        $orders = \App\Models\Order::with('product')->where('user_id', $id)->get();

        return view('crud_user.orders', compact('user', 'orders'));
    }
}

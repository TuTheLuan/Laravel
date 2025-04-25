@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container mt-4">
            @foreach($orders as $order)
                <h3>Mã đơn hàng: <strong>{{ $order->order_code }}</strong></h3>
                <h5>Danh sách sản phẩm:</h5>
                <ul>
                    @foreach($order->randomProducts as $product)
                        <li>{{ $product->name }}</li>
                    @endforeach
                </ul>
                <hr>
            @endforeach
        </div>
    </main>
@endsection
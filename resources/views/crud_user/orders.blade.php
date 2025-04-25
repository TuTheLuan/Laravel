@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container mt-4">
            <h3 class="mb-4">Order : <strong>{{ $user->name }}</strong></h3>
            <table class="table table-bordered table-sm mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên sản phẩm</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $index => $order)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $order->order_code }}</td>
                            <td>{{ optional($order->product)->name ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection

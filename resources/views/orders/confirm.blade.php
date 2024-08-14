@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Confirmation</h1>
    <p>Please review your order details before confirming.</p>

    <h3>Order Summary</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>${{ number_format($item->price * $item->quantity, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p><strong>Total:</strong> ${{ number_format($total, 2) }}</p>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Confirm Order</button>
    </form>

    <a href="{{ route('cart.index') }}" class="btn btn-secondary">Modify Order</a>
</div>
@endsection

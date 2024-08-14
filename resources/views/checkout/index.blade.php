@extends('layouts.user')

@section('content')
<div class="container">
    <h2>Checkout</h2>

    @if(count($cartItems) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>${{ number_format($item['price'], 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h4>Total Amount: ${{ number_format($totalAmount, 2) }}</h4>

        <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <!-- Add user details like name, email, address, etc. -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <!-- Add a payment method section if needed -->
            <div class="mb-3">
                <label for="payment_method" class="form-label">Payment Method</label>
                <select class="form-control" id="payment_method" name="payment_method" required>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    @else
        <p>Your cart is empty. <a href="{{ route('shop.index') }}">Continue Shopping</a></p>
    @endif
</div>
@endsection

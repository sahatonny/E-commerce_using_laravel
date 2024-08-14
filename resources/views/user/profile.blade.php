<!-- resources/views/user/profile.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>User Profile</h1>
    <h3>{{ $user->name }}</h3>

    <h2>Orders</h2>
    @if($orders->isEmpty())
        <p>No orders found.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>Date</th>
                    <th>Total Amount</th>
                    <th>Items</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->order_number }}</td>
                        <td>{{ $order->created_at->format('Y-m-d') }}</td>
                        <td>${{ number_format($order->total_amount, 2) }}</td>
                        <td>
                            <ul>
                                @foreach($order->items as $item)
                                    <li>{{ $item->product_name }} (x{{ $item->quantity }})</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

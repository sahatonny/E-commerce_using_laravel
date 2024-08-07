@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Cart</h1>
    @if ($cart->items)
        <ul>
            @foreach ($cart->items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>Your cart is empty.</p>
    @endif
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="text" name="item" placeholder="Add item">
        <button type="submit">Add to Cart</button>
    </form>
</div>
@endsection

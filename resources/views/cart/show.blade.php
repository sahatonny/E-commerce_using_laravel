 @extends('layouts.app')
@section('content')
<div class="container">
    <h1>Cart Details</h1>
    
    @if ($cart->items)
        <ul>
            @foreach ($cart->items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>Your cart is empty.</p>
    @endif

    <a href="{{ route('cart.index') }}" class="btn btn-secondary">Back to Cart</a>
</div>
@endsection

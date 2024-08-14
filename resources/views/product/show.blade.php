@extends('layouts.admin')
@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>${{ $product->price }}</p>

    <!-- resources/views/products/show.blade.php -->
<form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" name="quantity" value="1" min="1" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add to Cart</button>
</form>





@endsection

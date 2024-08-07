<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        // Get the authenticated user
        $user = auth()->user();

        // Check if the user has a cart, if not, create a new cart
        $cart = $user->cart ?? Cart::create(['user_id' => $user->id]);

        return view('cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        // Get the authenticated user
        $user = auth()->user();

        // Check if the user has a cart, if not, create a new cart
        $cart = $user->cart ?? Cart::create(['user_id' => $user->id]);

        // Get the current items in the cart, or initialize an empty array if null
        $items = $cart->items ?? [];
        
        // Add the new item to the cart
        $items[] = $request->input('item');

        // Update the cart with the new items
        $cart->update(['items' => $items]);

        return redirect()->route('cart.index');
    }

    public function update(Request $request)
    {
        // Get the authenticated user's cart
        $cart = auth()->user()->cart;

        // Update the cart items
        $cart->update(['items' => $request->input('items')]);

        return redirect()->route('cart.index');
    }

    public function show($id)
    {
        // Get the specific cart by ID
        $cart = Cart::findOrFail($id);

        return view('cart.show', compact('cart'));
    }
}


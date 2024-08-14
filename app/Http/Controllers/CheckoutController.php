<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // Retrieve cart items from session
        $cartItems = session('cart', []);

        // Calculate total amount
        $totalAmount = array_sum(array_column($cartItems, 'price'));

        return view('checkout.index', compact('cartItems', 'totalAmount'));
    }
}


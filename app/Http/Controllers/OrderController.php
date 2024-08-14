<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Display a listing of the user's orders
    public function index()
    {
        $orders = Auth::user()->orders()->paginate(10);

        return view('orders.index', compact('orders'));
    }



    // Display the specified order
    public function show($id)
    {
        $order = Order::with('items.product')->findOrFail($id);
        return view('orders.show', compact('order'));
    }

    // Display a confirmation page before placing an order
    public function confirm()
    {
        $cartItems = session()->get('cart', []);
        $total = array_reduce($cartItems, function ($carry, $item) {
            return $carry + $item['price'] * $item['quantity'];
        }, 0);

        return view('orders.confirm', compact('cartItems', 'total'));
    }
    public function create(){
        return view('orders.create');
    }

    // Store a newly created order in the database
    public function store(Request $request)
    {
        $cartItems = session()->get('cart', []);
        if (empty($cartItems)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $total = array_reduce($cartItems, function ($carry, $item) {
            return $carry + $item['price'] * $item['quantity'];
        }, 0);

        $order = Order::create([
            'user_id' => Auth::id(),
            'order_number' => strtoupper(uniqid('ORD-')),
            'status' => 'pending',
            'total' => $total,
        ]);

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }
        // Clear the cart after placing the order
        session()->forget('cart');

        return redirect()->route('orders.show', $order->id)->with('success', 'Order placed successfully.');
    }
}


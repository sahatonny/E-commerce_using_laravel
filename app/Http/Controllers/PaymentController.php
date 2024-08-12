<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'payment_method' => 'required|string',
        ]);
       //return redirect()->route('checkout')->with('success', 'Payment processed successfully.');
        return redirect()->route('payment.success')->with('success', 'Payment processed successfully!');
    }
    public function show()
    {
        return view('payment.process');
    }


    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'payment_method' => 'required|string',
            // Additional validation rules as needed
        ]);

        // Retrieve user ID
        $userId = Auth::id();

        // Create an order or handle payment logic here
        $order = Order::create([
            'user_id' => $userId,
            'amount' => $validated['amount'],
            'payment_method' => $validated['payment_method'],
            // Add other order details as needed
        ]);

        // Process payment logic here (e.g., integrate with a payment gateway)

        // Example response
        if ($order) {
            return redirect()->route('order.success')->with('success', 'Payment processed successfully.');
        } else {
            return redirect()->back()->with('error', 'Payment processing failed.');
        }
    }



}


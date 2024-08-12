<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show($id)
{
    $user = User::findOrFail($id);
    
    if (auth()->id() !== $user->id) {
        abort(403, 'Unauthorized action.');
    }

    $orders = $user->orders()->with('items')->get();
    return view('user.profile', compact('user', 'orders'));
}


}

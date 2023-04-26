<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = factory(\App\Order::class)->create();


        return redirect()->route('home')->with('status', 'Order Placed!');
    }
}

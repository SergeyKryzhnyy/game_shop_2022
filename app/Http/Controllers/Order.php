<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order extends Controller
{
    public function getMyOrders(Request $request)
    {
        return view('orders');
    }
}

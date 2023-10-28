<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function cart()
    {
        return view('Client.modules.cart');
    }
}

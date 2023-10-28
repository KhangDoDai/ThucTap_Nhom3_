<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function products()
    {


        return view('Client.Modules.products');
    }

}

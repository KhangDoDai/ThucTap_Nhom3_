<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function trangchu()
    {
        return view('client.components.body');
    }

    public function index()
    {
        return view('Client.index');
    }
}

<?php

namespace App\Http\Controllers\Client\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function Pay()
    {
        return view('client.Page.Pay');
    }
}

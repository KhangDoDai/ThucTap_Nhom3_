<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    function login()
    {
        return view('client.account.login');
    }
}

<?php

namespace App\Http\Controllers\Client\Sidebar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountinfoController extends Controller
{
    public function Info()
    {
        return view('client.sidebar.account-info');
    }
}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ChangePasswordContronller extends Controller
{
    public function changepassword()
    {
        return view('Client.modules.changepassword');
    }
}

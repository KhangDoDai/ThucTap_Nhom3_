<?php

namespace App\Http\Controllers\Client\Sidebar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notify()
    {
        return view('client.sidebar.notification');
    }
}

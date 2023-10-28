<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function Comment()
    {
        return view('Client.modules.comment');
    }
}

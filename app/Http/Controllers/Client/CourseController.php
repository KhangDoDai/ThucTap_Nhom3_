<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function course()
    {
        return view('Client.modules.course');
    }
}

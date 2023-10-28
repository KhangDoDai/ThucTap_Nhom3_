<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data = DB::table('users')
            ->select('name', 'email')
            ->get();

        return view('admin.statistical.statistical',compact('data'));
    }
}


<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        $data['nav'] = 'dashboard';
        $data['sub_nav'] = '';
        $data['page_title'] = "Dashboard";
        return view('admin.dashboard.index', $data);
    }
}

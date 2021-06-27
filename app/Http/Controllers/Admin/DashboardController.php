<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{   
  
    //show index
    public function index()
    {
        return view('pages.admin-staff-payroll.dashboard');
    }
}

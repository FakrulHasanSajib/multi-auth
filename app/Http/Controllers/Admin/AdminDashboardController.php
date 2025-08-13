<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Logic for the admin dashboard can be added here
        return view('admin.dashboard'); // Ensure you have a view file at resources/views/admin/dashboard.blade.php
    }
}

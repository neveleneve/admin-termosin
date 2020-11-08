<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function itemlist()
    {
        return view('admin.item');
    }
}

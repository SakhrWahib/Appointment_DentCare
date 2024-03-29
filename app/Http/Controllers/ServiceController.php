<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDasboardController extends Controller
{
    public function index()
    {
        return view('admindashboard');
    }
}

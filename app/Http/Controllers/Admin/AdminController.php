<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function dashboard()
    {

        //return response()->json($data);
        return view('admin.dashboard');
    }
}
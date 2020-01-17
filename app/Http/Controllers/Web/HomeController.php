<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        return view('web.home')->with($data);
    }


    public function products()
    {
        $data = [
            'products' => Product::with('product_category')->get()
        ];

        return view('web.products')->with($data);
    }
}
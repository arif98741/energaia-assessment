<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Supply;
use App\Models\Supplier;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = [
            'products' => Supply::with('admins')->get()
        ];
        return $data['products'];
        return view('admin.dashboard');
    }

    public function received_products()
    {

        $data = [
            'products' => Product::with('product_category')->get()
        ];
        return view('admin.product.received_products')->with($data);
    }
}
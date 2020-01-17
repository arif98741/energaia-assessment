<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Supply;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Auth;

class SupplierController extends Controller
{
    public function dashboard()
    {
        $data = [
            'products' => $orders  =  DB::table('supplies')
                ->join('admins', 'supplies.admin_id', '=', 'admins.id')
                ->join('products', 'products.id', '=', 'supplies.product_id')
                ->join('suppliers', 'suppliers.id', '=', 'products.supplier_id')
                ->where('supplies.admin_id', Auth::guard('admin')->user()->id)
                ->get()
        ];

        return view('admin.dashboard')->with($data);
    }

    public function received_products()
    {


        $data = [
            'products' => $orders  =  DB::table('supplies')
                ->join('admins', 'supplies.admin_id', '=', 'admins.id')
                ->join('products', 'products.id', '=', 'supplies.product_id')
                ->where('orders.id', $id)
                ->get()->toArray()
        ];

        return $data['products'];

        return view('admin.product.received_products')->with($data);
    }
}
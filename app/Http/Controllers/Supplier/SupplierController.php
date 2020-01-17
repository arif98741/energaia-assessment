<?php

namespace App\Http\Controllers\Supplier;

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
                ->select('supplies.amount', 'supplies.created_at', 'products.unit', 'admins.name', 'products.title as title', 'products.price', 'products.descriptions')
                ->join('admins', 'supplies.admin_id', '=', 'admins.id')
                ->join('products', 'products.id', '=', 'supplies.product_id')
                ->join('suppliers', 'suppliers.id', '=', 'products.supplier_id')
                //->where('suppliers.id', Auth::guard('supplier')->user()->id)
                ->get(),
            'supplier' => Auth::guard('supplier')->user()
        ];
        // return $data['products'];
        return view('supplier.dashboard')->with($data);
    }

    public function add_product()
    {

        $data = [
            'categories' => $orders  = ProductCategory::orderBy('name', 'desc')
        ];
        return view('supplier.product.add_product')->with($data);
    }


    public function save_product()
    {
    }


    public function product_list()
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
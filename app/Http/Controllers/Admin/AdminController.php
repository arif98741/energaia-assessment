<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Auth;

class AdminController extends Controller
{
    //admin dashboard
    public function dashboard()
    {
        $data = [
            'products' => $orders  =  DB::table('supplies')
                ->select('supplies.amount', 'supplies.created_at', 'products.unit', 'suppliers.name', 'products.title as title', 'products.price', 'products.descriptions')
                ->join('admins', 'supplies.admin_id', '=', 'admins.id')
                ->join('products', 'products.id', '=', 'supplies.product_id')
                ->join('suppliers', 'suppliers.id', '=', 'products.supplier_id')
                ->where('supplies.admin_id', Auth::guard('admin')->user()->id)
                ->get()
        ];

        return view('admin.dashboard')->with($data);
    }

    //recieved supplied products from supplier
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
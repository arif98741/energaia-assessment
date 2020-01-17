<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Supply;
use Illuminate\Support\Facades\DB;
use Auth;

class SupplierController extends Controller
{
    /**
     * Supplier Dashboard
     */
    public function dashboard()
    {
        $data = [
            'products' => $orders  =  DB::table('supplies')
                ->select('supplies.amount', 'supplies.created_at', 'products.unit', 'admins.name', 'products.title as title', 'products.price', 'products.descriptions')
                ->join('admins', 'supplies.admin_id', '=', 'admins.id')
                ->join('products', 'products.id', '=', 'supplies.product_id')
                ->join('suppliers', 'suppliers.id', '=', 'products.supplier_id')
                ->where('suppliers.id', Auth::guard('supplier')->user()->id)
                ->get(),
            'supplier' => Auth::guard('supplier')->user()
        ];
        return view('supplier.dashboard')->with($data);
    }

    /**
     * Add Product
     * return @view
     */
    public function add_product()
    {
        $data = [
            'categories' => $orders  = ProductCategory::orderBy('name', 'desc')->get()
        ];

        return view('supplier.product.add_product')->with($data);
    }

    /**
     * Supplier Dashboard
     * return @view
     */
    public function save_product(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->supplier_id = Auth::guard('supplier')->user()->id;
        $product->product_category_id = $request->product_category_id;
        $product->price = $request->price;
        $product->unit = $request->unit;
        $product->descriptions = $request->descriptions;
        $product->save();
        return redirect('supplier/product-list');
    }

    /**
     * Product List
     * return @view
     */
    public function product_list()
    {
        $data = [
            'products' => Product::with(['product_category'])->where('supplier_id', Auth::guard('supplier')->user()->id)->get()
        ];
        return view('supplier.product.product_list')->with($data);
    }


    /**
     * Supply
     * return @view
     * handle @request
     */
    public function supply(Request $request)
    {
        $data = [
            'products' =>  Product::orderBy('title', 'asc')->where('supplier_id', Auth::guard('supplier')->user()->id)->get(),
            'companies' => Admin::orderBy('name', 'asc')->get(),
        ];

        if ($request->isMethod('post')) {
            $supply = new Supply;
            $supply->product_id = $request->product_id;
            $supply->admin_id = $request->admin_id;
            $supply->amount = $request->amount;
            $supply->descriptions = $request->descriptions;
            $supply->save();
            return redirect('supplier/dashboard');
        }

        return view('supplier.supply.add_supply')->with($data);
    }
}
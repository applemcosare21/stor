<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $product = Product::orderBy('id')->get();

        return view('product.index', ['products' => $product]);
    }


    public function create() {
        $orders = Order::list();
        return view('product.create', ['orders' => $orders]);
    }
    //

    public function store(Request $request) {

        $request->validate([
            'order_id' => 'required|numeric',
            'product_name' => 'required',
            'product_brand' => 'required'
        ]);

        Product::create([
            'order_id' => $request->order_id,
            'product_name' => $request->product_name,
            'product_brand' => $request->product_brand
        ]);

        return redirect('/products')->with('message', ' purchase successfully');

    }
    //

    public function edit(Product $product) {

        return view('product.edit',compact('product'));
    }

    public function update(Product $product, Request $request) {

        $request->validate([
            'product_name' => 'required',
            'product_brand'  => 'required'
        ]);

        $product->update($request->all());
        return redirect('/products')->with('message', " $product->product_name has been updated successfully");
    }


    public function delete(Product $product)
    {
        $product->delete();

        return redirect('/products')->with('message', " $product->product_name has been deleted successfully");
    }
}

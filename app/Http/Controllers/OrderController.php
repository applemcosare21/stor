<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::orderBy('id')->get();

        return view('order.index', ['orders' => $order]);
    }

    public function create() {
        $users = User::list();
        return view('order.create', ['users' => $users]);
    }
    //
    public function store(Request $request) {

        $request->validate([
            'user_id' => 'required|numeric',
            'order_price' => 'required',
            'order_date' => 'required'
        ]);

        Order::create([
            'user_id' => $request->user_id,
            'order_price' => $request->order_price,
            'order_date' => $request->order_date
        ]);

        return redirect('/orders')->with('message', 'A new order is transacted');

    }
    //

    public function edit(Order $order) {

        return view('order.edit',compact('order'));
    }

    public function update(Order $order, Request $request) {

        $request->validate([
            'order_price' => 'required',
            'order_date'  => 'required'
        ]);

        $order->update($request->all());
        return redirect('/orders')->with('message', " $order->order_price has been updated successfully");
    }


    public function delete(Order $order)
    {
        $order->delete();

        return redirect('/orders')->with('message', " $order->order_price has been deleted successfully");
    }
}

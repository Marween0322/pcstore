<?php

namespace App\Http\Controllers;

use App\Models\Order; // Import the Order model
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('orders.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $order = new Order();
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->save();

        return redirect()->route('orders.index');
    }

    // Display the specified resource
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->save();

        return redirect()->route('orders.index');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index');
    }
}

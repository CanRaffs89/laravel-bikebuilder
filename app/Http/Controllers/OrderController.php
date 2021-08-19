<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::latest()->get();
        return view('orders.index', ['orders' => $orders]);
    }

    public function show($id) {
        $order = Order::findOrFail($id);
        return view('orders.show', ['order' => $order]);
    }

    public function create() {
        return view('orders.create');
    }

    // public function store() {
    //     $order = new Order();
    //     $order->name = request('name');
    //     $order->email = request('email');
    //     $order->frame = request('frame');
    //     $order->wheels = request('wheels');
    //     $order->handlebars = request('handlebars');
    //     $order->save();
    //     return redirect('/')->with('success-msg', 'Thank you for your order!');
    // }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'frame' => 'required',
            'wheels' => 'required',
            'handlebars' => 'required'
        ]);

        Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'frame' => $request->frame,
            'wheels' => $request->wheels,
            'handlebars' => $request->handlebars
        ]);
        
        return redirect('/')->with('success-msg', 'Thank you for your order!');
    }

    public function destroy($id) {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect('/orders');
    }
}

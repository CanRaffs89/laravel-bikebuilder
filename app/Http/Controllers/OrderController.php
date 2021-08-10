<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        $bikes = Order::latest()->get();
        return view('bikes.index', ['bikes' => $bikes]);
    }

    public function show($id) {
        $order = Order::findOrFail($id);
        return view('bikes.show', ['order' => $order]);
    }

    public function create() {
        return view('bikes.create');
    }

    public function store() {
        $order = new Order();
        $order->name = request('name');
        $order->email = request('email');
        $order->frame = request('frame');
        $order->wheels = request('wheels');
        $order->handlebars = request('handlebars');
        $order->save();
        return redirect('/')->with('success-msg', 'Thank you for your order!');
    }
}

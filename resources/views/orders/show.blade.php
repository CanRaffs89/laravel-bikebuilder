@extends('layouts.app')
@section('title', 'Cycle Junction | Order Details')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        <div>
            <h1>Order for {{ $order->name }}</h1>
            <p>Frame is {{ $order->frame }}</p>
            <p>Wheels are {{ $order->wheels }}</p>
            <p>Handlebars are {{ $order->handlebars }}</p>
        </div>
        <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
        <a href="{{ route('orders.index') }}"><- Back to Orders</a>
    </div>
@endsection


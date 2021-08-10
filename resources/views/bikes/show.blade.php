@extends('layouts.layout')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        <div>
            <h1>Order for {{ $order->name }}</h1>
            <p>Frame is {{ $order->frame }}</p>
            <p>Wheels are {{ $order->wheels }}</p>
            <p>Handlebars are {{ $order->handlebars }}</p>
        </div>
        <a href="/orders"><- Back to Orders</a>
    </div>
@endsection


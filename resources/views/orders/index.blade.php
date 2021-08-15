@extends('layouts.app')
@section('title', 'Cycle Junction | View Orders')
@section('content')
    <div class="outer-container margin-auto">
        <div class="inner-container margin-auto flex flex-column">
            <h1 class="margin-auto">Bike Orders</h1>
            @foreach($orders as $order)
                <div>
                    <h4><a href="/orders/{{ $order->id }}">Order #{{ $order->id }} | {{ $order->name }}</a></h4>
                </div>
            @endforeach
        </div>
    </div>
@endsection


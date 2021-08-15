@extends('layouts.app')
@section('title', 'Cycle Junction | View Orders')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="pt-8 sm:justify-start sm:pt-0">
                <h1>Bike Orders</h1>
                @foreach($orders as $order)
                    <div>
                        <h4><a href="/orders/{{ $order->id }}">{{ $order->name }}</a></h4>
                    </div>
                @endforeach
            </div> 
        </div>
    </div>
@endsection


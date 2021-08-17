@extends('layouts.app')
@section('title', 'Cycle Junction | View Orders')
@section('content')
    <div class="outer-container margin-auto">
        <div class="inner-container margin-auto flex flex-column">
            <h2 class="margin-auto">Bike Orders</h2>
            <div class="accordion margin-top-10" id="ordersView">
                <!-- Generate an accordion card for each order -->
                @foreach($orders as $order)
                    <div class="card">
                        <div class="card-header" id="heading{{ $order->id }}">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $order->id }}" aria-expanded="true" aria-controls="collapse{{ $order->id }}">
                                    <h4 class="order-title">Order #{{ $order->id }} | {{ $order->name }}</h4>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapse{{ $order->id }}" aria-labelledby="heading{{ $order->id }}" data-parent="#ordersView">
                            <div class="card-body">
                                <p><img class="order-component-img" src="/img/frame_logo.png" alt=""> {{ $order->frame }} frame</p>
                                <p><img class="order-component-img" src="/img/wheel_logo.png" alt=""> {{ $order->wheels }} wheels</p>
                                <p><img class="order-component-img" src="/img/bars_logo.png" alt=""> {{ $order->handlebars }} handlebars</p>
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-info">Complete Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


@extends('layouts.app')
@section('title', 'Cycle Junction | Welcome')
@section('content')
    <div class="outer-container flex flex-column justify-center margin-auto">
        <div class="flex justify-evenly flex-column inner-container">
            <img src="/img/roundel_text.png" alt="" class="img-logo-text">
            <img src="/img/roundel_circle.png" alt="" class="img-logo-circle">
            <button class="btn btn-info btn-welcome"><a class="btn-light-text" href="{{ route('orders.create') }}">Create Order</a></button>
            <button class="btn btn-info btn-welcome"><a class="btn-light-text" href="{{ route('orders.index') }}">View Orders</a></button>
            <p class="message">{{ session('success-msg') }}</p>
        </div> 
    </div>
@endsection


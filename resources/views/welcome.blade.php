@extends('layouts.app')
@section('title', 'Cycle Junction | Welcome')
@section('content')
    <div class="outer-container flex flex-column margin-auto">
        <img src="/img/roundel_text.png" alt="" class="img-logo-text">
        <img src="/img/roundel_circle.png" alt="" class="img-logo-circle">
        <div class="flex justify-evenly flex-column btn-welcome-container">
            <button class="btn btn-info btn-welcome"><a class="btn-light-text" href="{{ route('orders.create') }}">Create Order</a></button>
            <button class="btn btn-info btn-welcome"><a class="btn-light-text" href="{{ route('orders.index') }}">View Orders</a></button>
            <p class="message margin-top-10">{{ session('success-msg') }}</p>
        </div> 
    </div>
@endsection


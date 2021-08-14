@extends('layouts.app')
@section('content')
    <div class="outer-container flex flex-column justify-center">
        <div class="flex justify-evenly flex-column inner-container">
            <img src="/img/logo.png" alt="" class="img-logo">
            <button class="btn btn-info btn-welcome"><a class="btn-welcome-text" href="{{ route('orders.create') }}">Create Order</a></button>
            <button class="btn btn-info btn-welcome"><a class="btn-welcome-text" href="{{ route('orders.index') }}">Staff Login</a></button>
            <p class="message">{{ session('success-msg') }}</p>
        </div> 
    </div>
@endsection


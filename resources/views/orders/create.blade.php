@extends('layouts.app')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0 flex-column">
        <h1>Create New Order</h1>
        <form action="/orders" method="POST" class="flex flex-column half-width">
            @csrf
            <div class="flex sm:justify-between">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="flex sm:justify-between">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="flex sm:justify-between">
                <label for="frame">Frame Type</label>
                <select name="frame" id="frame">
                    <option value="alloy">Alloy</option>
                    <option value="steel">Steel</option>
                    <option value="carbon">Carbon</option>
                </select>
            </div>
            <div class="flex sm:justify-between">
                <label for="wheels">Wheel Type</label>
                <select name="wheels" id="wheels">
                    <option value="skinny">Skinny</option>
                    <option value="fat">Fat</option>
                </select>
            </div>
            <div class="flex sm:justify-between">
                <label for="handlebars">Handlebars</label>
                <select name="handlebars" id="handlebars">
                    <option value="road">Road</option>
                    <option value="flat">Flat</option>
                </select>
            </div>
            <input type="submit" value="Order Bike">
        </form>
    </div>
@endsection


@extends('layouts.app')
@section('title', 'Cycle Junction | Create Order')
@section('content')
    <div class="outer-container flex flex-column margin-auto">
        <h2 class="margin-auto">Create New Order</h2>
        <form action="/orders" method="POST" class="flex flex-column inner-container margin-auto margin-top-10">
            @csrf
            <div class="flex form-input justify-between margin-top-10">
                <label for="name" class="input-label">Name</label>
                <input type="text" id="name" name="name" placeholder=" Your name" class="input-width">
            </div>
            <div class="flex form-input justify-between margin-top-10">
                <label for="email" class="input-label">Email</label>
                <input type="text" id="email" name="email" placeholder=" Your email address" class="input-width">
            </div>
            <div class="flex form-input justify-between margin-top-10">
                <label for="frame" class="input-label">Frame Type</label>
                <select name="frame" id="frame" class="input-width">
                    <option value="" disabled selected hidden>Please select...</option>
                    <option value="alloy">Alloy</option>
                    <option value="steel">Steel</option>
                    <option value="carbon">Carbon</option>
                </select>
            </div>
            <div class="flex form-input justify-between margin-top-10">
                <label for="wheels" class="input-label">Wheel Type</label>
                <select name="wheels" id="wheels" class="input-width">
                    <option value="" disabled selected hidden>Please select...</option>
                    <option value="skinny">Skinny</option>
                    <option value="fat">Fat</option>
                </select>
            </div>
            <div class="flex form-input justify-between margin-top-10">
                <label for="handlebars" class="input-label">Handlebars</label>
                <select name="handlebars" id="handlebars" class="input-width">
                    <option value="" disabled selected hidden>Please select...</option>
                    <option value="road">Road</option>
                    <option value="flat">Flat</option>
                </select>
            </div>
            <input type="submit" value="Order Bike" class="btn btn-info margin-top-30">
        </form>
    </div>
@endsection


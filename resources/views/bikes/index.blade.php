@extends('layouts.layout')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="pt-8 sm:justify-start sm:pt-0">
                <h1>Orders</h1>
                @foreach($bikes as $bike)
                    <div>
                        {{ $bike->name }}
                    </div>
                @endforeach
            </div> 
        </div>
    </div>
@endsection


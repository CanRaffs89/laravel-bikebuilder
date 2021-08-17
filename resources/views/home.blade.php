@extends('layouts.app')
@section('title', 'Cycle Junction | Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Welcome, {{ Auth::user()->name }}</h4>
                    <p><a href="/orders">View All Orders</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

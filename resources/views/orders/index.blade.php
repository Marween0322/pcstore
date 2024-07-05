@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Orders</h1>
    <a href="{{ route('orders.create') }}">Add New Order</a>
    <ul>
        @foreach($orders as $order)
            <li>{{ $order->product_id }} - {{ $order->quantity }}</li>
        @endforeach
    </ul>
</div>
@endsection

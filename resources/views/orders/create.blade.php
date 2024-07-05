@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Order</h1>
    <form method="POST" action="{{ route('orders.store') }}">
        @csrf
        <div>
            <label for="product_id">Product ID:</label>
            <input type="text" name="product_id" required>
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" required>
        </div>
        <button type="submit">Save</button>
    </form>
</div>
@endsection

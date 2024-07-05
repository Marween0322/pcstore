@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Product</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" required></textarea>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" name="price" required>
        </div>
        <div>
            <label for="stock">Stock:</label>
            <input type="text" name="stock" required>
        </div>
        <button type="submit">Save</button>
    </form>
</div>
@endsection

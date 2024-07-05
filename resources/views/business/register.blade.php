@extends('layouts.app')

@section('content')
<h1>Register Your Business</h1>
<form method="POST" action="{{ route('business.store') }}">
    @csrf
    <div>
        <label for="name">Business Name:</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="address">Address:</label>
        <input type="text" name="address" required>
    </div>
    <button type="submit">Register</button>
</form>
@endsection

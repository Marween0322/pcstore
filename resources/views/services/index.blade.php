@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Services</h1>
    <a href="{{ route('services.create') }}">Add New Service</a>
    <ul>
        @foreach($services as $service)
            <li>{{ $service->name }} - ${{ $service->price }}</li>
        @endforeach
    </ul>
</div>
@endsection

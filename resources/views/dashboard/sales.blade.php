@extends('layouts.app')

@section('content')
<h1>Sales Dashboard</h1>
<ul>
    @foreach($orders as $order)
        <li>{{ $order->id }} - {{ $order->product->name }} - ${{ $order->total }}</li>
    @endforeach
</ul>
@endsection

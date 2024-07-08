@extends('layouts.app')

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-grey dark:text-dark/50">
    <div class="relative min-h-screen flex selection:bg-[#FF2D20] selection:text-white">
        <!-- Sidebar -->
        <aside class="w-1/4 p-6 bg-white rounded-lg shadow-lg mr-6">
            <h2 class="text-xl font-semibold mb-4">Filter</h2>
            <form action="{{ route('processors') }}" method="GET">
                <!-- Filter form fields... -->
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Apply Filters</button>
            </form>
        </aside>

        <!-- Main Content -->
        <div class="w-3/4">
            <h1 class="text-3xl font-bold text-black dark:text-dark mb-6">Processors</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($processors as $processor)
                    <div class="bg-white p-4 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800">
                        <a href="{{ route('products.show', $processor['id']) }}">
                            <div class="relative">
                                <img src="{{ asset('storage/pictures/' . $processor['image']) }}" alt="{{ $processor['name'] }}" class="w-full h-32 object-cover rounded-t-lg">
                                <span class="absolute top-2 left-2 bg-yellow-300 text-yellow-900 px-2 py-1 rounded">SAVE ₱{{ number_format($processor['discount'], 2) }}</span>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-black dark:text-white">{{ $processor['name'] }}</h3>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Brand: {{ $processor['brand'] }}</p>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 line-through">₱{{ number_format($processor['original_price'], 2) }}</p>
                                <p class="mt-2 text-lg font-bold text-black dark:text-white">₱{{ number_format($processor['price'], 2) }}</p>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Rating:
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $processor['rating'])
                                            <span class="text-yellow-500">★</span>
                                        @else
                                            <span class="text-gray-300">★</span>
                                        @endif
                                    @endfor
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

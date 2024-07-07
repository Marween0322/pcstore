@extends('layouts.app')

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-grey dark:text-dark/50">
    <div class="relative min-h-screen flex selection:bg-[#FF2D20] selection:text-white">
        <!-- Sidebar -->
        <aside class="w-1/4 p-6 bg-white rounded-lg shadow-lg mr-6">
            <h2 class="text-xl font-semibold mb-4">Filter</h2>
            <form action="{{ route('processors') }}" method="GET">
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Price, ₱</h3>
                    <input type="number" name="min_price" placeholder="Min" class="w-full mb-2 p-2 border rounded" value="{{ request('min_price') }}">
                    <input type="number" name="max_price" placeholder="Max" class="w-full mb-2 p-2 border rounded" value="{{ request('max_price') }}">
                </div>
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Availability</h3>
                    <label class="block mb-2">
                        <input type="checkbox" name="availability" value="in_stock" {{ request('availability') == 'in_stock' ? 'checked' : '' }}> In Stock (50)
                    </label>
                </div>
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Brand</h3>
                    <label class="block mb-2">
                        <input type="checkbox" name="brand[]" value="AMD" {{ in_array('AMD', (array)request('brand', [])) ? 'checked' : '' }}> AMD (79)
                    </label>
                    <label class="block mb-2">
                        <input type="checkbox" name="brand[]" value="EasyPC" {{ in_array('EasyPC', (array)request('brand', [])) ? 'checked' : '' }}> EasyPC (1)
                    </label>
                    <label class="block mb-2">
                        <input type="checkbox" name="brand[]" value="INTEL" {{ in_array('INTEL', (array)request('brand', [])) ? 'checked' : '' }}> INTEL (81)
                    </label>
                </div>
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Discount</h3>
                    @foreach([10, 20, 30, 40, 50, 60, 70, 0] as $discount)
                        <label class="block mb-2">
                            <input type="checkbox" name="discount[]" value="{{ $discount }}" {{ in_array($discount, (array)request('discount', [])) ? 'checked' : '' }}> {{ $discount }}% ({{ rand(1, 100) }})
                        </label>
                    @endforeach
                </div>
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Rating</h3>
                    @foreach(range(5, 1) as $rating)
                        <label class="block mb-2">
                            <input type="checkbox" name="rating[]" value="{{ $rating }}" {{ in_array($rating, (array)request('rating', [])) ? 'checked' : '' }}> 
                            @for($i = 0; $i < $rating; $i++) <span class="text-yellow-500">★</span> @endfor ({{ rand(1, 100) }})
                        </label>
                    @endforeach
                    <label class="block mb-2">
                        <input type="checkbox" name="rating[]" value="0" {{ in_array('0', (array)request('rating', [])) ? 'checked' : '' }}> No reviews (124)
                    </label>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Apply Filters</button>
            </form>
        </aside>
        
        <!-- Main Content -->
        <div class="w-3/4">
            <h1 class="text-3xl font-bold text-black dark:text-dark mb-6">Processors</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($processors as $processor)
                    <div class="bg-white p-4 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800">
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
                            <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

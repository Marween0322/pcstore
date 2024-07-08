@extends('layouts.app')

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-grey dark:text-dark/50">
    <div class="relative min-h-screen flex selection:bg-[#FF2D20] selection:text-white p-6">
        <div class="w-full max-w-7xl mx-auto">
            <div class="flex flex-wrap">
                <!-- Product Image -->
                <div class="w-full lg:w-1/2 p-4">
                    <div class="bg-white p-4 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800">
                        <img src="{{ asset('storage/pictures/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-64 object-cover rounded-t-lg">
                    </div>
                </div>

                <!-- Product Details -->
                <div class="w-full lg:w-1/2 p-4">
                    <div class="bg-white p-4 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800">
                        <h3 class="text-3xl font-semibold text-black dark:text-white">{{ $product['name'] }}</h3>
                        <p class="mt-2 text-lg text-gray-500 dark:text-gray-400">Brand: {{ $product['brand'] }}</p>
                        <p class="mt-2 text-lg text-gray-500 dark:text-gray-400 line-through">₱{{ number_format($product['original_price'], 2) }}</p>
                        <p class="mt-2 text-2xl font-bold text-black dark:text-white">₱{{ number_format($product['price'], 2) }}</p>
                        <p class="mt-2 text-lg text-gray-500 dark:text-gray-400">Rating:
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $product['rating'])
                                    <span class="text-yellow-500">★</span>
                                @else
                                    <span class="text-gray-300">★</span>
                                @endif
                            @endfor
                        </p>
                        <p class="mt-4 text-lg text-black dark:text-white">{{ $product['description'] }}</p>
                        <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                        <button class="mt-4 ml-4 bg-gray-300 text-black px-4 py-2 rounded">Add to Wishlist</button>
                    </div>

                    <!-- Delivery Options -->
                    <div class="mt-6 bg-white p-4 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800">
                        <h4 class="text-xl font-semibold text-black dark:text-white mb-4">Delivery Options</h4>
                        <ul class="list-disc pl-5 text-gray-500 dark:text-gray-400">
                            <li>Nationwide Delivery</li>
                            <li>Free Standard Delivery within Metro Manila</li>
                            <li>Easy2get Delivery - As fast as 2 hours</li>
                            <li>Express Delivery - Delivery within 4 hours</li>
                            <li>Same Day Delivery - Order between 12:00AM to 12:00NN</li>
                            <li>Standard Delivery</li>
                        </ul>
                    </div>

                    <!-- Payment Options -->
                    <div class="mt-6 bg-white p-4 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800">
                        <h4 class="text-xl font-semibold text-white dark:text-white mb-4">Payment Options</h4>
                        <div class="grid grid-cols-3 gap-4">
                            <img src="https://via.placeholder.com/50x30?text=7-11" alt="7-11">
                            <img src="https://via.placeholder.com/50x30?text=GCredit" alt="GCredit">
                            <img src="https://via.placeholder.com/50x30?text=Cash" alt="Cash">
                            <img src="https://via.placeholder.com/50x30?text=Billease" alt="Billease">
                            <img src="https://via.placeholder.com/50x30?text=Grab" alt="Grab">
                            <img src="https://via.placeholder.com/50x30?text=Maya" alt="Maya">
                            <img src="https://via.placeholder.com/50x30?text=Visa" alt="Visa">
                            <img src="https://via.placeholder.com/50x30?text=Mastercard" alt="Mastercard">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

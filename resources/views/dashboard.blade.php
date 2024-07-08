@extends('layouts.app')

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-grey dark:text-white/50">
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-7xl px-6 lg:px-8">

            <!-- Banner Carousel -->
            <div id="banner-carousel" class="w-full bg-white rounded-lg overflow-hidden shadow-lg mb-6">
                <img src="{{ asset('storage/pictures/banner.png') }}" class="w-full" alt="Banner">
            </div>

            <!-- Category Navigation -->
            <div class="flex overflow-x-auto py-4 mb-6 space-x-4">
                <div class="flex-none w-1/3 p-2">
                    <a href="{{ route('processors') }}">
                        <div class="bg-white rounded-lg shadow p-4 text-center flex flex-col items-center justify-center h-60">
                            <div class="flex justify-center items-center h-full">
                                <img src="{{ asset('storage/pictures/processor.webp') }}" alt="Processor" class="max-w-full max-h-full object-contain">
                            </div>

                        </div>
                    </a>
                </div>
                <div class="flex-none w-1/3 p-2">
                    <a href="{{ route('motherboards') }}">
                        <div class="bg-white rounded-lg shadow p-4 text-center flex flex-col items-center justify-center h-60">
                            <div class="flex justify-center items-center h-full">
                                <img src="{{ asset('storage/pictures/motherboard.png') }}" alt="Motherboard" class="max-w-full max-h-full object-contain">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex-none w-1/3 p-2">
                    <a href="{{ route('graphic-cards') }}">
                        <div class="bg-white rounded-lg shadow p-4 text-center flex flex-col items-center justify-center h-60">
                            <div class="flex justify-center items-center h-full">
                                <img src="{{ asset('storage/pictures/graphic.png') }}" alt="Graphics Card" class="max-w-full max-h-full object-contain">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Products Grid -->
            <main class="mt-6">
                <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">

                    <!-- Desktops Section -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-black dark:text-dark-grey">Desktops</h2>
                            <a href="#" class="text-blue-500">See more</a>
                        </div>
                        <div class="flex justify-center">
                            <img src="{{ asset('storage/pictures/desktop.webp') }}" alt="Desktops" class="w-full h-48 object-cover rounded-lg mb-4">
                        </div>
                        @foreach($products->where('category', 'desktop') as $product)
                            <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800 mb-4">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-32 object-cover rounded-t-lg">
                                <h3 class="text-lg font-semibold text-black dark:text-white mt-4">{{ $product->name }}</h3>
                                <p class="mt-2 text-sm text-black dark:text-white">{{ $product->description }}</p>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">${{ $product->price }}</p>
                                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                            </div>
                        @endforeach
                    </div>

                    <!-- Laptops Section -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-black dark:text-dark-grey">Laptops</h2>
                            <a href="#" class="text-blue-500">See more</a>
                        </div>
                        <div class="flex justify-center">
                            <img src="{{ asset('storage/pictures/laptop.webp') }}" alt="Laptops" class="w-full h-48 object-cover rounded-lg mb-4">
                        </div>
                        @foreach($products->where('category', 'laptop') as $product)
                            <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800 mb-4">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-32 object-cover rounded-t-lg">
                                <h3 class="text-lg font-semibold text-black dark:text-white mt-4">{{ $product->name }}</h3>
                                <p class="mt-2 text-sm text-black dark:text-white">{{ $product->description }}</p>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">${{ $product->price }}</p>
                                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                            </div>
                        @endforeach
                    </div>

                    <!-- Deals Section -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md col-span-2">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-black dark:text-dark-grey">Deals</h2>
                            <a href="#" class="text-blue-500">See more</a>
                        </div>
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800 mb-4">
                                <div class="relative">
                                    <img src="{{ asset('storage/pictures/product1.jpg') }}" alt="Product 1" class="w-full h-32 object-cover rounded-t-lg">
                                    <span class="absolute top-2 left-2 bg-yellow-300 text-yellow-900 px-2 py-1 rounded">SAVE ₱1,122.00</span>
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-black dark:text-white">Team Elite Vulcan TUF 16GB</h3>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">TEAM ELITE</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 line-through">₱3,652.00</p>
                                    <p class="mt-2 text-lg font-bold text-black dark:text-white">₱2,530.00</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Rating:
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span> (4.9)
                                    </p>
                                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800 mb-4">
                                <div class="relative">
                                    <img src="{{ asset('storage/pictures/product2.jpg') }}" alt="Product 2" class="w-full h-32 object-cover rounded-t-lg">
                                    <span class="absolute top-2 left-2 bg-yellow-300 text-yellow-900 px-2 py-1 rounded">SAVE ₱704.00</span>
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-black dark:text-white">Kingston Fury Beast 8GB</h3>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">KINGSTON</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 line-through">₱2,050.00</p>
                                    <p class="mt-2 text-lg font-bold text-black dark:text-white">₱1,346.00</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Rating:
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span> (4.7)
                                    </p>
                                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800 mb-4">
                                <div class="relative">
                                    <img src="{{ asset('storage/pictures/product3.jpg') }}" alt="Product 3" class="w-full h-32 object-cover rounded-t-lg">
                                    <span class="absolute top-2 left-2 bg-yellow-300 text-yellow-900 px-2 py-1 rounded">SAVE ₱556.00</span>
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-black dark:text-white">Team Elite Plus 8GB</h3>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">TEAM ELITE</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 line-through">₱1,749.00</p>
                                    <p class="mt-2 text-lg font-bold text-black dark:text-white">₱1,163.00</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Rating:
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span> (4.5)
                                    </p>
                                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800 mb-4">
                                <div class="relative">
                                    <img src="{{ asset('storage/pictures/product4.jpg') }}" alt="Product 4" class="w-full h-32 object-cover rounded-t-lg">
                                    <span class="absolute top-2 left-2 bg-yellow-300 text-yellow-900 px-2 py-1 rounded">SAVE ₱1,366.00</span>
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-black dark:text-white">G.Skill Ripjaws V 16GB</h3>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">GSKILL</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 line-through">₱3,844.00</p>
                                    <p class="mt-2 text-lg font-bold text-black dark:text-white">₱2,478.00</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Rating:
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span> (4.9)
                                    </p>
                                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800 mb-4">
                                <div class="relative">
                                    <img src="{{ asset('storage/pictures/product5.jpg') }}" alt="Product 5" class="w-full h-32 object-cover rounded-t-lg">
                                    <span class="absolute top-2 left-2 bg-yellow-300 text-yellow-900 px-2 py-1 rounded">SAVE ₱3,645.00</span>
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-black dark:text-white">AMD Ryzen 3 3200G</h3>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">AMD</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 line-through">₱8,195.00</p>
                                    <p class="mt-2 text-lg font-bold text-black dark:text-white">₱4,550.00</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Rating:
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span> (4.8)
                                    </p>
                                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800 mb-4">
                                <div class="relative">
                                    <img src="{{ asset('storage/pictures/product6.jpg') }}" alt="Product 6" class="w-full h-32 object-cover rounded-t-lg">
                                    <span class="absolute top-2 left-2 bg-yellow-300 text-yellow-900 px-2 py-1 rounded">SAVE ₱548.00</span>
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-black dark:text-white">Team Elite 8GB</h3>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">TEAM ELITE</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 line-through">₱1,687.00</p>
                                    <p class="mt-2 text-lg font-bold text-black dark:text-white">₱1,139.00</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Rating:
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span>
                                        <span class="text-yellow-500">★</span> (4.9)
                                    </p>
                                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                <!-- Footer content -->
            </footer>
        </div>
    </div>
</div>
@endsection

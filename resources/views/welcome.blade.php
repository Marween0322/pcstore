@extends('layouts.app')

@section('content')
<div class="bg-gray-50 text-black/50 dark:grey dark:text-white/50">
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-7xl px-6 lg:px-8">

            <!-- Banner Carousel -->
            <div id="banner-carousel" class="w-full bg-white rounded-lg overflow-hidden shadow-lg mb-6">
                <img src="/path/to/your/banner/image.jpg" class="w-full" alt="Banner">
            </div>

            <!-- Category Navigation -->
            <div class="flex overflow-x-auto py-4 mb-6 space-x-4">
                <div class="flex-none w-1/5 p-2">
                    <div class="bg-white rounded-lg shadow p-4 text-center">
                        <p>Processor</p>
                    </div>
                </div>
                <div class="flex-none w-1/5 p-2">
                    <div class="bg-white rounded-lg shadow p-4 text-center">
                        <p>Motherboard</p>
                    </div>
                </div>
                <!-- Add more categories similarly -->
            </div>

            <!-- Products Grid -->
            <main class="mt-6">
                <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">

                    <!-- Desktops Section -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-black dark:text-white">Desktops</h2>
                            <a href="#" class="text-blue-500">See more</a>
                        </div>
                        @foreach($products->where('category', 'desktop') as $product)
                            <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800 mb-4">
                                <h3 class="text-lg font-semibold text-black dark:text-white">{{ $product->name }}</h3>
                                <p class="mt-2 text-sm text-black dark:text-white">{{ $product->description }}</p>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">${{ $product->price }}</p>
                                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                            </div>
                        @endforeach
                    </div>

                    <!-- Laptops Section -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-black dark:text-white">Laptops</h2>
                            <a href="#" class="text-blue-500">See more</a>
                        </div>
                        @foreach($products->where('category', 'laptop') as $product)
                            <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800 mb-4">
                                <h3 class="text-lg font-semibold text-black dark:text-white">{{ $product->name }}</h3>
                                <p class="mt-2 text-sm text-black dark:text-white">{{ $product->description }}</p>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">${{ $product->price }}</p>
                                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                            </div>
                        @endforeach
                    </div>

                    <!-- Deals Section -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md col-span-2">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-black dark:text-white">Deals</h2>
                            <a href="#" class="text-blue-500">See more</a>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach($products->where('category', 'deal') as $product)
                                <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-zinc-900 dark:ring-zinc-800 mb-4">
                                    <h3 class="text-lg font-semibold text-black dark:text-white">{{ $product->name }}</h3>
                                    <p class="mt-2 text-sm text-black dark:text-white">{{ $product->description }}</p>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">${{ $product->price }}</p>
                                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </main>

            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
               
            </footer>
        </div>
    </div>
</div>
@endsection

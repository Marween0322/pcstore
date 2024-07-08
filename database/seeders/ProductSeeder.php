<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'AMD Ryzen 5 5600G',
            'slug' => Str::slug('AMD Ryzen 5 5600G'),
            'description' => 'A great processor for gaming.',
            'price' => 9500,
            'brand' => 'AMD',
            'category' => 'processor',
            'image' => 'ryzen5_5600g.jpg',
            'rating' => 5,
            'discount' => 2350,
            'original_price' => 11850
        ]);
        // Add more products
    }
}

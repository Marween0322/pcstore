<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $deals = $this->getFakeDealsData();
        return view('dashboard', compact('products', 'deals'));
    }

    public function processors(Request $request)
    {
        $processors = $this->getFakeProcessorsData();
        $processors = $this->applyFilters($request, $processors);
        return view('products.processors', compact('processors'));
    }

    public function motherboards(Request $request)
    {
        $motherboards = $this->getFakeMotherboardsData();
        $motherboards = $this->applyFilters($request, $motherboards);
        return view('products.motherboards', compact('motherboards'));
    }

    public function graphicCards(Request $request)
    {
        $graphicCards = $this->getFakeGraphicCardsData();
        $graphicCards = $this->applyFilters($request, $graphicCards);
        return view('products.graphic-cards', compact('graphicCards'));
    }

    private function getFakeProcessorsData()
    {
        return [
            ['name' => 'AMD Ryzen 5 5600G', 'price' => 6950, 'original_price' => 9800, 'brand' => 'AMD', 'discount' => 2850, 'rating' => 5, 'image' => 'processor1.jpg'],
            ['name' => 'AMD Ryzen 5 5600', 'price' => 5995, 'original_price' => 11000, 'brand' => 'AMD', 'discount' => 5005, 'rating' => 4, 'image' => 'processor2.jpg'],
            ['name' => 'AMD Ryzen 7 5700G', 'price' => 9550, 'original_price' => 10120, 'brand' => 'AMD', 'discount' => 570, 'rating' => 3, 'image' => 'processor3.jpg'],
            ['name' => 'AMD Ryzen 7 5700X', 'price' => 8650, 'original_price' => 9975, 'brand' => 'AMD', 'discount' => 1325, 'rating' => 2, 'image' => 'processor4.jpg'],
            ['name' => 'Intel Core i9-11900K', 'price' => 18500, 'original_price' => 20000, 'brand' => 'INTEL', 'discount' => 1500, 'rating' => 1, 'image' => 'processor5.jpg'],
            ['name' => 'Intel Core i7-11700K', 'price' => 14500, 'original_price' => 16000, 'brand' => 'INTEL', 'discount' => 1500, 'rating' => 4, 'image' => 'processor6.jpg'],
            ['name' => 'Intel Core i5-11600K', 'price' => 10500, 'original_price' => 12000, 'brand' => 'INTEL', 'discount' => 1500, 'rating' => 5, 'image' => 'processor7.jpg'],
            ['name' => 'Intel Core i3-10100F', 'price' => 5500, 'original_price' => 6000, 'brand' => 'INTEL', 'discount' => 500, 'rating' => 2, 'image' => 'processor8.jpg'],
            ['name' => 'AMD Ryzen 9 5950X', 'price' => 29950, 'original_price' => 31000, 'brand' => 'AMD', 'discount' => 1050, 'rating' => 1, 'image' => 'processor9.jpg'],
            ['name' => 'AMD Ryzen 9 5900X', 'price' => 25500, 'original_price' => 27000, 'brand' => 'AMD', 'discount' => 1500, 'rating' => 3, 'image' => 'processor10.jpg'],
            ['name' => 'Intel Core i9-10900K', 'price' => 20000, 'original_price' => 21500, 'brand' => 'INTEL', 'discount' => 1500, 'rating' => 5, 'image' => 'processor11.jpg'],
            ['name' => 'Intel Core i7-10700K', 'price' => 16000, 'original_price' => 17500, 'brand' => 'INTEL', 'discount' => 1500, 'rating' => 4, 'image' => 'processor12.jpg'],
        ];
    }

    private function getFakeMotherboardsData()
    {
        return [
            ['name' => 'ASUS ROG Strix Z590-E', 'price' => 22000, 'original_price' => 25000, 'brand' => 'ASUS', 'discount' => 3000, 'rating' => 5, 'image' => 'motherboard1.jpg'],
            ['name' => 'MSI MPG Z490 Gaming Edge', 'price' => 18000, 'original_price' => 20000, 'brand' => 'MSI', 'discount' => 2000, 'rating' => 4, 'image' => 'motherboard2.jpg'],
            ['name' => 'Gigabyte Z490 Aorus Elite', 'price' => 15000, 'original_price' => 17000, 'brand' => 'Gigabyte', 'discount' => 2000, 'rating' => 3, 'image' => 'motherboard3.jpg'],
            ['name' => 'ASUS TUF Gaming B550-PLUS', 'price' => 12500, 'original_price' => 14000, 'brand' => 'ASUS', 'discount' => 1500, 'rating' => 4, 'image' => 'motherboard4.jpg'],
            ['name' => 'MSI MAG B550 Tomahawk', 'price' => 13000, 'original_price' => 15000, 'brand' => 'MSI', 'discount' => 2000, 'rating' => 5, 'image' => 'motherboard5.jpg'],
            ['name' => 'Gigabyte B550M DS3H', 'price' => 8000, 'original_price' => 10000, 'brand' => 'Gigabyte', 'discount' => 2000, 'rating' => 3, 'image' => 'motherboard6.jpg'],
            ['name' => 'ASRock B450M Steel Legend', 'price' => 7000, 'original_price' => 9000, 'brand' => 'ASRock', 'discount' => 2000, 'rating' => 4, 'image' => 'motherboard7.jpg'],
            ['name' => 'ASUS Prime B450M-A', 'price' => 6500, 'original_price' => 8000, 'brand' => 'ASUS', 'discount' => 1500, 'rating' => 2, 'image' => 'motherboard8.jpg'],
            ['name' => 'MSI B450 TOMAHAWK MAX', 'price' => 9000, 'original_price' => 11000, 'brand' => 'MSI', 'discount' => 2000, 'rating' => 5, 'image' => 'motherboard9.jpg'],
            ['name' => 'Gigabyte X570 Aorus Elite', 'price' => 19000, 'original_price' => 22000, 'brand' => 'Gigabyte', 'discount' => 3000, 'rating' => 4, 'image' => 'motherboard10.jpg'],
            ['name' => 'ASUS ROG Strix B450-F', 'price' => 11000, 'original_price' => 13000, 'brand' => 'ASUS', 'discount' => 2000, 'rating' => 3, 'image' => 'motherboard11.jpg'],
            ['name' => 'MSI B450 GAMING PRO CARBON AC', 'price' => 15000, 'original_price' => 17000, 'brand' => 'MSI', 'discount' => 2000, 'rating' => 4, 'image' => 'motherboard12.jpg'],
        ];
    }

    private function getFakeGraphicCardsData()
    {
        return [
            ['name' => 'NVIDIA GeForce RTX 3090', 'price' => 150000, 'original_price' => 160000, 'brand' => 'NVIDIA', 'discount' => 10000, 'rating' => 5, 'image' => 'graphics1.jpg'],
            ['name' => 'AMD Radeon RX 6900 XT', 'price' => 140000, 'original_price' => 150000, 'brand' => 'AMD', 'discount' => 10000, 'rating' => 4, 'image' => 'graphics2.jpg'],
            ['name' => 'NVIDIA GeForce RTX 3080', 'price' => 130000, 'original_price' => 140000, 'brand' => 'NVIDIA', 'discount' => 10000, 'rating' => 3, 'image' => 'graphics3.jpg'],
            ['name' => 'AMD Radeon RX 6800 XT', 'price' => 120000, 'original_price' => 130000, 'brand' => 'AMD', 'discount' => 10000, 'rating' => 2, 'image' => 'graphics4.jpg'],
            ['name' => 'NVIDIA GeForce RTX 3070', 'price' => 110000, 'original_price' => 120000, 'brand' => 'NVIDIA', 'discount' => 10000, 'rating' => 1, 'image' => 'graphics5.jpg'],
            ['name' => 'AMD Radeon RX 6700 XT', 'price' => 100000, 'original_price' => 110000, 'brand' => 'AMD', 'discount' => 10000, 'rating' => 4, 'image' => 'graphics6.jpg'],
            ['name' => 'NVIDIA GeForce RTX 3060', 'price' => 90000, 'original_price' => 100000, 'brand' => 'NVIDIA', 'discount' => 10000, 'rating' => 5, 'image' => 'graphics7.jpg'],
            ['name' => 'AMD Radeon RX 6600 XT', 'price' => 80000, 'original_price' => 90000, 'brand' => 'AMD', 'discount' => 10000, 'rating' => 2, 'image' => 'graphics8.jpg'],
            ['name' => 'NVIDIA GeForce RTX 3050', 'price' => 70000, 'original_price' => 80000, 'brand' => 'NVIDIA', 'discount' => 10000, 'rating' => 3, 'image' => 'graphics9.jpg'],
            ['name' => 'AMD Radeon RX 6500 XT', 'price' => 60000, 'original_price' => 70000, 'brand' => 'AMD', 'discount' => 10000, 'rating' => 1, 'image' => 'graphics10.jpg'],
            ['name' => 'NVIDIA GeForce GTX 1660', 'price' => 50000, 'original_price' => 60000, 'brand' => 'NVIDIA', 'discount' => 10000, 'rating' => 5, 'image' => 'graphics11.jpg'],
            ['name' => 'AMD Radeon RX 6400', 'price' => 40000, 'original_price' => 50000, 'brand' => 'AMD', 'discount' => 10000, 'rating' => 4, 'image' => 'graphics12.jpg'],
        ];
    }

    private function getFakeDealsData()
    {
        return [
            ['name' => 'Team Elite Vulcan TUF 16GB', 'price' => 2530, 'original_price' => 3652, 'brand' => 'TEAM ELITE', 'discount' => 1122, 'rating' => 4.9, 'image' => 'product1.jpg'],
            ['name' => 'Kingston Fury Beast 8GB', 'price' => 1346, 'original_price' => 2050, 'brand' => 'KINGSTON', 'discount' => 704, 'rating' => 4.7, 'image' => 'product2.jpg'],
            ['name' => 'Team Elite Plus 8GB', 'price' => 1163, 'original_price' => 1749, 'brand' => 'TEAM ELITE', 'discount' => 556, 'rating' => 4.5, 'image' => 'product3.jpg'],
            ['name' => 'G.Skill Ripjaws V 16GB', 'price' => 2478, 'original_price' => 3844, 'brand' => 'GSKILL', 'discount' => 1366, 'rating' => 4.9, 'image' => 'product4.jpg'],
            ['name' => 'AMD Ryzen 3 3200G', 'price' => 4550, 'original_price' => 8195, 'brand' => 'AMD', 'discount' => 3645, 'rating' => 4.8, 'image' => 'product5.jpg'],
            ['name' => 'Team Elite 8GB', 'price' => 1139, 'original_price' => 1687, 'brand' => 'TEAM ELITE', 'discount' => 548, 'rating' => 4.9, 'image' => 'product6.jpg'],
        ];
    }

    private function applyFilters(Request $request, $products)
    {
        $min_price = $request->input('min_price');
        $max_price = $request->input('max_price');
        $brands = $request->input('brand', []);
        $discounts = $request->input('discount', []);
        $ratings = $request->input('rating', []);

        if ($min_price) {
            $products = array_filter($products, function ($product) use ($min_price) {
                return $product['price'] >= $min_price;
            });
        }

        if ($max_price) {
            $products = array_filter($products, function ($product) use ($max_price) {
                return $product['price'] <= $max_price;
            });
        }

        if (!empty($brands)) {
            $products = array_filter($products, function ($product) use ($brands) {
                return in_array($product['brand'], $brands);
            });
        }

        if (!empty($discounts)) {
            $products = array_filter($products, function ($product) use ($discounts) {
                $discount = round(($product['original_price'] - $product['price']) / $product['original_price'] * 100);
                return in_array($discount, $discounts);
            });
        }

        if (!empty($ratings)) {
            $products = array_filter($products, function ($product) use ($ratings) {
                return in_array($product['rating'], $ratings);
            });
        }

        return $products;
    }
}

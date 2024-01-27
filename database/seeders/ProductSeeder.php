<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    
    public function run(): void
    {
        Product::create([
            'name' => 'Luxurious Watch',
            'slug' => 'luxurious-watch',
            'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li> <li><i ckass="icofont-check"></i>',
            'image_name' => 'watch-3.png',
            'price' => 250.00,
            'sale_price' => 120.00,
        ]);

        Product::create([
            'name' => 'Luxurious Watch',
            'slug' => 'luxurious-watch',
            'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li> <li><i ckass="icofont-check"></i>',
            'image_name' => 'watch-3.png',
            'price' => 250.00,
            'sale_price' => 120.00,
        ]);

        Product::create([
            'name' => 'Pink Torex Watch',
            'slug' => 'pink-torex-watch',
            'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li> <li><i ckass="icofont-check"></i>',
            'image_name' => 'watch-3.png',
            'price' => 250.00,
            'sale_price' => 120.00,
        ]);
    }
}

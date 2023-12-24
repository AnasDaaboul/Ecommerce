<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Favourite;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\ValueOption;
use App\Models\Vendor;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(10)
        // ->for(Vendor::factory()->create())
        // ->for(Category::factory()->create())
        // ->has(ValueOption::factory()->count(2))
        // ->has(Review::factory()->count(6))
        ->has(Favourite::factory()->count(2))
        ->hasAttached(Order::factory()->count(2),[],'orders')
        ->hasAttached(Category::factory()->count(2), [], 'Categories')
        ->create();


        foreach (Product::all() as $product) {
            $url = 'https://picsum.photos/200/300';
            $product->addMediaFromUrl($url)->toMediaCollection("cover");
        }

    }
}

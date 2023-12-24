<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Like;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::factory()
        // ->for(Product::factory()->create())
        // ->for(Client::factory()->create())
        ->has(Like::factory()->count(5))
        // ->hasAttached(Review::factory()->count(10), [], 'reviews')
        ->count(50)->create();
    }
}

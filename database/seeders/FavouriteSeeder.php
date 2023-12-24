<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Favourite;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavouriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Favourite::factory()->count(4)
        ->for(Client::factory()->create())
        ->for(Product::factory()->create())->create();
    }
}

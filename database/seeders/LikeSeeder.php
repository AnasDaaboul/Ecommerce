<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Like;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Like::factory()->count(5)
        ->for(Client::factory()->create())
        ->for(Review::factory()->create())->create();
    }
}

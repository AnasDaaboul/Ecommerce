<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'likeable_id'=> Client::inRandomOrder()->first()?->id,
            'likeable_type' => str()->lower(str()->afterLast(Clinet::class, '\\')),
            "review_id"=>Review::inRandomOrder()->first()?->id,
        ];
    }
}

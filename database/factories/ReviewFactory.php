<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment' => fake()->sentence(),
            'rate'=> fake()->numberBetween(1,5),
            'client_id' => Client::inRandomOrder()->first()?->id,
            'reviewsable_id' => Product::inRandomOrder()->first()?->id,
            'reviewsable_type' => str()->lower(str()->afterLast(Product::class, '\\')),
        ];
    }
}

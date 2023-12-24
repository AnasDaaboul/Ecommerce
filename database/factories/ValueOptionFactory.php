<?php

namespace Database\Factories;

use App\Models\Option;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ValueOption>
 */
class ValueOptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // "name"=> fake()->name(),
            'en'=>[ "name"=> fake()->name(),],
            'ar'=>[ "name"=> fake()->name(),],
            'product_id' =>Product::inRandomOrder()->first()?->id,
            'option_id' =>Option::inRandomOrder()->first()?->id,
        ];
    }
}

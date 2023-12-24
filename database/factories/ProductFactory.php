<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'en'=>[
                'name' => fake()->word(),
            'description' => fake()->sentence(),
            'title'=>$this->faker->word(3,true),

        ],

            'ar'=>[
                'name' => fake()->word(),
            'description' => fake()->sentence(),
            'title'=>$this->faker->word(3,true),

        ],

            // 'name' => fake()->word(),
            // 'description' => fake()->sentence(),
            'price'=> fake()->numberBetween(10,1000),
            // 'title'=>$this->faker->word(3,true),
            // 'category_id' => Category::inRandomOrder()->first()?->id,
            'discount'=>$this->faker->randomElement([0 , 1]),
            'dis_amount'=>$this->faker->randomNumber(2),
            'vendor_id' => Vendor::inRandomOrder()->first()?->id,

        ];
    }
}

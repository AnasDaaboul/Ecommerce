<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Option>
 */
class OptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name'=>$this->faker->name(),
            'en'=>[ 'name'=>$this->faker->name(),],
            'ar'=>[ 'name'=>$this->faker->name(),],
            'category_id' =>Category::inRandomOrder()->first()?->id,
        ];
    }
}

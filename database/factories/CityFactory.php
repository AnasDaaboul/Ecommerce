<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        //     'name' => fake()->city(),
        //     'country_id' => Country::inRandomOrder()->first()?->id,
        // ];
            'country_id' => Country::inRandomOrder()->first()?->id,
            'en'=>
            ['name' => fake()->city(),],
            'ar'=>['name' => fake()->city()],
        ];
    }
}

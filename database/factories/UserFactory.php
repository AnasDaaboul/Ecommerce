<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\City;
use App\Models\Client;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

        // $userableType = $this->faker->randomElement([
        //     Client::class,
        //     Vendor::class,
        //     Admin::class,
        // ]);
        // $userable = $userableType::factory()->create();
        // return [

        //         'name' => $this->faker->name,
        //         'email' => $this->faker->unique()->safeEmail,
        //         'password' => Hash::make('password'),
        //         'phone' => $this->faker->phoneNumber,
        //         'city_id' => City::factory(),
        //         'userable_id' => $userable->id,
        //         'userable_type' => $userableType,
        //     ];


        //     // 'name' => fake()->name(),
        //     // 'email' => fake()->unique()->safeEmail(),
        //     // 'password' => fake()->password(),
        //     // 'phone' => fake()->phoneNumber(),
        //     // 'city_id'=>City::inRandomOrder()->first()->id,

        //     // 'userable_id'=> fake()->randomElement([
        //     //     Client::inRandomOrder()->first()->id,
        //     //     Vendor::inRandomOrder()->first()->id,
        //     // ]),

        //     // 'userable_type'=> [
        //     //     str()->lower(str()->afterLast(Clinet::class, '\\')),
        //     //     str()->lower(str()->afterLast(Vendor::class, '\\')),
        //     // ][rand(0,1)],
        ];
    }
}

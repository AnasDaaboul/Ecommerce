<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            "gender" => fake()->randomElement(['male' , 'female']),
            "age" => fake()->numberBetween(20,60),
        ]);
        $user = User::create([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email_verified_at' => now(),
            'phone' => fake()->phoneNumber(),
            'city_id'=>City::inRandomOrder()->first()->id,
            'userable_id' => Client::inRandomOrder()->first()->id,
            'userable_type' => str()->lower(str()->afterLast(Client::class, '\\')),
        ]);
        $user->assignRole('client');

        $url = 'https://picsum.photos/200/300';
        $user->addMediaFromUrl($url)->toMediaCollection('profile');

    }
}

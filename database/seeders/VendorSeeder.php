<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendor::create([
            'company_name'=> fake()->company(),
        ]);
        $user = User::create([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email_verified_at' => now(),
            'phone' => fake()->phoneNumber(),
            'city_id'=>City::inRandomOrder()->first()->id,
            'userable_id' =>  Vendor::inRandomOrder()->first()->id,
            'userable_type' => str()->lower(str()->afterLast(Vendor::class, '\\')),
        ]);
        $user->assignRole('vendor');

        $url = 'https://picsum.photos/200/300';
        $user->addMediaFromUrl($url)->toMediaCollection('profile');
    }
}

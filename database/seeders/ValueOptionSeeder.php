<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\ValueOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ValueOption::factory()->count(5)
        ->for(Option::factory()->create())->create();
    }
}

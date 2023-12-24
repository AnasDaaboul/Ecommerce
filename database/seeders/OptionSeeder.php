<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Option;
use App\Models\ValueOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Option::factory()->count(2)->create();
        // ->has(ValueOption::factory()->count(3))->create();
        // ->for(Category::factory()->create())->create();
    }
}

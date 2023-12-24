<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create();
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email_verified_at' => now(),
            'phone' => '0999999999',
            'city_id' => City::inRandomOrder()->first()?->id,
            'userable_id' => Admin::inRandomOrder()->first()->id,
            'userable_type' => str()->lower(str()->afterLast(Admin::class, '\\')),
        ]);
        $url = 'https://picsum.photos/200/300';
        $user->addMediaFromUrl($url)->toMediaCollection('profile');

        $user->assignRole(['admin']);

        // $role = Role::create(['name' => 'admin']);
        // $permission = Permission::pluck('id' ,'id')->all();
        // $role->syncPermissions($permission);
        // $user->assignRole([$role->id]);
    }
}

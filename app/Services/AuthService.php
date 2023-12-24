<?php


namespace App\Services;

use App\Models\Client;
use App\Models\User;

class AuthService
{
    public function client(array $data)
    {
        $client = Client::create([
            'gender' => $data['gender'],
            'age' => $data['age'],
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' =>  $data['email'],
            'password' => bcrypt($data['password']),
            'phone' =>  $data['phone'],
            'city_id' => $data['city_id'],
            'userable_id'=> $client->id,
            'userable_type' => str()->lower(str()->afterLast(Client::class, '\\')),
        ]);
        $user->assignRole('client');
        return $user;
    }

}

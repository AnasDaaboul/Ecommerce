<?php

namespace App\Services;

use App\Models\Client;
use App\Models\User;

class ClientService
{
    public function all()
    {
        $clients = User::where('userable_type','client')->with('city')->with('userable')->orderByDesc('created_at')->paginate();
        return $clients;
    }

    public function show(string $id)
    {
        $clients=User::where('id',$id)->with('userable')->orderByDesc('created_at')->paginate(1);
        return $clients;
    }

    public function destroy(string $id)
    {
        $user =  User::findOrFail($id);
        Client::where('id',$user->userable_id)->delete();
        $user->delete();
    }

        public function search(array $data)
    {
        $search = $data['search'];
        $clients=User::where(function($query) use ($search){
            $query->where('name','like',"%$search%");
        })->paginate(5);
        return $clients;
    }

}

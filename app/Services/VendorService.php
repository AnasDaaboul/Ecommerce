<?php

namespace App\Services;

use App\Models\User;
use App\Models\Vendor;

class VendorService
{
    public function information()
    {
        $vendor = User::where('id',Auth()->user()->id)->with('userable')->get();
        return $vendor;
    }

    public function all()
    {
        $vendors = User::where('userable_type','vendor')->with('city')->with('userable')->orderByDesc('created_at')->paginate();
        return $vendors;
    }

    public function store(array $data)
    {
        $vendor = Vendor::create([
            'company_name' => $data['company_name'],
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' =>  $data['email'],
            'password' => bcrypt($data['password']),
            'phone' =>  $data['phone'],
            'city_id' => $data['city_id'],
            'email_verified_at' => now(),
            'userable_id'=> $vendor->id,
            'userable_type' => str()->lower(str()->afterLast(Vendor::class, '\\')),
        ]);
        $user->assignRole('vendor');
        return $user;
    }

    public function show(string $id)
    {
        $vendors=User::where('id',$id)->with('userable')->orderByDesc('created_at')->paginate(1);
        return $vendors;

    }

    public function edit(string $id)
    {
        $user=User::with('userable')->Where('id',$id)->get();
        return $user;
    }

    public function update($id ,array $data)
    {
        // User::findOrFail($id)->update($data);
        User::findOrFail($id)->first()->fill($data)->save();
    }

    public function destroy(string $id)
    {
        $vendor =  User::findOrFail($id);
        Vendor::where('id',$vendor->userable_id)->delete();
        $vendor->delete();
    }

    public function search(array $data)
    {
        $search = $data['search'];
        $vendors=User::where(function($query) use ($search){
            $query->where('name','like',"%$search%");
        })->paginate(5);
        return $vendors;
    }

}

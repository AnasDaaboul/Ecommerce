<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class AdminService
{

    public function index()
    {
        $admin = User::where('id',Auth()->user()->id)->with('userable')->get();
        return $admin;
    }

    public function update($id ,array $data)
    {
        User::findOrFail($id)->first()->fill($data)->save();
        // User::findOrFail($id)->update($data);
    }


    public function edit(string $id)
    {
        $user=User::with('userable')->Where('id',$id)->get();
        return $user;
    }

    public function orders()
    {
        $orders = Order::orderByDesc('created_at')->paginate();
        return $orders;
    }

    public function products()
    {
        $products = Product::with('vendor')->orderByDesc('created_at')->paginate();
        return $products;
    }

    // public function show(string $id)
    // {
    //     $clients=User::where('userable_type','client')->with('userable')->findOrFail($id)->orderByDesc('created_at')->paginate(1);
    //     return $clients;
    // }
}

<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\UpdateVendorRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use App\Models\ProductTranslation;
use App\Models\User;
use App\Models\Vendor;
use App\Services\AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(private AdminService $adminService)
    {
    }

    public function index()
    {
        $admins = $this->adminService->index();
        return view('Web.Admin.Personal_Information.index', compact('admins'));
    }

    public function edit($lan ,string $id)
    {
        $admin = $this->adminService->edit($id);
        $cities =City::get();
        return view('Web.Admin.Personal_Information.update',compact('admin','cities','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorRequest $request,$lan,string $id)
    {
        $admin = User::findOrFail($id);
        if ($request->hasFile('image')) {
            $admin->clearMediaCollection('profile');
            $admin->addMediaFromRequest('image')->toMediaCollection('profile');
        }

       $this->adminService->update(['id' =>$request->user],$request->validated());
       return redirect()->route('profile.index');
    }

    public function orders()
    {
        $orders = $this->adminService->orders();
        return view('Web.Admin.orders', compact('orders'));
    }

    public function products()
    {
        $products = $this->adminService->products();
        return view('Web.Admin.products', compact('products'));
    }

}

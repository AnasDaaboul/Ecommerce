<?php

namespace App\Http\Controllers\Web\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateVendorRequest;
use App\Models\City;
use App\Models\User;
use App\Models\Vendor;
use App\Services\VendorService;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function __construct(private VendorService $vendorService)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = $this->vendorService->information();
        $vendor = Vendor::whereId($user[0]->userable_id)->get();
        return view('Web.Vendor.Information.index', compact('vendor','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lan, string $id)
    {
        $vendor = $this->vendorService->edit($id);
        $cities =City::get();
        return view('Web.Vendor.Information.edit',compact('vendor','cities','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorRequest $request,$lan, string $id)
    {
        $user = User::findOrFail($id);
        if ($request->hasFile('image')) {
            $user->clearMediaCollection('profile');
            $user->addMediaFromRequest('image')->toMediaCollection('profile');
        }
        $this->vendorService->update(['id' =>$request->user],$request->validated());
        return redirect()->route('information.index');
    }

}

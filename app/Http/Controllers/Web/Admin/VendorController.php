<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\VendorRequest;
use App\Http\Requests\UpdateVendorRequest;
use App\Services\VendorService;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function __construct(private VendorService $vendorService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = $this->vendorService->all();
        return view('Web.Admin.Vendor.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities =City::get();
        return view('Web.Admin.Vendor.create',compact('cities'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VendorRequest $request)
    {
        $user = $this->vendorService->store($request->validated());
        if ($request->hasFile('image'))
            $user->addMediaFromRequest('image')->usingName($user->userable_type)->toMediaCollection('profile');

        return redirect()->route('vendors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($lan,string $id)
    {
        $vendors = $this->vendorService->show($id);
        return view('Web.Admin.Vendor.index',compact('vendors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lan,string $id)
    {
        $vendor = $this->vendorService->edit($id);
        $cities =City::get();
        return view('Web.Admin.Vendor.edit',compact('vendor','cities','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorRequest $request, string $id)
    {
       $this->vendorService->update(['id' =>$request->user],$request->validated());
        return redirect()->route('vendors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($lan,string $id)
    {
        $this->vendorService->destroy($id);
        return redirect()->route('vendors.index');
    }

    public function search(SearchRequest $request)
    {
        $vendors =  $this->vendorService->search($request->validated());
        $search = $request->search;
        return view('Web.Admin.Vendor.index',compact('vendors','search'));
    }

}

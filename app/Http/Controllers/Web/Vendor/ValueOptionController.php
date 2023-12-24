<?php

namespace App\Http\Controllers\Web\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreValueOptionRequest;
use App\Models\Option;
use App\Models\Product;
use App\Services\ValueOption;
use Illuminate\Http\Request;

class ValueOptionController extends Controller
{
       public function __construct(private ValueOption $valueOptionService)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $value_option = $this->valueOptionService->all();
        return view('Web.Vendor.ValueOption.index', compact('value_option'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $options = Option::get();
        $products = Product::get();
        return view('Web.Vendor.ValueOption.create',compact('options','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreValueOptionRequest $request)
    {
        $this->valueOptionService->store($request->validated());
        return redirect()->route('value_option.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($lan, string $id)
    {
        $value_option = $this->valueOptionService->show($id);
        return view('Web.Vendor.ValueOption.index',compact('value_option'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lan, string $id)
    {
        $value_option = $this->valueOptionService->edit($id);
        $options = Option::get();
        $products = Product::get();
        return view('Web.Vendor.ValueOption.update', compact('value_option','id','options','products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($lan, StoreValueOptionRequest $request, string $id)
    {
        $this->valueOptionService->update(['id' =>$request->value],$lan,$request->validated());
        return redirect()->route('value_option.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($lan, string $id)
    {
        $this->valueOptionService->destroy($id);
        return redirect()->route('value_option.index');
    }
}

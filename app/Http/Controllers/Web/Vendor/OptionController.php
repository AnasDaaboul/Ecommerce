<?php

namespace App\Http\Controllers\Web\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOptionRequest;
use App\Models\Category;
use App\Services\OptionService;
use Illuminate\Http\Request;

class OptionController extends Controller
{

    public function __construct(private OptionService $optionService)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = $this->optionService->all();
        return view('Web.Vendor.Option.index', compact('options'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('Web.Vendor.Option.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOptionRequest $request)
    {
        $this->optionService->store($request->validated());
        return redirect()->route('options.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($lan, string $id)
    {
        $options = $this->optionService->show($id);
        return view('Web.Vendor.Option.index',compact('options'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lan, string $id)
    {
        $options = $this->optionService->edit($id);
        $categories = Category::get();
        return view('Web.Vendor.Option.update', compact('options','id','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreOptionRequest $request,$lan, string $id)
    {
        $this->optionService->update(['id' =>$request->option],$lan,$request->validated());
        return redirect()->route('options.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($lan, string $id)
    {
        $this->optionService->destroy($id);
        return redirect()->route('options.index');
    }
}

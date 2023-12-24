<?php

namespace App\Http\Controllers\Web\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(private CategoryService $categoryService)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryService->all();
        return view('Web.Vendor.Category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Web.Vendor.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $this->categoryService->store($request->validated());
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($lan, string $id)
    {
        $categories = $this->categoryService->show($id);
        return view('Web.Vendor.Category.index',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lan, string $id)
    {
        $categories = $this->categoryService->edit($id);
        return view('Web.Vendor.Category.update', compact('categories','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, $lan, string $id)
    {
        $this->categoryService->update(['id' =>$request->category],$lan ,$request->validated());
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($lan, string $id)
    {
        $this->categoryService->destroy($id);
        return redirect()->route('categories.index');

    }
}

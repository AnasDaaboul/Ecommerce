<?php

namespace App\Services;

use App\Models\Category;
use App\Models\CategoryTranslation;

class CategoryService
{

    public function all()
    {
        $category = Category::with('products')->orderByDesc('created_at')->paginate(5);
        return $category;
    }

    public function show(string $id)
    {
        $category = Category::whereId($id)->with('products')->paginate(1);
        return $category;
    }

    public function store(array $data)
    {
        $name = [
            'en' => ['name' => $data['name_en']],
            'ar' => ['name' => $data['name_ar']],
        ];
        $category = Category::create($name);
        return $category;
    }

    public function edit(string $id)
    {
        $category = Category::whereId($id)->get();
        return $category;
    }

    public function update($id,$lan ,array $data)
    {
        $name = 'name_'.$lan;
        // return  CategoryTranslation::where('category_id',$id)->where('locale',$lan)->get();
        return CategoryTranslation::where('category_id',$id)->where('locale',$lan)->update([
            'name' => $data[$name],
        ]);
    }

    public function destroy(string $id)
    {
        Category::where('id',$id)->delete();
    }
}

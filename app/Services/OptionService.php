<?php

namespace App\Services;

use App\Models\Option;
use App\Models\OptionTranslation;

class OptionService
{

    public function all()
    {
        $option = Option::with('category')->orderByDesc('created_at')->paginate(5);
        return $option;
    }

    public function show(string $id)
    {
        $option = Option::whereId($id)->paginate(1);
        return $option;
    }

    public function store(array $data)
    {
        $name = [
            'en' => ['name' => $data['name_en']],
            'ar' => ['name' => $data['name_ar']],
            'category_id'=> $data['category_id'],
        ];
        $option = Option::create($name);
        return $option;
    }

    public function edit(string $id)
    {
        $option = Option::with('category')->whereId($id)->get();
        return $option;
    }

    public function update($id ,$lan ,array $data)
    {
        $name = 'name_'.$lan;
        $option =  Option::where('id',$id)->first();
        OptionTranslation::where('option_id',$id)->where('locale',$lan)->update([
            'option_id' => $option->id,
            'name' => $data[$name],
        ]);
        Option::where('id',$id)->update([
            'category_id' => $data['category_id'],
        ]);
    }

    public function destroy(string $id)
    {
        Option::where('id',$id)->delete();
    }
}

<?php

namespace App\Services;

use App\Models\Option;
use App\Models\OptionTranslation;
use App\Models\ValueOption as ModelsValueOption;
use App\Models\ValueOptionTranslation;

class ValueOption
{

    public function all()
    {
        $value_option = ModelsValueOption::with('product')->with('option')->orderByDesc('created_at')->paginate(5);
        return $value_option;
    }

    public function store(array $data)
    {
        $name = [
            'en' => ['name' => $data['name_en']],
            'ar' => ['name' => $data['name_ar']],
            'option_id'=> $data['option_id'],
            'product_id'=> $data['product_id'],
        ];
        $value_option = ModelsValueOption::create($name);
        return $value_option;
    }

    public function show(string $id)
    {
        $value_option = ModelsValueOption::whereId($id)->paginate(1);
        return $value_option;
    }

    public function edit(string $id)
    {
        $value_option = ModelsValueOption::whereId($id)->get();
        return $value_option;
    }

    public function update($id,$lan ,array $data)
    {
        $name = 'name_'.$lan;
        $value_option =  ModelsValueOption::where('id',$id)->first();
        ValueOptionTranslation::where('value_option_id',$id)->where('locale',$lan)->update([
            'value_option_id' => $value_option->id,
            'name' => $data[$name],
        ]);
        ModelsValueOption::where('id',$id)->update([
            'option_id' => $data['option_id'],
            'product_id' => $data['product_id'],
        ]);
    }

    public function destroy(string $id)
    {
        ModelsValueOption::where('id',$id)->delete();
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //'id' => ['bail','nullable', 'exists:products,id'],
            //'name'=>['required'],
            'price'=>['required'],
            'category_id'=>['nullable'],
            'dis_amount'=>['nullable','integer'],
            'discount'=>['nullable','integer'],
            'vendor_id'=>['required'],
            'image' => 'required',
            //'description'=>['nullable',]
        ];
    }
}

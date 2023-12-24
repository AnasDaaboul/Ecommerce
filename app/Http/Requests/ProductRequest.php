<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
            'product' => ['nullable', 'exists:products,id'],
            'name_en' => ['required_without:product'],
            'title_en' => ['required_without:product'],
            'description_en' => ['required_without:product'],
            'name_ar' => ['required_without:product'],
            'title_ar' => ['required_without:product'],
            'description_ar' => ['required_without:product'],
            'price' => ['required','numeric'],
            'discount' => ['required'],
            'dis_amount' => ['required'],
            'category_id' => ['nullable'],
            'image' => ['nullable','file']
        ];
    }
}

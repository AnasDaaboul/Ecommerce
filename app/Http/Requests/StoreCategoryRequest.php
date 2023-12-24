<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
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
            'category' => ['nullable', 'exists:categories,id'],
            'name_en' => ['required_without:category',
                Rule::unique('category_translations', 'name')->ignore($this->category)],
            'name_ar' => ['required_without:category',
                Rule::unique('category_translations', 'name')->ignore($this->category)],
        ];
    }
}

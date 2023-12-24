<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOptionRequest extends FormRequest
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
            'option' => ['nullable', 'exists:options,id'],
            'name_en' => ['required_without:option',
                Rule::unique('option_translations', 'name',)->ignore($this->option)],
            'name_ar' => ['required_without:option',
            Rule::unique('option_translations', 'name')->ignore($this->option)],
            'category_id' => ['required_without:option'],
        ];
    }
}

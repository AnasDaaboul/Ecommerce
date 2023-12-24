<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreValueOptionRequest extends FormRequest
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
            'value' => ['nullable', 'exists:value_options,id'],
            'name_en' => ['required_without:value'],
            'name_ar' => ['required_without:value'],
            'option_id' => ['required_without:value'],
            'product_id' => ['required_without:value'],
            ];
    }
}

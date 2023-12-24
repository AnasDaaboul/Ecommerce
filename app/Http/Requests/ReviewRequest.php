<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'comment'=>['required' , 'string'],
            'rate' =>['nullable' , 'between:1,5'],
            'reviewsable_id'=>['nullable'],
            'review_id'=>['nullable'],
            'client_id'=>['nullable'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required','alpha'],
            'email' => ['required','unique:users,email','email'],
            'password' => ['required','min:6','max:14'],
            'phone' => ['required','numeric','size:10'],
            'city_id' => ['required'],
            'gender' => ['required'],
            'age' => ['require','date'],
        ];
    }
}

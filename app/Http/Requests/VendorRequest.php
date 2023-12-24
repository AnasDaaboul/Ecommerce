<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
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
            'phone'=>['required' , 'min:10' , 'max:13'],
            'city_id' => ['required'],
            'company_name' => ['required'],
            'image'=> ['nullable']
            // 'name' => [Rule::in([User::find($this->id)->name])],
            // 'password' => ['required', Password::min(5)->mixedCase()->letters()->numbers()->symbols()],

        ];
    }
}

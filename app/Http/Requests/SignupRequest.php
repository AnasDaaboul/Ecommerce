<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SignupRequest extends FormRequest
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
            'user_id'=>['nullable' , 'exists:users,id'],
            'email'=> ['required_without:user_id', 'email' , Rule::unique('users', 'email')->ignore($this->user_id)],
            'password' => ['sometimes'],
            'name' =>['required_without:user_id' , 'string' , 'min:4' , 'max:8' ],
            'phone'=>['required_without:user_id' , 'min:11' , 'max:13'],
            'city_id'=>['required_without:user_id'],
            'gender'=>['required_without:user_id'],
            'age'=>['required_without:user_id' ,'numeric' ],
            'userable_type'=>['required_without:user_id'],
            'image'=>['required' , 'mimes:jpg,jpeg,png']
            // 'email'=> ['required', 'email' , 'unique:users,email'],
            // 'password' => ['required' ,  'min:8'],
            // 'name' =>['required' , 'string' , 'min:4' , 'max:8' ],
            // 'phone'=>['required' , 'min:10' , 'max:13'],
            // 'city_id'=>['required'],
            // 'gender'=>['required' ],
            // 'age'=>['required' ,'numeric' ],
            // 'userable_type'=>['required'],

        ];
    }
    public function messages()
    {
        return [
            'gender.required_without' => "The Gender field is required",

        ];
    }

}

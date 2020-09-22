<?php

namespace App\Http\Requests\Frontend\User;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => [ 'required', 'email'],
            'password' => ['required','max:6'],
            
        ];
    }

    public function messages() 
    {   
        return [
           ' password.required' => 'Password Is required',
           ' password.min' => 'Password should contain atleast 6 characters',
           ' email.required' => 'Email Is required'
        ];

    }
}

<?php

namespace App\Http\Requests\Frontend\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => ['required'],
            'last_name' => ['required'],
            'password' => ['required','max:6'],
            'email' => [ 'required', 'email'],
            
        ];
    }

    public function messages() 
    {   
        return [
           ' first_name.required' => 'First Name Is required',
           ' last_name.required' => 'Last Name Is required',
           ' password.required' => 'Password Is required',
           ' password.min' => 'Password should contain atleast 6 characters',
           ' email.required' => 'Email Is required'
        ];

    }
}

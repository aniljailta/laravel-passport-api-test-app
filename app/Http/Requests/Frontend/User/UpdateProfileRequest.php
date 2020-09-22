<?php

namespace App\Http\Requests\Frontend\User;

use App\Helpers\Auth\SocialiteHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class UpdateProfileRequest.
 */
class UpdateProfileRequest extends FormRequest
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
            'email' => [ 'required', 'email'],
            'avatar_type' => ['required', Rule::in(array_merge(['gravatar', 'storage'], (new SocialiteHelper)->getAcceptedProviders()))],
            'avatar_location' => ['sometimes', 'image'],
            'father_name' => ['required'],
            'mother_name' => ['required'],

            'street' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
            'zipcode' => ['required'],

        ];
        
    }
    public function messages() 
    {   
        return [
           ' first_name.required' => 'First Name Is required',
           ' last_name.required' => 'Last Name Is required',
           ' father_name.required' => 'Father Name Is required',
           ' mother_name.required' => 'Mother Name Is required' ,
           ' street.required' => 'street Is required',
           ' city.required' => 'city Is required',
           ' state.required' => 'state Is required',
           ' email.required' => 'email Is required',
           ' county.required' => 'county Is required',
           ' zipcode.required' => 'zipcode Is required',
        ];

    }
}

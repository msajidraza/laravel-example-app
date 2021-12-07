<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'fullname'  => 'required|min:3|max:100',
            'mobile'    => 'required|numeric|digits_between:10, 12',
            'email'     => 'required|email|max:65',
            'address'   => 'required',
            'city'      => 'required|min:3|max:25',
            'pincode'   => 'required',
            'state'     => 'required|min:2|max:25',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Full Name cannot be blank',
            'fullname.min'      => 'Full Name must be greater than or equal to 3 Characters',
            'fullname.max'      => 'Full Name must be less than or equal to 100 Characters',

            'mobile.required'   => 'Mobile No. cannot be blank',
            'mobile.numeric'    => 'Mobile No. must be numbers',
            'mobile.digits_between'=> 'Mobile No. should be between 10 - 12 digits',

            'email.required'    => 'Email ID cannot be blank',
            'email.email'       => 'Email ID should be valid',
            'email.max'         => 'Email ID must be less than or equal to 65 Characters',

            'address.required'  => 'Address cannot be blank',
            'city.required'     => 'City cannot be blank',
            'city.min'          => 'City must be grater or equal to 3 chars',
            'city.max'          => 'City must be less than or equal to 25 Chars',
            'pincode.required'  => 'Pincode cannot be blank',

            'state.required'    => 'State cannot be blank',
            'state.min'         => 'State must be grater or equal to 2 chars',
            'state.max'         => 'State must be less than or equal to 25 Chars',
        ];
    }
}

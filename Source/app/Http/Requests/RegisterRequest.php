<?php

namespace App\Http\Requests;

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
     * @return array<string, mixed>
     */
    public function rules()
    {

        $rules=[
            'Fname'=>[
                'required',

            ],
            'Lname'=>[
                'required',

            ],
            'email'=>[
                'required',


            ],

            'password'=>[
                'required',

                'min:6',


            ],


        ];
        return $rules;
    }
    public function messages()
    {
        return[
        'Fname.required'=>'Please enter Your Frist Name',
        'Lname.required'=>'Please enter Your Last name',
        'email.required'=>'Please enter Your Email Address',
        'password.required'=>'Please enter Your Password',

        ];
    }

}

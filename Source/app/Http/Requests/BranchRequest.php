<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
            'BranchID'=>[
                'required',


            ],
            'BranchName'=>[
                'required',

            ],
            'W_No'=>[
                'required',
                'numeric',
            ],

            'T_NO'=>[
                'required',
                'numeric',
            ],

            'W_add'=>[
                'required',
            ],

            'T_add'=>[
                'required',
            ],



        ];
        return $rules;
    }
    public function messages()
    {
        return[
        'BranchID.required'=>'Please enter this Field',
        'BranchName.required'=>'Please enter this Field',
        'W_No.required'=>'Please enter this Field',
        'T_NO.required'=>'Please enter this Field',
        'W_QR.required'=>'Please enter this Field',
        'T_QR.required'=>'Please enter this Field',

    ];
}

}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TempRequest extends FormRequest
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


            
            'content'=>[
                'required',

            ],
            'msg_type'=>[
                'required',


            ],
        ];
        return $rules;
    }
    public function messages()
    {
        return[


        'content.required'=>'Please enter this Field',
        'msg_type.required'=>'Please enter this Field',


        ];
    }

}

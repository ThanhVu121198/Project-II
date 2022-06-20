<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailRequest extends FormRequest
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
        return [
            
            'color'=>'required',
            'qty'=>'required',
            'size'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'color.required'=>'please enter color',
            'qty.required'=>'please enter qty',
            'size.required'=>'please enter size',
           
        ];
    }
}

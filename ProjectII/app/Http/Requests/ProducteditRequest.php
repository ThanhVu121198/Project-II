<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProducteditRequest extends FormRequest
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
            //
            'name'=>'required',
            'categories'=>'required',
            'price'=>'required',
          
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'please enter product name',
            'categories.required'=>'please choose categories',
            'price.required'=>'please enter product price'
        ];
    }
}

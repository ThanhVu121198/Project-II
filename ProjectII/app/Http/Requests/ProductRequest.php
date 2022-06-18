<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Productrequest extends FormRequest
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
            'name'=>'required|unique:products',
            'img1'=> 'required',
            // 'img2'=> 'required',
            // 'img3'=> 'required',
            'categories'=>'required',
            'price'=>'required',
          
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'please enter product name',
            'categories.required'=>'please choose categories',
            'img1.required'=>'please enter choose image',
            'img1.image'=>'this file only image input',
            // 'img2.required'=>'please enter choose image input 2',
            // 'img2.image'=>'this file only image input 2',
            // 'img3.required'=>'please enter choose image input 3',
            // 'img3.image'=>'this file only image input 3',
            'name.unique'=>'product name cannot matche',
            'price.required'=>'please enter product price'
        ];
    }
}

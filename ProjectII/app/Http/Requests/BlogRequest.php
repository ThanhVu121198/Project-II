<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title'=>'required|unique:blogs',
            'img'=> 'required',
            // 'img2'=> 'required',
            // 'img3'=> 'required',
            'category'=>'required',
            'content'=>'required',
            
        ];
    }
    public function messages()
    {
        return[
            'title.required'=>'please enter blog title',
            'category.required'=>'please enter category',
            'img.required'=>'please enter choose image input',
            'img.image'=>'this file only image input',
            'content.required'=>'please enter content',
            'title.unique'=>'title cannot match'
        ];
    }
}

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
        return [
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'avatar'=>'required|image',
            'password'=>'required',
            'passwordcf'=>'required|same:password',

        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'please enter name',
            'email.email'=>'must enter email',
            'email.required'=>'please enter email',
            'email.unique'=>'email cannot matche',
            'avatar.required'=>'please enter choose image input',
            'avatar.image'=>'this file only image input',
            'password.required'=>'please enter password',
            'passwordcf.required'=>'please enter passworld confirm',
            'passwordcf.same'=>'Confirm password does not match password',

        ];
    }
    
}

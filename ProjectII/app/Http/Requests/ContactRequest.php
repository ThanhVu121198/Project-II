<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ContactRequest extends FormRequest
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
            'first_name'=>'required',
            'last_name'=> 'required',
            'phone' => 'required|size:11|numeric',
            'email'=>'required|email',
            'mess'=> 'required'
        ];
    }
    public function messages()
    {
        return[
            'first_name.required'=>'please enter first name',
            'last_name.required'=>'please enter last name',
            'phone.required'=>'please enter phone',
            'phone.numeric'=>'please input number',
            'phone.size'=>'please input 11 characters',
            'email.required'=>'please enter email',
            'email.email'=>'please enter email format(ex: abc@gmail.com)',
            'mess.required'=>'please enter mess'
        ];
    }
}

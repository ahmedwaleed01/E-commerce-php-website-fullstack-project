<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storemrequest extends FormRequest
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
                'email'=>'required',
                'password'=>'required'
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'Name is required',
        'email.required' => 'email is required',
        'password.required' => 'password is required',
        
    ];
}
}

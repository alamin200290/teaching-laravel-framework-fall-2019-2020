<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'username'=>'required|unique:users,uname',
            'type'=>'required',
            'password'=>'required|max:4'
        ];
    }

    public function messages(){

        return [
            'username.required'=>'this field is required!!!',
            'password.required'=>'passward field cant left empty!',
            'type.required'=>'Type field cant left empty!',
            'password.max'=>':attribute Opps!!!'
        ];
    }
}






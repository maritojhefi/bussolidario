<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPostRequest extends FormRequest
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
            'name'=>'required|min:5|max:500',
            'email'=>'required|max:500|unique:users|email|string',
            'password'=>'required|min:5|confirmed',
            'ci'=>'required|max:10',
            'telf'=>'max:10',
            'rol_id'=>'required',
        ];
    }
}

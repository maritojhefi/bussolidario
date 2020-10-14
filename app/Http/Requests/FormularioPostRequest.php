<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormularioPostRequest extends FormRequest
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
            'beneficiario'=>'required|min:5|max:100',
            'ci'=>'required|max:10',
            'telefono'=>'required|min:8',
            'barrio'=>'required|max:100',
            
            'distrito_id'=>'required',
            'user_id'=>'required'
        ];
    }
}

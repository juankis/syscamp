<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|unique:users,username'
        ];
    }

    public function messages()
    {

        return [
            'username.required' => 'El campo Nombre de Usuario es obligatorio.',
            'username.unique' => 'El Nombre de Usuario ya esta en uso.'
        ];
        
    }
}
